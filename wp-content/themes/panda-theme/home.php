<?php
/**
 * The template for displaying posts page.
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
                    <a href="<?= get_the_permalink() ?>" class="pt-link">
                        <p class="pt-text">
                            <?= get_the_title() ?>
                            <span><?php the_modified_time('j M Y'); ?></span>
                        </p>

                        <?= pt_asset_svg('ic-arrow') ?>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>

        <div class="pt-pagination">
            <?= paginate_links(array(
                'prev_text' => __(pt_asset_svg('ic-arrow')),
                'next_text' => __(pt_asset_svg('ic-arrow')),
            )); ?>
        </div>
    <?php endif; ?>
</div>

<?php get_footer() ?>
