<?php
 /**
 *
 * @package   Calm Functionality
 * @author    VNJF <nikkiwu9@gmail.com>
 * @license   GPL-2.0+
 * @copyright 2018 VNJF, RED Academy
 *
 * @wordpress-plugin
 * Plugin Name: Calm Functionality
 * Description: This very important plugin contains all of the core functionality for this website so that it remains theme-independent.
 * Version:     1.0.0
 * Author:      VNJF
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define plugin directory
 *
 * @since 1.0.0
 */
define( 'RF_DIR', dirname( __FILE__ ) );

/**
 * General housekeeping and plugin activation tasks
 *
 * @since 1.0.0
 */
include_once( RF_DIR . '/lib/functions/general.php' );
register_activation_hook( __FILE__, array( 'RF_General', 'plugin_activation' ) );

/**
 * Post types
 *
 * @since 1.0.0
 */
include_once( RF_DIR . '/lib/functions/post-types.php' );

/**
 * Taxonomies
 *
 * @since 1.0.0
 */
include_once( RF_DIR . '/lib/functions/taxonomies.php' );


// Register Testimony Post Type
function testimony() {

	$labels = array(
		'name'                  => 'Testimonials',
		'singular_name'         => 'Testimony',
		'menu_name'             => 'Testimonials',
		'name_admin_bar'        => 'Testimony',
		'archives'              => 'Testimony Archives',
		'attributes'            => 'Testimony Attributes',
		'parent_item_colon'     => 'Parent Testimony:',
		'all_items'             => 'All Testimonials',
		'add_new_item'          => 'Add New Testimony',
		'add_new'               => 'Add Testimony',
		'new_item'              => 'New Testimony',
		'edit_item'             => 'Edit Testimony',
		'update_item'           => 'Update Testimony',
		'view_item'             => 'View Testimony',
		'view_items'            => 'View Testimonials',
		'search_items'          => 'Search Testimony',
		'not_found'             => 'Testimony Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into testimony',
		'uploaded_to_this_item' => 'Uploaded to this testimony',
		'items_list'            => 'Testimonials list',
		'items_list_navigation' => 'Testimonials list navigation',
		'filter_items_list'     => 'Filter testimonials list',
	);
	$args = array(
		'label'                 => 'Testimony',
		'description'           => 'Testimonials',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimony', $args );

}
add_action( 'init', 'testimony', 0 );