<?php
/**
 * Template Name: Homepage
 *
 * @package Panda Theme
 */

get_header();

$prefix = 'pt_homepage_';
$title = get_post_meta(get_the_ID(), $prefix . 'title', true);
$description = get_post_meta(get_the_ID(), $prefix . 'desc', true);

$orphan = null;
if (class_exists('iworks_orphan')) {
    $orphan = new iworks_orphan();
}
?>

<div class="pt-homepage">
    <section class="pt-section pt-section--header">
        <?php if (!empty($title)): ?>
            <div class="pt-title"><?= wpautop($title) ?></div>
        <?php endif; ?>

        <?php if (!empty($description)): ?>
            <div class="pt-description">
                <?= $orphan ? wpautop($orphan->replace($description)) : wpautop($description) ?>
            </div>
        <?php endif; ?>
    </section>

    <section class="pt-section pt-section--informations">
        <div class="pt-achievements">
            <div class="pt-title">

            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
