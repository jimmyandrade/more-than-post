<?php

namespace More_Than_Post;

class Plugin {

	public function __construct() {
		add_action( 'after_setup_theme', [ __CLASS__, 'after_setup_theme' ], 1 );
	}

	public static function after_setup_theme() {
		$features = [
			'event'       => 'Event',
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