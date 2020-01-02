<?php
/**
 * The main template file
 *
 * @package Panda Theme
 */

get_header();
?>

    <div class="pt-content">

        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
            }
        } else {
            get_template_part('404');
        }
        ?>

    </div>

<?php get_footer(); ?>
