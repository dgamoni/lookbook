<?php
/*
Plugin Name: Lookbook WooCommerce
Plugin URI: http://lookbook.monothemes.com
Description: Lookbook template for WooCommerce shop
Author: Andrey Monin
Author URI: http://monothemes.com
Version: 1.0.1


	Copyright: © 2014 Andrey Monin (email : dgamoni@gmail.com)
	License: GNU General Public License v3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

/**
 * Check if WooCommerce is active
 */
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	
	if ( ! class_exists( 'WC_Lookbook_Monothemes' ) ) {
		
		/**
		 * Localisation
		 **/
		load_plugin_textdomain( 'look_book', false, dirname( plugin_basename( __FILE__ ) ) . '/' );

		class WC_Lookbook_Monothemes {
			public function __construct() {
				
				$this->path = dirname( __FILE__ );
				$this->name = basename( $this->path );
				$this->url = plugins_url( "/{$this->name}/" );
				$this->dir = plugin_dir_path( __FILE__ );

				// called after all plugins have loaded
				add_action( 'plugins_loaded', array( &$this, 'include_addon_functions' ) );

				// called just before the woocommerce template functions are included
				add_action( 'init', array( &$this, 'include_shortcode_functions' ), 20 );

				// include custom template for theme
				require_once( $this->dir . 'class-page-template.php' );
				add_action( 'init', array( 'Page_Template_Plugin', 'get_instance' ) );
				
				// indicates we are running the admin
				if ( is_admin() ) {
					//include options page
  					require_once( $this->dir . 'lib/class-usage.php');
  					add_action('wp_enqueue_scripts', array(&$this, 'bkend_styles_and_scripts'));
				} else {
					//include frontend style			
					add_action('wp_enqueue_scripts', array(&$this, 'frontend_styles_and_scripts'));	
				}

				// include bfi thumb
				require_once( $this->dir . 'lib/BFI_Thumb.php' );

			}
			
			/**
			 * Frontend load scripts and styles
			 */
			public function frontend_styles_and_scripts() {
				wp_enqueue_script( 'jquery' );
				
				wp_register_script( 'lookbook-js', $this->url .'js/jquery.lookbook.js',array("jquery"),"1.0",false);
				wp_enqueue_script( 'lookbook-js' );

				wp_register_style( 'lookbook-template-css', $this->url .'css/lookbook-template.css' );
				wp_enqueue_style( 'lookbook-template-css' );
			}

			/**
			 * Bkend load scripts and styles
			 */
			public function bkend_styles_and_scripts() {
				
				wp_register_script( 'lookbook-js', $this->url .'js/bk_jquery.lookbook.js',array("jquery"),"1.0",false);
				wp_enqueue_script( 'lookbook-js' );
			}
			
			/**
			 * Inclide Shortcode Template Lookbook 
			 */
			public function include_shortcode_functions() {
				include( $this->dir .'woo-lookbook-shortcode.php' );
			}

			/**
			 * Inclide Addon 
			 */
			public function include_addon_functions() {

				global $data_addon;
				$data_addon = get_option('lookbook_options');

				/**
				* Lazyload addon (tested)
				*/
					// if( $data_addon['lazyload_checkbox_field_id'] == 1) {
				    //	include( $this->dir . 'addon/simple-lazyload/lazyload.php' );
					// }

				/**
				* JQuery Zoom addon
				*/
					if( $data_addon['zoom_checkbox_field_id'] == 1) {
				    	include( $this->dir . 'addon/jquery-zoom/lookbook_zoom.php' );
				    	wp_register_script( 'jquery.jquery-zoom', $this->url .'addon/jquery-zoom/jquery.zoom.min.js',array("jquery"),"1.0",false);
						wp_enqueue_script( 'jquery.jquery-zoom' );
					}
			}	

		}

		// finally instantiate our plugin class and add it to the set of globals
		$GLOBALS['look_book'] = new WC_Lookbook_Monothemes();
	}
}