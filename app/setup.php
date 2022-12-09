<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {

    bundle('app')->enqueue();
    // 
    // wp_dequeue_style('newsletters-bootstrap-css');

    // ACTIONS AJAX 
    wp_enqueue_script('ajax-actions', get_stylesheet_directory_uri().'/resources/scripts/ajax.js', array('jquery'), '1.2');
    if (!is_admin()) {
        wp_localize_script('ajax-actions', 'ajax', array(
            'url' =>            admin_url('admin-ajax.php'),
            'ajax_nonce' =>     wp_create_nonce('noncy_nonce'),
            'assets_url' =>     get_stylesheet_directory_uri(),
        ));
    }

}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    bundle('editor')->enqueue();
}, 100);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    load_theme_textdomain('sage', get_template_directory().'/resources/lang');
    /**
     * Enable features from the Soil plugin if activated.
     *
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'nav-walker',
        'nice-search',
        'relative-urls',
    ]);

    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     *
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'tas'),
    ]);

    /**
     * Disable the default block patterns.
     *
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');
    
    /**
     * Enable responsive embed support.
     *
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     *
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

     // Agregar imagenes de tamaño personalizado
     add_image_size('square', 350, 350, true);
     add_image_size('portrait', 350, 724, true);
     add_image_size('cajas', 500, 375, false);
     add_image_size('recursos', 500, 450, array( 'right', 'top' ));
     add_image_size('mediano', 700, 400, true);
     add_image_size('blog', 966, 644, true);
     /*

    // Agregar imagenes de tamaño personalizado
    add_image_size('square', 350, 350, true);
    // add_image_size('front', 952, 535, true);
    // add_image_size('destacado', 1280, 720, true);
    add_image_size('destacado', 1280, 720, false);
    // add_image_size('portrait', 350, 724, true); 
    // add_image_size('destacado_single', 260, 260, true);
    // add_image_size('mediano', 700, 400, true);
    // add_image_size('blog', 966, 644, true);
    add_image_size('thumbnail-relatedpost', 279, 157, false);
    add_image_size('card-etrada-post', 470, 264, false);
    add_image_size('img_miniatura', 184.53, 103.8, true);
     */

}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ];

    register_sidebar([
        'name' => __('Primary', 'tas'),
        'id' => 'sidebar-primary',
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'tas'),
        'id' => 'sidebar-footer',
    ] + $config);
});
