=== Product image Lazy Loader for WooCommerce ===

Contributors: rynald0s
Tags: WooCommerce, lazy load, lazy loader, product images, shop page images, product image, archive page, lazy   
Requires at least: 5.0
Tested up to: 5.4.2
Stable tag: 1.0
WC requires at least: 3.0
WC tested up to: 4.2.0
License: GPLv3 or later License
URI: http://www.gnu.org/licenses/gpl-3.0.html

This plugin lazy loads WooCommerce  product images on the shop and archive pages.

== Description ==

This plugin lazy loads WooCommerce product images on the shop and archive pages.

== Installation ==

1. Download the .zip file
2. Upload and extract the contents of the zip file to your wp-content/plugins/folder
3. Activate the plugin from your WP-admin / Plugins
4. Enjoy!

== Frequently Asked Questions ==

= How to add my own placeholder image? =

1. Open the wc-lazy-loader.php file in the plugin folder 
2. Scroll down to line 42 
3. Replace the "placeholder-image.png" with a valid place holder image URL from your website. 

= Why use event handlers and not IntersectionObserver API =

Good question! Using event handlers is considered to be one of the most compatible ways to approach lazy loading that works pretty much on every browser. We will, however, be switching to IntersectionObserver API in the next release. 

= I installed the plugin. Did it make any difference in my performance? =

You can use https://gtmetrix.com/ or https://developers.google.com/speed/pagespeed/insights/ to check. It would be a good idea to check your site before installing this plugin, and then again after installing and activating this plugin.

== Credits == 

https://web.dev/lazy-loading-images/

== Screenshots ==

none

== Changelog ==

= 1.0 =

* first release version
