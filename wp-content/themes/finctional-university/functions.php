<?php

    function university_files() {
        wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
        wp_enqueue_style('google_font', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i', NULL, microtime());

        wp_enqueue_script('font_awesome', 'https://kit.fontawesome.com/de121b72f8.js', NULL, microtime(), true);
        wp_enqueue_script('script_1', get_theme_file_uri('/js/scripts.js'), NULL, microtime(), true);
        wp_enqueue_script('script_2', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
        
    }

    add_action('wp_enqueue_scripts', 'university_files');

