<?php
    //////////////////////// Contact Us /////////////////////

    function Chanak_contact_enquiry() {
        $labels = array(
            'name'                  => _x( 'Contact Enquiry', 'Post Type General Name', 'source' ),
            'singular_name'         => _x( 'contact_enquiry', 'Post Type Singular Name', 'source' ),
            'menu_name'             => __( 'Contact Enquiry', 'source' ),
            'name_admin_bar'        => __( 'copywriting_enquiry', 'source' ),
            'archives'              => __( 'Item Archives', 'source' ),
            'all_items'             => __( 'All contactus Enquiry', 'source' ),
            'add_new_item'          => __( 'Add New contactus Enquiry', 'source' ),
            'add_new'               => __( 'Add contactus Enquiry', 'source' ),
            'new_item'              => __( 'New contactus Enquiry', 'source' ),
            'edit_item'             => __( 'Edit contact_enquiry', 'source' ),
            'update_item'           => __( 'Update contact_enquiry', 'source' ),
            'view_item'             => __( 'View contact_enquiry', 'source' ),
            'view_items'            => __( 'View contact_enquiry', 'source' ),
            'search_items'          => __( 'Search Contact Enquiry', 'source' ),
            'not_found'             => __( 'Not found', 'source' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'source' ),
            'featured_image'        => __( 'Featured Image', 'source' ),
            'set_featured_image'    => __( 'Set featured image', 'source' ),
            'remove_featured_image' => __( 'Remove featured image', 'source' ),
            'use_featured_image'    => __( 'Use as featured image', 'source' ),
            'insert_into_item'      => __( 'Insert into contact', 'source' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'source' ),
            'items_list'            => __( 'contact_enquiry list', 'source' ),
            'items_list_navigation' => __( 'contact_enquiry list navigation', 'source' ),
            'filter_items_list'     => __( 'Filter contact_enquiry list', 'source' ),
        );

        $capabilities = array(
            'create_posts'          => false,
            'read_post'             => 'read_post',
            'delete_post'           => 'delete_post',
            'read_private_posts'    => 'read_private_posts',
        );

        $args = array(
            'label'                 => __( 'contact enquiry', 'source' ),
            'description'           => __( 'contact enquiry Area', 'source' ),
            'labels'                => $labels,
            'supports'              => array(''), /* 'title', 'editor' */
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 60,
            'menu_icon'             => 'dashicons-format-chat',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => true,
            'publicly_queryable'    => false,
            'rewrite'               => false,
            'capabilities'          => $capabilities,
            'map_meta_cap'          => true,
            'capability_type'       => 'post',
            'show_in_rest'          => false
        );

        register_post_type( 'contact_enquiry', $args );
    }

    add_action( 'init', 'Chanak_contact_enquiry'); 



    //////////////////////// Newsletter /////////////////////

    function Chanak_sub_newsletter() {
        $labels = array(
            'name'                  => _x( 'Newsletter', 'Post Type General Name', 'source' ),
            'singular_name'         => _x( 'sub_newsletter', 'Post Type Singular Name', 'source' ),
            'menu_name'             => __( 'Newsletter', 'source' ),
            'name_admin_bar'        => __( 'sub_newsletter', 'source' ),
            'archives'              => __( 'Item Archives', 'source' ),
            'all_items'             => __( 'All service Enquiry', 'source' ),
            'add_new_item'          => __( 'Add New service Enquiry', 'source' ),
            'add_new'               => __( 'Add service Enquiry', 'source' ),
            'new_item'              => __( 'New service Enquiry', 'source' ),
            'edit_item'             => __( 'Edit sub_newsletter', 'source' ),
            'update_item'           => __( 'Update sub_newsletter', 'source' ),
            'view_item'             => __( 'View sub_newsletter', 'source' ),
            'view_items'            => __( 'View sub_newsletter', 'source' ),
            'search_items'          => __( 'Search sub_newsletter', 'source' ),
            'not_found'             => __( 'Not found', 'source' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'source' ),
            'featured_image'        => __( 'Featured Image', 'source' ),
            'set_featured_image'    => __( 'Set featured image', 'source' ),
            'remove_featured_image' => __( 'Remove featured image', 'source' ),
            'use_featured_image'    => __( 'Use as featured image', 'source' ),
            'insert_into_item'      => __( 'Insert into service', 'source' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'source' ),
            'items_list'            => __( 'sub_newsletter list', 'source' ),
            'items_list_navigation' => __( 'sub_newsletter list navigation', 'source' ),
            'filter_items_list'     => __( 'Filter sub_newsletter list', 'source' ),
        );

        $capabilities = array(
            'create_posts'          => false,
            'read_post'             => 'read_post',
            'delete_post'           => 'delete_post',
            'read_private_posts'    => 'read_private_posts',
        );

        $args = array(
            'label'                 => __( 'subscribe newsletter', 'source' ),
            'description'           => __( 'subscribe newsletter Area', 'source' ),
            'labels'                => $labels,
            'supports'              => array(''), /* 'title', 'editor' */
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 60,
            'menu_icon'             => 'dashicons-location',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => true,
            'publicly_queryable'    => false,
            'rewrite'               => false,
            'capabilities'          => $capabilities,
            'map_meta_cap'          => true,
            'capability_type'       => 'post',
            'show_in_rest'          => false
        );

        register_post_type( 'sub_newsletter', $args );
    }

    add_action( 'init', 'Chanak_sub_newsletter');

?>