<?php
// Register Portfolio CPT
function AWTD_register_portfolios_cpt() {
    $labels = array(
        'name'               => __( 'Portfolios', 'awtd' ),
        'singular_name'      => __( 'Portfolio', 'awtd' ),
        'menu_name'          => __( 'Portfolios', 'awtd' ),
        'name_admin_bar'     => __( 'Portfolio', 'awtd' ),
        'add_new'            => __( 'Add New', 'awtd' ),
        'add_new_item'       => __( 'Add New Portfolio', 'awtd' ),
        'new_item'           => __( 'New Portfolio', 'awtd' ),
        'edit_item'          => __( 'Edit Portfolio', 'awtd' ),
        'view_item'          => __( 'View Portfolio', 'awtd' ),
        'all_items'          => __( 'All Portfolios', 'awtd' ),
        'search_items'       => __( 'Search Portfolios', 'awtd' ),
        'not_found'          => __( 'No portfolios found.', 'awtd' ),
        'not_found_in_trash' => __( 'No portfolios found in Trash.', 'awtd' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-portfolio',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portfolios' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'thumbnail' ),
    );

    register_post_type( 'awtd_portfolio', $args );
}
add_action( 'init', 'AWTD_register_portfolios_cpt' );

// Add custom fields for CPT Portfolio
function AWTD_add_portfolio_metaboxes() {
    add_meta_box(
        'awtd_portfolio_description',
        __( 'Portfolio Description', 'awtd' ),
        'AWTD_render_portfolio_description_metabox',
        'awtd_portfolio',
        'normal',
        'high'
    );
    
    add_meta_box(
        'awtd_portfolio_url',
        __( 'Portfolio URL', 'awtd' ),
        'AWTD_render_portfolio_url_metabox',
        'awtd_portfolio',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'AWTD_add_portfolio_metaboxes' );

// Render description custom field
function AWTD_render_portfolio_description_metabox( $post ) {
    $description = get_post_meta( $post->ID, '_awtd_portfolio_description', true );
    ?>
    <textarea style="width:100%;" rows="5" name="awtd_portfolio_description"><?php echo esc_textarea( $description ); ?></textarea>
    <?php
}

// Render URL custom field
function AWTD_render_portfolio_url_metabox( $post ) {
    $portfolio_url = get_post_meta( $post->ID, '_awtd_portfolio_url', true );
    ?>
    <input type="url" style="width:100%;" name="awtd_portfolio_url" value="<?php echo esc_url( $portfolio_url ); ?>" />
    <?php
}

// Save custom fields
function AWTD_save_portfolio_metabox_data( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( isset( $_POST['awtd_portfolio_description'] ) ) {
        update_post_meta( $post_id, '_awtd_portfolio_description', sanitize_textarea_field( $_POST['awtd_portfolio_description'] ) );
    }

    if ( isset( $_POST['awtd_portfolio_url'] ) ) {
        update_post_meta( $post_id, '_awtd_portfolio_url', esc_url_raw( $_POST['awtd_portfolio_url'] ) );
    }
}
add_action( 'save_post', 'AWTD_save_portfolio_metabox_data' );