<?php
/**
 * Category Primary ID
 *
 * @package     ${NAMESPACE}
 * @since       1.0.0
 * @author      Nick Davis
 * @link        https://iamnickdavis.comi
 * @license     GNU General Public License 2.0+
 */

namespace NickDavis\Helpers\Category;

use function NickDavis\Helpers\Term\get_primary_term_id;

/**
 * Returns the Yoast SEO 'primary' taxonomy term ID for a post, if set.
 *
 * Alias for get_primary_term_id().
 *
 * @see get_primary_term_id()
 *
 * @since 1.0.0
 *
 * @return int|null|void
 */
function get_primary_category_id() {
	return get_primary_term_id( 'category' );
}
