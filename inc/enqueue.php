<?php
/**
 * UnderStrap enqueue scripts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		
		
		// font awesome css
		wp_enqueue_style( 'understrap-fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), $css_version );
		// icofont css
		wp_enqueue_style( 'understrap-icofont', get_template_directory_uri() . '/css/icofont.css', array(), $css_version );
		// meanmenu css
		wp_enqueue_style( 'understrap-meanmenu', get_template_directory_uri() . '/css/meanmenu.min.css', array(), $css_version );
		// slick css
		wp_enqueue_style( 'understrap-slick', get_template_directory_uri() . '/css/slick.css', array(), $css_version );
		// carousel css
		wp_enqueue_style( 'understrap-carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), $css_version );
		// shortcodes css
		wp_enqueue_style( 'understrap-carousel', get_template_directory_uri() . '/css/shortcode/shortcodes.css', array(), $css_version );
		// theme css
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );
		// responsive css
		wp_enqueue_style( 'understrap-responsive', get_template_directory_uri() . '/css/responsive.css', array(), $css_version );
		
		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );

		// modernizr js
		wp_enqueue_script( 'understrap-modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array(), $js_version, true );
		// Theme js
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		// carousel js 
		wp_enqueue_script( 'understrap-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), $js_version, true );
		// slick js 
		wp_enqueue_script( 'understrap-slick', get_template_directory_uri() . '/js/slick.min.js', array(), $js_version, true );
		// plugins js 
		wp_enqueue_script( 'understrap-plugins', get_template_directory_uri() . '/js/plugins.js', array(), $js_version, true );
		
		// main js 
		wp_enqueue_script( 'understrap-main', get_template_directory_uri() . '/js/main.js', array(), $js_version, true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // End of if function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
