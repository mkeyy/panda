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
 * Files to include
 */

$PANDA_CustomIncludes = array(
    /**
     * Meta Boxes
     */
    'meta-boxes/cmb-homepage.php',
    'meta-boxes/cmb-options.php',
    'meta-boxes/cmb-publications.php',

    /**
     * Other Files
     */
    'admin.php',
);

foreach ($PANDA_CustomIncludes as $PANDA_CustomInclude) {
    require(PANDA_INC_DIR . $PANDA_CustomInclude);
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @return void
 * @since  1.0
 *
 */
function panda_theme_setup()
{
    /**
     * Enqueue CSS
     */
    add_action('wp_enqueue_scripts', 'panda_front_end_css');

    /**
     * Enqueue JavaScript
     */
    add_action('wp_enqueue_scripts', 'panda_front_end_js');

    /**
     * Custom Menus
     */
    add_action('init', 'panda_register_menus');

    /**
     * Admin Menu
     */
    add_action('admin_menu', 'panda_admin_menu');

    /**
     * Disable Emoji's
     */
    add_filter('tiny_mce_plugins', function ($plugins) {
        if (is_array($plugins)) {
            return array_diff($plugins, array('wpemoji'));
        } else {
            return array();
        }
    });

    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}

add_action('after_setup_theme', 'panda_theme_setup');

/**
 * @link   http://codex.wordpress.org/Function_Reference/wp_enqueue_style
 *
 * @global WP_Styles $wp_styles
 *
 * @return void
 */
function panda_front_end_css()
{
    /** Get assets mapping info */
    $assetsMapping = json_decode(file_get_contents(PANDA_ASSETS_DIR . 'mapping.json'), true);

    wp_enqueue_style('panda-style', PANDA_CSS_URI . $assetsMapping['style'], array(), false);
    wp_enqueue_style('panda-fonts', 'https://fonts.googleapis.com/css?family=Titillium+Web:400,700,900&display=swap&subset=latin-ext', array(), false);
}

/**
 * @link   http://codex.wordpress.org/Function_Reference/wp_enqueue_script
 *
 * @return void
 */
function panda_front_end_js()
{
    //wp_enqueue_script( 'ivn-custom', IVN_JS_URI . 'custom.js', array(), false, true );
}

/**
 * @return void
 * @link   http://codex.wordpress.org/Function_Reference/register_nav_menus
 *
 * @since  1.0
 */
function panda_register_menus()
{
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'panda-theme')
    ));
}

