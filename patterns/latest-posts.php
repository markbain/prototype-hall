<?php
/**
 * Title: Latest posts
 * Slug: bd324-prototype-hall/latest-posts
 * Categories: bd324_prototype_hall_section
 * Description: The front page's feature: a section label, a link to all posts and the three newest posts as a grid, whatever layout the site's listings use.
 *
 * @package PrototypeHall
 * @since PrototypeHall 0.1.0
 */

?>
<!-- wp:group {"align":"wide","className":"c-section c-latest","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide c-section c-latest">
	<!-- wp:group {"className":"c-latest__head","layout":{"type":"default"}} -->
	<div class="wp-block-group c-latest__head">
		<!-- wp:heading {"fontSize":"heading-2"} -->
		<h2 class="wp-block-heading has-heading-2-font-size"><?php esc_html_e( 'Latest posts', 'prototype-hall' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"c-label"} -->
		<p class="c-label"><a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ? get_post_type_archive_link( 'post' ) : home_url( '/' ) ); ?>"><?php esc_html_e( 'View all posts →', 'prototype-hall' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":2,"query":{"perPage":3,"postType":"post","inherit":false,"sticky":"ignore"},"className":"c-posts"} -->
	<div class="wp-block-query c-posts">
		<!-- wp:post-template {"className":"is-style-grid","layout":{"type":"default"}} -->
			<!-- wp:group {"className":"c-card","layout":{"type":"default"}} -->
			<div class="wp-block-group c-card">
				<!-- wp:post-featured-image {"isLink":false,"className":"c-thumb"} /-->

				<!-- wp:group {"className":"c-card__meta","layout":{"type":"default"}} -->
				<div class="wp-block-group c-card__meta">
					<!-- wp:paragraph {"className":"c-label c-num"} -->
					<p class="c-label c-num"><?php esc_html_e( 'No.', 'prototype-hall' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:post-terms {"term":"category","className":"c-label c-cat"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"heading-3"} /-->

				<!-- wp:post-excerpt {"excerptLength":22,"className":"c-excerpt","fontSize":"small"} /-->

				<!-- wp:post-date {"className":"c-label c-date"} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
