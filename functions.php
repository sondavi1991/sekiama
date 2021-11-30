<?php

//Includes
require_once get_template_directory() . '/config/adding-features.php';
require_once get_template_directory() . '/config/widget.php';
require_once get_template_directory() . '/config/scripts.php';
require_once get_template_directory() . '/config/acf.php';



//Optimize
remove_action('wp_head','wp_generator');

//Actions
add_action( 'after_setup_theme', 'sekiama_setup' );
add_action('wp_enqueue_scripts', 'sekiamaScripts'); //Carregar Scripts no Site - Upload Scripts to the Site