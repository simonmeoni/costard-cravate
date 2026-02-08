<?php
/**
 * Title: Hero section with package design messaging
 * Slug: frost/hero-one-column
 * Categories: featured
 */
?>
<!-- wp:cover {"overlayColor":"neutral","minHeight":70,"minHeightUnit":"vh","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium);min-height:70vh">
	<span aria-hidden="true" class="wp-block-cover__background has-neutral-background-color has-background-dim-100 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained","wideSize":"720px"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"fontSize":"max-48"} -->
			<h1 class="wp-block-heading has-text-align-center has-max-48-font-size" style="margin-bottom:var(--wp--preset--spacing--small)"><?php echo esc_html__( 'Packaging That Tells Your Brand Story', 'frost' ); ?></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}},"fontSize":"medium"} -->
			<p class="has-text-align-center has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'We design sustainable, memorable packaging experiences that connect products with people', 'frost' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button" href="/?page_id=11"><?php echo esc_html__( 'View Our Work', 'frost' ); ?></a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline","fontSize":"small"} -->
				<div class="wp-block-button is-style-outline has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button" href="/?page_id=12"><?php echo esc_html__( 'Start a Project', 'frost' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
