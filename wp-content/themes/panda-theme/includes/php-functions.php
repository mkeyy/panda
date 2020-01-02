
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
 * Wrapper function around cmb2_get_option
 * @param string $key Options array key
 * @param mixed $default Optional default value
 * @return mixed           Option value
 * @since  0.1.0
 */
function pt_get_option($key = '', $default = false)
{
    if (function_exists('cmb2_get_option')) {
        /** Use cmb2_get_option as it passes through some key filters. */
        return cmb2_get_option('pt_options', $key, $default);
    }
    /** Fallback to get_option if CMB2 is not loaded yet. */
    $opts = get_option('pt_options', $default);
    $val = $default;
    if ('all' == $key) {
        $val = $opts;
    } elseif (is_array($opts) && array_key_exists($key, $opts) && false !== $opts[$key]) {
        $val = $opts[$key];
    }
    return $val;
}

/**
* Generates inline svg with the appropriate classes
* @param null $filename
* @param null $additionalClasses
* @param null $id
* @return mixed|string
*/
function pt_asset_svg($filename = null, $additionalClasses = null, $id = null)
{
if (isset($id)) {
$file = $svg_path = wp_get_attachment_image_url($id, '', false);
} else {
$file = file_exists(get_template_directory() . '/assets/img/icons/' . $filename . '.svg');
$svg_path = get_template_directory_uri() . '/assets/img/icons/' . $filename . '.svg';
}

/** Check the SVG file exists */
if ($file) {
$svg = file_get_contents($svg_path);

if ($additionalClasses)
return str_replace("<svg", '<svg class="pt-svg-inline pt-svg--' . basename($filename, ".svg") . ' ' . $additionalClasses . '"', $svg);
else
return str_replace("<svg", '<svg class="pt-svg-inline pt-svg--' . basename($filename, ".svg") . '"', $svg);
}

/** Return a blank string if we can't find the file. */
return '';
}