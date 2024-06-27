<?php
function mota2_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mota2_scripts');

//images mises en avant
add_theme_support('post-thumbnails');


function mota2_register_assets()
{

    // Déclarer jQuery
    wp_enqueue_script('jquery');

    // Déclarer le JS
    wp_enqueue_script(
        'mota2',
        get_template_directory_uri() . '/js/script.js',
        array('jquery'),
        '1.0',
        true
    );

    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style(
        'mota2',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    // Déclarer le fichier CSS à un autre emplacement
    wp_enqueue_style(
        'mota2',
        get_template_directory_uri() . '/css/main.css',
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'mota2_register_assets');
