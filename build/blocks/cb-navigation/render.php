<?php
/**
 * CB Navigation block — server-side render.
 *
 * @package CB_Listing_Starter
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block inner content (empty for dynamic blocks).
 * @var WP_Block $block      Block instance.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$menu_id     = ! empty( $attributes['menuId'] ) ? intval( $attributes['menuId'] ) : 0;
$orientation = ! empty( $attributes['orientation'] ) ? $attributes['orientation'] : 'horizontal';
$item_spacing = ! empty( $attributes['itemSpacing'] ) ? $attributes['itemSpacing'] : '20px';

if ( ! $menu_id ) {
	if ( is_admin() || ( defined( 'REST_REQUEST' ) && REST_REQUEST ) ) {
		echo '<p>' . esc_html__( 'Please select a menu in the block settings.', 'cb-listing-starter' ) . '</p>';
	}
	return;
}

// Build inline styles for the list (flex container) — gap goes here, not on the nav wrapper.
$list_style = sprintf( 'gap: %s;', esc_attr( $item_spacing ) );

// Determine if this is a classic menu (positive ID) or block navigation (negative ID).
$is_block_nav = $menu_id < 0;
$actual_id     = abs( $menu_id );

$wrapper_attributes = get_block_wrapper_attributes( array(
	'class' => 'cb-navigation cb-navigation--' . esc_attr( $orientation ),
) );

if ( $is_block_nav ) {
	// Render a wp_navigation (block-based menu).
	$nav_post = get_post( $actual_id );

	if ( ! $nav_post || 'wp_navigation' !== $nav_post->post_type ) {
		return;
	}

	$nav_content = do_blocks( $nav_post->post_content );

	printf(
		'<nav %1$s aria-label="%2$s"><ul class="cb-navigation__list" style="%4$s">%3$s</ul></nav>',
		$wrapper_attributes,
		esc_attr( $nav_post->post_title ?? __( 'Navigation', 'cb-listing-starter' ) ),
		cb_listing_starter_parse_nav_blocks( $nav_content ),
		esc_attr( $list_style )
	);
} else {
	// Render a classic WordPress menu via wp_nav_menu().
	$menu_html = wp_nav_menu( array(
		'menu'            => $actual_id,
		'container'       => false,
		'items_wrap'      => '%3$s',
		'echo'            => false,
		'fallback_cb'     => false,
		'depth'           => 1,
	) );

	if ( ! $menu_html ) {
		return;
	}

	printf(
		'<nav %1$s aria-label="%2$s"><ul class="cb-navigation__list" style="%4$s">%3$s</ul></nav>',
		$wrapper_attributes,
		esc_attr( wp_get_nav_menu_object( $actual_id )->name ?? __( 'Navigation', 'cb-listing-starter' ) ),
		$menu_html,
		esc_attr( $list_style )
	);
}

/**
 * Parse rendered block navigation content into <li> items.
 *
 * Block-based navigation menus render links directly; wrap them in <li> tags
 * for consistent list-based styling.
 *
 * @param string $content Rendered navigation block content.
 * @return string List items HTML.
 */
function cb_listing_starter_parse_nav_blocks( $content ) {
	if ( ! $content ) {
		return '';
	}

	// Block-based nav outputs <a> tags — wrap each in <li>.
	$content = preg_replace(
		'/(<a\s[^>]*>.*?<\/a>)/is',
		'<li class="cb-navigation__item">$1</li>',
		$content
	);

	// Strip any leftover wrapper divs/spans from block rendering.
	$content = preg_replace( '/<\/?(?:div|span)[^>]*>/i', '', $content );

	return $content;
}
