<?php
/**
 * Panda Theme functions and definitions
 *
 * @package Panda Theme
 */
?>
<?php
/**
 * Basic Constants
 */
define('PANDA_THEME_DIR', trailingslashit(get_template_directory()));
define('PANDA_THEME_URI', trailingslashit(get_template_directory_uri()));

define('PANDA_ASSETS_DIR', trailingslashit(PANDA_THEME_DIR . 'assets'));
define('PANDA_ASSETS_URI', trailingslashit(PANDA_THEME_URI . 'assets'));

define('PANDA_CSS_DIR', trailingslashit(PANDA_THEME_DIR . 'assets/css'));
define('PANDA_CSS_URI', trailingslashit(PANDA_THEME_URI . 'assets/css'));

define('PANDA_IMG_DIR', trailingslashit(PANDA_THEME_DIR . 'assets/img'));
define('PANDA_IMG_URI', trailingslashit(PANDA_THEME_URI . 'assets/img'));

define('PANDA_INC_DIR', trailingslashit(PANDA_THEME_DIR . 'includes'));
define('PANDA_INC_URI', trailingslashit(PANDA_THEME_URI . 'includes'));

define('PANDA_JS_DIR', trailingslashit(PANDA_THEME_DIR . 'assets/js'));
define('PANDA_JS_URI', trailingslashit(PANDA_THEME_URI . 'assets/js'));
/**
 * WPML Constants - disable default 'css' and 'js' files
 */
define('ICL_DONT_LOAD_NAVIGATION_CSS', true);
define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);
define('ICL_DONT_LOAD_LANGUAGES_JS', true);
/**
 * Files to include
 */
$PANDA_Includes = array(
    PANDA_INC_DIR . 'custom.php',
    PANDA_INC_DIR . 'php-functions.php',
);
foreach ($PANDA_Includes as $PANDA_Include) {
    require($PANDA_Include);
}