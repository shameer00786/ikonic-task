<?php
function custom_theme_setup() {
    // Add theme support features here if needed
}
add_action('after_setup_theme', 'custom_theme_setup');

function custom_theme_assets() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'custom_theme_assets');
?>

<?php
function register_my_menu() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' ),
        )
    );
}
add_action( 'init', 'register_my_menu' );

?>
