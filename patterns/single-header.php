<?php
/**
 * Title: Post header
 * Slug: bd324-prototype-hall/single-header
 * Categories: bd324_prototype_hall_section
 * Inserter: no
 * Description: The head of a single post: category chip, date, time to read, the title, the author row and the featured image.
 *
 * @package PrototypeHall
 * @since PrototypeHall 0.1.0
 */

?>
<!-- wp:group {"align":"wide","className":"c-post-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide c-post-head">
	<!-- wp:group {"className":"c-post-head__meta","layout":{"type":"default"}} -->
	<div class="wp-block-group c-post-head__meta">
		<!-- wp:post-terms {"term":"category","className":"c-chip c-label"} /-->

		<!-- wp:post-date {"className":"c-label"} /-->

		<!-- wp:post-time-to-read /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:post-title {"level":1,"className":"c-post-head__title"} /-->

	<!-- wp:group {"className":"c-post-head__by","layout":{"type":"default"}} -->
	<div class="wp-block-group c-post-head__by">
		<!-- wp:avatar {"size":48,"className":"c-avatar"} /-->

		<!-- wp:group {"className":"c-byline","layout":{"type":"default"}} -->
		<div class="wp-block-group c-byline">
			<!-- wp:paragraph {"className":"c-label"} -->
			<p class="c-label"><?php esc_html_e( 'By', 'prototype-hall' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:post-author-name {"isLink":false} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-comments-link /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:post-featured-image {"isLink":false,"className":"c-thumb c-thumb--wide"} /-->
</div>
<!-- /wp:group -->
