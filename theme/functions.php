<?php

// creo menu
if (function_exists('register_nav_menus')) {
    // este numbre debe ir en wp_nav_menus en theme_location
    register_nav_menus(array('superior' => 'Menú Principal Superior'));
}

// creo una clase para los <a>
add_filter( 'nav_menu_link_attributes', 'mainMenu', 10, 3);

function mainMenu($atts, $item, $args) {
    $class = 'nav-link';
    $atts['class'] = $class;
    return $atts;
}


// thumbnails
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    // set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)
}


// soporte sidebars en el area de widgets
add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s" my-3>',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}

?>
