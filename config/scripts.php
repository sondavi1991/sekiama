<?php
//Loading scripts

function sekiamaScripts() {

    //CSS
    wp_enqueue_style('reset', get_template_directory_uri().'/dist/css/reset.css', array(), '1.0', 'all');
    wp_enqueue_style('template', get_template_directory_uri().'/dist/css/style.css', array(), '1.0', 'all');
    
}

