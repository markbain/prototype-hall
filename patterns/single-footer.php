<?php
/**
 * Title: Post footer
 * Slug: bd324-prototype-hall/single-footer
 * Categories: bd324_prototype_hall_section
 * Inserter: no
 * Description: The tail of a single post: tags, the author box, and the previous and next links.
 *
 * @package PrototypeHall
 * @since PrototypeHall 0.1.0
 */

?>
<!-- wp:group {"className":"c-post-foot","layout":{"type":"default"}} -->
<div class="wp-block-group c-post-foot">
	<!-- wp:post-terms {"term":"post_tag","className":"c-tags c-label"} /-->

	<!-- wp:post-author {"showAvatar":true,"showBio":true,"byline":"<?php esc_attr_e( 'Written by', 'prototype-hall' ); ?>","avatarSize":72,"className":"c-author-box"} /-->

	<!-- wp:group {"className":"c-post-nav c-label","layout":{"type":"default"}} -->
	<div class="wp-block-group c-post-nav c-label">
		<!-- wp:post-navigation-link {"type":"previous","label":"<?php esc_attr_e( 'Previous', 'prototype-hall' ); ?>","showTitle":true,"arrow":"arrow"} /-->

		<!-- wp:post-navigation-link {"label":"<?php esc_attr_e( 'Next', 'prototype-hall' ); ?>","showTitle":true,"arrow":"arrow"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
