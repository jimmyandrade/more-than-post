<?php

namespace More_Than_Post\Post_Types;

class Partner {

	public static function init() {

		$labels = [
			'name'                  => _x( 'Partners', 'Post Type General Name', 'more-than-post' ),
			'singular_name'         => _x( 'Partner', 'Post Type Singular Name', 'more-than-post' ),
			'menu_name'             => __( 'Partners', 'more-than-post' ),
			'name_admin_bar'        => __( 'Partner', 'more-than-post' ),
			'archives'              => __( 'Partner Archives', 'more-than-post' ),
			'attributes'            => __( 'Partner Attributes', 'more-than-post' ),
			'parent_item_colon'     => __( 'Parent Partner:', 'more-than-post' ),
			'all_items'             => __( 'All Partners', 'more-than-post' ),
			'add_new_item'          => __( 'Add New Partner', 'more-than-post' ),
			'add_new'               => __( 'Add New Partner', 'more-than-post' ),
			'new_item'              => __( 'New Partner', 'more-than-post' ),
			'edit_item'             => __( 'Edit Partner', 'more-than-post' ),
			'update_item'           => __( 'Update Partner', 'more-than-post' ),
			'view_item'             => __( 'View Partner', 'more-than-post' ),
			'view_items'            => __( 'View Partners', 'more-than-post' ),
			'search_items'          => __( 'Search Partner', 'more-than-post' ),
			'not_found'             => __( 'Partner not found', 'more-than-post' ),
			'not_found_in_trash'    => __( 'No partner found in Trash', 'more-than-post' ),
			'featured_image'        => __( 'Partner logo image', 'more-than-post' ),
			'set_featured_image'    => __( 'Set partner logo image', 'more-than-post' ),
			'remove_featured_image' => __( 'Remove partner logo', 'more-than-post' ),
			'use_featured_image'    => __( 'Use as partner logo', 'more-than-post' ),
			'insert_into_item'      => __( 'Insert into partner', 'more-than-post' ),
			'uploaded_to_this_item' => __( 'Uploaded to this partner', 'more-than-post' ),
			'items_list'            => __( 'Partners list', 'more-than-post' ),
			'items_list_navigation' => __( 'Partners list navigation', 'more-than-post' ),
			'filter_items_list'     => __( 'Filter partners list', 'more-than-post' ),
		];
		$args   = [
			'label'               => __( 'Partner', 'more-than-post' ),
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