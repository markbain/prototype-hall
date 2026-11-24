<?php
/**
 * Title: Sign-up row
 * Slug: bd324-prototype-hall/signup
 * Categories: bd324_prototype_hall_section
 * Description: A paper-2 band between two rules: a label, a heading and a one-line promise beside a button that links to the sign-up page. Point the button at your sign-up page or form.
 *
 * @package PrototypeHall
 * @since PrototypeHall 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"c-signup","backgroundColor":"paper-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull c-signup has-paper-2-background-color has-background">
	<!-- wp:group {"align":"wide","className":"c-signup__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide c-signup__inner">
		<!-- wp:group {"className":"c-signup__text","layout":{"type":"default"}} -->
		<div class="wp-block-group c-signup__text">
			<!-- wp:paragraph {"className":"c-label c-label--muted"} -->
			<p class="c-label c-label--muted"><?php esc_html_e( '[Label: sign-up]', 'prototype-hall' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"heading-2"} -->
			<h2 class="wp-block-heading has-heading-2-font-size"><?php esc_html_e( '[Sign-up heading]', 'prototype-hall' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( '[One line on what subscribers receive and how often.]', 'prototype-hall' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"c-signup__action","layout":{"type":"default"}} -->
		<div class="wp-block-group c-signup__action">
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( '[Subscribe]', 'prototype-hall' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
