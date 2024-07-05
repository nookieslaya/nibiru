<?php
/**
 * Header Template
 *
 * @package Nibiru
 */
?>
<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <title>Nibiru Theme</title>
</head>
<body <?php body_class(); ?>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <?php get_template_part('template-parts/header/nav') ?>

    </header>
    <div id="content" class="site-content">

