<?php
/**
 * The template part for displaying aside.
 *
 * @package Panda Theme
 */

$name = pt_get_option('website_name');
$academy = pt_get_option('website_academy');
$department = pt_get_option('website_department');
$departmentLink = pt_get_option('website_department_link');
$description = pt_get_option('website_description');

$orphan = null;
if (class_exists('iworks_orphan')) {
    $orphan = new iworks_orphan();
}
?>

<aside id="pt-primary-navbar" class="pt-aside">
    <div class="pt-aside__header">
        <?php if (!empty($department) && !empty($departmentLink)): ?>
            <a href="<?= $departmentLink ?>" class="pt-department" target="_blank" rel="nofollow">
                <?= $orphan ? $orphan->replace($department) : $department ?>
            </a>
        <?php endif; ?>

        <a href="https://www.agh.edu.pl" class="pt-logo" target="_blank" rel="nofollow">
            <?= pt_asset_svg('logo-agh') ?>
        </a>
    </div>

    <div class="pt-aside__mobile">
        <button id="pt-toggle-menu" class="pt-btn pt-btn--toggle">
            <?= pt_asset_svg('ic-menu') ?>
            <?= pt_asset_svg('ic-close') ?>
        </button>
    </div>

    <div class="pt-aside__content">
        <div class="pt-headline">
            <?php if (!empty($name)): ?>
                <a href="<?= get_bloginfo('url') ?>" class="pt-name">
                    <?= $name ?>
                </a>
            <?php endif; ?>

            <?php if (!empty($academy)): ?>
                <span class="pt-academy"><?= $orphan ? $orphan->replace($academy) : $academy ?></span>
            <?php endif; ?>

            <?php if (!empty($description)): ?>
                <div class="pt-description">
                    <?= $orphan ? wpautop($orphan->replace($description)) : wpautop($description) ?>
                </div>
            <?php endif; ?>
        </div>

        <nav id="pt-primary-nav" class="pt-navigation pt-navigation--primary" role="navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container' => false,
                'fallback_cb' => false,
                'menu_class' => 'pt-menu',
            ));
            ?>
        </nav>
    </div>
</aside>