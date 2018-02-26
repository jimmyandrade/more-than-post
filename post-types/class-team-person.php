<?php

namespace More_Than_Post\Post_Types;

class Team_Person {

	const POST_TYPE = 'team_person';

	public static function init() {

		$labels = array(
			'name'                  => _x( 'Team People', 'Post Type General Name', 'more-than-post' ),
			'singular_name'         => _x( 'Team Person', 'Post Type Singular Name', 'more-than-post' ),
			'menu_name'             => __( 'Team People', 'more-than-post' ),
			'name_admin_bar'        => __( 'Team Person', 'more-than-post' ),
			'archives'              => __( 'Team Person Archives', 'more-than-post' ),
			'attributes'            => __( 'Team Person Attributes', 'more-than-post' ),
			'parent_item_colon'     => __( 'Parent Team Person:', 'more-than-post' ),
			'all_items'             => __( 'All Team People', 'more-than-post' ),
			'add_new_item'          => __( 'Add New Person', 'more-than-post' ),
			'add_new'               => __( 'Add New Person', 'more-than-post' ),
			'new_item'              => __( 'New Team Person', 'more-than-post' ),
			'edit_item'             => __( 'Edit Team Person', 'more-than-post' ),
			'update_item'           => __( 'Update Team Person', 'more-than-post' ),
			'view_item'             => __( 'View Team Person', 'more-than-post' ),
			'view_items'            => __( 'View Team People', 'more-than-post' ),
			'search_items'          => __( 'Search Team Person', 'more-than-post' ),
			'not_found'             => __( 'Person not found', 'more-than-post' ),
			'not_found_in_trash'    => __( 'No people found in Trash', 'more-than-post' ),
			'featured_image'        => __( 'Person\'s Photo', 'more-than-post' ),
			'set_featured_image'    => __( 'Set person\'s photo', 'more-than-post' ),
			'remove_featured_image' => __( 'Remove person\'s photo', 'more-than-post' ),
			'use_featured_image'    => __( 'Use as person\'s photo', 'more-than-post' ),
			'insert_into_item'      => __( 'Insert into team person', 'more-than-post' ),
			'uploaded_to_this_item' => __( 'Uploaded to this person', 'more-than-post' ),
			'items_list'            => __( 'Team people list', 'more-than-post' ),
			'items_list_navigation' => __( 'People list navigation', 'more-than-post' ),
			'filter_items_list'     => __( 'Filter people list', 'more-than-post' ),
		);
		$args   = array(
			'label'               => __( 'Team Person', 'more-than-post' ),
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
			'rewrite'             => [
				'slug'       => 'equipe',
				'with_front' => false,
				'feeds'      => false,
				'pages'      => false,
			],
		);
		register_post_type( Team_Person::POST_TYPE, $args );

	}

}
