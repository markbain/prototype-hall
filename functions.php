<?php
/**
 * PrototypeHall functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PrototypeHall
 * @since PrototypeHall 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'bd324_prototype_hall_enqueue_styles' ) ) :
	/**
	 * Enqueues the theme stylesheets on the front.
	 *
	 * WordPress does not enqueue a block theme's style.css automatically, so
	 * both files are registered here. foundation.css is a declared dependency
	 * of style.css, which fixes the load order: reset / base / layout (layered)
	 * first, components (unlayered) second. See the wp-block-theme skill, "The layer contract".
	 *
	 * @since PrototypeHall 1.0.0
	 *
	 * @return void
	 */
	function bd324_prototype_hall_enqueue_styles() {
		$version = wp_get_theme()->get( 'Version' );

		wp_enqueue_style(
			'bd324-prototype-hall-foundation',
			get_parent_theme_file_uri( 'assets/css/foundation.css' ),
			array(),
			$version
		);
		wp_style_add_data(
			'bd324-prototype-hall-foundation',
			'path',
			get_parent_theme_file_path( 'assets/css/foundation.css' )
		);

		wp_enqueue_style(
			'bd324-prototype-hall-style',
			get_parent_theme_file_uri( 'style.css' ),
			array( 'bd324-prototype-hall-foundation' ),
			$version
		);
		wp_style_add_data(
			'bd324-prototype-hall-style',
			'path',
			get_parent_theme_file_path( 'style.css' )
		);

		wp_enqueue_script(
			'bd324-prototype-hall-theme',
			get_parent_theme_file_uri( 'assets/js/theme.js' ),
			array(),
			$version,
			array(
				'strategy'  => 'defer',
				'in_footer' => true,
			)
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'bd324_prototype_hall_enqueue_styles' );

if ( ! function_exists( 'bd324_prototype_hall_editor_style' ) ) :
	/**
	 * Enqueues the same two stylesheets in the editors, so what an editor sees
	 * matches the front end.
	 *
	 * @since PrototypeHall 1.0.0
	 *
	 * @return void
	 */
	function bd324_prototype_hall_editor_style() {
		add_editor_style(
			array(
				'assets/css/foundation.css',
				'style.css',
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'bd324_prototype_hall_editor_style' );

if ( ! function_exists( 'bd324_prototype_hall_pattern_categories' ) ) :
	/**
	 * Registers the theme's pattern category.
	 *
	 * @since PrototypeHall 1.0.0
	 *
	 * @return void
	 */
	function bd324_prototype_hall_pattern_categories() {
		register_block_pattern_category(
			'bd324_prototype_hall_section',
			array(
				'label'       => __( 'PrototypeHall sections', 'prototype-hall' ),
				'description' => __( 'Sections provided by the theme.', 'prototype-hall' ),
			)
		);
	}
endif;
add_action( 'init', 'bd324_prototype_hall_pattern_categories' );

if ( ! function_exists( 'bd324_prototype_hall_caption_width' ) ) :
	/**
	 * Drops the inline width from classic [caption] figures.
	 *
	 * img_caption_shortcode() writes style="width: Npx" from the image's width.
	 * An inline width beats every stylesheet, and the cap that would rein it in
	 * - the constrained layout's content size - is core CSS, so a caption wider
	 * than the column (or the phone) pushes the page sideways. Without it the
	 * figure sizes like a block image: capped by the column, then by its parent.
	 *
	 * @since PrototypeHall 1.0.0
	 *
	 * @return int Zero, which tells core to omit the style attribute.
	 */
	function bd324_prototype_hall_caption_width() {
		return 0;
	}
endif;
add_filter( 'img_caption_shortcode_width', 'bd324_prototype_hall_caption_width' );

if ( ! function_exists( 'bd324_prototype_hall_comment_form_heading' ) ) :
	/**
	 * Sets the comment form's "Leave a Reply" as an h2, not core's h3.
	 *
	 * On a post with no comments there is no Comments title, so an h3 would
	 * follow the post's h1 directly and skip a level. style.css keeps the h3
	 * size.
	 *
	 * @since PrototypeHall 1.0.0
	 *
	 * @param array $defaults The comment form arguments.
	 * @return array
	 */
	function bd324_prototype_hall_comment_form_heading( $defaults ) {
		$defaults['title_reply_before'] = '<h2 id="reply-title" class="comment-reply-title">';
		$defaults['title_reply_after']  = '</h2>';
		return $defaults;
	}
endif;
add_filter( 'comment_form_defaults', 'bd324_prototype_hall_comment_form_heading' );

if ( ! function_exists( 'bd324_prototype_hall_focusable_pre' ) ) :
	/**
	 * Puts every pre in post content and comments in the tab order.
	 *
	 * Code never wraps (see foundation.css), so a long line scrolls sideways,
	 * and a keyboard user can only scroll a region that takes focus.
	 *
	 * @since PrototypeHall 1.0.0
	 *
	 * @param string $content The post content or comment text.
	 * @return string
	 */
	function bd324_prototype_hall_focusable_pre( $content ) {
		if ( false === stripos( $content, '<pre' ) ) {
			return $content;
		}

		$tags = new WP_HTML_Tag_Processor( $content );
		while ( $tags->next_tag( 'pre' ) ) {
			if ( null === $tags->get_attribute( 'tabindex' ) ) {
				$tags->set_attribute( 'tabindex', '0' );
			}
		}
		return $tags->get_updated_html();
	}
endif;
add_filter( 'the_content', 'bd324_prototype_hall_focusable_pre', 20 );
add_filter( 'comment_text', 'bd324_prototype_hall_focusable_pre', 20 );

if ( ! function_exists( 'bd324_prototype_hall_blog_home_title' ) ) :
	/**
	 * Gives the blog home a title: the posts page's own.
	 *
	 * The blog home (home.html) titles itself with a Query Title block, but
	 * core renders that block only on archives and search - the posts page is
	 * neither, so it would have no heading at all. When the block comes back
	 * empty there, fill in the title of the page set as the posts page in
	 * Settings > Reading, keeping the block's heading level, font size and
	 * classes so the template still decides how it looks.
	 *
	 * @since PrototypeHall 1.0.0
	 *
	 * @param string $block_content The rendered block, empty off archives.
	 * @param array  $block         The parsed block.
	 * @return string
	 */
	function bd324_prototype_hall_blog_home_title( $block_content, $block ) {
		if ( '' !== trim( $block_content ) || ! is_home() ) {
			return $block_content;
		}

		$posts_page = (int) get_option( 'page_for_posts' );
		if ( ! $posts_page ) {
			return $block_content;
		}

		$attrs   = $block['attrs'] ?? array();
		$level   = (int) ( $attrs['level'] ?? 1 );
		$tag     = 0 === $level ? 'p' : 'h' . min( 6, max( 1, $level ) );
		$classes = array( 'wp-block-query-title' );
		if ( ! empty( $attrs['fontSize'] ) ) {
			$classes[] = 'has-' . $attrs['fontSize'] . '-font-size';
		}
		if ( ! empty( $attrs['textAlign'] ) ) {
			$classes[] = 'has-text-align-' . $attrs['textAlign'];
		}
		if ( ! empty( $attrs['className'] ) ) {
			$classes[] = $attrs['className'];
		}

		return sprintf(
			'<%1$s class="%2$s">%3$s</%1$s>',
			$tag,
			esc_attr( implode( ' ', $classes ) ),
			esc_html( get_the_title( $posts_page ) )
		);
	}
endif;
add_filter( 'render_block_core/query-title', 'bd324_prototype_hall_blog_home_title', 10, 2 );

if ( ! function_exists( 'bd324_prototype_hall_js_flag' ) ) :
	/**
	 * Marks the document as scripted before first paint.
	 *
	 * The menu and search buttons, and the panel and dialog they open, exist
	 * only when the theme script runs. Without this class the navigation stays
	 * visible at every width and the buttons stay hidden, so a visitor without
	 * JavaScript is never left without a menu.
	 *
	 * @since PrototypeHall 1.0.0
	 *
	 * @return void
	 */
	function bd324_prototype_hall_js_flag() {
		wp_print_inline_script_tag( "document.documentElement.classList.add('has-js');" );
	}
endif;
add_action( 'wp_head', 'bd324_prototype_hall_js_flag', 1 );

require get_parent_theme_file_path( 'inc/block-styles.php' );
require get_parent_theme_file_path( 'inc/render.php' );
