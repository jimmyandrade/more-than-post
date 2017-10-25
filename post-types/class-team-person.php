<?php

namespace More_Than_Post\Post_Types;

class Team_Person {

	const POST_TYPE = 'team_person';

	public static function init() {

		$labels = array(
			'name'                  => _x( 'Team People', 'Post Type General Name', 'winner-bh' ),
			'singular_name'         => _x( 'Team Person', 'Post Type Singular Name', 'winner-bh' ),
			'menu_name'             => __( 'Team People', 'winner-bh' ),
			'name_admin_bar'        => __( 'Team Person', 'winner-bh' ),
			'archives'              => __( 'Team Person Archives', 'winner-bh' ),
			'attributes'            => __( 'Team Person Attributes', 'winner-bh' ),
			'parent_item_colon'     => __( 'Parent Team Person:', 'winner-bh' ),
			'all_items'             => __( 'All Team People', 'winner-bh' ),
			'add_new_item'          => __( 'Add New Person', 'winner-bh' ),
			'add_new'               => __( 'Add New Person', 'winner-bh' ),
			'new_item'              => __( 'New Team Person', 'winner-bh' ),
			'edit_item'             => __( 'Edit Team Person', 'winner-bh' ),
			'update_item'           => __( 'Update Team Person', 'winner-bh' ),
			'view_item'             => __( 'View Team Person', 'winner-bh' ),
			'view_items'            => __( 'View Team People', 'winner-bh' ),
			'search_items'          => __( 'Search Team Person', 'winner-bh' ),
			'not_found'             => __( 'Person not found', 'winner-bh' ),
			'not_found_in_trash'    => __( 'No people found in Trash', 'winner-bh' ),
			'featured_image'        => __( 'Person\'s Photo', 'winner-bh' ),
			'set_featured_image'    => __( 'Set person\'s photo', 'winner-bh' ),
			'remove_featured_image' => __( 'Remove person\'s photo', 'winner-bh' ),
			'use_featured_image'    => __( 'Use as person\'s photo', 'winner-bh' ),
			'insert_into_item'      => __( 'Insert into team person', 'winner-bh' ),
			'uploaded_to_this_item' => __( 'Uploaded to this person', 'winner-bh' ),
			'items_list'            => __( 'Team people list', 'winner-bh' ),
			'items_list_navigation' => __( 'People list navigation', 'winner-bh' ),
			'filter_items_list'     => __( 'Filter people list', 'winner-bh' ),
		);
		$args   = array(
			'label'               => __( 'Team Person', 'winner-bh' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'excerpt', 'thumbnail', 'page-attributes', 'editor' ),
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
		);
		register_post_type( Team_Person::POST_TYPE, $args );

	}

}
