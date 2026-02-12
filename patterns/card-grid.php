<?php
/**
 * Title: Card Grid
 * Slug: cb-listing-starter/card-grid
 * Categories: cb-listing-starter, cb-listing-starter-cards
 * Keywords: cards, grid, features, services
 * Description: A three-column grid of feature cards with icons.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">

    <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Features', 'Card grid heading', 'cb-listing-starter' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"foreground-light"} -->
    <p class="has-text-align-center has-foreground-light-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--50)"><?php echo esc_html_x( 'Everything you need to build modern WordPress sites.', 'Card grid description', 'cb-listing-starter' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns">

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"var:custom|border|radius","width":"1px"}},"borderColor":"border","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-border-color" style="border-width:1px;border-radius:var(--wp--custom--border--radius);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem"}}} -->
                <p style="font-size:2.5rem">⚡</p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":3,"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size"><?php echo esc_html_x( 'Lightning Fast', 'Feature title', 'cb-listing-starter' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"textColor":"foreground-light","fontSize":"small"} -->
                <p class="has-foreground-light-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Built with performance in mind. No unnecessary bloat, just clean and efficient code.', 'Feature description', 'cb-listing-starter' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"var:custom|border|radius","width":"1px"}},"borderColor":"border","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-border-color" style="border-width:1px;border-radius:var(--wp--custom--border--radius);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem"}}} -->
                <p style="font-size:2.5rem">🎨</p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":3,"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size"><?php echo esc_html_x( 'Fully Customizable', 'Feature title', 'cb-listing-starter' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"textColor":"foreground-light","fontSize":"small"} -->
                <p class="has-foreground-light-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Customize every aspect through the Site Editor. Colors, typography, spacing and more.', 'Feature description', 'cb-listing-starter' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"var:custom|border|radius","width":"1px"}},"borderColor":"border","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-border-color" style="border-width:1px;border-radius:var(--wp--custom--border--radius);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem"}}} -->
                <p style="font-size:2.5rem">🔌</p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":3,"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size"><?php echo esc_html_x( 'Extensible', 'Feature title', 'cb-listing-starter' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"textColor":"foreground-light","fontSize":"small"} -->
                <p class="has-foreground-light-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Easily add custom post type templates, block patterns, and more through plugins or child themes.', 'Feature description', 'cb-listing-starter' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->
