<?php
// theme files

function theme_files() {
	wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'theme_files');

// Add Theme Support

// title tag support
add_theme_support( 'title-tag');

// custom logo support
add_theme_support( 'custom-logo', array(
        'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
) );

// add featured images
add_theme_support( 'post-thumbnails' );

// Add HTML5 Theme Support
function wpdocs_after_setup_theme() {
	add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

// CUSTOM WIDGETS

function custom_widgets() {

	register_sidebar( array(
		'name'          => 'Home Banner Slider',
		'id'            => 'home_banner_slider',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

		register_sidebar( array(
			'name'          => 'Home Sidebar',
			'id'            => 'home_sidebar',
			'before_widget' => '<aside class="home-side-widget">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => 'Home Footer Widgets',
			'id'            => 'home_footer_widgets',
			'before_widget' => '<aside class="footer-widget">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		) );

}

add_action( 'widgets_init', 'custom_widgets' );
?>