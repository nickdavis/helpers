<?php
/**
 * Autoload
 *
 * @package     NickDavis\Helpers
 * @since       1.0.0
 * @author      Nick Davis
 * @link        https://iamnickdavis.com
 * @license     GNU General Public License 2.0+
 */

namespace NickDavis\Helpers;

/**
 * Autoload package files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function autoload() {
	$files = array(
		'category/category-primary-id.php',

		'term/term-primary-id.php',
	);

	foreach ($files as $file ) {
		include __DIR__ . '/' . $file;
	}
}
