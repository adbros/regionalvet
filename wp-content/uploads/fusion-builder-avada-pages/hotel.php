<?php

		// Exit if accessed directly
		if ( ! defined( 'ABSPATH' ) ) {
			exit;
		}

		function fusion_builder_add_hotel_demo( $demos ) {

		$demos['hotel'] = array (
  'category' => 'Avada Hotel',
  'pages' => 
  array (
  ),
);

			return $demos;
		}
		add_filter( 'fusion_builder_get_demo_pages', 'fusion_builder_add_hotel_demo' );