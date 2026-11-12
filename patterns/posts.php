<?php
/**
 * Title: Posts
 * Slug: bd324-prototype-hall/posts
 * Categories: bd324_prototype_hall_section
 * Inserter: no
 * Description: The query loop used by the index, home, archive and search templates.
 *
 * @package PrototypeHall
 * @since PrototypeHall 0.1.0
 */

?>
<!-- wp:query {"queryId":1,"query":{"perPage":10,"postType":"post","inherit":true}} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
		<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|contrast","width":"1px"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--30)">
			<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

			<!-- wp:post-date {"fontSize":"small","isLink":true} /-->

			<!-- wp:post-excerpt /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-numbers /-->

		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
		<!-- wp:pattern {"slug":"bd324-prototype-hall/no-results"} /-->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
