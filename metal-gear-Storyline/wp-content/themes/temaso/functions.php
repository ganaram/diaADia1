<?php
    require_once 'class-wp-boostrap-navwalker.php';

    function ada_setup(){

        add_theme_support('post-formats','gallery','link','image','quote','video');

        add_theme_support('automatic-feed-links');
        
        add_theme_support('post-thumbnails');

        register_nav_menus(
            ['main-menu' => __( 'Menú principal','ada'),
            'footer-menu' => __('Menú secundario','ada')
            ]
        );
    };
    add_action('after_setup_theme','ada_setup');