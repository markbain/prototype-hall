<?php
/**
 * Title: Title band: archive
 * Slug: bd324-prototype-hall/title-archive
 * Categories: bd324_prototype_hall_section
 * Inserter: no
 * Description: Ground band for category, tag, author and date archives: breadcrumb, headline, count line and description.
 *
 * @package PrototypeHall
 * @since PrototypeHall 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"s-ground c-title-band","textColor":"on-ground","backgroundColor":"ground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull s-ground c-title-band has-on-ground-color has-ground-background-color has-text-color has-background">
	<!-- wp:group {"align":"wide","className":"c-title-band__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide c-title-band__inner">
		<!-- wp:breadcrumbs {"className":"c-label"} /-->

		<!-- wp:query-title {"type":"archive","level":1,"fontSize":"display"} /-->

		<!-- wp:paragraph {"className":"c-label c-archive-count"} -->
		<p class="c-label c-archive-count"><?php
			/* translators: %d: number of posts in the archive. */
			esc_html_e( '%d posts', 'prototype-hall' );
		?></p>
		<!-- /wp:paragraph -->

		<!-- wp:term-description {"className":"c-lead","fontSize":"lead"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
