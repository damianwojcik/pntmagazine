<?php 

	define("THEME_URL", get_stylesheet_directory_uri());
	define("SITE_URL", site_url());

	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'Ustawienia strony głównej',
			'menu_title'	=> 'Ustawienia strony głównej',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
		
	}