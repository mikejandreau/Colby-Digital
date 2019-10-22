<?php
/**
 * Digital Colby V1 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Digital_Colby_V1
 */

if ( ! function_exists( 'digitalcolby_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function digitalcolby_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Digital Colby V1, use a find and replace
		 * to change 'digitalcolby' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'digitalcolby', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'digitalcolby' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'digitalcolby_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'digitalcolby_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function digitalcolby_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'digitalcolby_content_width', 640 );
}
add_action( 'after_setup_theme', 'digitalcolby_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function digitalcolby_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'digitalcolby' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'digitalcolby' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'digitalcolby_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function digitalcolby_scripts() {



	wp_enqueue_style( 'digitalcolby-bootstrap-css', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), time() ); 
	wp_enqueue_style( 'digitalcolby-fontawesome-css', get_template_directory_uri() . '/vendor/fontawesome/css/all.min.css', array(), time() ); 
	wp_enqueue_style( 'digitalcolby-fancybox-css', get_template_directory_uri() . '/vendor/fancybox/jquery.fancybox.min.css', array(), time() ); 
	wp_enqueue_style( 'digitalcolby-animate-css', get_template_directory_uri() . '/vendor/wow-js/animate.css', array(), time() ); 


	

	// minified stylesheet
	wp_enqueue_style( 'digitalcolby-min-style', get_template_directory_uri() . '/style.min.css', array(), time() ); 

	// wp_enqueue_style( 'digitalcolby-style', get_stylesheet_uri() );





	wp_enqueue_script( 'digitalcolby-jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), null, true );
	wp_enqueue_script( 'digitalcolby-bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), null, true );
	wp_enqueue_script( 'digitalcolby-jquery-easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array(), null, true );
	wp_enqueue_script( 'digitalcolby-fancybox-js', get_template_directory_uri() . '/vendor/fancybox/jquery.fancybox.min.js', array(), null, true );
	wp_enqueue_script( 'digitalcolby-wow-js', get_template_directory_uri() . '/vendor/wow-js/wow.min.js', array(), null, true );



	wp_enqueue_script( 'digitalcolby-min-scripts', get_template_directory_uri() . '/js/scripts.min.js', array('jquery'), null, true );

	// wp_enqueue_script( 'digitalcolby-navigation', get_template_directory_uri() . '/js/src/navigation.js', array(), '20151215', true );

	// wp_enqueue_script( 'digitalcolby-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'digitalcolby_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}





/**
 * Custom nav walker to add consistent class/ID for CSS/JS targeting.
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';




/**
 * ADD FEATURED IMAGE TO HERO
 * Enable featured image to be background of hero block (default hero image in hero.scss)
 * If featured image has been set, this function gets ID/URL of image and overrides default CSS  
 */
function digitalcolby_custom_background_img(){
	$custom_background_img = NULL;
	if (has_post_thumbnail()) {
		$imgID = get_post_thumbnail_id($post->ID);
		$featuredImage = wp_get_attachment_image_src($imgID, 'full' );
		$imgURL = $featuredImage[0];
		$custom_background_img = '<style type="text/css">.site-wrap {background: url(' . $imgURL . ');}</style>';
	}
	echo $custom_background_img;
}
add_action( 'wp_head', 'digitalcolby_custom_background_img' );






