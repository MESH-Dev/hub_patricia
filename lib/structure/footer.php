<?php

/**
 * Footer Functions
 *
 * This file controls the footer on the site. The standard Genesis footer
 * has been replaced with one that has menu links on the right side and
 * copyright and credits on the left side.
 *
 * @category     ChildTheme
 * @package      Admin
 * @author       Web Savvy Marketing
 * @copyright    Copyright (c) 2012, Web Savvy Marketing
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since        1.0.0
 *
 */

remove_action( 'genesis_footer', 'genesis_do_footer' );

add_action( 'genesis_footer', 'wsm_child_do_footer' );
function wsm_child_do_footer() {

	echo '<div class="footer-left">';

	echo '<form method="get" id="searchform" action="'. get_bloginfo('url') .'/">
			<div class="form input">
				<label for="searchHeader" class="sr-only">Search the site</label>
			<input id="searchHeader" class="hide" type="text" placeholder="Search..." value="'.the_search_query() .'" name="s" id="s" /><button type="submit" class="form submit search-submit" id="searchsubmit" value="" >
				<span class="sr-only">Submit search</span>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
				    <path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21z"/>
				</svg>
			</button>			
		</div>
	</form>';	

	$contact = genesis_get_option( 'wsm_contact_info', 'patricia-settings' );

	if ( !empty($contact ) ) {
		echo '<p class="contact-info">' . do_shortcode( genesis_get_option( 'wsm_contact_info', 'patricia-settings' ) ) . '</p>';
	}

	$copyright = genesis_get_option( 'wsm_copyright', 'patricia-settings' );

	if ( !empty( $copyright ) ) {
		echo '<p class="copy">&copy;'. date('Y') .' '. do_shortcode( genesis_get_option( 'wsm_copyright', 'patricia-settings' ) ) . '</p>';
	}		


	echo '</div><!-- end .footer-left -->';

	echo '<div class="footer-right">';

	// if ( has_nav_menu( 'footer' ) ) {

	// 		$args = array(
	// 			'theme_location' => 'footer',
	// 			'container' => '',
	// 			'menu_class' => genesis_get_option('nav_superfish') ? 'nav genesis-nav-menu superfish' : 'nav genesis-nav-menu',
	// 			'echo' => 0
	// 		);

	// 		$nav = wp_nav_menu( $args );

	// 	}

	// $nav_output = sprintf( '<div class="footer-nav">%2$s%1$s%3$s</div>', $nav, genesis_structural_wrap( 'nav', '<div class="menu-wrap">', 0 ), genesis_structural_wrap( 'nav', '</div><!-- end .wrap -->', 0 ) );

	// echo apply_filters( 'wsm_do_footer_nav', $nav_output, $nav, $args );

	//Constant Contact form here
	echo '<p class="signup-cta">Stay up-to-date with stories from all over West Virginia!</p><form method="get" id="emailform" action="'. get_bloginfo('url') .'/">
			<div class="form input">
				<label for="searchHeader" class="sr-only">Search the site</label>
			<input id="searchHeader" class="hide" type="text" placeholder="Email" value="'.the_search_query() .'" name="s" id="s" /><button type="submit" class="form submit search-submit" id="searchsubmit" value="" >
				<span class="sr-only">Submit search</span>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
				    <path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21z"/>
				</svg>
			</button>			
		</div>
	</form>';
	

	//++++++++++++++++++++++++++++++

	$credit= genesis_get_option( 'wsm_credit', 'patricia-settings' );

	if ( !empty($contact ) ) {
		echo '<p class="credit">' . do_shortcode( genesis_get_option( 'wsm_credit', 'patricia-settings' ) ) . '<br/>';
		echo 'Site by <a href="http://meshfresh.com" target="_blank">MESH</a>';
		echo '</p>';
	}	

	 echo '</div><!-- end .footer-right -->';//<script type="text/javascript" src="wp-content/themes/WVHub/main.js"></script>

}