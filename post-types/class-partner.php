<?php

namespace More_Than_Post\Post_Types;

class Partner {

	public static function init() {

		$labels = [
			'name'                  => _x( 'Partners', 'Post Type General Name', 'winner-bh' ),
			'singular_name'         => _x( 'Partner', 'Post Type Singular Name', 'winner-bh' ),
			'menu_name'             => __( 'Partners', 'winner-bh' ),
			'name_admin_bar'        => __( 'Partner', 'winner-bh' ),
			'archives'              => __( 'Partner Archives', 'winner-bh' ),
			'attributes'            => __( 'Partner Attributes', 'winner-bh' ),
			'parent_item_colon'     => __( 'Parent Partner:', 'winner-bh' ),
			'all_items'             => __( 'All Partners', 'winner-bh' ),
			'add_new_item'          => __( 'Add New Partner', 'winner-bh' ),
			'add_new'               => __( 'Add New Partner', 'winner-bh' ),
			'new_item'              => __( 'New Partner', 'winner-bh' ),
			'edit_item'             => __( 'Edit Partner', 'winner-bh' ),
			'update_item'           => __( 'Update Partner', 'winner-bh' ),
			'view_item'             => __( 'View Partner', 'winner-bh' ),
			'view_items'            => __( 'View Partners', 'winner-bh' ),
			'search_items'          => __( 'Search Partner', 'winner-bh' ),
			'not_found'             => __( 'Partner not found', 'winner-bh' ),
			'not_found_in_trash'    => __( 'No partner found in Trash', 'winner-bh' ),
			'featured_image'        => __( 'Partner logo image', 'winner-bh' ),
			'set_featured_image'    => __( 'Set partner logo image', 'winner-bh' ),
			'remove_featured_image' => __( 'Remove partner logo', 'winner-bh' ),
			'use_featured_image'    => __( 'Use as partner logo', 'winner-bh' ),
			'insert_into_item'      => __( 'Insert into partner', 'winner-bh' ),
			'uploaded_to_this_item' => __( 'Uploaded to this partner', 'winner-bh' ),
			'items_list'            => __( 'Partners list', 'winner-bh' ),
			'items_list_navigation' => __( 'Partners list navigation', 'winner-bh' ),
			'filter_items_list'     => __( 'Filter partners list', 'winner-bh' ),
		];
		$args   = [
			'label'               => __( 'Partner', 'winner-bh' ),
			'labels'              => $labels,
			'supports'            => [ 'title', 'thumbnail', 'page-attributes', ],
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'show_in_admin_bar'   => false,
			'show_in_nav_menus'   => false,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => true,
			'publicly_queryable'  => true,
			'rewrite'             => false,
			'capability_type'     => 'page',
			'show_in_rest'        => true,
		];
		register_post_type( 'partner', $args );

	}


}