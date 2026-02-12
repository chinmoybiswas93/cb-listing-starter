<?php
/**
 * Title: Hero Banner
 * Slug: cb-listing-starter/hero-banner
 * Categories: cb-listing-starter, cb-listing-starter-hero, featured
 * Keywords: hero, banner, header, intro
 * Description: A full-width hero section with heading, description, and call-to-action buttons.
 */
?>

<!-- wp:cover {"overlayColor":"primary","isUserOverlayColor":true,"minHeight":500,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50);min-height:500px">
    <span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span>
    <div class="wp-block-cover__inner-container">

        <!-- wp:group {"layout":{"type":"constrained","contentSize":"700px"}} -->
        <div class="wp-block-group">

            <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontWeight":"800"}},"textColor":"background","fontSize":"xxx-large"} -->
            <h1 class="wp-block-heading has-text-align-center has-background-color has-text-color has-xxx-large-font-size" style="font-weight:800"><?php echo esc_html_x( 'Build Something Amazing', 'Hero heading', 'cb-listing-starter' ); ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|50"}},"typography":{"fontSize":"var:preset|font-size|large"}},"textColor":"background"} -->
            <p class="has-text-align-center has-background-color has-text-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--50);font-size:var(--wp--preset--font-size--large)"><?php echo esc_html_x( 'A clean, modern WordPress block theme designed for performance and extensibility. Start building your next project with confidence.', 'Hero description', 'cb-listing-starter' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"background","textColor":"primary","style":{"border":{"radius":"var:custom|border|radius"},"typography":{"fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background wp-element-button" style="border-radius:var(--wp--custom--border--radius);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50);font-weight:600"><?php echo esc_html_x( 'Get Started', 'Hero button', 'cb-listing-starter' ); ?></a></div>
                <!-- /wp:button -->
                <!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"var:custom|border|radius"},"typography":{"fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color has-link-color wp-element-button" style="border-radius:var(--wp--custom--border--radius);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50);font-weight:600"><?php echo esc_html_x( 'Learn More', 'Hero button', 'cb-listing-starter' ); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

        </div>
        <!-- /wp:group -->

    </div>
</div>
<!-- /wp:cover -->
