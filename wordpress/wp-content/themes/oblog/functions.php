<?php
if (!function_exists('oBlog_setup')) :
   
    function oBlog_setup() {

        add_theme_support('title-tag');
        // Ici je créer un menu (je le rends existant, et je vais m'en servir juste apres)
        register_nav_menus([
            'header' => 'Menu de liens dans le header',
            'footer' => 'Menu de liens dans le footer'
        ]);
    }
endif;
// Le hook after_setup_theme se declenche quand le theme a finit de se charger
add_action('after_setup_theme', 'oBlog_setup');
if (!function_exists('oBlog_script')) :
    function oBlog_script()
    {
        wp_enqueue_style('oBlog-style', get_template_directory_uri().'/assets/css/style.css', '1.1');
        }
     add_action('wp_enqueue_scripts', 'oBlog_script');
    endif;

?>