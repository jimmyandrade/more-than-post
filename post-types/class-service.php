<?php

namespace More_Than_Post\Post_Types;

class Service {

	public static function init() {

		$labels = [
			'name'                  => _x( 'Services', 'Post Type General Name', 'more-than-post' ),
			'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'more-than-post' ),
			'menu_name'             => __( 'Services', 'more-than-post' ),
			'name_admin_bar'        => __( 'Service', 'more-than-post' ),
			'archives'              => __( 'Service Archives', 'more-than-post' ),
			'attributes'            => __( 'Service Attributes', 'more-than-post' ),
			'parent_item_colon'     => __( 'Parent Service:', 'more-than-post' ),
			'all_items'             => __( 'All Services', 'more-than-post' ),
			'add_new_item'          => __( 'Add New Service', 'more-than-post' ),
			'add_new'               => __( 'Add New Service', 'more-than-post' ),
			'new_item'              => __( 'New Service', 'more-than-post' ),
			'edit_item'             => __( 'Edit Service', 'more-than-post' ),
			'update_item'           => __( 'Update Service', 'more-than-post' ),
			'view_item'             => __( 'View Service', 'more-than-post' ),
			'view_items'            => __( 'View Services', 'more-than-post' ),
			'search_items'          => __( 'Search Service', 'more-than-post' ),
			'not_found'             => __( 'Service not found', 'more-than-post' ),
			'not_found_in_trash'    => __( 'No service found in Trash', 'more-than-post' ),
			'featured_image'        => __( 'Service Featured Image', 'more-than-post' ),
			'set_featured_image'    => __( 'Set service featured image', 'more-than-post' ),
			'remove_featured_image' => __( 'Remove service featured image', 'more-than-post' ),
			'use_featured_image'    => __( 'Use as service featured image', 'more-than-post' ),
			'insert_into_item'      => __( 'Insert into service', 'more-than-post' ),
			'uploaded_to_this_item' => __( 'Uploaded to this service', 'more-than-post' ),
			'items_list'            => __( 'Services list', 'more-than-post' ),
			'items_list_navigation' => __( 'Services list navigation', 'more-than-post' ),
			'filter_items_list'     => __( 'Filter services list', 'more-than-post' ),
		];
		$args   = [
			'label'             => __( 'Service', 'more-than-post' ),
			'labels'            => $labels,
			'supports'          => [ 'title', 'excerpt', 'editor', 'thumbnail', 'page-attributes' ],
			'hierarchical'      => false,
			'public'            => true,
			'show_ui'           => true,
			'show_in_menu'      => true,
			'menu_position'     => 5,
			'show_in_admin_bar' => false,
			'show_in_nav_menus' => true,
			'can_export'        => true,
			'has_archive'       => true,
			'rewrite'           => [
				'slug'       => 'servicos',
				'with_front' => false,
				'feeds'      => false,
				'pages'      => false,
			],
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
			'show_in_rest'        => true,
			'taxonomies'          => [ 'category' ],
		];
		register_post_type( 'service', $args );

	}

}
