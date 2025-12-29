<?php
/**
 * barcover functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package barcover
 */

if ( ! function_exists( 'barcover_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function barcover_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on barcover, use a find and replace
		 * to change 'barcover' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'barcover', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'barcover' ),
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
		// add_theme_support( 'custom-background', apply_filters( 'barcover_custom_background_args', array(
		// 	'default-color' => 'ffffff',
		// 	'default-image' => '',
		// ) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		// add_theme_support( 'custom-logo', array(
		// 	'height'      => 250,
		// 	'width'       => 250,
		// 	'flex-width'  => true,
		// 	'flex-height' => true,
		// ) );
	}
endif;
add_action( 'after_setup_theme', 'barcover_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function barcover_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'barcover_content_width', 640 );
}
add_action( 'after_setup_theme', 'barcover_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function barcover_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'barcover' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'barcover' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'barcover_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function barcover_scripts() {
	wp_enqueue_style( 'barcover-style', get_stylesheet_uri() );

	wp_enqueue_script( 'barcover-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'barcover-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'barcover-pushy', get_template_directory_uri() . '/lib/js/pushy.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'barcover_scripts' );


function my_init()   
{  
    if (!is_admin())   
    {  
        wp_deregister_script('jquery');  
  
        // Load the copy of jQuery that comes with WordPress  
        // The last parameter set to TRUE states that it should be loaded  
        // in the footer.  
        wp_register_script('jquery', '/wp-includes/js/jquery/jquery.js', FALSE, '1.11.0', TRUE);  
  
        wp_enqueue_script('jquery');  
    }  
}  
add_action('init', 'my_init');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
#require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

# Add contact details options page

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Contact Details',
		'menu_title'	=> 'Contact Details',
		'menu_slug' 	=> 'options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url' => 'dashicons-smartphone',
	));
	
}


function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
			background-image: url(http://sail1261.com/bc/wp-content/themes/barcover/img/logo.svg);
			height: 65px;
			width: 320px;
			background-size: 320px 100px;
			background-repeat: no-repeat;
			padding-bottom: 45px;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// ACF metabox ordering bug patch 19-06-2018
// function prefix_reset_metabox_positions(){
// 	delete_user_meta( wp_get_current_user()->ID, 'meta-box-order_post' );
// 	delete_user_meta( wp_get_current_user()->ID, 'meta-box-order_page' );
// 	delete_user_meta( wp_get_current_user()->ID, 'meta-box-order_YOUR_CPT_SLUG' );
//   }
//   add_action( 'admin_init', 'prefix_reset_metabox_positions' );

function remove_menus(){
  
  remove_menu_page( 'edit.php' );                   //Posts
//   remove_menu_page( 'tools.php' );                  //Tools
  remove_menu_page( 'profile.php' );                  //Tools
  remove_menu_page( 'edit-comments.php' );                  //Tools

}
add_action( 'admin_menu', 'remove_menus' );

/* Remove Contact Form 7 Links from dashboard menu items if not admin */
if (!(current_user_can('administrator'))) {
	function remove_wpcf7() {
	    remove_menu_page( 'wpcf7' ); 
	}

	add_action('admin_menu', 'remove_wpcf7');
     }

/**
 * Custom Shortcodes
 */
require get_template_directory() . '/inc/shortcodes.php';

