<?php
/**
 * WP ULike Deactivator
 *
 * @package    wp-ulike
 * @author     TechnoWich 2026
 * @link       https://wpulike.com
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class wp_ulike_deactivator {

	public static function deactivate() {
		foreach ( wp_ulike_get_scheduled_hooks() as $hook ) {
			wp_clear_scheduled_hook( $hook );
		}
	}

}