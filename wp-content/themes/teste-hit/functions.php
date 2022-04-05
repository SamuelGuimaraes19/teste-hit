<?php
//REGISTRANDO POST TYPE
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Introdução',
		'menu_title'	=> 'Introdução',
		'capability'	=> 'edit_posts',
		'icon_url' => 'dashicons-format-aside',
		'position' => '5',
		'redirect'		=> false
	));
	
}