<?php
/**
 * Title: Header
 * Slug: bd324-prototype-hall/header
 * Categories: bd324_prototype_hall_section
 * Block Types: core/template-part/header
 * Description: Wordmark, primary and secondary navigation, the search and menu buttons, and the two states they open: the menu panel and the search modal.
 *
 * @package PrototypeHall
 * @since PrototypeHall 1.0.0
 */

$home = esc_url( home_url( '/' ) );

?>
<!-- wp:group {"className":"c-masthead","layout":{"type":"constrained"}} -->
<div class="wp-block-group c-masthead">
	<!-- wp:group {"tagName":"header","align":"full","className":"s-ground c-header","textColor":"on-ground","backgroundColor":"ground","layout":{"type":"constrained"}} -->
	<header class="wp-block-group alignfull s-ground c-header has-on-ground-color has-ground-background-color has-text-color has-background">
		<!-- wp:group {"align":"wide","className":"c-header__bar","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide c-header__bar">
			<!-- wp:navigation {"ariaLabel":"<?php esc_attr_e( 'Primary', 'prototype-hall' ); ?>","overlayMenu":"never","className":"c-nav c-nav--primary c-label","layout":{"type":"flex","justifyContent":"left"}} -->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Journal', 'prototype-hall' ); ?>","url":"<?php echo $home; // phpcs:ignore WordPress.Security.EscapeOutput ?>","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'About', 'prototype-hall' ); ?>","url":"<?php echo $home; // phpcs:ignore WordPress.Security.EscapeOutput ?>","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation -->

			<!-- wp:group {"className":"c-brand","layout":{"type":"default"}} -->
			<div class="wp-block-group c-brand">
				<!-- wp:site-logo /-->

				<!-- wp:site-title {"level":0,"isLink":true,"className":"c-wordmark"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"c-header__end","layout":{"type":"default"}} -->
			<div class="wp-block-group c-header__end">
				<!-- wp:navigation {"ariaLabel":"<?php esc_attr_e( 'Secondary', 'prototype-hall' ); ?>","overlayMenu":"never","className":"c-nav c-nav--secondary c-label","layout":{"type":"flex","justifyContent":"right"}} -->
					<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Contact', 'prototype-hall' ); ?>","url":"<?php echo $home; // phpcs:ignore WordPress.Security.EscapeOutput ?>","kind":"custom","isTopLevelLink":true} /-->
				<!-- /wp:navigation -->

				<!-- wp:pattern {"slug":"bd324-prototype-hall/header-controls"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"anchor":"menu-panel","align":"full","className":"s-deep c-menu-panel","textColor":"on-deep","backgroundColor":"deep","layout":{"type":"constrained"}} -->
	<div id="menu-panel" class="wp-block-group alignfull s-deep c-menu-panel has-on-deep-color has-deep-background-color has-text-color has-background">
		<!-- wp:group {"align":"wide","className":"c-menu-panel__grid","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide c-menu-panel__grid">
			<!-- wp:group {"className":"c-menu-panel__main","layout":{"type":"default"}} -->
			<div class="wp-block-group c-menu-panel__main">
				<!-- wp:paragraph {"className":"c-label c-label--deep"} -->
				<p class="c-label c-label--deep"><?php esc_html_e( 'Browse', 'prototype-hall' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:navigation {"ariaLabel":"<?php esc_attr_e( 'Menu', 'prototype-hall' ); ?>","overlayMenu":"never","openSubmenusOnClick":false,"showSubmenuIcon":true,"className":"c-menu-nav","layout":{"type":"flex","orientation":"vertical"}} -->
					<!-- wp:navigation-submenu {"label":"<?php esc_attr_e( 'Journal', 'prototype-hall' ); ?>","url":"<?php echo $home; // phpcs:ignore WordPress.Security.EscapeOutput ?>","kind":"custom"} -->
						<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'All posts', 'prototype-hall' ); ?>","url":"<?php echo $home; // phpcs:ignore WordPress.Security.EscapeOutput ?>","kind":"custom"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Category One', 'prototype-hall' ); ?>","url":"<?php echo $home; // phpcs:ignore WordPress.Security.EscapeOutput ?>","kind":"custom"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Category Two', 'prototype-hall' ); ?>","url":"<?php echo $home; // phpcs:ignore WordPress.Security.EscapeOutput ?>","kind":"custom"} /-->
					<!-- /wp:navigation-submenu -->
					<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'About', 'prototype-hall' ); ?>","url":"<?php echo $home; // phpcs:ignore WordPress.Security.EscapeOutput ?>","kind":"custom"} /-->
					<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Contact', 'prototype-hall' ); ?>","url":"<?php echo $home; // phpcs:ignore WordPress.Security.EscapeOutput ?>","kind":"custom"} /-->
					<!-- wp:navigation-submenu {"label":"<?php esc_attr_e( '[Menu item]', 'prototype-hall' ); ?>","url":"<?php echo $home; // phpcs:ignore WordPress.Security.EscapeOutput ?>","kind":"custom"} -->
						<!-- wp:navigation-link {"label":"<?php esc_attr_e( '[Submenu item]', 'prototype-hall' ); ?>","url":"<?php echo $home; // phpcs:ignore WordPress.Security.EscapeOutput ?>","kind":"custom"} /-->
					<!-- /wp:navigation-submenu -->
				<!-- /wp:navigation -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"c-menu-panel__tools","layout":{"type":"default"}} -->
			<div class="wp-block-group c-menu-panel__tools">
				<!-- wp:search {"label":"<?php esc_attr_e( 'Search the site', 'prototype-hall' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'prototype-hall' ); ?>","placeholder":"<?php esc_attr_e( 'Search the site', 'prototype-hall' ); ?>","buttonPosition":"button-outside","className":"c-search c-search--deep"} /-->

				<!-- wp:group {"className":"c-menu-panel__elsewhere","layout":{"type":"default"}} -->
				<div class="wp-block-group c-menu-panel__elsewhere">
					<!-- wp:paragraph {"className":"c-label c-label--deep"} -->
					<p class="c-label c-label--deep"><?php esc_html_e( 'Elsewhere', 'prototype-hall' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:navigation {"ariaLabel":"<?php esc_attr_e( 'Elsewhere', 'prototype-hall' ); ?>","overlayMenu":"never","className":"c-nav c-label","layout":{"type":"flex","orientation":"vertical"}} -->
						<!-- wp:navigation-link {"label":"<?php esc_attr_e( '[Link]', 'prototype-hall' ); ?>","url":"<?php echo $home; // phpcs:ignore WordPress.Security.EscapeOutput ?>","kind":"custom"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_attr_e( '[Link]', 'prototype-hall' ); ?>","url":"<?php echo $home; // phpcs:ignore WordPress.Security.EscapeOutput ?>","kind":"custom"} /-->
					<!-- /wp:navigation -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"className":"c-label c-menu-panel__base"} -->
				<p class="c-label c-menu-panel__base"><?php esc_html_e( '© [YEAR] [SITE NAME]', 'prototype-hall' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"anchor":"search-modal","align":"full","className":"s-deep c-search-modal","textColor":"on-deep","backgroundColor":"deep","layout":{"type":"constrained"}} -->
	<div id="search-modal" class="wp-block-group alignfull s-deep c-search-modal has-on-deep-color has-deep-background-color has-text-color has-background">
		<!-- wp:group {"align":"wide","className":"c-dialog","backgroundColor":"paper","textColor":"ink","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide c-dialog has-ink-color has-paper-background-color has-text-color has-background">
			<!-- wp:group {"className":"c-dialog__head","layout":{"type":"default"}} -->
			<div class="wp-block-group c-dialog__head">
				<!-- wp:paragraph {"anchor":"search-dialog-title","className":"c-label"} -->
				<p id="search-dialog-title" class="c-label"><?php esc_html_e( 'Search', 'prototype-hall' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"className":"c-dialog__close"} -->
				<div class="wp-block-buttons c-dialog__close">
					<!-- wp:button {"tagName":"button","className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><button type="button" class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Close', 'prototype-hall' ); ?></button></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->

			<!-- wp:search {"label":"<?php esc_attr_e( 'Search the site', 'prototype-hall' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'prototype-hall' ); ?>","placeholder":"<?php esc_attr_e( 'Type to search', 'prototype-hall' ); ?>","buttonPosition":"button-outside","className":"c-search c-search--dialog"} /-->

			<!-- wp:group {"className":"c-dialog__foot","layout":{"type":"default"}} -->
			<div class="wp-block-group c-dialog__foot">
				<!-- wp:paragraph {"className":"c-label c-label--muted"} -->
				<p class="c-label c-label--muted"><?php esc_html_e( 'Try', 'prototype-hall' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"className":"c-chips","layout":{"type":"default"}} -->
				<div class="wp-block-group c-chips">
					<!-- wp:paragraph {"className":"c-chip c-label"} -->
					<p class="c-chip c-label"><a href="#"><?php esc_html_e( '[Tag]', 'prototype-hall' ); ?></a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"c-chip c-label"} -->
					<p class="c-chip c-label"><a href="#"><?php esc_html_e( '[Tag]', 'prototype-hall' ); ?></a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"c-chip c-label"} -->
					<p class="c-chip c-label"><a href="#"><?php esc_html_e( '[Tag]', 'prototype-hall' ); ?></a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"className":"c-label c-label--muted c-dialog__esc"} -->
				<p class="c-label c-label--muted c-dialog__esc"><?php esc_html_e( 'Esc to close', 'prototype-hall' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
