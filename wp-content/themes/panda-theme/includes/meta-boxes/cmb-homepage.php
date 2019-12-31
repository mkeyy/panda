<?php
add_action('cmb2_admin_init', 'pt_homepage_metaboxes');

function pt_homepage_metaboxes()
{
    $prefix = 'pt_homepage_';

    /** Publications */
    $homepage = new_cmb2_box(array(
        'id' => $prefix . 'homepage_tab',
        'title' => __('Strona Główna', 'cmb2'),
        'object_types' => array('page'),
        'show_on' => array('key' => 'page-template', 'value' => 'front-page.php'),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
        'closed' => true
    ));
    $homepage->add_field(array(
        'name' => esc_html__('Tytuł', 'cmb2'),
        'id' => $prefix . 'title',
        'type' => 'wysiwyg',
        'options' => array(
            'media_buttons' => false,
            'textarea_rows' => 3
        )
    ));
    $homepage->add_field(array(
        'name' => esc_html__('Opis', 'cmb2'),
        'id' => $prefix . 'desc',
        'type' => 'wysiwyg',
        'options' => array(
            'media_buttons' => false,
            'textarea_rows' => 3
        )
    ));
}
