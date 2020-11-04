<?php
/**
 * include file
 *
 * @package worldtrac
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'understrap_include_file' );


if ( ! function_exists( 'understrap_include_file' ) ) {
    function understrap_include_file() {
        /**
         * Framework internal file
         */
        require_once get_stylesheet_directory() .'/inc/codestar-framework/codestar-framework.php';

        /**
         * Framework External File
         */
        require get_stylesheet_directory() . '/inc/theme-options.php';

    }
}