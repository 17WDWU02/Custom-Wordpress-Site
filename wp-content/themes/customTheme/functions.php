<?php 

function customThemeEnqueues(){
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style('customStyle', get_template_directory_uri() . '/css/customThemeStyle.css', array(), '1.0.0', 'all');
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array(), '3.3.7', true);
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
		'height' => 500,
		'flex-height' => false,
		'flex-width' => true,
		'default-text-color' => '',
		'header-text' => true,
		'default-text-color' => '000',
		'uploads' => true,
		'video' => false
	);
add_theme_support('custom-header', $customHeaderSetting);
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));

function customTheme_sidebar_setup(){
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar-1',
		'class' => 'custom',
		'description' => 'This is our main sidebar on the right',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>'
	));
}
add_action('widgets_init', 'customTheme_sidebar_setup');
























