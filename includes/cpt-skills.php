<?php
// Register Skills CPT
function AWTD_register_skills_cpt() {
    $labels = array(
        'name'               => __( 'Skills', 'awtd' ),
        'singular_name'      => __( 'Skill', 'awtd' ),
        'menu_name'          => __( 'Skills', 'awtd' ),
        'name_admin_bar'     => __( 'Skill', 'awtd' ),
        'add_new'            => __( 'Add New', 'awtd' ),
        'add_new_item'       => __( 'Add New Skill', 'awtd' ),
        'new_item'           => __( 'New Skill', 'awtd' ),
        'edit_item'          => __( 'Edit Skill', 'awtd' ),
        'view_item'          => __( 'View Skill', 'awtd' ),
        'all_items'          => __( 'All Skills', 'awtd' ),
        'search_items'       => __( 'Search Skills', 'awtd' ),
        'not_found'          => __( 'No skills found.', 'awtd' ),
        'not_found_in_trash' => __( 'No skills found in Trash.', 'awtd' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-hammer',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'skills' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title' ),
    );

    register_post_type( 'awtd_skill', $args );
}
add_action( 'init', 'AWTD_register_skills_cpt' );

function AWTD_add_skill_metaboxes() {
    add_meta_box(
        'awtd_skill_progress',
        __( 'Skill Progress', 'awtd' ),
        'AWTD_render_skill_progress_metabox',
        'awtd_skill',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'AWTD_add_skill_metaboxes' );

// Render progress custom field
function AWTD_render_skill_progress_metabox( $post ) {
    $progress = get_post_meta( $post->ID, '_awtd_skill_progress', true );
    ?>
    <label for="awtd_skill_progress"><?php _e( 'Progress (0-100%)', 'awtd' ); ?></label>
    <input type="number" id="awtd_skill_progress" name="awtd_skill_progress" value="<?php echo esc_attr( $progress ); ?>" min="0" max="100" style="width: 100%;" />
    <?php
}

// Save custom fields
function AWTD_save_skill_metabox_data( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( isset( $_POST['awtd_skill_progress'] ) ) {
        $progress_value = intval( $_POST['awtd_skill_progress'] );
        if ( $progress_value >= 0 && $progress_value <= 100 ) {
            update_post_meta( $post_id, '_awtd_skill_progress', $progress_value );
        }
    }
}
add_action( 'save_post', 'AWTD_save_skill_metabox_data' );