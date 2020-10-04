<?php
/**
 * estetiquebeb functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package estetiquebeb
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'estetiquebeb_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function estetiquebeb_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on estetiquebeb, use a find and replace
		 * to change 'estetiquebeb' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'estetiquebeb', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'estetiquebeb' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'estetiquebeb_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
		add_theme_support( 'woocommerce' );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'estetiquebeb_setup' );



function remove_woo_actions(){
	
		/**
 * giovanni
 */

			remove_action('woocommerce_template_single_title', 'woocommerce_template_single_title', 5);
			
			remove_action('woocommerce_template_single_rating', 'woocommerce_template_single_rating', 10);
   			
   			remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

   			remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30, 0 );
   			remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0 );


   			remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5, 0 );

   			remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10, 0 );



   			/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */



			//remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );

			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

			
			remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
			
			add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 31 );

			


			//remove_action('woocommerce_template_single_price', 'woocommerce_template_single_price', 10);
			
			//remove_action('woocommerce_template_single_excerpt', 'woocommerce_template_single_excerpt', 20);
			
			//remove_action('woocommerce_template_single_add_to_cart', 'woocommerce_template_single_add_to_cart', 30);
			
			//remove_action('woocommerce_template_single_meta', 'woocommerce_template_single_meta', 40);
			
			//remove_action('woocommerce_template_single_sharing', 'woocommerce_template_single_sharing', 50);
			
			//remove_action('woocommerce_output_product_data_tabs', 'woocommerce_output_product_data_tabs', 10);
		 	
		 	//remove_action('woocommerce_upsell_display', 'woocommerce_upsell_display', 15);
		 	
			//remove_action('woocommerce_output_related_products', 'woocommerce_output_related_products', 20);



/**
 * giovanni
 */

}


add_action( 'after_setup_theme', 'remove_woo_actions' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function estetiquebeb_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'estetiquebeb_content_width', 640 );
}
add_action( 'after_setup_theme', 'estetiquebeb_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function estetiquebeb_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'estetiquebeb' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'estetiquebeb' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'estetiquebeb_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function estetiquebeb_scripts() {


	wp_enqueue_style( 'estetiquebeb-style-lato', "https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" );

	wp_enqueue_style( 'estetiquebeb-style-lora', "https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;1,400&display=swap" );

	wp_enqueue_style( 'estetiquebeb-style-foundation', get_template_directory_uri() . '/css/foundation.css' );

	wp_enqueue_style( 'estetiquebeb-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_style( 'estetiquebeb-leaflet-apa', get_template_directory_uri() . '/js/leaflet/leaflet.css' );

	wp_enqueue_style( 'estetiquebeb-style-apa', get_template_directory_uri() . '/css/app.css' );

	wp_style_add_data( 'estetiquebeb-style', 'rtl', 'replace' );

	wp_enqueue_script( 'estetiquebeb-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'estetiquebeb-foundation', get_template_directory_uri() . '/js/foundation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'estetiquebeb-vendor', get_template_directory_uri() . '/js/vendor.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'estetiquebeb-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'estetiquebeb-app', get_template_directory_uri() . '/js/app.js', array(), _S_VERSION, true );
	
	wp_enqueue_script( 'estetiquebeb-leaflet-app', get_template_directory_uri() . '/js/leaflet/leaflet.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'estetiquebeb_scripts' );



function offerte_js(){
    if (is_singular( 'offerte' )){
    	wp_enqueue_style( 'TimeCircles-style-foundation', get_template_directory_uri() . '/css/TimeCircles.css' );
	    wp_enqueue_script( 'TimeCircles-script', get_template_directory_uri() . '/js/TimeCircles.js', array(), '1', true );
	    wp_enqueue_script( 'offerte-script', get_template_directory_uri() . '/js/offerte.js', array(), '1', true );

}}
add_action('wp_enqueue_scripts', 'offerte_js');



function flickity_js(){
    if ( is_front_page() || is_home()  ){


    	wp_enqueue_script( 'js-flickity', get_template_directory_uri() . '/js/flickity.pkgd.min.js', array(), '2', true );
    	wp_enqueue_style( 'css-flickity',  get_template_directory_uri() . '/css/flickity.css', array(), '2', 'screen' );
    	wp_enqueue_script( 'home-script', get_template_directory_uri() . '/js/home.js', array(), '1', true );
    }
}
add_action('wp_enqueue_scripts', 'flickity_js');


function trattamenti_js(){
    if (is_singular( 'trattamenti' )){
    	
	    wp_enqueue_script( 'trattamenti-script', get_template_directory_uri() . '/js/trattamenti.js', array(), '1', true );

}}
add_action('wp_enqueue_scripts', 'trattamenti_js');

function aftermath_js(){
    
    	
	    wp_enqueue_script( 'aftermath-script', get_template_directory_uri() . '/js/aftermath.js', array(), '1', true );

}
add_action('wp_enqueue_scripts', 'aftermath_js');




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

