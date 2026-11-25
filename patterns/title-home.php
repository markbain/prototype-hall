<?php
/**
 * Title: Title band: blog home
 * Slug: bd324-prototype-hall/title-home
 * Categories: bd324_prototype_hall_section
 * Inserter: no
 * Description: Ground band for the posts page: a mono label, the display headline and a lead line.
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
		<p class="c-label"><?php esc_html_e( '[Label: the blog page]', 'prototype-hall' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:query-title {"type":"archive","level":1,"fontSize":"display"} /-->

		<!-- wp:paragraph {"className":"c-lead","fontSize":"lead"} -->
		<p class="c-lead has-lead-font-size"><?php esc_html_e( 'A line describing what the blog is about, set by the editor.', 'prototype-hall' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
