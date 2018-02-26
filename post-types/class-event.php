<?php

namespace More_Than_Post\Post_Types;

class Event {

	public static function init() {

		$labels  = [
			'name'                  => _x( 'Events', 'Post Type General Name', 'more-than-post' ),
			'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'more-than-post' ),
			'menu_name'             => __( 'Events', 'more-than-post' ),
			'name_admin_bar'        => __( 'Event', 'more-than-post' ),
			'archives'              => __( 'Event Archives', 'more-than-post' ),
			'attributes'            => __( 'Event Attributes', 'more-than-post' ),
			'parent_item_colon'     => __( 'Parent Event:', 'more-than-post' ),
			'all_items'             => __( 'All Events', 'more-than-post' ),
			'add_new_item'          => __( 'Add New Event', 'more-than-post' ),
			'add_new'               => __( 'Add Event', 'more-than-post' ),
			'new_item'              => __( 'New Event', 'more-than-post' ),
			'edit_item'             => __( 'Edit Event', 'more-than-post' ),
			'update_item'           => __( 'Update Event', 'more-than-post' ),
			'view_item'             => __( 'View Event', 'more-than-post' ),
			'view_items'            => __( 'View Events', 'more-than-post' ),
			'search_items'          => __( 'Search Events', 'more-than-post' ),
			'not_found'             => __( 'Event not found', 'more-than-post' ),
			'not_found_in_trash'    => __( 'No event found in Trash', 'more-than-post' ),
			'featured_image'        => __( 'Event featured image', 'more-than-post' ),
			'set_featured_image'    => __( 'Set event featured image', 'more-than-post' ),
			'remove_featured_image' => __( 'Remove event featured image', 'more-than-post' ),
			'use_featured_image'    => __( 'Use as event featured image', 'more-than-post' ),
			'insert_into_item'      => __( 'Insert into event', 'more-than-post' ),
			'uploaded_to_this_item' => __( 'Uploaded to this event', 'more-than-post' ),
			'items_list'            => __( 'Events list', 'more-than-post' ),
			'items_list_navigation' => __( 'Events list navigation', 'more-than-post' ),
			'filter_items_list'     => __( 'Filter events list', 'more-than-post' ),
		];
		$rewrite = [
			'slug'       => 'eventos',
			'with_front' => true,
			'pages'      => true,
			'feeds'      => true,
		];
		$args    = [
			'label'               => __( 'Event', 'more-than-post' ),
			'description'         => __( 'Races, marathons and stuf...', 'more-than-post' ),
			'labels'              => $labels,
			'supports'            => [ 'title', 'thumbnail', 'page-attributes', ],
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => false,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'             => $rewrite,
			'capability_type'     => 'page',
		];
		register_post_type( 'event', $args );

	}

}