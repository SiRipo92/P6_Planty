<?php 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/planty.css', array(), filemtime(get_stylesheet_directory() . '/css/planty.css'));
}

function add_admin_link_to_menu ($items, $args) {
    // vérifie si l'utilisateur est connecté et a les droits d'administrateur
    if (is_user_logged_in() && current_user_can('manage_options') && $args->theme_location == 'primary') {
        // Ajoute un lien pourque l'admin puisse accéder au tableau de bord
        $items .= '<li id="menu-item-hook" class="nav-menu-item1 menu-item menu-item-type-post_type menu-item-object-page menu-item-47">
        <a title="Page pour admin" href="' . admin_url() . '" class="menu-link">Admin</a></li>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2 );