<?php
/**
 * Title: Left image, right text
 * Slug: papanek/columns-img-text
 * Categories: columns
 */
?>
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"width":"16px"}},"borderColor":"primary-second"} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/charlesdeluvio-Lks7vei-eAg-unsplash.jpg" alt="" class="has-border-color has-primary-second-border-color" style="border-width:16px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size">Some header here</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Papanek is a stunning WordPress theme featuring a clean and minimalist design.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->