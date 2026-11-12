<?php
/**
 * Title: Ticker strip
 * Slug: bd324-prototype-hall/ticker
 * Categories: bd324_prototype_hall_section
 * Description: A thin deep band of mono lines that travel slowly right to left. Edit the lines by hand. Static and wrapped when motion is reduced.
 *
 * @package PrototypeHall
 * @since PrototypeHall 0.1.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"s-deep c-ticker","textColor":"on-deep","backgroundColor":"deep","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull s-deep c-ticker has-on-deep-color has-deep-background-color has-text-color has-background">
	<!-- wp:heading {"level":2,"className":"screen-reader-text"} -->
	<h2 class="wp-block-heading screen-reader-text"><?php esc_html_e( 'Announcements', 'prototype-hall' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:list {"className":"c-ticker__track c-label"} -->
	<ul class="wp-block-list c-ticker__track c-label">
		<!-- wp:list-item -->
		<li><?php esc_html_e( '[Ticker line one]', 'prototype-hall' ); ?></li>
		<!-- /wp:list-item -->

		<!-- wp:list-item -->
		<li><?php esc_html_e( '[Ticker line two]', 'prototype-hall' ); ?></li>
		<!-- /wp:list-item -->

		<!-- wp:list-item -->
		<li><?php esc_html_e( '[Ticker line three]', 'prototype-hall' ); ?></li>
		<!-- /wp:list-item -->

		<!-- wp:list-item -->
		<li><?php esc_html_e( '[Ticker line four]', 'prototype-hall' ); ?></li>
		<!-- /wp:list-item -->
	</ul>
	<!-- /wp:list -->
</section>
<!-- /wp:group -->
