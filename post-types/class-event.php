<?php

namespace More_Than_Post\Post_Types;

class Event {

	public static function init() {

		$labels  = [
			'name'                  => _x( 'Events', 'Post Type General Name', 'winner-bh' ),
			'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'winner-bh' ),
			'menu_name'             => __( 'Events', 'winner-bh' ),
			'name_admin_bar'        => __( 'Event', 'winner-bh' ),
			'archives'              => __( 'Event Archives', 'winner-bh' ),
			'attributes'            => __( 'Event Attributes', 'winner-bh' ),
			'parent_item_colon'     => __( 'Parent Event:', 'winner-bh' ),
			'all_items'             => __( 'All Events', 'winner-bh' ),
			'add_new_item'          => __( 'Add New Event', 'winner-bh' ),
			'add_new'               => __( 'Add Event', 'winner-bh' ),
			'new_item'              => __( 'New Event', 'winner-bh' ),
			'edit_item'             => __( 'Edit Event', 'winner-bh' ),
			'update_item'           => __( 'Update Event', 'winner-bh' ),
			'view_item'             => __( 'View Event', 'winner-bh' ),
			'view_items'            => __( 'View Events', 'winner-bh' ),
			'search_items'          => __( 'Search Events', 'winner-bh' ),
			'not_found'             => __( 'Event not found', 'winner-bh' ),
			'not_found_in_trash'    => __( 'No event found in Trash', 'winner-bh' ),
			'featured_image'        => __( 'Event featured image', 'winner-bh' ),
			'set_featured_image'    => __( 'Set event featured image', 'winner-bh' ),
			'remove_featured_image' => __( 'Remove event featured image', 'winner-bh' ),
			'use_featured_image'    => __( 'Use as event featured image', 'winner-bh' ),
			'insert_into_item'      => __( 'Insert into event', 'winner-bh' ),
			'uploaded_to_this_item' => __( 'Uploaded to this event', 'winner-bh' ),
			'items_list'            => __( 'Events list', 'winner-bh' ),
			'items_list_navigation' => __( 'Events list navigation', 'winner-bh' ),
			'filter_items_list'     => __( 'Filter events list', 'winner-bh' ),
		];
		$rewrite = [
			'slug'       => 'eventos',
			'with_front' => true,
			'pages'      => true,
			'feeds'      => true,
		];
		$args    = [
			'label'               => __( 'Event', 'winner-bh' ),
			'description'         => __( 'Races, marathons and stuf...', 'winner-bh' ),
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