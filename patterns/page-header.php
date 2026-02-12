<?php
/**
 * Title: Page Header
 * Slug: cb-listing-starter/page-header
 * Categories: cb-listing-starter, featured
 * Keywords: header, page header, title, banner
 * Description: A page header with title and optional description on a colored background.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"650px"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">

    <!-- wp:heading {"textAlign":"center","level":1} -->
    <h1 class="wp-block-heading has-text-align-center"><?php echo esc_html_x( 'Page Title', 'Page header title', 'cb-listing-starter' ); ?></h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"foreground-light"} -->
    <p class="has-text-align-center has-foreground-light-color has-text-color" style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'A brief description or tagline for this page goes here.', 'Page header description', 'cb-listing-starter' ); ?></p>
    <!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
