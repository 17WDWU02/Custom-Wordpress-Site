<?php 

function customThemeEnqueues(){
	wp_enqueue_style('customStyle', get_template_directory_uri() . '/css/customThemeStyle.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customScript', get_template_directory_uri() . '/js/customThemeScript.js', array(), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'customThemeEnqueues');

function customThemeSetUp(){
	add_theme_support('menus');
	register_nav_menu('primary', 'This is the main navigation, positioned at the top of the page');
	register_nav_menu('seconday', 'This is the seconday navigation, located at the bottom of the page');

}

add_action('init', 'customThemeSetUp');

add_theme_support('custom-background');
$customHeaderSetting = array(
		'default-image' => '',
		'width' => 1280,
		'height' => 400,
		'flex-height' => false,
		'flex-width' => true,
		'default-text-color' => '',
		'header-text' => true,
		'uploads' => true,
		'video' => false
	);
add_theme_support('custom-header', $customHeaderSetting);
add_theme_support('post-thumbnails');












