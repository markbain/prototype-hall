<?php
/**
 * Title: Header
 * Slug: bd324-prototype-hall/header
 * Categories: bd324_prototype_hall_section
 * Block Types: core/template-part/header
 * Description: Site logo or site title, navigation and search.
 *
 * @package PrototypeHall
 * @since PrototypeHall 0.1.0
 */

?>
<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|contrast","width":"2px"}}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:2px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"className":"c-brand","layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group c-brand">
			<!-- wp:site-logo /-->

			<!-- wp:site-title {"fontSize":"large","style":{"typography":{"fontWeight":"700"}}} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
		<div class="wp-block-group">
			<!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"right"}} /-->

			<!-- wp:search {"label":"<?php esc_attr_e( 'Search', 'prototype-hall' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search', 'prototype-hall' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'prototype-hall' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</header>
<!-- /wp:group -->
