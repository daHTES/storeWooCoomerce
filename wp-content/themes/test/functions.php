<?php



function test_setup(){
    load_theme_textdomain('test', get_template_directory() . '/languages');
    add_theme_support('woocommerce');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnail');
    add_theme_support('wc-product-gallery-slider');

    register_nav_menus(
        array(
            'menu-1' => __('Top Left Menu', 'test'),
            'menu-2' => __('Categories Menu', 'test'),
            'menu-3' => __('Navbar menu', 'test'),
        )
    );

}

add_action('after_setup_theme', 'test_setup');

function test_scripts(){

    wp_enqueue_style(
        'test-google-fonts',
        'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap',
        array(),
        null
    );
    wp_enqueue_style('test-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');
    wp_enqueue_style('test-animate', get_template_directory_uri() . '/assets/lib/animate/animate.min.css');
    wp_enqueue_style('test-animate-carousel', get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css');
    wp_enqueue_style('test-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('test-custom', get_template_directory_uri() . '/assets/css/custom.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script(
        'test-bootstrap',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js',
        array(),
        false,
        true
    );
    wp_enqueue_script(
        'test-easing',
        get_template_directory_uri() . '/assets/lib/easing/easing.min.js',
        array(),
        false,
        true
    );
    wp_enqueue_script(
        'test-carousel',
        get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js',
        array(),
        false,
        true
    );
    wp_enqueue_script(
        'test-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        false,
        true
    );
}

add_action('wp_enqueue_scripts', 'test_scripts');
add_action('init', 'test_slider');
add_action('widgets_init', 'test_widgets_init');

require_once get_template_directory() . '/inc/cpt.php';
require_once get_template_directory() . '/inc/woocommerce-hooks.php';
require_once get_template_directory() . '/inc/class-test-menu-categories.php';
require_once get_template_directory() . '/inc/class-test-menu-navbar.php';

function test_debug($data) {

    echo '<pre> '. print_r($data, 1) . '</pre>';

}

function test_widgets_init(){

    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'test'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here', 'test'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
    )
    );
}