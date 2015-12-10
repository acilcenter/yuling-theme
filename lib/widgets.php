<?php 

/* 
 * 
 * Sidebars/Widgets
 *
 */

// Cause Sidebar is a weird name for widget areas that aren't sidebars.

register_sidebar( array(
    'name' => __( 'Footer Left', 'yld' ),
    'id' => 'footer_left',
    'description' => __( 'The left-most footer widget.', 'yld' ),
    'before_widget' => '<li id="%1$s" class="widget -left %2$s -sidebar">',
	'after_widget'  => '</li>',
	'before_title'  => '<h4 class="widget-title -footer">',
	'after_title'   => '</h4>',
) );

register_sidebar( array(
    'name' => __( 'Footer Right', 'yld' ),
    'id' => 'footer_right',
    'description' => __( 'The right footer widget.', 'yld' ),
    'before_widget' => '<li id="%1$s" class="widget -right %2$s -sidebar">',
	'after_widget'  => '</li>',
	'before_title'  => '<h4 class="widget-title -footer">',
	'after_title'   => '</h4>',
) );

register_sidebar( array(
    'name' => __( 'Blog Sidebar', 'yld' ),
    'id' => 'sidebar_blog',
    'description' => __( 'The sidebar on the blog.', 'yld' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s -sidebar">',
    'after_widget'  => '</li>',
    'before_title'  => '<h4 class="widget-title -sidebar">',
    'after_title'   => '</h4>',
) );

register_sidebar( array(
    'name' => __( 'Projects Sidebar', 'yld' ),
    'id' => 'sidebar_projects',
    'description' => __( 'The sidebar on the projects archive.', 'yld' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s -sidebar">',
    'after_widget'  => '</li>',
    'before_title'  => '<h4 class="widget-title -sidebar">',
    'after_title'   => '</h4>',
) );

