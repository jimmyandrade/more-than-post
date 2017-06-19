<?php

namespace More_Than_Post\Post_Types;

class Service {

	public static function init() {

		$labels = [
			'name'                  => _x( 'Services', 'Post Type General Name', 'winner-bh' ),
			'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'winner-bh' ),
			'menu_name'             => __( 'Services', 'winner-bh' ),
			'name_admin_bar'        => __( 'Service', 'winner-bh' ),
			'archives'              => __( 'Service Archives', 'winner-bh' ),
			'attributes'            => __( 'Service Attributes', 'winner-bh' ),
			'parent_item_colon'     => __( 'Parent Service:', 'winner-bh' ),
			'all_items'             => __( 'All Services', 'winner-bh' ),
			'add_new_item'          => __( 'Add New Service', 'winner-bh' ),
			'add_new'               => __( 'Add New Service', 'winner-bh' ),
			'new_item'              => __( 'New Service', 'winner-bh' ),
			'edit_item'             => __( 'Edit Service', 'winner-bh' ),
			'update_item'           => __( 'Update Service', 'winner-bh' ),
			'view_item'             => __( 'View Service', 'winner-bh' ),
			'view_items'            => __( 'View Services', 'winner-bh' ),
			'search_items'          => __( 'Search Service', 'winner-bh' ),
			'not_found'             => __( 'Service not found', 'winner-bh' ),
			'not_found_in_trash'    => __( 'No service found in Trash', 'winner-bh' ),
			'featured_image'        => __( 'Service Featured Image', 'winner-bh' ),
			'set_featured_image'    => __( 'Set service featured image', 'winner-bh' ),
			'remove_featured_image' => __( 'Remove service featured image', 'winner-bh' ),
			'use_featured_image'    => __( 'Use as service featured image', 'winner-bh' ),
			'insert_into_item'      => __( 'Insert into service', 'winner-bh' ),
			'uploaded_to_this_item' => __( 'Uploaded to this service', 'winner-bh' ),
			'items_list'            => __( 'Services list', 'winner-bh' ),
			'items_list_navigation' => __( 'Services list navigation', 'winner-bh' ),
			'filter_items_list'     => __( 'Filter services list', 'winner-bh' ),
		];
		$args   = [
			'label'             => __( 'Service', 'winner-bh' ),
			'labels'            => $labels,
			'supports'          => [ 'title', 'editor', 'thumbnail', 'page-attributes', ],
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
		];
		register_post_type( 'service', $args );

	}

}