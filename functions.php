<?php
// Add Theme Support
add_theme_support( 'custom-logo', array(
        'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
) );

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

}
add_action( 'widgets_init', 'custom_widgets' );
?>