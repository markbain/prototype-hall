<?php
/**
 * Title: No results
 * Slug: bd324-prototype-hall/no-results
 * Categories: bd324_prototype_hall_section
 * Inserter: no
 * Description: Shown by the search template when nothing matches: a bordered, shadowed panel with a label, a heading, one line of help and a search field.
 *
 * @package PrototypeHall
 * @since PrototypeHall 0.1.0
 */

?>
<!-- wp:group {"className":"c-no-results","layout":{"type":"default"}} -->
<div class="wp-block-group c-no-results">
	<!-- wp:paragraph {"className":"c-label"} -->
	<p class="c-label"><?php esc_html_e( '0 results', 'prototype-hall' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"fontSize":"heading-2"} -->
	<h2 class="wp-block-heading has-heading-2-font-size"><?php esc_html_e( 'Nothing found', 'prototype-hall' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"muted"} -->
	<p class="has-muted-color has-text-color"><?php esc_html_e( 'Nothing matched that search. Check the spelling, try fewer words, or browse the journal instead.', 'prototype-hall' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php esc_attr_e( 'Search again', 'prototype-hall' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'prototype-hall' ); ?>","placeholder":"<?php esc_attr_e( 'Search the site', 'prototype-hall' ); ?>","buttonPosition":"button-outside","className":"c-search"} /-->
</div>
<!-- /wp:group -->
