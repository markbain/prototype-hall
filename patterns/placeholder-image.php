<?php
/**
 * Title: Placeholder image
 * Slug: bd324-prototype-hall/placeholder-image
 * Categories: bd324_prototype_hall_section
 * Description: A labelled grey box. Drop an image into the cover to replace it.
 *
 * @package PrototypeHall
 * @since PrototypeHall 0.1.0
 */

?>
<!-- wp:cover {"dimRatio":0,"minHeight":20,"minHeightUnit":"rem","isDark":false,"className":"c-placeholder","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light c-placeholder" style="min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php esc_html_e( '[ Image placeholder ]', 'prototype-hall' ); ?></p>
	<!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->
