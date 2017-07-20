<?php
/**
 * Term Primary ID
 *
 * @package     NickDavis\Helpers\Term
 * @since       1.0.0
 * @author      Nick Davis
 * @link        https://iamnickdavis.com
 * @license     GNU General Public License 2.0+
 */

namespace NickDavis\Helpers\Term;

/**
 * Returns the 'primary' term ID for a post.
 *
 * First, tries to get the Yoast Primary taxonomy term ID, if set / available.
 *
 * Otherwise returns the first term ID associated with the post for the
 * specified taxonomy.
 *
 * @since 1.0.0
 *
 * @param $taxonomy_slug
 *
 * @return int|null|void
 */
function get_primary_term_id( $taxonomy_slug ) {
	$primary_term_id = get_yoast_primary_term_id( $taxonomy_slug );

	if ( $primary_term_id ) {
		return $primary_term_id;
	}

	$first_term_id = get_first_term_id( $taxonomy_slug );

	if ( ! $first_term_id ) {
		return;
	}

	return $first_term_id;
}

/**
 * Returns the Yoast Primary category ID for a post, if set.
 *
 * @since 1.0.0
 *
 * @param $taxonomy_slug
 *
 * @return int|null
 */
function get_yoast_primary_term_id( $taxonomy_slug ) {
	return get_post_meta( get_the_ID(), '_yoast_wpseo_primary_' . $taxonomy_slug, true ) ?: null;
}

/**
 * Returns the first specified taxonomy term for the post, if set.
 *
 * @since 1.0.0
 *
 * @param $taxonomy_slug
 *
 * @return object|null
 */
function get_first_term( $taxonomy_slug ) {
	$terms = get_the_terms( get_the_ID(), $taxonomy_slug );

	if ( ! $terms ) {
		return;
	}

	return $terms[0];
}

/**
 * Returns the first specified taxonomy term ID for the post, if set.
 *
 * @since 1.0.0
 *
 * @param $taxonomy_slug
 *
 * @return int|null
 */
function get_first_term_id( $taxonomy_slug ) {
	$term = get_first_term( $taxonomy_slug );

	if ( ! $term ) {
		return;
	}

	return $term->term_id;
}
