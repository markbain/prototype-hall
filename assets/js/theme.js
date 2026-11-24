/**
 * Theme behaviour: the menu panel, the search modal, the ticker, and the
 * sign-up placeholder. No dependencies. The markup works without it: the
 * navigation stays visible and the buttons stay hidden (see the has-js class,
 * set in the document head).
 */
( function () {
	'use strict';

	var FOCUSABLE = 'a[href], button:not([disabled]), input:not([disabled]):not([type="hidden"]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])';
	var root = document.documentElement;
	var masthead = document.querySelector( '.c-masthead' );

	function visible( el ) {
		return !! ( el.offsetWidth || el.offsetHeight || el.getClientRects().length );
	}

	function focusables( container ) {
		return Array.prototype.filter.call( container.querySelectorAll( FOCUSABLE ), visible );
	}

	function setLabel( button, open ) {
		var label = open ? button.getAttribute( 'data-label-close' ) : button.getAttribute( 'data-label-open' );
		if ( label ) {
			button.setAttribute( 'aria-label', label );
		}
		button.setAttribute( 'aria-expanded', open ? 'true' : 'false' );
	}

	if ( masthead ) {
		var header = masthead.querySelector( '.c-header' );
		var menuBtn = masthead.querySelector( '.c-iconbtn--menu' );
		var searchBtn = masthead.querySelector( '.c-iconbtn--search' );
		var panel = masthead.querySelector( '.c-menu-panel' );
		var modal = masthead.querySelector( '.c-search-modal' );
		var dialog = modal ? modal.querySelector( '.c-dialog' ) : null;
		var closeBtn = modal ? modal.querySelector( '.c-dialog__close button' ) : null;
		var active = null; // 'menu' | 'search' | null

		if ( dialog ) {
			dialog.setAttribute( 'role', 'dialog' );
			dialog.setAttribute( 'aria-modal', 'true' );
			dialog.setAttribute( 'aria-labelledby', 'search-dialog-title' );
		}

		var measure = function () {
			if ( header ) {
				masthead.style.setProperty( '--header-h', header.offsetHeight + 'px' );
			}
		};

		var open = function ( which ) {
			if ( active ) {
				close( false );
			}
			active = which;
			measure();
			root.classList.add( 'has-scroll-lock' );
			if ( which === 'menu' && panel && menuBtn ) {
				panel.classList.add( 'is-open' );
				setLabel( menuBtn, true );
				var first = panel.querySelector( 'a[href]' );
				if ( first ) {
					first.focus();
				}
			} else if ( which === 'search' && modal && searchBtn ) {
				modal.classList.add( 'is-open' );
				setLabel( searchBtn, true );
				var field = modal.querySelector( 'input[type="search"]' );
				if ( field ) {
					field.focus();
				}
			}
		};

		var close = function ( restore ) {
			var was = active;
			active = null;
			root.classList.remove( 'has-scroll-lock' );
			if ( panel ) {
				panel.classList.remove( 'is-open' );
			}
			if ( modal ) {
				modal.classList.remove( 'is-open' );
			}
			if ( menuBtn ) {
				setLabel( menuBtn, false );
			}
			if ( searchBtn ) {
				setLabel( searchBtn, false );
			}
			if ( restore !== false ) {
				var target = was === 'search' ? searchBtn : menuBtn;
				if ( target ) {
					target.focus();
				}
			}
		};

		if ( menuBtn ) {
			menuBtn.addEventListener( 'click', function () {
				if ( active === 'menu' ) {
					close();
				} else {
					open( 'menu' );
				}
			} );
		}
		if ( searchBtn ) {
			searchBtn.addEventListener( 'click', function () {
				if ( active === 'search' ) {
					close();
				} else {
					open( 'search' );
				}
			} );
		}
		if ( closeBtn ) {
			closeBtn.addEventListener( 'click', function () {
				close();
			} );
		}
		if ( modal ) {
			modal.addEventListener( 'click', function ( event ) {
				if ( event.target === modal || ( dialog && ! dialog.contains( event.target ) && event.target.closest( '.c-search-modal' ) === modal && event.target === modal.firstElementChild ) ) {
					close();
				}
			} );
		}

		document.addEventListener( 'keydown', function ( event ) {
			if ( ! active ) {
				return;
			}
			if ( event.key === 'Escape' ) {
				event.preventDefault();
				close();
				return;
			}
			if ( event.key !== 'Tab' ) {
				return;
			}
			var scope = active === 'menu' ? panel : dialog;
			var items = scope ? focusables( scope ) : [];
			// The menu button sits before the panel in the document, so it
			// heads the list: first and last then match the real Tab order.
			if ( active === 'menu' && menuBtn ) {
				items.unshift( menuBtn );
			}
			if ( ! items.length ) {
				return;
			}
			var first = items[ 0 ];
			var last = items[ items.length - 1 ];
			var current = document.activeElement;
			if ( ! scope.contains( current ) && current !== menuBtn ) {
				event.preventDefault();
				first.focus();
			} else if ( event.shiftKey && current === first ) {
				event.preventDefault();
				last.focus();
			} else if ( ! event.shiftKey && current === last ) {
				event.preventDefault();
				first.focus();
			}
		}, true );

		window.addEventListener( 'resize', measure );
		measure();
	}

	// Ticker: double the items for a seamless loop, hide the copy from
	// assistive technology, and pause on hover or focus (CSS). Skipped under
	// reduced motion, where the lines stay wrapped and still.
	var reduce = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' );
	var setupTicker = function () {
		Array.prototype.forEach.call( document.querySelectorAll( '.c-ticker' ), function ( ticker ) {
			var track = ticker.querySelector( '.c-ticker__track' );
			var copy = ticker.querySelector( '.c-ticker__track[data-copy]' );
			if ( ! track ) {
				return;
			}
			if ( reduce && reduce.matches ) {
				ticker.classList.remove( 'is-looping' );
				if ( track.hasAttribute( 'data-looped' ) ) {
					Array.prototype.forEach.call( track.querySelectorAll( '[data-clone]' ), function ( node ) {
						node.parentNode.removeChild( node );
					} );
					track.removeAttribute( 'data-looped' );
				}
				return;
			}
			if ( ! track.hasAttribute( 'data-looped' ) && ! copy ) {
				Array.prototype.slice.call( track.children ).forEach( function ( item ) {
					var clone = item.cloneNode( true );
					clone.setAttribute( 'aria-hidden', 'true' );
					clone.setAttribute( 'data-clone', '' );
					track.appendChild( clone );
				} );
				track.setAttribute( 'data-looped', '' );
			}
			ticker.classList.add( 'is-looping' );
		} );
	};
	setupTicker();
	if ( reduce && reduce.addEventListener ) {
		reduce.addEventListener( 'change', setupTicker );
	}

	// The sign-up row is a placeholder: no service is wired in, so the form
	// goes nowhere. Wire a handler to its action, or replace the form.
	Array.prototype.forEach.call( document.querySelectorAll( '.c-signup__form:not([action*="://"])' ), function ( form ) {
		if ( form.getAttribute( 'action' ) ) {
			return;
		}
		form.addEventListener( 'submit', function ( event ) {
			event.preventDefault();
		} );
	} );
}() );
