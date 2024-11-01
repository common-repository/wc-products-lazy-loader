<?php

/*
 Plugin Name: Product image Lazy Loader for WooCommerce
 Plugin URI: http://rynaldo.com
 Description: This plugin lazy loads your WooCommerce product images on the shop and archive pages.
 Author: Rynaldo Stoltz
 Author URI: https://profiles.wordpress.org/rynald0s/
 Version: 1.0
 License: GPLv3 or later License
 URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

if ( ! defined( 'ABSPATH' ) ) { 
    exit; 
}

add_action( 'wp_enqueue_scripts', 'enqueue_lazyloader' );

function enqueue_lazyloader() {
wp_enqueue_script( 'script', plugin_dir_url( __FILE__ ) . 'lazyload.js' );
}

add_action('init', function(){
    remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
    add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
});

if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {
    function woocommerce_template_loop_product_thumbnail() {
        echo woocommerce_get_product_thumbnail();
    } 
}

if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {   
    function woocommerce_get_product_thumbnail( $size = 'shop_catalog' ) {
        global $post, $woocommerce;
        $output = '';

        if ( has_post_thumbnail() ) {
            $src = get_the_post_thumbnail_url( $post->ID, $size );
            $output .= '<img class="lazy" src="placeholder-image.png" data-src="' . $src . '" data-srcset="' . $src . '" alt="Lazy loading image">';
        } else {
             $output .= wc_placeholder_img( $size );
        }

        return $output;
    }
}

