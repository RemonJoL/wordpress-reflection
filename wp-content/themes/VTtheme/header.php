<?php
//?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Petemoss&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
wp_body_open();
?>
<div class="page-container">
<div id="page">
    <header id="masthead" class="site-header" role="banner">
        <hgroup>
            <a href="/home"><img src="/wp-content/uploads/2022/02/220-2204357_vault-tec-decal-fallout-vault-tec-logob.png"></a>
            <div class="burger-button">
                <span class="burger"></span>
                <span class="burger-title">
              Menu
            </span>
            </div>
        </hgroup>

        <div class="burger-container">
            <div class="burger-menu">
                <div class="burger-menu-overlay">

                </div>
                <div class="burger-menu-container">
                    <nav role="navigation" class="header-nav text-white">
                        <?php wp_nav_menu(); ?>
                    </nav>
                    <div class="header-widget">
                        <?php get_sidebar('header_widget_1'); ?>
                    </div>
                </div>
            </div>
        </div>
        <nav role="navigation" class="header-nav text-white">
            <?php wp_nav_menu(); ?>
        </nav>
    </header>
    <div id="main" class="site-main">