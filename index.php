<?php
/**
 * Package of WordPress helper functions
 *
 * @package     NickDavis\Helpers
 * @since       1.0.0
 * @author      Nick Davis
 * @link        https://github.com/nickdavis/helpers
 * @license     GNU General Public License 2.0+
 */

namespace NickDavis\Helpers;

/**
 * Checks if package is already loaded and bails, if so.
 *
 * @since 1.0.0
 */
if ( defined( 'ND_HELPERS_LOADED' ) ) {
	return;
}

/**
 * Sets up the packages's constants.
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_constants() {
	$package_url = plugin_dir_url( __FILE__ );
	if ( is_ssl() ) {
		$package_url = str_replace( 'http://', 'https://', $package_url );
	}

	define( 'ND_HELPERS_LOADED', true );
	define( 'ND_HELPERS_VERSION', '1.0.0' );
	define( 'ND_HELPERS_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );
	define( 'ND_HELPERS_URL', $package_url );
	define( 'ND_HELPERS_FILE', __FILE__ );
}

/**
 * Kicks off the package by initializing the package files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_autoloader() {
	require_once( 'includes/autoload.php' );

	autoload();
}

/**
 * Launches the package.
 *
 * @since 1.0.0
 *
 * @return void
 */
function launch() {
	init_autoloader();
}

init_constants();
launch();
