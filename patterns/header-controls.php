<?php
/**
 * Title: Header controls
 * Slug: bd324-prototype-hall/header-controls
 * Categories: bd324_prototype_hall_section
 * Inserter: no
 * Description: The search and menu buttons. Two buttons are markup no core block can express (they carry a state that assistive technology reads), so this one pattern holds them as custom HTML.
 *
 * @package PrototypeHall
 * @since PrototypeHall 0.1.0
 */

?>
<!-- wp:html -->
<button class="c-iconbtn c-iconbtn--search" type="button" aria-haspopup="dialog" aria-controls="search-modal" aria-expanded="false" aria-label="<?php esc_attr_e( 'Search', 'prototype-hall' ); ?>" data-label-open="<?php esc_attr_e( 'Search', 'prototype-hall' ); ?>" data-label-close="<?php esc_attr_e( 'Close search', 'prototype-hall' ); ?>"><span class="c-loupe" aria-hidden="true"></span></button>
<button class="c-iconbtn c-iconbtn--menu" type="button" aria-controls="menu-panel" aria-expanded="false" aria-label="<?php esc_attr_e( 'Menu', 'prototype-hall' ); ?>" data-label-open="<?php esc_attr_e( 'Menu', 'prototype-hall' ); ?>" data-label-close="<?php esc_attr_e( 'Close menu', 'prototype-hall' ); ?>"><span class="c-bars" aria-hidden="true"><i></i><i></i><i></i></span></button>
<!-- /wp:html -->
