<?php
/**
 * Title: Hero
 * Slug: bd324-prototype-hall/hero
 * Categories: bd324_prototype_hall_section
 * Description: The front-page opener: eyebrow, display headline, lead and two buttons beside a ring of rays around a framed, striped sun.
 *
 * @package PrototypeHall
 * @since PrototypeHall 0.1.0
 */

?>
<!-- wp:group {"align":"full","className":"s-ground c-hero","textColor":"on-ground","backgroundColor":"ground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull s-ground c-hero has-on-ground-color has-ground-background-color has-text-color has-background">
	<!-- wp:group {"align":"wide","className":"c-hero__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide c-hero__inner">
		<!-- wp:group {"className":"c-hero__text","layout":{"type":"default"}} -->
		<div class="wp-block-group c-hero__text">
			<!-- wp:paragraph {"className":"c-label"} -->
			<p class="c-label"><?php esc_html_e( '[Eyebrow: a short line about the site]', 'prototype-hall' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"fontSize":"display"} -->
			<h1 class="wp-block-heading has-display-font-size"><?php esc_html_e( 'Your headline goes here', 'prototype-hall' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"c-lead","fontSize":"lead"} -->
			<p class="c-lead has-lead-font-size"><?php esc_html_e( 'A sentence or two about the site, written by its editor. Keep it short.', 'prototype-hall' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Read the journal', 'prototype-hall' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'About', 'prototype-hall' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"c-hero__art","layout":{"type":"default"}} -->
		<div class="wp-block-group c-hero__art">
			<!-- wp:group {"className":"c-hero__stage","layout":{"type":"default"}} -->
			<div class="wp-block-group c-hero__stage">
				<!-- wp:group {"className":"c-rays","layout":{"type":"default"}} -->
				<div class="wp-block-group c-rays"></div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"c-frame","layout":{"type":"default"}} -->
				<div class="wp-block-group c-frame">
					<!-- wp:group {"className":"c-sun","layout":{"type":"default"}} -->
					<div class="wp-block-group c-sun"></div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"c-hero__caption","layout":{"type":"default"}} -->
			<div class="wp-block-group c-hero__caption">
				<!-- wp:paragraph {"className":"c-label"} -->
				<p class="c-label"><?php esc_html_e( 'Fig. 01 · [Image caption]', 'prototype-hall' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"c-label"} -->
				<p class="c-label"><?php esc_html_e( '[Credit]', 'prototype-hall' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
