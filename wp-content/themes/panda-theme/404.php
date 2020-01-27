<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Panda Theme
 */

get_header();
?>

<div class="pt-404">
    <h1 class="pt-h1 pt-title"><?= __('404', 'panda-theme') ?></h1>

    <p class="pt-description">
        <?= __('Hola hola, panie kolego nie ma takiej strony, najlepiej wróć na ', 'panda-theme') ?>
        <a href="<?= get_home_url() ?>" class="pt-link"><?= __('stronę główną', 'panda-theme') ?></a>
    </p>
</div>

<?php get_footer(); ?>
