<?php
/**
 * CB Listing Starter - Functions and definitions
 *
 * @package CB_Starter_Theme
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'CB_LISTING_STARTER_VERSION', '1.0.0' );
define( 'CB_LISTING_STARTER_DIR', get_template_directory() );
define( 'CB_LISTING_STARTER_URI', get_template_directory_uri() );

/**
 * Theme setup.
 */
function cb_listing_starter_setup() {
    // Add support for block styles.
    add_theme_support( 'wp-block-styles' );

    // Enqueue editor styles.
    add_editor_style( 'style.css' );

    // Add support for responsive embeds.
    add_theme_support( 'responsive-embeds' );

    // Add support for custom logo.
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 100,
            'width'       => 350,
            'flex-height' => true,
            'flex-width'  => true,
        )
    );

    // Add support for post thumbnails.
    add_theme_support( 'post-thumbnails' );

    // Add custom image sizes.
    add_image_size( 'cb-card-thumbnail', 600, 400, true );
    add_image_size( 'cb-hero-image', 1920, 800, true );
}
add_action( 'after_setup_theme', 'cb_listing_starter_setup' );

/**
 * Enqueue theme styles.
 */
function cb_listing_starter_enqueue_styles() {
    wp_enqueue_style(
        'cb-listing-starter-style',
        get_stylesheet_uri(),
        array(),
        CB_LISTING_STARTER_VERSION
    );

    // Enqueue custom theme styles.
    if ( file_exists( CB_LISTING_STARTER_DIR . '/assets/css/theme.css' ) ) {
        wp_enqueue_style(
            'cb-listing-starter-custom',
            CB_LISTING_STARTER_URI . '/assets/css/theme.css',
            array( 'cb-listing-starter-style' ),
            CB_LISTING_STARTER_VERSION
        );
    }
}
add_action( 'wp_enqueue_scripts', 'cb_listing_starter_enqueue_styles' );

/**
 * Register block patterns category.
 */
function cb_listing_starter_register_pattern_categories() {
    register_block_pattern_category(
        'cb-listing-starter',
        array(
            'label' => __( 'CB Listing Starter', 'cb-listing-starter' ),
        )
    );

    register_block_pattern_category(
        'cb-listing-starter-hero',
        array(
            'label' => __( 'Hero Sections', 'cb-listing-starter' ),
        )
    );

    register_block_pattern_category(
        'cb-listing-starter-cta',
        array(
            'label' => __( 'Call to Action', 'cb-listing-starter' ),
        )
    );

    register_block_pattern_category(
        'cb-listing-starter-cards',
        array(
            'label' => __( 'Cards & Grids', 'cb-listing-starter' ),
        )
    );
}
add_action( 'init', 'cb_listing_starter_register_pattern_categories' );

/**
 * Conditionally register listing CPT templates when the 'listing' post type exists.
 *
 * WordPress block theme template hierarchy automatically picks up:
 *   templates/single-listing.html  → single listing view
 *   templates/archive-listing.html → listing archive view
 *
 * This filter makes them visible in the Site Editor's template list and
 * registers a pattern category for listing-specific patterns.
 */
add_filter( 'wp_theme_json_data_theme', function ( $theme_json ) {
    if ( ! post_type_exists( 'listing' ) ) {
        return $theme_json;
    }

    $data = $theme_json->get_data();

    if ( ! isset( $data['customTemplates'] ) ) {
        $data['customTemplates'] = array();
    }

    $data['customTemplates'][] = array(
        'name'      => 'single-listing',
        'title'     => 'Single Listing',
        'postTypes' => array( 'listing' ),
    );

    $data['customTemplates'][] = array(
        'name'      => 'archive-listing',
        'title'     => 'Listing Archive',
        'postTypes' => array( 'listing' ),
    );

    return new WP_Theme_JSON_Data( $data );
});

/**
 * Register listing-related pattern category when the listing CPT exists.
 */
add_action( 'init', function () {
    if ( ! post_type_exists( 'listing' ) ) {
        return;
    }

    register_block_pattern_category(
        'cb-listing-starter-listings',
        array(
            'label' => __( 'Listings', 'cb-listing-starter' ),
        )
    );
}, 20 ); // Priority 20 so it runs after CPTs are registered at default priority 10.
