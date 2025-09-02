<?php
/**
 * Second Home Stories Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function second_home_stories_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('responsive-embeds');
    
    // Add image sizes
    add_image_size('hero-image', 1200, 600, true);
    add_image_size('card-image', 400, 250, true);
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'second-home-stories'),
        'footer' => esc_html__('Footer Menu', 'second-home-stories'),
    ));
    
    // Add theme support for editor styles
    add_theme_support('editor-styles');
    add_editor_style('editor-style.css');
}
add_action('after_setup_theme', 'second_home_stories_setup');

/**
 * Enqueue scripts and styles
 */
function second_home_stories_scripts() {
    wp_enqueue_style('second-home-stories-style', get_stylesheet_uri(), array(), '1.0.0');
    
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'second_home_stories_scripts');

/**
 * Register widget areas
 */
function second_home_stories_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'second-home-stories'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'second-home-stories'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area', 'second-home-stories'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here.', 'second-home-stories'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'second_home_stories_widgets_init');

/**
 * Customizer additions
 */
function second_home_stories_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title'    => __('Hero Section', 'second-home-stories'),
        'priority' => 30,
    ));
    
    // Hero Title
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Welcome to Second Home Stories',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label'   => __('Hero Title', 'second-home-stories'),
        'section' => 'hero_section',
        'type'    => 'text',
    ));
    
    // Hero Subtitle
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Discover amazing stories and experiences from around the world',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Hero Subtitle', 'second-home-stories'),
        'section' => 'hero_section',
        'type'    => 'textarea',
    ));
    
    // Hero CTA Text
    $wp_customize->add_setting('hero_cta_text', array(
        'default'           => 'Get Started',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_cta_text', array(
        'label'   => __('Hero CTA Button Text', 'second-home-stories'),
        'section' => 'hero_section',
        'type'    => 'text',
    ));
    
    // Hero CTA Link
    $wp_customize->add_setting('hero_cta_link', array(
        'default'           => '#content',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('hero_cta_link', array(
        'label'   => __('Hero CTA Button Link', 'second-home-stories'),
        'section' => 'hero_section',
        'type'    => 'url',
    ));
    
    // Colors
    $wp_customize->add_setting('primary_color', array(
        'default'           => '#007bff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label'   => __('Primary Color', 'second-home-stories'),
        'section' => 'colors',
    )));
}
add_action('customize_register', 'second_home_stories_customize_register');

/**
 * Fallback menu function
 */
function second_home_stories_fallback_menu() {
    echo '<ul class="nav-menu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about')) . '">About</a></li>';
    echo '<li><a href="' . esc_url(home_url('/blog')) . '">Blog</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact')) . '">Contact</a></li>';
    echo '</ul>';
}

/**
 * Custom excerpt length
 */
function second_home_stories_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'second_home_stories_excerpt_length');

/**
 * Custom excerpt more
 */
function second_home_stories_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'second_home_stories_excerpt_more');

/**
 * Add custom body classes
 */
function second_home_stories_body_classes($classes) {
    if (is_singular()) {
        $classes[] = 'singular';
    }
    
    if (is_active_sidebar('sidebar-1')) {
        $classes[] = 'has-sidebar';
    }
    
    return $classes;
}
add_filter('body_class', 'second_home_stories_body_classes');

/**
 * Customize the main query
 */
function second_home_stories_pre_get_posts($query) {
    if (!is_admin() && $query->is_main_query()) {
        if (is_home()) {
            $query->set('posts_per_page', 9);
        }
    }
}
add_action('pre_get_posts', 'second_home_stories_pre_get_posts');