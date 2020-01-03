<?php
add_action('cmb2_admin_init', 'pt_homepage_metaboxes');

function pt_homepage_metaboxes()
{
    $prefix = 'pt_homepage_';

    /** Header */
    $header = new_cmb2_box(array(
        'id' => $prefix . 'header_tab',
        'title' => __('Header', 'cmb2'),
        'object_types' => array('page'),
        'show_on' => array('key' => 'page-template', 'value' => 'front-page.php'),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
        'closed' => true
    ));
    $header->add_field(array(
        'name' => esc_html__('Tytuł', 'cmb2'),
        'id' => $prefix . 'header_title',
        'type' => 'wysiwyg',
        'options' => array(
            'media_buttons' => false,
            'textarea_rows' => 3
        )
    ));
    $header->add_field(array(
        'name' => esc_html__('Opis', 'cmb2'),
        'id' => $prefix . 'header_desc',
        'type' => 'wysiwyg',
        'options' => array(
            'media_buttons' => false,
            'textarea_rows' => 3
        )
    ));

    /** Columns */
    $columns = new_cmb2_box(array(
        'id' => $prefix . 'columns_tab',
        'title' => __('Aktualności/Osiągnięcia', 'cmb2'),
        'object_types' => array('page'),
        'show_on' => array('key' => 'page-template', 'value' => 'front-page.php'),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
        'closed' => true
    ));
    $columns->add_field(array(
        'name' => esc_html__('Tytuł Aktualności', 'cmb2'),
        'id' => $prefix . 'news_title',
        'type' => 'text',
        'default' => 'Aktualności:'
    ));
    $columns->add_field(array(
        'name' => esc_html__('Tytuł Osiągnięcia', 'cmb2'),
        'id' => $prefix . 'achievements_title',
        'type' => 'text',
        'default' => 'Osiągnięcia:'
    ));
    $columnsGroup = $columns->add_field(array(
        'id' => $prefix . 'achievements',
        'type' => 'group',
        'options' => array(
            'group_title' => esc_html__('Osiągnięcie - {#}', 'cmb2'),
            'add_button' => __('Dodaj Osiągnięcie', 'cmb2'),
            'remove_button' => __('Usuń Osiągnięcie', 'cmb2'),
            'sortable' => true,
            'closed' => true,
        )
    ));
    $columns->add_group_field($columnsGroup, array(
        'name' => esc_html__('Osiagnięcie', 'cmb2'),
        'id' => 'achievement',
        'type' => 'text'
    ));
}
