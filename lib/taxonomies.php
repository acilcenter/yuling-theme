<?php 

/* 
 * 
 * Taxonomies
 *
 */

// Same as with Custom Types, you only need the arguments and register_taxonomy function here. They are hooked into WordPress in functions.php.

	$labels = array(
		'name'                       => _x( 'Collections', 'Taxonomy General Name', 'yld' ),
		'singular_name'              => _x( 'Collection', 'Taxonomy Singular Name', 'yld' ),
		'menu_name'                  => __( 'Collections', 'yld' ),
		'all_items'                  => __( 'All Collections', 'yld' ),
		'parent_item'                => __( 'Parent Collection', 'yld' ),
		'parent_item_colon'          => __( 'Parent Collection:', 'yld' ),
		'new_item_name'              => __( 'New Collection Name', 'yld' ),
		'add_new_item'               => __( 'Add New Collection', 'yld' ),
		'edit_item'                  => __( 'Edit Collection', 'yld' ),
		'update_item'                => __( 'Update Collection', 'yld' ),
		'view_item'                  => __( 'View Collection', 'yld' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'yld' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'yld' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'yld' ),
		'popular_items'              => __( 'Popular Collections', 'yld' ),
		'search_items'               => __( 'Search Collections', 'yld' ),
		'not_found'                  => __( 'Not Found', 'yld' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'collection', array( 'piece' ), $args );

	$labels = array(
		'name'                       => _x( 'Industries', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Industry', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Industries', 'text_domain' ),
		'all_items'                  => __( 'All Industries', 'text_domain' ),
		'parent_item'                => __( 'Parent Industry', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Industry:', 'text_domain' ),
		'new_item_name'              => __( 'New Industry Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Industry', 'text_domain' ),
		'edit_item'                  => __( 'Edit Industry', 'text_domain' ),
		'update_item'                => __( 'Update Industry', 'text_domain' ),
		'view_item'                  => __( 'View Industry', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'industry', array( 'project' ), $args );

