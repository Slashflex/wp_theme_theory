<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>

<?php if (is_home()) : ?>

    <body>
        <header id="header">
            <div class="inner">
                <a href="<?php bloginfo('url') ?>" class="logo">Theory</a>
                <nav id="nav">
                    <a href="<?php bloginfo('url') ?>">Home</a>
                    <a href="<?= bloginfo('url') . '/generic' ?>">Generic</a>
                    <a href="<?= bloginfo('url') . '/contact' ?>">Contact</a>
                </nav>
                <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
            </div>
        </header>
    <?php else : ?>

        <body class="subpage">
            <header id="header">
                <div class="inner">
                    <a href="<?php bloginfo('url') ?>" class="logo">Theory</a>
                    <nav id="nav">
                        <a href="<?php bloginfo('url') ?>">Home</a>
                        <a href="<?= bloginfo('url') . '/generic' ?>">Generic</a>
                        <a href="<?= bloginfo('url') . '/contact' ?>">Contact</a>
                    </nav>
                    <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
                </div>
            </header>
        <?php endif ?>