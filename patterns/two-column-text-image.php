<?php
/**
 * Title: Two Column Text and Image
 * Slug: cb-listing-starter/two-column-text-image
 * Categories: cb-listing-starter, featured
 * Keywords: columns, text, image, media, about
 * Description: A two-column layout with text on one side and image placeholder on the other.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center">

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">

            <!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
            <h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'About Us', 'Section heading', 'cb-listing-starter' ); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"foreground-light"} -->
            <p class="has-foreground-light-color has-text-color"><?php echo esc_html_x( 'We believe in creating simple, elegant solutions that empower people to build beautiful websites. Our theme is designed with developers and content creators in mind.', 'About description', 'cb-listing-starter' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"foreground-light"} -->
            <p class="has-foreground-light-color has-text-color"><?php echo esc_html_x( 'With Full Site Editing support, you have complete control over every aspect of your site design — no coding required.', 'About description', 'cb-listing-starter' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
                <!-- wp:button {"style":{"border":{"radius":"var:custom|border|radius"}}} -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:var(--wp--custom--border--radius)"><?php echo esc_html_x( 'Learn More', 'Button text', 'cb-listing-starter' ); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">

            <!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"var:custom|border|radius"}}} -->
            <figure class="wp-block-image size-large" style="border-radius:var(--wp--custom--border--radius)"><img src="" alt="<?php echo esc_attr_x( 'About section image placeholder', 'Image alt text', 'cb-listing-starter' ); ?>"/></figure>
            <!-- /wp:image -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->
