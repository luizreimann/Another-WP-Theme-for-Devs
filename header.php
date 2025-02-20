<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo esc_url( get_site_icon_url() ); ?>" sizes="32x32" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container align-items-center">

            <?php 
                $custom_logo_id = get_theme_mod('custom_logo');
                if ($custom_logo_id) {
                    $logo_url = wp_get_attachment_image_src($custom_logo_id , 'full');
                }
            ?>

            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php if ( isset($logo_url) && !empty($logo_url[0]) ) : ?>
                    <img src="<?php echo esc_url($logo_url[0]); ?>" 
                        alt="<?php bloginfo( 'name' ); ?>" 
                        class="d-inline-block" 
                        width="100" height="auto">
                <?php else : ?>
                    <span><?php bloginfo( 'name' ); ?></span>
                <?php endif; ?>
            </a>

            <button class="navbar-toggler custom-toggler" type="button" aria-label="Open navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'navbar-nav ms-auto mb-2 mb-lg-0',
                    'fallback_cb'    => '__return_false',
                ) );
                ?>
            </div>

            <div id="mobile-menu" class="mobile-menu">
                <ul class="mobile-menu-list">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary', 
                        'container'      => false,
                        'items_wrap'     => '%3$s',
                        'fallback_cb'    => false,
                    ) );
                    ?>
                </ul>
            </div>

            <div class="d-flex">
                <a href="#" class="me-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/us-flag.jpg" alt="English" class="lang-flag">
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/br-flag.jpg" alt="Brazillian Portuguese" class="lang-flag">
                </a>
            </div>
        </div>
    </nav>
</header>