<?php
/**
 * Template Name: Publikacje
 *
 * @package Panda Theme
 */

get_header();
?>


<?php
/** Publications template variables */

$prefix = 'pt_tpl_publications_';
$publications = get_post_meta(get_the_ID(), $prefix . 'publications', true);
?>
<div class="pt-publications">
    <h1 class="pt-h1 pt-title">
        <?= get_the_title() ?>
        <span class="pt-line"></span>
    </h1>

    <?php if (!empty($publications)): ?>
    <ul class="pt-list--primary">
        <?php foreach ($publications as $publication): ?>
            <li class="pt-item">
                <p class="pt-text"><?= $publication['text']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
</div>

<?php get_footer() ?>
