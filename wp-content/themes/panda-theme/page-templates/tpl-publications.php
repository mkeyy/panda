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
    <h1 class="pt-page__title pt-h1"><?= get_the_title() ?></h1>

    <?php if (!empty($publications)): ?>
        <?php foreach ($publications as $publication): ?>
            <div class="pt-publication">
                <div class="pt-publication__content">
                    <h3 class="pt-title pt-h3"><?= $publication['title']; ?></h3>
                    <p class="pt-authors pt-p">
                        <strong><?= __('Autorzy: ', 'panda-theme') ?></strong>
                        <?= $publication['authors'] ?>
                    </p>
                </div>

                <?php if (!empty($publication['link'])): ?>
                    <a href="<?= $publication['link'] ?>" class="pt-publication__link" target="_blank">
                        <?= assetSvg('ic-external') ?>
                    </a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php get_footer() ?>
