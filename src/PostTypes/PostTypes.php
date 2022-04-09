<?php
/**
 * Content PostTypes
 *
 * @since   1.0.0
 * @package SiteFunctionality
 */
namespace SiteFunctionality\PostTypes;

use SiteFunctionality\Abstracts\Base;
use SiteFunctionality\PostTypes\Issue;
use SiteFunctionality\PostTypes\Mention;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PostTypes extends Base {

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct( $version, $plugin_name ) {
		parent::__construct( $version, $plugin_name );
		$this->init();
	}

	/**
	 * Init
	 *
	 * @return void
	 */
	public function init() {
		// include_once SITE_CORE_DIR . '/src/PostTypes/Issue.php';
		new Issue( $this->version, $this->plugin_name );
		new Mention( $this->version, $this->plugin_name );
	}

}
