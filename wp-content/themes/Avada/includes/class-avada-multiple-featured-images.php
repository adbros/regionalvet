<?php
/**
 * Handles multiple featured images.
 *
 * @author     ThemeFusion
 * @copyright  (c) Copyright by ThemeFusion
 * @link       http://theme-fusion.com
 * @package    Avada
 * @subpackage Core
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
 * Handles multiple featured images.
 */
class Avada_Multiple_Featured_Images {

	/**
	 * Constructor.
	 *
	 * @access  public
	 */
	public function __construct() {
		$this->include_files();
		if ( is_admin() ) {
			add_action( 'after_setup_theme', array( $this, 'generate' ) );
		}
	}

	/**
	 * Include the multiple-featured-images plugin.
	 *
	 * @access public
	 */
	public function include_files() {
		include_once Avada::$template_dir_path . '/includes/plugins/multiple-featured-images/multiple-featured-images.php';
	}

	/**
	 * Generates the multiple images.
	 *
	 * @access  public
	 */
	public function generate() {
		$post_types = array(
			'post',
			'page',
			'avada_portfolio',
		);

		if ( ! class_exists( 'kdMultipleFeaturedImages' ) ) {
			return;
		}

		$i = 2;

		while ( $i <= Avada()->settings->get( 'posts_slideshow_number' ) ) {

			foreach ( $post_types as $post_type ) {
				new kdMultipleFeaturedImages( array(
					'id'         => 'featured-image-' . $i,
					'post_type'  => $post_type,
					'labels'     => array(
						'name'   => sprintf( __( 'Featured image %s', 'Avada' ), $i ),
						'set'	 => sprintf( __( 'Set featured image %s', 'Avada' ), $i ),
						'remove' => sprintf( __( 'Remove featured image %s', 'Avada' ), $i ),
						'use'    => sprintf( __( 'Use as featured image %s', 'Avada' ), $i ),
					),
				) );
			}

			$i++;

		}

	}
}

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
