<?php 
    wp_register_style( 'tailwind', 'https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri(), array( 'tailwind' ) );