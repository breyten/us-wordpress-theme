<?php
/**
 * Bootstrap Basic theme
 *
 * @package bootstrap-basic
 */


/**
 * Required WordPress variable.
 */
if (!isset($content_width)) {
	$content_width = 1170;
}


/**
 * Setup theme and register support wp features.
 */
function bootstrapBasicSetup()
{
	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 *
	 * copy from underscores theme
	 */
	load_theme_textdomain('bootstrap-basic', get_template_directory() . '/languages');

	// add theme support post and comment automatic feed links
	add_theme_support('automatic-feed-links');

	// enable support for post thumbnail or feature image on posts and pages
	add_theme_support('post-thumbnails');

	// add support menu
	register_nav_menus(array(
		'primary' => __('Primary Menu', 'bootstrap-basic'),
	));

	// add post formats support
	add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));

	// add support custom background
	add_theme_support(
		'custom-background',
		apply_filters(
			'bootstrap_basic_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => ''
			)
		)
	);
}// bootstrapBasicSetup
add_action('after_setup_theme', 'bootstrapBasicSetup');


/**
 * Register widget areas
 */
function bootstrapBasicWidgetsInit()
{
	register_sidebar(array(
		'name'          => __('Header right', 'bootstrap-basic'),
		'id'            => 'header-right',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	));

	register_sidebar(array(
		'name'          => __('Navigation bar right', 'bootstrap-basic'),
		'id'            => 'navbar-right',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));

	register_sidebar(array(
		'name'          => __('Sidebar left', 'bootstrap-basic'),
		'id'            => 'sidebar-left',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	));

	register_sidebar(array(
		'name'          => __('Sidebar right', 'bootstrap-basic'),
		'id'            => 'sidebar-right',
		//'before_widget' => '<span id="%1$s">',
		//'after_widget'  => '</span>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	));

	register_sidebar(array(
		'name'          => __('Footer left', 'bootstrap-basic'),
		'id'            => 'footer-left',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	));

	register_sidebar(array(
		'name'          => __('Footer right', 'bootstrap-basic'),
		'id'            => 'footer-right',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	));
}// bootstrapBasicWidgetsInit
add_action('widgets_init', 'bootstrapBasicWidgetsInit');


/**
 * Enqueue scripts & styles
 */
function bootstrapBasicEnqueueScripts()
{
	wp_enqueue_style('bootstrap-basic-style', get_stylesheet_uri());
	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap-theme-style', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
	wp_enqueue_style('fontawesome-style', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.css');

	wp_enqueue_script('modernizr-script', get_template_directory_uri() . '/js/vendor/modernizr.min.js');
	wp_enqueue_script('respond-script', get_template_directory_uri() . '/js/vendor/respond.min.js');
	wp_enqueue_script('html5-shiv-script', get_template_directory_uri() . '/js/vendor/html5shiv.js');
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/vendor/bootstrap.min.js');
	wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js');
}// bootstrapBasicEnqueueScripts
add_action('wp_enqueue_scripts', 'bootstrapBasicEnqueueScripts');

 function fb_move_admin_bar() {
    echo '
    <style type="text/css">
    body {
    margin-top: -28px;
    padding-bottom: 28px;
    }
    body.admin-bar #wphead {
       padding-top: 0;
    }
    body.admin-bar #footer {
       padding-bottom: 28px;
    }
    #wpadminbar {
        top: auto !important;
        bottom: 0;
    }
    #wpadminbar .quicklinks .menupop ul {
        bottom: 28px;
    }
    </style>';
}
// on backend area
add_action( 'admin_head', 'fb_move_admin_bar' );
// on frontend area
add_action( 'wp_head', 'fb_move_admin_bar' );

function us_custom_init() {
	register_post_type(
		'sponsor',
		array(
			'label' => 'Sponsors',
			'labels' => array(
				'singular_name' => 'Sponsor',
			),
			'description' => 'Een sponsor',
			'public' => true,
			'exclude_from_search' => true,
			'publicly_queryable' => false,
			'show_in_nav_menus' => false,
			'menu_position' => 8,
		)
	);
	add_image_size( 'sponsor', 102, 52, true ); //(cropped)

	register_post_type(
		'team',
		array(
			'label' => 'Teams',
			'labels' => array(
				'singular_name' => 'Team',
			),
			'description' => 'Een team',
			'public' => true,
			//'exclude_from_search' => false,
			//'publicly_queryable' => false,
			//'show_in_nav_menus' => true,
			'menu_position' => 9,
			'supports' => array(
			  'title', 'editor', 'custom-fields', 'thumbnail'
			),
			'rewrite' => array(
			  'slug' => 'team'
			)
		)
	);

  //flush_rewrite_rules();

}
add_action( 'init', 'us_custom_init' );

function my_rewrite_flush() {
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'my_rewrite_flush' );

/**
 * This is a modification of image_downsize() function in wp-includes/media.php
 * we will remove all the width and height references, therefore the img tag
 * will not add width and height attributes to the image sent to the editor.
 *
 * @param bool false No height and width references.
 * @param int $id Attachment ID for image.
 * @param array|string $size Optional, default is 'medium'. Size of image, either array or string.
 * @return bool|array False on failure, array on success.
 */
function myprefix_image_downsize( $value = false, $id, $size ) {
    if ( !wp_attachment_is_image($id) )
        return false;

    $img_url = wp_get_attachment_url($id);
    $is_intermediate = false;
    $img_url_basename = wp_basename($img_url);

    // try for a new style intermediate size
    if ( $intermediate = image_get_intermediate_size($id, $size) ) {
        $img_url = str_replace($img_url_basename, $intermediate['file'], $img_url);
        $is_intermediate = true;
    }
    elseif ( $size == 'thumbnail' ) {
        // Fall back to the old thumbnail
        if ( ($thumb_file = wp_get_attachment_thumb_file($id)) && $info = getimagesize($thumb_file) ) {
            $img_url = str_replace($img_url_basename, wp_basename($thumb_file), $img_url);
            $is_intermediate = true;
        }
    }

    // We have the actual image size, but might need to further constrain it if content_width is narrower
    if ( $img_url) {
        return array( $img_url, 0, 0, $is_intermediate );
    }
    return false;
}

/* Remove the height and width refernces from the image_downsize function.
 * We have added a new param, so the priority is 1, as always, and the new
 * params are 3.
 */
add_filter( 'image_downsize', 'myprefix_image_downsize', 1, 3 );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Custom dropdown menu and navbar in walker class
 */
require get_template_directory() . '/inc/BootstrapBasicMyWalkerNavMenu.php';


/**
 * Template functions
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * --------------------------------------------------------------
 * Theme widget & widget hooks
 * --------------------------------------------------------------
 */
require get_template_directory() . '/inc/widgets/BootstrapBasicSearchWidget.php';
require get_template_directory() . '/inc/template-widgets-hook.php';
