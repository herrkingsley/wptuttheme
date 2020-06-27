<?php 
// load stylesheets
function load_css() {

    wp_register_style('bootstrap',  get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' ); 
    /*  Namn kan vara vad som, 
        get_temp..är en Bootstrapfunktion .  + Sökvägen., 
        array() är dependensies. Saker som css är beroende av.
        versionen = false, eftersom vi inte har en version.
        @media screen m.m = för att ha alla = all
    */
    wp_enqueue_style('bootstrap'); // namnet som vi gav

    wp_register_style('maincss',  get_template_directory_uri() . '/css/main.css', array(), false, 'all' ); 
    wp_enqueue_style('maincss'); 
    wp_register_style('sass',  get_template_directory_uri() . '/dist/app.css', array(), 1, 'all' ); 
    wp_enqueue_style('sass'); 
}

// hook function to header
add_action('wp_enqueue_scripts', 'load_css');

// load stylesheets
function load_js() {
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true );
    // sista argumentet är in footer (false= header)

    wp_enqueue_script('bootstrap'); // namnet som vi gav
}
// hook function to header
add_action('wp_enqueue_scripts', 'load_js'); // load.js är namnet på funktionen.








// -------------- load theme options
add_theme_support('menus');


// --------------  menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
    )
);

// ------------------- Mods
/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


