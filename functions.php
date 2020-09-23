<?php 
if(function_exists(('register_nav_menus'))){
    register_nav_menus(array('principal' => 'Menú Principal Superior'));
}

//crear una clase para <a> asi me toma la clase de bootstrap
    add_filter( 'nav_menu_link_attributes', 'clase_menu', 10, 3 );

    function clase_menu($atts, $item, $args) {
        $class = 'nav-link';
        $atts['class'] = $class;
        return $atts;
    }

    
    //agregando imagenes destacadas
    

    if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
        add_image_size('noticias-thumbnail', 9999, 200); // imagenes de noticias cortadas (ancho, alto)
        // additional image sizes
        // delete the next line if you do not need additional image sizes
     }
     
     