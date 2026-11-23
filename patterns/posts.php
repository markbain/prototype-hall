<?php
/**
 * Title: Posts
 * Slug: bd324-prototype-hall/posts
 * Categories: bd324_prototype_hall_section
 * Inserter: no
 * Description: The query loop used by the index, home, archive and search templates. Two layouts, picked as a block style on the Post Template: Grid (the default) and List.
 *
 * @package PrototypeHall
 * @since PrototypeHall 0.1.0
 */

?>
<!-- wp:query {"queryId":1,"query":{"perPage":10,"postType":"post","inherit":true},"className":"c-posts"} -->
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

			<!-- wp:post-title {"level":2,"isLink":true,"fontSize":"heading-3"} /-->

			<!-- wp:post-excerpt {"excerptLength":22,"className":"c-excerpt","fontSize":"small"} /-->

			<!-- wp:post-date {"className":"c-label c-date"} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","className":"c-pager","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous {"label":"<?php esc_attr_e( 'Newer', 'prototype-hall' ); ?>"} /-->

		<!-- wp:query-pagination-numbers {"className":"c-label c-pager__page"} /-->

		<!-- wp:query-pagination-next {"label":"<?php esc_attr_e( 'Older', 'prototype-hall' ); ?>"} /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
		<!-- wp:pattern {"slug":"bd324-prototype-hall/no-results"} /-->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
