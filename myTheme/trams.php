<?php wp_head();?>

<?php 

function load_css() {

    wp_register_stylesheet('styles.css', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
    wp_enqeueu_style('style.css');

}

add_action(wp_enqeueu_script('load_css'));




?>