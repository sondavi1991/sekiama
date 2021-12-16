<?php
//Loading scripts

function sekiamaScripts() {

  //CSS
  wp_enqueue_style('reset', get_template_directory_uri().'/dist/css/reset.css', array(), '1.0', 'all');
  wp_enqueue_style('glidercss', get_template_directory_uri().'/dist/css/glide.core.css', array(), '1.0', 'all');
  wp_enqueue_style('template', get_template_directory_uri().'/dist/css/style.css', array(), '1.0', 'all');

  //JS
  wp_enqueue_script('generaljs', get_template_directory_uri(). '/dist/js/general.js', array(), null, true);
  wp_enqueue_script('gliderjs', 'https://cdn.jsdelivr.net/npm/@glidejs/glide', array(), null, true);
  wp_enqueue_script('slider', get_template_directory_uri(). '/dist/js/slider.js', array(), null, true);
    
}