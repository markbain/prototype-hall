<?php
/**
 * Title: Title band: all posts
 * Slug: bd324-prototype-hall/title-index
 * Categories: bd324_prototype_hall_section
 * Inserter: no
 * Description: Ground band for the index fallback: a mono label, the display headline and a lead line.
 *
 * @package PrototypeHall
 * @since PrototypeHall 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"s-ground c-title-band","textColor":"on-ground","backgroundColor":"ground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull s-ground c-title-band has-on-ground-color has-ground-background-color has-text-color has-background">
	<!-- wp:group {"align":"wide","className":"c-title-band__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide c-title-band__inner">
		<!-- wp:paragraph {"className":"c-label"} -->
		<p class="c-label"><?php esc_html_e( '[Label: all posts]', 'prototype-hall' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"fontSize":"display"} -->
		<h1 class="wp-block-heading has-display-font-size"><?php esc_html_e( 'All posts', 'prototype-hall' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"c-lead","fontSize":"lead"} -->
		<p class="c-lead has-lead-font-size"><?php esc_html_e( 'Every post, newest first.', 'prototype-hall' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
