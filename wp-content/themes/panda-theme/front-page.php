<?php
/**
 * Template Name: Homepage
 *
 * @package Panda Theme
 */

get_header();

$prefix = 'pt_homepage_';

$orphan = null;
if (class_exists('iworks_orphan')) {
    $orphan = new iworks_orphan();
}
?>

<div class="pt-homepage">
    <?php
    /** Header Section */

    $headerTitle = get_post_meta(get_the_ID(), $prefix . 'header_title', true);
    $headerDescription = get_post_meta(get_the_ID(), $prefix . 'header_desc', true);
    ?>
    <section class="pt-section pt-section--header">
        <?php if (!empty($headerTitle)): ?>
            <div class="pt-title"><?= wpautop($headerTitle) ?></div>
        <?php endif; ?>

        <?php if (!empty($headerDescription)): ?>
            <div class="pt-description">
                <?= $orphan ? wpautop($orphan->replace($headerDescription)) : wpautop($headerDescription) ?>
            </div>
        <?php endif; ?>
    </section>

    <?php
    /** Achievements Section */

    $achievementsTitle = get_post_meta(get_the_ID(), $prefix . 'achievements_title', true);
    $achievements = get_post_meta(get_the_ID(), $prefix . 'achievements', true);
    $newsTitle = get_post_meta(get_the_ID(), $prefix . 'news_title', true);
    $news = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 5
    ))
    ?>

    <section class="pt-section pt-section--columns">
        <?php if (!empty($news)): ?>
            <div class="pt-news">
                <?php if (!empty($newsTitle)): ?>
                    <h3 class="pt-title"><?= $newsTitle ?></h3>
                <?php endif; ?>

                <?php if ($news->have_posts()): ?>
                    <ul class="pt-list--primary pt-list">
                        <?php while ($news->have_posts()): $news->the_post(); ?>
                            <li class="pt-item">
                                <a href="<?= get_the_permalink() ?>" class="pt-link"><?= get_the_title() ?></a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($achievements)): ?>
            <div class="pt-achievements">
                <?php if (!empty($achievementsTitle)): ?>
                    <h3 class="pt-title"><?= $achievementsTitle ?></h3>
                <?php endif; ?>

                <ul class="pt-list--primary pt-list">
                    <?php foreach ($achievements as $item): ?>
                        <li><?= $item['achievement'] ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </section>
</div>

<?php get_footer(); ?>
