<?php
/**
 * Title: Sign-up form
 * Slug: bd324-prototype-hall/signup-form
 * Categories: bd324_prototype_hall_section
 * Inserter: no
 * Description: Placeholder email form for the sign-up row. It is not wired to any service: it is markup no core block can express, so it is custom HTML. Point its action at a handler, or replace it with a form plugin's block.
 *
 * @package PrototypeHall
 * @since PrototypeHall 0.1.0
 */

?>
<!-- wp:html -->
<form class="c-signup__form" action="" method="post" novalidate>
	<div class="c-signup__field">
		<label class="c-label" for="signup-email"><?php esc_html_e( 'Email address', 'prototype-hall' ); ?></label>
		<input class="c-input" id="signup-email" name="email" type="email" autocomplete="email" placeholder="<?php esc_attr_e( '[you@example.com]', 'prototype-hall' ); ?>">
	</div>
	<button class="wp-element-button c-signup__submit" type="submit"><?php esc_html_e( '[Subscribe]', 'prototype-hall' ); ?></button>
	<p class="c-signup__msg c-label" role="status"></p>
</form>
<!-- /wp:html -->
