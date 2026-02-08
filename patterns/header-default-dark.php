<?php
/**
 * Title: Header with Costard Cravate branding and navigation (dark)
 * Slug: frost/header-default-dark
 * Categories: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} /-->
		<!-- wp:navigation {"textColor":"base","layout":{"type":"flex","setCascadingProperties":true},"overlayMenu":"never"} -->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Services', 'frost' ); ?>","url":"/?page_id=10","kind":"custom","isTopLevelLink":true} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Portfolio', 'frost' ); ?>","url":"/?page_id=11","kind":"custom","isTopLevelLink":true} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'About', 'frost' ); ?>","url":"/?page_id=9","kind":"custom","isTopLevelLink":true} /-->
			<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Contact', 'frost' ); ?>","url":"/?page_id=12","kind":"custom","isTopLevelLink":true} /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
