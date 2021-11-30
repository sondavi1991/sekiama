<?php

function sekiama_setup() {
    //Adding functionality to the theme
    add_theme_support('post-thumbnails');
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
    add_theme_support( 'title-tag' );
    add_image_size('size_shop', 360, 260, true);


    //Menus
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'sekiama' ),
        )
    );
}