<footer class="footer py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3 text-center text-md-start">
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php 
                    $custom_logo_id = get_theme_mod('custom_logo');
                    if ($custom_logo_id) {
                        $logo_url = wp_get_attachment_image_src($custom_logo_id , 'full');
                    }
                    if ( isset($logo_url) && !empty($logo_url[0]) ) : ?>
                        <img src="<?php echo esc_url($logo_url[0]); ?>" 
                            alt="<?php bloginfo( 'name' ); ?>" 
                            class="d-inline-block" 
                            width="100" height="auto">
                    <?php else : ?>
                        <span><?php bloginfo( 'name' ); ?></span>
                    <?php endif; ?>
                </a>
            </div>
            <div class="col-md-6 py-5 py-md-0 text-center">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'footer-menu d-block d-md-flex justify-content-center list-unstyled gap-5',
                        'fallback_cb'    => false,
                        'depth'          => 1,
                        'link_before'    => '<span>',
                        'link_after'     => '</span>',
                        'items_wrap'     => '<ul class="%2$s">%3$s</ul>'
                    ));
                ?>
            </div>
            <div class="col-md-3">
                <div class="text-center text-md-end copyright">
                    © 2025 Luiz Reimann
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>