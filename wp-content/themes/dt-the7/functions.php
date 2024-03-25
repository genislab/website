<?php
/**
 * The7 theme.
 *
 * @since   1.0.0
 *
 * @package The7
 */

defined( 'ABSPATH' ) || exit;

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since 1.0.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1200; /* pixels */
}

/**
 * Initialize theme.
 *
 * @since 1.0.0
 */
require trailingslashit( get_template_directory() ) . 'inc/init.php';


function admin_redirect() {
if ( !is_user_logged_in()) {
   wp_redirect( home_url('/wp-login.php') );
   exit;
}
}
add_action('get_header', 'admin_redirect');


// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'channels', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'channel', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Channel', 'text_domain' ),
		'name_admin_bar'        => __( 'Channel', 'text_domain' ),
		'archives'              => __( 'Obsolete Channel', 'text_domain' ),
		'attributes'            => __( 'Channel Configurations', 'text_domain' ),
		'parent_item_colon'     => __( 'Node:', 'text_domain' ),
		'all_items'             => __( 'My Nodes', 'text_domain' ),
		'add_new_item'          => __( 'Add Node', 'text_domain' ),
		'add_new'               => __( 'Create', 'text_domain' ),
		'new_item'              => __( 'Create Node', 'text_domain' ),
		'edit_item'             => __( 'Configure Node', 'text_domain' ),
		'update_item'           => __( 'Publish Node', 'text_domain' ),
		'view_item'             => __( 'View Node', 'text_domain' ),
		'view_items'            => __( 'View Nodes', 'text_domain' ),
		'search_items'          => __( 'Find Nodes', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Channel Image', 'text_domain' ),
		'set_featured_image'    => __( 'Channel Document holder', 'text_domain' ),
		'remove_featured_image' => __( 'Remove Channel', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Attach to Node', 'text_domain' ),
		'items_list'            => __( 'Channels Network', 'text_domain' ),
		'items_list_navigation' => __( 'Local space for channels', 'text_domain' ),
		'filter_items_list'     => __( 'Filter channels', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'channels',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'channel', 'text_domain' ),
		'description'           => __( 'channels are the data nodes', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'taxonomies'            => array( 'devices', 'apps' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'https://encrypted-tbn0.gstatic.com/images?q=tbnANd9GcRzIvt4UwbIRRd8fUWNbv1MJN5x_vICud-ARnLgJRGlx4mS17D2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'channel', $args );

}
add_action( 'init', 'custom_post_type', 0 );


// Register Custom Post Type
function products_post_type() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Products', 'text_domain' ),
		'name_admin_bar'        => __( 'Product', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Product:', 'text_domain' ),
		'all_items'             => __( 'All Products', 'text_domain' ),
		'add_new_item'          => __( 'Add New Product', 'text_domain' ),
		'add_new'               => __( 'New Product', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Product', 'text_domain' ),
		'update_item'           => __( 'Update Product', 'text_domain' ),
		'view_item'             => __( 'View Product', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search products', 'text_domain' ),
		'not_found'             => __( 'No products found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No products found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'text_domain' ),
		'description'           => __( 'Product information pages.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'products_post_type', 0 );