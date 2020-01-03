<?php
add_action('cmb2_admin_init', 'pt_tpl_publications_metaboxes');

function pt_tpl_publications_metaboxes()
{
    $prefix = 'pt_tpl_publications_';

    /** Publications */
    $publications = new_cmb2_box(array(
        'id' => $prefix . 'publications_list',
        'title' => __('Lista Publikacji', 'cmb2'),
        'object_types' => array('page'),
        'show_on' => array('key' => 'page-template', 'value' => 'page-templates/tpl-publications.php'),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true
    ));
    $publicationsGroup = $publications->add_field(array(
        'id' => $prefix . 'publications',
        'type' => 'group',
        'options' => array(
            'group_title' => esc_html__('Publikacja - {#}', 'cmb2'),
            'add_button' => __('Dodaj Publikację', 'cmb2'),
            'remove_button' => __('Usuń Publikację', 'cmb2'),
            'sortable' => true,
            'closed' => true,
        )
    ));
    $publications->add_group_field($publicationsGroup, array(
        'name' => esc_html__('Publikacja', 'cmb2'),
        'id' => 'text',
        'type' => 'textarea'
    ));
}
