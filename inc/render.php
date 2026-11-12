<?php
/**
 * Render filters for what blocks cannot express on their own: the typographic
 * tile for a post with no featured image, the search term highlight, "Page"
 * for page results, the "Page 2 of 4" line, and the result counts.
 *
 * Each one acts only on a block that carries its role class, so editors'
 * other blocks are untouched.
 *
 * @package PrototypeHall
 * @since PrototypeHall 0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'bd324_prototype_hall_has_class' ) ) :
	/**
	 * Whether a parsed block carries a class.
	 *
	 * @since PrototypeHall 0.1.0
	 *
	 * @param array  $block The parsed block.
	 * @param string $class The class to look for.
	 * @return bool
	 */
	function bd324_prototype_hall_has_class( $block, $class ) {
		$classes = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
		return in_array( $class, preg_split( '/\s+/', $classes ), true );
	}
endif;

if ( ! function_exists( 'bd324_prototype_hall_thumb_fallback' ) ) :
	/**
	 * Replaces an empty featured image with the typographic tile: the first
	 * letter of the title, large, so a card or a post head never collapses.
	 *
	 * @since PrototypeHall 0.1.0
	 *
	 * @param string   $content  The rendered block, empty when the post has no image.
	 * @param array    $block    The parsed block.
	 * @param WP_Block $instance The block instance.
	 * @return string
	 */
	function bd324_prototype_hall_thumb_fallback( $content, $block, $instance = null ) {
		if ( '' !== trim( $content ) || ! bd324_prototype_hall_has_class( $block, 'c-thumb' ) ) {
			return $content;
		}

		$post_id = $instance && isset( $instance->context['postId'] ) ? (int) $instance->context['postId'] : get_the_ID();
		$title   = trim( wp_strip_all_tags( get_the_title( $post_id ) ) );
		$initial = '' !== $title ? mb_strtoupper( mb_substr( $title, 0, 1 ) ) : '–';
		$wide    = bd324_prototype_hall_has_class( $block, 'c-thumb--wide' ) ? ' c-thumb--wide' : '';

		return sprintf(
			'<figure class="wp-block-post-featured-image c-thumb c-thumb--none%1$s"><span class="c-thumb__initial" aria-hidden="true">%2$s</span></figure>',
			$wide,
			esc_html( $initial )
		);
	}
endif;
add_filter( 'render_block_core/post-featured-image', 'bd324_prototype_hall_thumb_fallback', 10, 3 );

if ( ! function_exists( 'bd324_prototype_hall_highlight' ) ) :
	/**
	 * Wraps the searched words in a mark, in result titles and excerpts.
	 *
	 * @since PrototypeHall 0.1.0
	 *
	 * @param string $content The rendered block.
	 * @return string
	 */
	function bd324_prototype_hall_highlight( $content ) {
		if ( ! is_search() || '' === trim( $content ) ) {
			return $content;
		}

		$words = preg_split( '/\s+/', trim( get_search_query( false ) ), -1, PREG_SPLIT_NO_EMPTY );
		if ( ! $words ) {
			return $content;
		}
		$pattern = '/(' . implode( '|', array_map( 'preg_quote', array_unique( $words ), array_fill( 0, count( array_unique( $words ) ), '/' ) ) ) . ')/iu';

		$parts = preg_split( '/(<[^>]*>)/', $content, -1, PREG_SPLIT_DELIM_CAPTURE );
		foreach ( $parts as $i => $part ) {
			if ( 0 === $i % 2 && '' !== $part ) {
				$parts[ $i ] = preg_replace( $pattern, '<mark class="c-mark">$1</mark>', $part );
			}
		}
		return implode( '', $parts );
	}
endif;
add_filter( 'render_block_core/post-title', 'bd324_prototype_hall_highlight' );
add_filter( 'render_block_core/post-excerpt', 'bd324_prototype_hall_highlight' );

if ( ! function_exists( 'bd324_prototype_hall_page_label' ) ) :
	/**
	 * Shows "Page" in the category slot of a page result. A page has no
	 * categories, so the Post Terms block renders nothing there.
	 *
	 * @since PrototypeHall 0.1.0
	 *
	 * @param string   $content  The rendered block.
	 * @param array    $block    The parsed block.
	 * @param WP_Block $instance The block instance.
	 * @return string
	 */
	function bd324_prototype_hall_page_label( $content, $block, $instance = null ) {
		if ( '' !== trim( $content ) || ! bd324_prototype_hall_has_class( $block, 'c-cat' ) ) {
			return $content;
		}

		$post_id = $instance && isset( $instance->context['postId'] ) ? (int) $instance->context['postId'] : get_the_ID();
		if ( 'page' !== get_post_type( $post_id ) ) {
			return $content;
		}

		return '<div class="wp-block-post-terms c-label c-cat">' . esc_html__( 'Page', 'prototype-hall' ) . '</div>';
	}
endif;
add_filter( 'render_block_core/post-terms', 'bd324_prototype_hall_page_label', 10, 3 );

if ( ! function_exists( 'bd324_prototype_hall_page_of' ) ) :
	/**
	 * Turns the pagination numbers into one line, "Page 2 of 4". The design
	 * has Newer and Older only, no numbered pagination.
	 *
	 * @since PrototypeHall 0.1.0
	 *
	 * @param string $content The rendered block.
	 * @param array  $block   The parsed block.
	 * @return string
	 */
	function bd324_prototype_hall_page_of( $content, $block ) {
		if ( ! bd324_prototype_hall_has_class( $block, 'c-pager__page' ) ) {
			return $content;
		}

		global $wp_query;
		$max = $wp_query ? (int) $wp_query->max_num_pages : 0;
		if ( $max < 2 ) {
			return '';
		}

		$paged = max( 1, (int) get_query_var( 'paged' ) );
		return sprintf(
			'<span class="wp-block-query-pagination-numbers c-label c-pager__page">%s</span>',
			esc_html(
				sprintf(
					/* translators: 1: current page number, 2: total pages. */
					__( 'Page %1$d of %2$d', 'prototype-hall' ),
					$paged,
					$max
				)
			)
		);
	}
endif;
add_filter( 'render_block_core/query-pagination-numbers', 'bd324_prototype_hall_page_of', 10, 2 );

if ( ! function_exists( 'bd324_prototype_hall_result_count' ) ) :
	/**
	 * Fills the %d in the archive and search count lines with the number of
	 * posts the main query found.
	 *
	 * @since PrototypeHall 0.1.0
	 *
	 * @param string $content The rendered block.
	 * @param array  $block   The parsed block.
	 * @return string
	 */
	function bd324_prototype_hall_result_count( $content, $block ) {
		if ( false === strpos( $content, '%d' ) ) {
			return $content;
		}
		if ( ! bd324_prototype_hall_has_class( $block, 'c-archive-count' ) && ! bd324_prototype_hall_has_class( $block, 'c-search-count' ) ) {
			return $content;
		}

		global $wp_query;
		$found = $wp_query ? (int) $wp_query->found_posts : 0;
		return str_replace( '%d', number_format_i18n( $found ), $content );
	}
endif;
add_filter( 'render_block_core/paragraph', 'bd324_prototype_hall_result_count', 10, 2 );
