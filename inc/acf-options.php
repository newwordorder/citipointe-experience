<?php
if( function_exists('acf_add_options_page') ) {

	
	
		$parent = acf_add_options_page(array(
			'page_title' => 'Theme General Settings',
			'menu_title' => 'Theme Settings',
			'redirect'   => 'Theme Settings',
		));

		acf_add_options_sub_page( array(
			'page_title' 	=> 'Pre-footer call to action',
			'menu_title'	=> __('Pre-footer CTA', 'textdomain'),
			'menu_slug'  => "prefooter-cta",
			'post_id'    => "prefooter-cta",
			'parent'     => $parent['menu_slug']
		) );

		acf_add_options_sub_page( array(
			'page_title' 	=> 'Cookie notification',
			'menu_title'	=> __('Cookie notification', 'textdomain'),
			'menu_slug'  => "cookie",
			'post_id'    => "cookie",
			'parent'     => $parent['menu_slug']
		) );

	
}