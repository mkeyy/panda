<?php
/**
 * The template file for page
 *
 * @package Panda Theme
 */

get_header();
?>

    <div class="pt-page">
        <p class="pt-updated">
            <span class="pt-tag"><?= __('Aktualizacja', 'panda-theme') ?></span>
            <?php the_modified_time('j M Y'); ?>, <?php the_modified_time('G:i'); ?>
        </p>
        <h1 class="pt-page__title pt-h1"><?= get_the_title() ?></h1>

        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <div class="pt-page__content pt-wysiwyg">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

<?php
get_footer();
