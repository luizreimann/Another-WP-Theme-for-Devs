<?php
// Register Project CPT
function AWTD_register_projects_cpt() {
    $labels = array(
        'name'               => __( 'Projects', 'awtd' ),
        'singular_name'      => __( 'Project', 'awtd' ),
        'menu_name'          => __( 'Projects', 'awtd' ),
        'name_admin_bar'     => __( 'Project', 'awtd' ),
        'add_new'            => __( 'Add New', 'awtd' ),
        'add_new_item'       => __( 'Add New Project', 'awtd' ),
        'new_item'           => __( 'New Project', 'awtd' ),
        'edit_item'          => __( 'Edit Project', 'awtd' ),
        'view_item'          => __( 'View Project', 'awtd' ),
        'all_items'          => __( 'All Projects', 'awtd' ),
        'search_items'       => __( 'Search Projects', 'awtd' ),
        'parent_item_colon'  => __( 'Parent Projects:', 'awtd' ),
        'not_found'          => __( 'No projects found.', 'awtd' ),
        'not_found_in_trash' => __( 'No projects found in Trash.', 'awtd' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-portfolio',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 3,
        'supports'           => array( 'title', 'thumbnail' ),
    );

    register_post_type( 'awtd_project', $args );
}
add_action( 'init', 'AWTD_register_projects_cpt' );

// Add custom fields for CPT Projects
function AWTD_add_project_metaboxes() {
    add_meta_box(
        'awtd_project_description',
        __( 'Project Description', 'awtd' ),
        'AWTD_render_project_description_metabox',
        'awtd_project',
        'normal',
        'high'
    );
    
    add_meta_box(
        'awtd_project_url',
        __( 'Project URL', 'awtd' ),
        'AWTD_render_project_url_metabox',
        'awtd_project',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'AWTD_add_project_metaboxes' );

// Render description custom field
function AWTD_render_project_description_metabox( $post ) {
    $description = get_post_meta( $post->ID, '_awtd_project_description', true );
    ?>
    <textarea style="width:100%;" rows="5" name="awtd_project_description"><?php echo esc_textarea( $description ); ?></textarea>
    <?php
}

// Render URL custom field
function AWTD_render_project_url_metabox( $post ) {
    $url_url = get_post_meta( $post->ID, '_awtd_project_url', true );
    ?>
    <input type="url" style="width:100%;" name="awtd_project_url" value="<?php echo esc_url( $url_url ); ?>" />
    <?php
}

// Save custom fields
function AWTD_save_project_metabox_data( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( isset( $_POST['awtd_project_description'] ) ) {
        update_post_meta( $post_id, '_awtd_project_description', sanitize_textarea_field( $_POST['awtd_project_description'] ) );
    }

    if ( isset( $_POST['awtd_project_url'] ) ) {
        update_post_meta( $post_id, '_awtd_project_url', esc_url_raw( $_POST['awtd_project_url'] ) );
    }
}
add_action( 'save_post', 'AWTD_save_project_metabox_data' );