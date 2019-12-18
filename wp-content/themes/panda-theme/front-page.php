<?php
/**
 * Template for homepage
 *
 * @package Panda Theme
 */

get_header();

$title = pt_get_option('website_name');
?>

<div class="pt-homepage">
    <?php if(!empty($title)): ?><h1 class="pt-title"><?= $title ?></h1><?php endif; ?>
</div>

<?php get_footer(); ?>
