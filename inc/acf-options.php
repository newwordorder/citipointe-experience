<?php
if( function_exists('acf_add_options_page') ) {

	
	
		$parent = acf_add_options_page(array(
			'page_title' => 'Theme General Settings',
			'menu_title' => 'Theme Settings',
			'redirect'   => 'Theme Settings',
		));

		$languages = array( 'en', 'fr', 'es' );
		foreach ( $languages as $lang ) {
		
			acf_add_options_sub_page( array(
				'page_title' 	=> 'Pre-footer call to action (' . strtoupper( $lang ) . ')',
				'menu_title'	=> __('Pre-footer CTA (' . strtoupper( $lang ) . ')', 'textdomain'),
				'menu_slug'  => "prefooter-cta-${lang}",
				'post_id'    => "prefooter-cta-${lang}",
				'parent'     => $parent['menu_slug']
			) );

			acf_add_options_sub_page( array(
				'page_title' 	=> 'Cookie notification (' . strtoupper( $lang ) . ')',
				'menu_title'	=> __('Cookie notification (' . strtoupper( $lang ) . ')', 'textdomain'),
				'menu_slug'  => "cookie-${lang}",
				'post_id'    => "cookie-${lang}",
				'parent'     => $parent['menu_slug']
			) );

		}
	
}