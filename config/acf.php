<?php

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
			'page_title' 	=> 'Configurações gerais do tema',
			'menu_title'	=> 'Configurações do Tema',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> true
		));
	}
}