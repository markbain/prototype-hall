<?php
/**
 * Title: Title band: search
 * Slug: bd324-prototype-hall/title-search
 * Categories: bd324_prototype_hall_section
 * Inserter: no
 * Description: Ground band for search results: the count, the search term as the headline, and a search field.
 *
 * @package PrototypeHall
 * @since PrototypeHall 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"s-ground c-title-band","textColor":"on-ground","backgroundColor":"ground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull s-ground c-title-band has-on-ground-color has-ground-background-color has-text-color has-background">
	<!-- wp:group {"align":"wide","className":"c-title-band__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide c-title-band__inner">
		<!-- wp:paragraph {"className":"c-label c-search-count"} -->
		<p class="c-label c-search-count"><?php esc_html_e( '[Number of results]', 'prototype-hall' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:query-title {"type":"search","level":1,"showPrefix":false,"fontSize":"display"} /-->

		<!-- wp:search {"label":"<?php esc_attr_e( 'Search the site', 'prototype-hall' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'prototype-hall' ); ?>","buttonPosition":"button-outside","className":"c-search"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
