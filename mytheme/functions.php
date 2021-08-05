<?php
/**
 * redgroupvanna functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package redgroupvanna
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'redgroupvanna_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function redgroupvanna_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on redgroupvanna, use a find and replace
		 * to change 'redgroupvanna' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'redgroupvanna', get_template_directory() . '/languages' );

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
		add_image_size('large', 1280, null );


		add_theme_support( 'menus' );

		//register_nav_menu( 'left_menu', 'Primary Menu' );

		register_nav_menus( array(
			'header' => __( 'left_menu', 'Primary Menu' ),
			'footer_menu' => __( 'Footer menu', 'Footer' ), 
		) );

		
			// This theme uses wp_nav_menu() in one location.
		// register_nav_menus(
		// 	array(
		// 		'theme_location'  => 'left_menu',
		// 		'container' => false
		// 	)
		// );

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
				'redgroupvanna_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

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
add_action( 'after_setup_theme', 'redgroupvanna_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function redgroupvanna_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'redgroupvanna_content_width', 640 );
}
add_action( 'after_setup_theme', 'redgroupvanna_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function redgroupvanna_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'redgroupvanna' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'redgroupvanna' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'redgroupvanna_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function redgroupvanna_scripts() {
	wp_enqueue_style( 'redgroupvanna-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'redgroupvanna-style', 'rtl', 'replace' );


	wp_enqueue_style( 'mytheme_styles-custom', get_stylesheet_directory_uri() . '/css/main.min.css' );	

	wp_enqueue_script( 'redgroupvanna-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );



	wp_register_script( 'main-js', get_stylesheet_directory_uri() . '/js/app.min.js', false, true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


	wp_enqueue_script('main-js');
}
add_action( 'wp_enqueue_scripts', 'redgroupvanna_scripts' );


// fix for the underscores Uncaught ReferenceError: wp is not defined
function loadAdminScripts() {    
  wp_enqueue_script(
    'pluginAdminPage', 
    plugin_dir_url(__FILE__) . 'pluginAdminPage.js',
    ['jquery', 'underscore']
    );
  }
add_action('admin_enqueue_scripts', 'loadAdminScripts');


add_action( 'wp_print_scripts', 'de_script', 100 );

function de_script() {
	wp_dequeue_script( 'jquery' );
	wp_deregister_script( 'jquery' );
}


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






function blog_scripts() {
	// Register the script
	wp_register_script( 'red-script', get_template_directory_uri(). '/libs/ajaxCall.js',  false, true );

	// Localize the script with new data
	$script_data_array = array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'security' => wp_create_nonce( 'load_more_posts' ),
	);
	wp_localize_script( 'red-script', 'blog', $script_data_array );

	// Enqueued script with localized data.
	wp_enqueue_script( 'red-script' );
}
add_action( 'wp_enqueue_scripts', 'blog_scripts' );


add_action('wp_ajax_load_posts_by_ajax_callback', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax_callback', 'load_posts_by_ajax_callback');

function load_posts_by_ajax_callback() {
	check_ajax_referer('load_more_posts', 'security');
	$paged = $_POST['page'];
	$template = $_POST['template'];



	if($template === 'very') :
		

			global $post;
			$catID = $_POST['id'];
			$args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'cat' => 3,
				'paged' => $paged,
				'posts_per_page' => -1
			);
			$blog_posts = new WP_Query( $args );
		

		if ( $blog_posts->have_posts() ) : 
			while ( $blog_posts->have_posts() ) : 
				$blog_posts->the_post(); 

			$categoryId = the_category_ID(false);
			
			if($categoryId == $catID) :
				get_template_part( 'inc/template', 'photo' );
			endif; 
			
		endwhile;
		endif; 


	else: 
		// if($template == 'video') :
		// 	$args = array(
		// 		'post_type' => 'post',
		// 		'post_status' => 'publish',
		// 		'cat' => 33,
		// 		'posts_per_page' => '3',
		// 		'paged' => $paged,
		// 		'meta_query' => array(
		// 			array(
		// 				'key' => 'id_ютуб_видео',
		// 				'value'   => array(''),
		// 				'compare' => 'NOT IN'
		// 			)
		// 		)
		// 	);
		// endif;

		if($template == 'blog') :
			$args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'cat' => 2,
				'posts_per_page' => '2',
				'paged' => $paged
			);
		endif;

		// if($template == 'service') :
		// 	$args = array(
		// 		'post_type' => 'post',
		// 		'post_status' => 'publish',
		// 		'cat' => 19,
		// 		'posts_per_page' => '2',
		// 		'paged' => $paged
		// 	);
		// endif;

		$blog_posts = new WP_Query( $args );
		
 
		if ( $blog_posts->have_posts() ) :
			while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); 
				get_template_part( 'inc/template', $template );
			endwhile;
		 endif;

		endif;
		wp_die();

}




