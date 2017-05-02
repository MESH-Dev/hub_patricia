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
        echo '<div class="gateway-line"><a class="social-nav-cta" href="">Take the first step →</a></div>';
    }
    ob_end_clean();

?>