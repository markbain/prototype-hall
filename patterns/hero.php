<?php
/**
 * Title: Hero
 * Slug: bd324-prototype-hall/hero
 * Categories: bd324_prototype_hall_section
 * Description: A heading, a line of copy, a button and a placeholder image.
 *
 * @package PrototypeHall
 * @since PrototypeHall 0.1.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"level":1,"className":"c-todo"} -->
			<h1 class="wp-block-heading c-todo"><?php esc_html_e( 'Heading goes here', 'prototype-hall' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"c-todo"} -->
			<p class="c-todo"><?php esc_html_e( 'One or two sentences of placeholder copy. Replace with the real thing.', 'prototype-hall' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Button', 'prototype-hall' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:pattern {"slug":"bd324-prototype-hall/placeholder-image"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
