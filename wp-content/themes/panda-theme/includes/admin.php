<?php
/**
 * ...
 *
 * @package Panda Theme
 * @since   1.0
 */
?>
<?php

/**
 * @since  1.0
 * @link   http://codex.wordpress.org/Function_Reference/wp_get_current_user
 * @link   http://codex.wordpress.org/Function_Reference/remove_menu_page
 * @link   http://codex.wordpress.org/Function_Reference/remove_submenu_page
 *
 * @return void
 */
function panda_admin_menu() {
    /**
     * Comments
     */
    remove_menu_page( 'edit-comments.php' );

    add_action('init', function () {
        remove_post_type_support('post', 'comments');
        remove_post_type_support('page', 'comments');
    }, 100);

    add_action('wp_before_admin_bar_render', function () {
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu('comments');
    });

    /** Disable content editor for listed templates */
    add_action('admin_init', function () {
        $templates = array(
            'tpl-publications.php',
        );

        if ( isset( $_GET['post'] ) ) {
            $post_id = $_GET['post'];
        } elseif ( isset( $_POST['post_ID'] ) ) {
            $post_id = $_POST['post_ID'];
        }

        if (!isset($post_id)) return;

        $template_file = get_post_meta($post_id, '_wp_page_template', true);

        foreach($templates as $template) {
            if ($template_file == 'page-templates/'. $template) { // edit the template name
                remove_post_type_support('page', 'editor');
            }
        }
    });
}

/**
 * Disable Gutenberg.
 */
add_filter('use_block_editor_for_post', '__return_false');
