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
    ?>
    <?php if (!empty($achievements)): ?>
        <section class="pt-section pt-section--achievements">
            <?php if (!empty($achievementsTitle)): ?>
                <h3 class="pt-title"><?= $achievementsTitle ?></h3>
            <?php endif; ?>

            <ul class="pt-list--primary pt-achievements">
                <?php foreach ($achievements as $item): ?>
                    <li><?= $item['achievement'] ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
