<?php
/**
 * Title: Footer
 * Slug: bd324-prototype-hall/footer
 * Categories: bd324_prototype_hall_section
 * Block Types: core/template-part/footer
 * Description: Wordmark and site description, three link columns, and the base line.
 *
 * @package PrototypeHall
 * @since PrototypeHall 1.0.0
 */

$home = esc_url( home_url( '/' ) );

?>
<!-- wp:group {"tagName":"footer","align":"full","className":"s-deep c-footer","textColor":"on-deep","backgroundColor":"deep","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull s-deep c-footer has-on-deep-color has-deep-background-color has-text-color has-background">
	<!-- wp:group {"align":"wide","className":"c-footer__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide c-footer__inner">
		<!-- wp:group {"className":"c-footer__cols","layout":{"type":"default"}} -->
		<div class="wp-block-group c-footer__cols">
			<!-- wp:group {"className":"c-footer__id","layout":{"type":"default"}} -->
			<div class="wp-block-group c-footer__id">
				<!-- wp:site-title {"level":0,"isLink":true,"className":"c-wordmark"} /-->

				<!-- wp:site-tagline {"className":"c-footer__about"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"c-footer__col","layout":{"type":"default"}} -->
			<div class="wp-block-group c-footer__col">
				<!-- wp:paragraph {"className":"c-label c-label--deep"} -->
				<p class="c-label c-label--deep"><?php esc_html_e( 'Browse', 'prototype-hall' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:navigation {"ariaLabel":"<?php esc_attr_e( 'Footer: browse', 'prototype-hall' ); ?>","overlayMenu":"never","className":"c-nav c-nav--footer","layout":{"type":"flex","orientation":"vertical"}} -->
					<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Journal', 'prototype-hall' ); ?>","url":"<?php echo $home; // phpcs:ignore WordPress.Security.EscapeOutput ?>","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'About', 'prototype-hall' ); ?>","url":"<?php echo $home; // phpcs:ignore WordPress.Security.EscapeOutput ?>","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Contact', 'prototype-hall' ); ?>","url":"<?php echo $home; // phpcs:ignore WordPress.Security.EscapeOutput ?>","kind":"custom","isTopLevelLink":true} /-->
				<!-- /wp:navigation -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"c-footer__col","layout":{"type":"default"}} -->
			<div class="wp-block-group c-footer__col">
				<!-- wp:paragraph {"className":"c-label c-label--deep"} -->
				<p class="c-label c-label--deep"><?php esc_html_e( 'Categories', 'prototype-hall' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:categories {"className":"c-list-plain"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"c-footer__col","layout":{"type":"default"}} -->
			<div class="wp-block-group c-footer__col">
				<!-- wp:paragraph {"className":"c-label c-label--deep"} -->
				<p class="c-label c-label--deep"><?php esc_html_e( 'Elsewhere', 'prototype-hall' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:navigation {"ariaLabel":"<?php esc_attr_e( 'Footer: elsewhere', 'prototype-hall' ); ?>","overlayMenu":"never","className":"c-nav c-nav--footer","layout":{"type":"flex","orientation":"vertical"}} -->
					<!-- wp:navigation-link {"label":"<?php esc_attr_e( '[Link]', 'prototype-hall' ); ?>","url":"<?php echo $home; // phpcs:ignore WordPress.Security.EscapeOutput ?>","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"<?php esc_attr_e( '[Link]', 'prototype-hall' ); ?>","url":"<?php echo $home; // phpcs:ignore WordPress.Security.EscapeOutput ?>","kind":"custom","isTopLevelLink":true} /-->
				<!-- /wp:navigation -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"c-footer__base","layout":{"type":"default"}} -->
		<div class="wp-block-group c-footer__base">
			<!-- wp:group {"className":"c-footer__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group c-footer__copy">
				<!-- wp:paragraph {"className":"c-label"} -->
				<p class="c-label"><?php echo esc_html_x( '©', 'copyright sign before the site title in the footer', 'prototype-hall' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:site-title {"level":0,"isLink":false,"className":"c-label"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"className":"c-label"} -->
			<p class="c-label"><?php esc_html_e( '[FOOTER CREDIT]', 'prototype-hall' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</footer>
<!-- /wp:group -->
