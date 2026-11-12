<?php
/**
 * Title: Statement band
 * Slug: bd324-prototype-hall/statement
 * Categories: bd324_prototype_hall_section
 * Description: A ground band: a mono label, a large statement, a short paragraph and two buttons beside an open-call card.
 *
 * @package PrototypeHall
 * @since PrototypeHall 0.1.0
 */

?>
<!-- wp:group {"align":"full","className":"s-ground c-statement","textColor":"on-ground","backgroundColor":"ground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull s-ground c-statement has-on-ground-color has-ground-background-color has-text-color has-background">
	<!-- wp:group {"align":"wide","className":"c-statement__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide c-statement__inner">
		<!-- wp:group {"className":"c-statement__text","layout":{"type":"default"}} -->
		<div class="wp-block-group c-statement__text">
			<!-- wp:paragraph {"className":"c-label"} -->
			<p class="c-label"><?php esc_html_e( '[Label: statement]', 'prototype-hall' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"fontSize":"heading-1"} -->
			<h2 class="wp-block-heading has-heading-1-font-size"><?php esc_html_e( '[A statement of what this place is for]', 'prototype-hall' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"c-lead","fontSize":"lead"} -->
			<p class="c-lead has-lead-font-size"><?php esc_html_e( '[One or two sentences expanding on the statement, written by the editor.]', 'prototype-hall' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( '[Primary call]', 'prototype-hall' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( '[Secondary call]', 'prototype-hall' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"tagName":"aside","className":"c-open-call","textColor":"ink","backgroundColor":"frame","layout":{"type":"default"}} -->
		<aside class="wp-block-group c-open-call has-ink-color has-frame-background-color has-text-color has-background">
			<!-- wp:paragraph {"className":"c-label"} -->
			<p class="c-label"><?php esc_html_e( '[Label: open call]', 'prototype-hall' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"fontSize":"heading-3"} -->
			<h3 class="wp-block-heading has-heading-3-font-size"><?php esc_html_e( '[Open call title]', 'prototype-hall' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( '[A short description of what is being asked for and who can respond.]', 'prototype-hall' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"c-label"} -->
			<p class="c-label"><?php esc_html_e( 'Closes [DEADLINE]', 'prototype-hall' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-ink"} -->
				<div class="wp-block-button is-style-ink"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( '[Call to action]', 'prototype-hall' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</aside>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
