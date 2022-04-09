<?php
/**
 * Content PostTypes
 *
 * @since   1.0.0
 * @package SiteFunctionality
 */
namespace SiteFunctionality\PostTypes;

use SiteFunctionality\Abstracts\PostType;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Mention extends PostType {

	/**
	 * PostType data
	 */
	public const POST_TYPE = array(
		'id'          => 'mention',
		'menu'        => 'Mentions',
		'title'       => 'Mentions',
		'singular'    => 'Mention',
		'icon'        => 'dashicons-format-status',
		'taxonomies'  => array(),
		'has_archive' => 'mentions',
		'with_front'  => false,
		'archive'     => 'mentions',
		'rest_base'   => 'mentions',
	);

	/**
	 * Post Type fields
	 */
	public const FIELDS = array();

	// /**
	//  * Init
	//  *
	//  * @return void
	//  */
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
