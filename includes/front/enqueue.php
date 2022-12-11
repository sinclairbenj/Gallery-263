<?php

function g_enqueue() {
    wp_register_style(
        'g_gfonts',
        'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap',
        [],
        null
    );
    wp_register_style(
        'g_bootstrap_icons',
        get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css')
    );
    wp_register_style(
        'g_theme',
        get_theme_file_uri('assets/public/index.css')
    );

    wp_enqueue_style('g_gfonts');
    wp_enqueue_style('g_bootstrap_icons');
    wp_enqueue_style('g_theme');
}