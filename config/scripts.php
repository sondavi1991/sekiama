<?php
//Loading scripts

function sekiamaScripts() {

    //CSS
    wp_enqueue_style('reset', get_template_directory_uri().'/dist/css/reset.css', array(), '1.0', 'all');
    wp_enqueue_style('template', get_template_directory_uri().'/dist/css/style.css', array(), '1.0', 'all');
    wp_enqueue_style('flexslider', get_template_directory_uri().'/dist/css/flexslider.css', array(), '1.0', 'all');

    //JS
    wp_enqueue_script('flexsliderjs', get_template_directory_uri(). '/dist/js/jquery.flexslider-min.js', array('jquery'), null, true);
    
}

