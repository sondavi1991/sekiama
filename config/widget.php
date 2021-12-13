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

    register_sidebar(
        array(
            'name'  =>  'Footer menu 2',
            'id'    =>  'footer_menu_2',
            'description'   =>  'Widget for the menu in the footer',
            'before_widget' =>  '<div class="menu_footer">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h3 class="title_menu_footer">',
            'after_title'   =>  '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'  =>  'Footer menu 3',
            'id'    =>  'footer_menu_3',
            'description'   =>  'Widget for the menu in the footer',
            'before_widget' =>  '<div class="menu_footer">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h3 class="title_menu_footer">',
            'after_title'   =>  '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'  =>  'Footer menu 4',
            'id'    =>  'footer_menu_4',
            'description'   =>  'Widget for the menu in the footer',
            'before_widget' =>  '<div class="menu_footer">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h3 class="title_menu_footer">',
            'after_title'   =>  '</h2>',
        )
    );
}