<?php 

function load_css() {

    wp_register_style('bootstrap',  get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' ); 
    /*  Namn kan vara vad som, 
        get_temp..är en Bootstrapfunktion .  + Sökvägen., 
        array() är dependensies. Saker som css är beroende av.
        versionen = false, eftersom vi inte har en version.
        @media screen m.m = för att ha alla = all
    */
    wp_enqueue_style('bootstrap'); // namnet som vi gav
}

// hook function to header
add_action('wp_enqueue_scripts', 'load_css');


function load_js() {
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true );
    // sista argumentet är in footer (false= header)

    wp_enqueue_script('bootstrap'); // namnet som vi gav
}
// hook function to header
add_action('wp_enqueue_scripts', 'load_js'); // load.js är namnet på funktionen.
