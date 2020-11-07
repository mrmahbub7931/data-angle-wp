<?php
/**
 * include file
 *
 * @package worldtrac
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Register Custom Post Type
function data_angle_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Team members', 'Post Type General Name', 'understrap' ),
		'singular_name'         => _x( 'Team member', 'Post Type Singular Name', 'understrap' ),
		'menu_name'             => __( 'Team member', 'understrap' ),
		'name_admin_bar'        => __( 'Team member', 'understrap' ),
		'archives'              => __( 'Team Archives', 'understrap' ),
		'attributes'            => __( 'Team Attributes', 'understrap' ),
		'parent_item_colon'     => __( 'Parent Item:', 'understrap' ),
		'all_items'             => __( 'All members', 'understrap' ),
		'add_new_item'          => __( 'Add New member', 'understrap' ),
		'add_new'               => __( 'Add New', 'understrap' ),
		'new_item'              => __( 'New member', 'understrap' ),
		'edit_item'             => __( 'Edit member', 'understrap' ),
		'update_item'           => __( 'Update member', 'understrap' ),
		'view_item'             => __( 'View member', 'understrap' ),
		'view_items'            => __( 'View member', 'understrap' ),
		'search_items'          => __( 'Search member', 'understrap' ),
		'not_found'             => __( 'Not found', 'understrap' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'understrap' ),
		'featured_image'        => __( 'Featured Image', 'understrap' ),
		'set_featured_image'    => __( 'Set featured image', 'understrap' ),
		'remove_featured_image' => __( 'Remove featured image', 'understrap' ),
		'use_featured_image'    => __( 'Use as featured image', 'understrap' ),
		'insert_into_item'      => __( 'Insert into item', 'understrap' ),
		'uploaded_to_this_item' => __( 'Uploaded to this member', 'understrap' ),
		'items_list'            => __( 'Members list', 'understrap' ),
		'items_list_navigation' => __( 'Members list navigation', 'understrap' ),
		'filter_items_list'     => __( 'Filter members list', 'understrap' ),
	);
	$args = array(
		'label'                 => __( 'Team member', 'understrap' ),
		'description'           => __( 'Add Team member', 'understrap' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'revisions', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'rest_base'             => 'team_member',
	);
	register_post_type( 'team_member', $args );

}
add_action( 'init', 'data_angle_custom_post_type', 0 );