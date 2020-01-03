<?php
/**
 * The main template file
 *
 * @package Panda Theme
 */

get_header();
?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
    }
} else {
    get_template_part('404');
}
?>

<?php get_footer(); ?>
