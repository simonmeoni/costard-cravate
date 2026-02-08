<?php
/**
 * Title: Contact page (dark).
 * Slug: frost/page-contact-dark
 * Categories: frost-page
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"70px","bottom":"var:preset|spacing|x-large","right":"30px","left":"30px"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:70px;padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","style":{"typography":{"letterSpacing":"-1px"}},"className":"wp-block-heading","fontSize":"max-60"} -->
		<h2 class="wp-block-heading has-text-align-center has-max-60-font-size" style="letter-spacing:-1px"><?php echo esc_html__( 'Get in Touch', 'frost' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
		<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--x-small)"><?php echo esc_html__( 'Have a project in mind? We would love to hear from you. Send us a message and we will get back to you as soon as possible.', 'frost' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"},"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
				<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Contact Info', 'frost' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.8"}}} -->
				<p style="line-height:1.8"><strong><?php echo esc_html__( 'Email', 'frost' ); ?></strong><br>hello@example.com</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.8"}}} -->
				<p style="line-height:1.8"><strong><?php echo esc_html__( 'Phone', 'frost' ); ?></strong><br>+33 1 23 45 67 89</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.8"}}} -->
				<p style="line-height:1.8"><strong><?php echo esc_html__( 'Address', 'frost' ); ?></strong><br>123 Rue de Paris<br>75001 Paris, France</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)">
				<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
				<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Business Hours', 'frost' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.8"}}} -->
				<p style="line-height:1.8"><?php echo esc_html__( 'Monday - Friday: 9:00 - 18:00', 'frost' ); ?><br><?php echo esc_html__( 'Saturday - Sunday: Closed', 'frost' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"fontSize":"small"} -->
			<h3 class="wp-block-heading has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--small);text-transform:uppercase"><?php echo esc_html__( 'Send a Message', 'frost' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:shortcode -->
			[contact-form-7 id="1" title="Contact form 1"]
			<!-- /wp:shortcode -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
