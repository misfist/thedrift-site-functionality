<?php
/**
 * Content Taxonomies
 *
 * @since   1.0.0
 * @package SiteFunctionality
 */
namespace SiteFunctionality\Taxonomies;

use SiteFunctionality\Abstracts\Taxonomy;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Author extends Taxonomy {

	/**
	 * Taxonomy data
	 */
	public const  TAXONOMY = array(
		'id'           => 'authors',
		'title'        => 'Authors',
		'singular'     => 'Author',
		'menu'         => 'Authors',
		'archive'      => 'article_author',
		'with_front'   => true,
		'rest'         => 'authors',
		'hierarchical' => true,
		'post_types'   => array(
			'post',
		),
	);

	/**
	 * Post Type fields
	 */
	public const FIELDS = array();

	// /**
	// * Init
	// *
	// * @return void
	// */
	// public function init() {}

	/**
	 * Register custom query vars
	 *
	 * @link https://developer.wordpress.org/reference/hooks/query_vars/
	 *
	 * @param array $vars The array of available query variables
	 */
	public function registerQueryVars( $vars ) : array {
		return $vars;
	}

}
