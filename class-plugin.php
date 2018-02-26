<?php

namespace More_Than_Post;

class Plugin {

	/**
	 * Plugin constructor.
	 *
	 * Add custom post types only after create_initial_taxonomies().
	 * If we used 'init', we could not add built-in taxonomies (like category) to custom post types.
	 */
	public function __construct() {
		add_action( 'init', [ __CLASS__, 'init' ], 1 );
	}

	public static function init() {
		$features = [
			'event'       => 'Event',
			'link'        => 'Link',
			'partner'     => 'Partner',
			'service'     => 'Service',
			'team-person' => 'Team_Person',
		];
		foreach ( $features as $feature => $class ) {
			if ( current_theme_supports( $feature . '-post-type' ) ) {
				require_once plugin_dir_path( __FILE__ ) . '/post-types/class-' . $feature . '.php';
				call_user_func( [ __NAMESPACE__ . '\\Post_Types\\' . $class, 'init' ] );
			}
		}
	}

}