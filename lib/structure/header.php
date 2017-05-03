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
		//echo '</p>';
		echo '</div>';
		echo'</nav>';
	}
	ob_end_clean();
?>