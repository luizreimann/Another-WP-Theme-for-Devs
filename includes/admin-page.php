<?php

// Add admin page
function AWTD_add_admin_page() {
    add_menu_page(
        __( 'Theme Options', 'awtd' ),
        __( 'Theme Options', 'awtd' ),
        'manage_options',
        'awtd-settings',
        'AWTD_render_admin_page',
        'dashicons-art',
        2
    );
}
add_action( 'admin_menu', 'AWTD_add_admin_page' );

// Register settings
function AWTD_register_settings() {
    register_setting( 'awtd-settings-group', 'awtd_email_link' );
    register_setting( 'awtd-settings-group', 'awtd_linkedin_link' );
    register_setting( 'awtd-settings-group', 'awtd_github_link' );
    register_setting( 'awtd-settings-group', 'awtd_favicon' );

    // Sections
    add_settings_section( 'awtd-general-options', __( 'General Settings', 'awtd' ), 'AWTD_general_options_callback', 'awtd-settings' );

    // Site name
    add_settings_field( 'site_name', __( 'Site Name', 'awtd' ), 'AWTD_site_name_callback', 'awtd-settings', 'awtd-general-options' );

    // Site description
    add_settings_field( 'site_description', __( 'Site Description', 'awtd' ), 'AWTD_site_description_callback', 'awtd-settings', 'awtd-general-options' );

    // Favicon
    add_settings_field( 'favicon', __( 'Favicon', 'awtd' ), 'AWTD_favicon_callback', 'awtd-settings', 'awtd-general-options' );

    // Social links section header
    add_settings_section( 'awtd-social-links', '<h2>' . __( 'Social Links', 'awtd' ) . '</h2>', 'AWTD_social_links_callback', 'awtd-settings' );

    // Social links
    add_settings_field( 'email_link', __( 'Your E-mail', 'awtd' ), 'AWTD_email_link_callback', 'awtd-settings', 'awtd-social-links' );
    add_settings_field( 'linkedin_link', __( 'LinkedIn URL', 'awtd' ), 'AWTD_linkedin_link_callback', 'awtd-settings', 'awtd-social-links' );
    add_settings_field( 'github_link', __( 'GitHub URL', 'awtd' ), 'AWTD_github_link_callback', 'awtd-settings', 'awtd-social-links' );
}
add_action( 'admin_init', 'AWTD_register_settings' );

// Callback gerenal options description
function AWTD_general_options_callback() {
    echo '<p>' . __( 'Customize the basic settings of your theme.', 'awtd' ) . '</p>';
}

// Callback social links description
function AWTD_social_links_callback(){
    echo '<p>' . __('Insert your social links to show on front page', 'awtd') . '<p>';
} 

// Site name
function AWTD_site_name_callback() {
    ?>
    <input type="text" name="blogname" value="<?php echo esc_attr( get_option( 'blogname' ) ); ?>" class="regular-text" />
    <?php
}

// Site description
function AWTD_site_description_callback() {
    ?>
    <input type="text" name="blogdescription" value="<?php echo esc_attr( get_option( 'blogdescription' ) ); ?>" class="regular-text" />
    <?php
}

// Favicon
function AWTD_favicon_callback() {
    $favicon_id = get_option( 'awtd_favicon' );
    $favicon_url = $favicon_id ? wp_get_attachment_url( $favicon_id ) : '';

    ?>
    <div>
        <img id="awtd-favicon-preview" src="<?php echo esc_url( $favicon_url ); ?>" style="max-width: 100px; max-height: 100px;" /><br />
        <input type="hidden" name="awtd_favicon" id="awtd_favicon" value="<?php echo esc_attr( $favicon_id ); ?>" />
        <button type="button" class="button" id="upload_favicon_button"><?php _e( 'Upload Favicon', 'awtd' ); ?></button>
        <button type="button" class="button" id="remove_favicon_button"><?php _e( 'Remove Favicon', 'awtd' ); ?></button>
    </div>
    <p class="description"><?php _e( 'Upload your favicon through the media library.', 'awtd' ); ?></p>
    <?php
}

// Email link
function AWTD_email_link_callback() {
    $email_link = esc_attr( get_option( 'awtd_email_link' ) );
    ?>
    <input type="email" name="awtd_email_link" value="<?php echo $email_link; ?>" class="regular-text" />
    <?php
}

// LinkedIn link
function AWTD_linkedin_link_callback() {
    $linkedin_link = esc_attr( get_option( 'awtd_linkedin_link' ) );
    ?>
    <input type="url" name="awtd_linkedin_link" value="<?php echo $linkedin_link; ?>" class="regular-text" />
    <?php
}

// GitHub link
function AWTD_github_link_callback() {
    $github_link = esc_attr( get_option( 'awtd_github_link' ) );
    ?>
    <input type="url" name="awtd_github_link" value="<?php echo $github_link; ?>" class="regular-text" />
    <?php
}

// Render admin page
function AWTD_render_admin_page() {
    ?>
    <div class="wrap">
        <h1><?php _e( 'Theme Options', 'awtd' ); ?></h1>
        <form method="post" action="options.php">
            <?php
                settings_fields( 'awtd-settings-group' );
                do_settings_sections( 'awtd-settings' );
                submit_button();
            ?>
        </form>
    </div>
    <?php
}

// Enqueue admin page scripts
function AWTD_enqueue_admin_scripts( $hook ) {
    if ( $hook !== 'toplevel_page_awtd-settings' ) {
        return;
    }
    wp_enqueue_media();

    wp_enqueue_script( 'awtd-admin-js', get_template_directory_uri() . '/assets/js/admin/admin-page.js', array( 'jquery' ), null, true );
}
add_action( 'admin_enqueue_scripts', 'AWTD_enqueue_admin_scripts' );

// Applying the favicon on WordPress site icon
function AWTD_save_favicon_as_site_icon() {
    $custom_favicon_id = get_option( 'awtd_favicon' );

    if ( $custom_favicon_id && get_option( 'site_icon' ) !== $custom_favicon_id ) {
        update_option( 'site_icon', $custom_favicon_id );
    }
}
add_action( 'admin_init', 'AWTD_save_favicon_as_site_icon' );

?>