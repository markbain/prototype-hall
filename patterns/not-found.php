<?php
/**
 * Title: Page not found
 * Slug: bd324-prototype-hall/not-found
 * Categories: bd324_prototype_hall_section
 * Inserter: no
 * Description: The 404 content: a ground band with a label, an enormous 404, a heading, one line of help, a search field and a link back to the journal.
 *
 * @package PrototypeHall
 * @since PrototypeHall 0.1.0
 */

?>
<!-- wp:group {"align":"full","className":"s-ground c-not-found","textColor":"on-ground","backgroundColor":"ground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull s-ground c-not-found has-on-ground-color has-ground-background-color has-text-color has-background">
	<!-- wp:group {"align":"wide","className":"c-not-found__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide c-not-found__inner">
		<!-- wp:paragraph {"className":"c-label"} -->
		<p class="c-label"><?php esc_html_e( 'Error 404', 'prototype-hall' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"fontSize":"error-code","className":"c-not-found__code"} -->
		<h1 class="wp-block-heading c-not-found__code has-error-code-font-size"><?php esc_html_e( '404', 'prototype-hall' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:heading {"fontSize":"heading-2"} -->
		<h2 class="wp-block-heading has-heading-2-font-size"><?php esc_html_e( 'This page is not here', 'prototype-hall' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"c-lead","fontSize":"lead"} -->
		<p class="c-lead has-lead-font-size"><?php esc_html_e( 'The link may be old, or the address mistyped. Search the site or go back to the journal.', 'prototype-hall' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:search {"label":"<?php esc_attr_e( 'Search the site', 'prototype-hall' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'prototype-hall' ); ?>","placeholder":"<?php esc_attr_e( 'Search the site', 'prototype-hall' ); ?>","buttonPosition":"button-outside","className":"c-search"} /-->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to the journal', 'prototype-hall' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
