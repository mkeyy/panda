<?php
/**
 * The template for displaying the header.
 *
 * @package Panda Theme
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right');
        bloginfo('name'); ?></title>

    <link rel="shortcut icon" type="image/x-icon" href="<?php printf('%s/assets/favicon/favicon.ico', get_template_directory_uri()); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_template_part('sidebar'); ?>

<main class="pt-main">
