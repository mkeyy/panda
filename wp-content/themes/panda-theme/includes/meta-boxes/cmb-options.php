<?php
/**
 * This snippet has been updated to reflect the official supporting of options pages by CMB2
 * in version 2.2.5.
 *
 * If you are using the old version of the options-page registration,
 * it is recommended you swtich to this method.
 */
add_action('cmb2_admin_init', 'pt_register_options_metaboxes');
/**
 * Hook in and register a metabox to handle a theme options page and adds a menu item.
 */
function pt_register_options_metaboxes()
{
    /**
     * Registers options page menu item and form.
     */
    $options = new_cmb2_box(array(
        'id' => 'pt_options_metabox',
        'title' => esc_html__('Opcje Motywu', 'cmb2'),
        'object_types' => array('options-page'),
        'option_key' => 'pt_options', // The option key and admin menu page slug.
        'icon_url' => 'dashicons-screenoptions',
    ));

    /**
     * Options fields ids only need
     * to be unique within this box.
     * Prefix is not needed.
     */

    /** Main Metaboxes */
    $options->add_field(array(
        'name' => esc_html__('Nazwisko', 'cmb2'),
        'id' => 'website_name',
        'type' => 'text'
    ));
    $options->add_field(array(
        'name' => esc_html__('Uczelnia', 'cmb2'),
        'id' => 'website_academy',
        'type' => 'text'
    ));
    $options->add_field(array(
        'name' => esc_html__('Wydział', 'cmb2'),
        'id' => 'website_department',
        'type' => 'text'
    ));
    $options->add_field(array(
        'name' => esc_html__('Wydział - Link', 'cmb2'),
        'id' => 'website_department_link',
        'type' => 'text_url'
    ));
    $options->add_field(array(
        'name' => esc_html__('Opis', 'cmb2'),
        'id' => 'website_description',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3
        )
    ));
}
