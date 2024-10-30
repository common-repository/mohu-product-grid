<?php
/*
    Plugin Name: MoHu Product Grid
    Plugin URI: https://wordpress.org/plugins/mohu-product-grid
    Description: MoHo Product Grid is the best plugin of grid for creating a fully customizable "grid layout". we offering a "Products grid" with Title, Price, Retting, Add to cart and Favorite button change color, Hover Color, Size, border, etc. not only grid also we are offering Favorite system on the plugins and lot more with extensive flexibility.
    Version: 1.0.0
    Requires at least: 5.2
    Requires PHP: 7.2
    Author: jubayerdev
    Author URI: https://www.linkedin.com/in/jubayerdev/
    License: GPL v2 or later
    License URI:  https://www.gnu.org/licenses/gpl-2.0.html
    Text Domain: moowprogrid
    Domain Path: /languages
*/
// plugin sceurity issue
if(!defined('ABSPATH')){
    header("Location: /");   
    die();
}


function __Moho__moo_woocommece_product_grid_css_js_add(){
        /// CSS file
        wp_enqueue_style( 'moowprogrid-bootstrap-file-css', plugins_url( 'assets/css/bootstrap.css', __FILE__) );
    wp_enqueue_style( 'moowprogrid-font-awesome-file', plugins_url( 'assets/css/all.css', __FILE__) );
    wp_enqueue_style( 'moowprogrid-font-awesome-min-file', plugins_url( 'assets/css/all.min.css', __FILE__) );
    $main_css = filemtime(plugin_dir_path(__FILE__) . 'assets/css/style.css');
    wp_enqueue_style( 'moowprogrid-main-css-file', plugins_url( 'assets/css/style.css', __FILE__), array(), $main_css );
       
    /// js file
    $dep = array('jquery');
    wp_enqueue_script('moowprogrid-bootstrap-file-js', plugins_url( 'assets/js/bootstrap.js', __FILE__ ), $dep, '1.1.1', true);    
    wp_enqueue_script('moowprogrid-main-file-js', plugins_url( 'assets/js/main.js', __FILE__ ), $dep, '1.1.1', true);
}
add_action( 'wp_enqueue_scripts', '__Moho__moo_woocommece_product_grid_css_js_add' );

//grid 1
function __moho__moo_woocommece_product_grid_one(){ 
    ob_start();
        require_once 'template/gridone.php';
    return ob_get_clean();            
}
add_shortcode( 'Moo_Grid_One','__moho__moo_woocommece_product_grid_one' );
// grid 2
function __moho__moo_woocommece_product_grid_two(){ 
    ob_start();
        require_once 'template/gridtwo.php';
    return ob_get_clean();            
}
add_shortcode( 'Moo_Grid_Two','__moho__moo_woocommece_product_grid_two' );
// grid 3
function __Moho__moo_woocommece_product_grid_three(){ 
    ob_start();
        require_once 'template/gridthree.php';
    return ob_get_clean();            
}
add_shortcode( 'Moo_Grid_Three','__Moho__moo_woocommece_product_grid_three' );
// grid 4
function __moho__moo_woocommece_product_grid_four(){ 
    ob_start();
        require_once 'template/gridfour.php';
    return ob_get_clean();            
}
add_shortcode( 'Moo_Grid_Four','__moho__moo_woocommece_product_grid_four' );
// grid 5
function __moho__moo_woocommece_product_grid_five(){ 
    ob_start();
        require_once 'template/gridfive.php';
    return ob_get_clean();            
}
add_shortcode( 'Moo_Grid_Five','__moho__moo_woocommece_product_grid_five' );


// setting using start
require_once ("assets/setting/codestar-framework.php");
require_once ("assets/setting/samples/options.php");
//  setting using end
