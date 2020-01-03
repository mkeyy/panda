<?php
/**
 * The template for displaying archive pages.
 *
 * @package Panda Theme
 */

get_header();
?>
<div class="pt-archive">
    <h1 class="pt-h1 pt-title">
        <?= get_the_title(get_option('page_for_posts', true)); ?>
        <span class="pt-line"></span>
    </h1>

    <?php if (have_posts()) : ?>
        <ul class="pt-list--secondary pt-list">
            <?php while (have_posts()) : the_post(); ?>
                <li class="pt-item">
                    <a href="<?= get_the_permalink() ?>" class="pt-link"><?= get_the_title() ?></a>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</div>

<?php get_footer() ?>
