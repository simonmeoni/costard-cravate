<?php
/**
 * Title: Call-to-action for project inquiry (dark)
 * Slug: frost/cta-button-dark
 * Categories: call-to-action
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":"8px"}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide has-contrast-color has-base-background-color has-text-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
	<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"65%"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"level":3,"textColor":"contrast","fontSize":"large"} -->
		<h3 class="wp-block-heading has-contrast-color has-text-color has-large-font-size"><?php echo esc_html__( 'Ready to elevate your product packaging?', 'frost' ); ?></h3>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"contrast","fontSize":"small"} -->
		<p class="has-contrast-color has-text-color has-small-font-size"><?php echo esc_html__( 'Let\'s create packaging that makes your product stand out.', 'frost' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"contrast","textColor":"base","fontSize":"small"} -->
		<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background wp-element-button" href="/?page_id=12"><?php echo esc_html__( 'Start Your Project', 'frost' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
