<?php

//Registering widgets

if(function_exists('register_sidebar')) {
    register_sidebar(
        array(
            'name'  =>  'Footer menu 1',
            'id'    =>  'footer_menu_1',
            'description'   =>  'Widget for the menu in the footer',
            'before_widget' =>  '<div class="menu_footer">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h3 class="title_menu_footer">',
            'after_title'   =>  '</h2>',
        )
    );
}