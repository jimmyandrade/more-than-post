<?php

namespace More_Than_Post\Post_Types;

class Link {

	private static $post_type = 'link';

	public static function init() {

		$labels = array(
			'name'                  => _x( 'Links', 'Post Type General Name', 'more-than-post' ),
			'singular_name'         => _x( 'Link', 'Post Type Singular Name', 'more-than-post' ),
			'menu_name'             => __( 'Links', 'more-than-post' ),
			'name_admin_bar'        => __( 'Link', 'more-than-post' ),
			'archives'              => __( 'Link Archives', 'more-than-post' ),
			'attributes'            => __( 'Link Attributes', 'more-than-post' ),
			'parent_item_colon'     => __( 'Parent Link:', 'more-than-post' ),
			'all_items'             => __( 'All Links', 'more-than-post' ),
			'add_new_item'          => __( 'Add New Link', 'more-than-post' ),
			'add_new'               => __( 'Add New', 'more-than-post' ),
			'new_item'              => __( 'New Link', 'more-than-post' ),
			'edit_item'             => __( 'Edit Link', 'more-than-post' ),
			'update_item'           => __( 'Update Link', 'more-than-post' ),
			'view_item'             => __( 'View Link', 'more-than-post' ),
			'view_items'            => __( 'View Links', 'more-than-post' ),
			'search_items'          => __( 'Search Link', 'more-than-post' ),
			'not_found'             => __( 'Link not found', 'more-than-post' ),
			'not_found_in_trash'    => __( 'Link not found in Trash', 'more-than-post' ),
			'featured_image'        => __( 'Featured Image', 'more-than-post' ),
			'set_featured_image'    => __( 'Set link featured image', 'more-than-post' ),
			'remove_featured_image' => __( 'Remove link featured image', 'more-than-post' ),
			'use_featured_image'    => __( 'Use as link featured image', 'more-than-post' ),
			'insert_into_item'      => __( 'Insert into link', 'more-than-post' ),
			'uploaded_to_this_item' => __( 'Uploaded to this link', 'more-than-post' ),
			'items_list'            => __( 'Links list', 'more-than-post' ),
			'items_list_navigation' => __( 'Links list navigation', 'more-than-post' ),
			'filter_items_list'     => __( 'Filter links list', 'more-than-post' ),
		);
		$args   = array(
			'label'               => __( 'Link', 'more-than-post' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'thumbnail', 'page-attributes' ),
			'taxonomies'          => array( 'category' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 15,
			'menu_icon'           => 'dashicons-admin-links',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => false,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => true,
			'publicly_queryable'  => true,
			'rewrite'             => false,
			'capability_type'     => 'page',
			'show_in_rest'        => true,
		);
		register_post_type( Link::$post_type, $args );

	}

}