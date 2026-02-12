<?php
/**
 * Title: Call to Action
 * Slug: cb-listing-starter/call-to-action
 * Categories: cb-listing-starter, cb-listing-starter-cta, call-to-action
 * Keywords: cta, call to action, banner
 * Description: A centered call-to-action section with heading, text, and button.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"650px"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">

    <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Ready to Get Started?', 'CTA heading', 'cb-listing-starter' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"foreground-light"} -->
    <p class="has-text-align-center has-foreground-light-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--40)"><?php echo esc_html_x( 'Join thousands of others who have already started building with our theme. It\'s free, fast, and fully customizable.', 'CTA description', 'cb-listing-starter' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
        <!-- wp:button {"style":{"border":{"radius":"var:custom|border|radius"}}} -->
        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:var(--wp--custom--border--radius)"><?php echo esc_html_x( 'Start Now →', 'CTA button', 'cb-listing-starter' ); ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

</div>
<!-- /wp:group -->
