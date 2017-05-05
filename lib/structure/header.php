<?php 
/**
 * Header Functions
 *
 * This file controls the various header displays on the site
 *
 * @category     Child Theme
 * @package      Admin
 * @author       Web Savvy Marketing
 * @copyright    Copyright (c) 2012, Web Savvy Marketing
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since        1.0.0
 *
 */
 	ob_start();
	add_action( 'genesis_before_header', 'mesh_before_header' );
	
	function mesh_before_header(){
		$top_link = get_field('global_form_link', 'options');
		echo '<nav class="gateway-line">';
		echo '<div class="wrap">';
		//echo '<p style="color:white;">'
		echo '<a class="social-nav-cta" href="'.$top_link.'">Take the first step →</a>';
		echo '<div class="social-icons">';
		echo '<a href="">';
		echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><defs><style>.cls-1{fill:#fff;}</style></defs><title>002-twitter</title><path class="cls-1" d="M25,0A25,25,0,1,0,50,25,25,25,0,0,0,25,0ZM37.44,19.39l0,.8c0,8.14-6.19,17.51-17.51,17.51a17.42,17.42,0,0,1-9.43-2.77A12.66,12.66,0,0,0,12,35a12.35,12.35,0,0,0,7.64-2.63,6.17,6.17,0,0,1-5.75-4.27A6.33,6.33,0,0,0,16.65,28a6.16,6.16,0,0,1-4.94-6v-.08a6.15,6.15,0,0,0,2.79.77,6.16,6.16,0,0,1-1.91-8.22,17.47,17.47,0,0,0,12.69,6.43,6.16,6.16,0,0,1,10.49-5.61,12.46,12.46,0,0,0,3.91-1.49A6.17,6.17,0,0,1,37,17.18a12.34,12.34,0,0,0,3.53-1A12.44,12.44,0,0,1,37.44,19.39Z"/></svg>';
		echo '</a>';
		echo '<a href="">';
		echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49.65 49.65"><defs><style>.cls-1{fill:#fff;}</style></defs><title>003-facebook-logo-button</title><path class="cls-1" d="M24.83,0A24.83,24.83,0,1,0,49.65,24.83,24.85,24.85,0,0,0,24.83,0ZM31,25.7H27V40.1H21V25.7H18.13V20.61H21V17.32c0-2.36,1.12-6,6-6l4.43,0v4.94H28.23A1.22,1.22,0,0,0,27,17.62v3h4.56Z"/></svg>';
		echo '</a>';
		echo '<a href="">';
		echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49.65 49.65"><defs><style>.cls-1{fill:#fff;}</style></defs><title>001-instagram-logo</title><path class="cls-1" d="M24.83,29.8a5,5,0,1,0-5-5A5,5,0,0,0,24.83,29.8Z"/><polygon class="cls-1" points="35.68 18.75 35.68 14.58 35.68 13.96 35.05 13.96 30.89 13.97 30.91 18.76 35.68 18.75"/><path class="cls-1" d="M24.83,0A24.83,24.83,0,1,0,49.65,24.83,24.85,24.85,0,0,0,24.83,0ZM38.94,21.93V33.49a5.46,5.46,0,0,1-5.46,5.46H16.16a5.46,5.46,0,0,1-5.46-5.46V16.17a5.46,5.46,0,0,1,5.46-5.46H33.49a5.46,5.46,0,0,1,5.46,5.46Z"/><path class="cls-1" d="M32.55,24.83a7.72,7.72,0,1,1-14.88-2.9H13.46V33.49a2.71,2.71,0,0,0,2.71,2.7H33.49a2.71,2.71,0,0,0,2.71-2.7V21.93H32A7.62,7.62,0,0,1,32.55,24.83Z"/></svg>';	
		echo '</a>';	
		echo '</div>';
		//echo '</p>';
		echo '</div>';
		echo'</nav>';
	}
	ob_end_clean();
?>