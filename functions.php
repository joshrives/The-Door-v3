<?php
/**
 * The Door v3 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The_Door_v3
 */

if ( ! function_exists( 'the_door_v3_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function the_door_v3_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on The Door v3, use a find and replace
	 * to change 'the-door-v3' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'the-door-v3', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'the-door-v3' ),
		'footer' => esc_html__( 'Footer', 'the-door-v3' ),
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
	add_theme_support( 'custom-background', apply_filters( 'the_door_v3_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'the_door_v3_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_door_v3_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'the_door_v3_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_door_v3_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_door_v3_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'the-door-v3' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'the-door-v3' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'the_door_v3_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function the_door_v3_scripts() {
	wp_enqueue_style( 'the-door-v3-style', get_stylesheet_uri() );

	wp_enqueue_script( 'functions', get_template_directory_uri() . '/_js/functions-min.js', array('jquery'), '20161005', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_door_v3_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/*Staff Custom Post Type*/
function staff_taxonomy() {
       register_taxonomy(
        'staff-type',
        'staff',
        array(
            'hierarchical' => true,
            'label' => 'Staff Type',
            'query_var' => true,
            'rewrite' => array('slug' => 'staff-type')
        )
    );
}
add_action( 'init', 'staff_taxonomy' );
add_action( 'init', 'create_staff_post_type' );
function create_staff_post_type() {
    register_post_type( 'staff',
        array(
            'labels' => array(
                'name' => __( 'Staff' ),
                'singular_name' => __( 'Staff' ),
                'hierarchical' => true
            ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array("slug" => "staff", 'with_front' => false), // Permalinks format
        'supports' => array('title','editor', 'thumbnail',  'page-attributes'),
        'taxonomies' => array( 'post_tag', 'category '),
        )
    );
    //flush_rewrite_rules( true );
}
/*Testimony Custom Post Type*/
function testimony_taxonomy() {
       register_taxonomy(
        'testimony-type',
        'testimony',
        array(
            'hierarchical' => true,
            'label' => 'Testimony Type',
            'query_var' => true,
            'rewrite' => array('slug' => 'testimony-type')
        )
    );
}
add_action( 'init', 'testimony_taxonomy' );
add_action( 'init', 'create_testimony_post_type' );
function create_testimony_post_type() {
    register_post_type( 'testimony',
        array(
            'labels' => array(
                'name' => __( 'Testimonies' ),
                'singular_name' => __( 'Testimony' ),
                'hierarchical' => true
            ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array("slug" => "testimony", 'with_front' => false), // Permalinks format
        'supports' => array('title','editor', 'thumbnail',  'page-attributes'),
        'taxonomies' => array( 'post_tag', 'category '),
        )
    );
    //flush_rewrite_rules( true );
}
/*Sermon Custom Post Type*/
function sermon_taxonomy() {
       register_taxonomy(
        'sermon-type',
        'sermon',
        array(
            'hierarchical' => true,
            'label' => 'Sermon Series',
            'query_var' => true,
            'rewrite' => array('slug' => 'sermon-type', 'with_front' => false)
        )
    );
}
add_action( 'init', 'sermon_taxonomy' );
add_action( 'init', 'create_sermon_post_type' );
function create_sermon_post_type() {
    register_post_type( 'sermon',
        array(
            'labels' => array(
                'name' => __( 'Sermons' ),
                'singular_name' => __( 'Sermon' ),
                'hierarchical' => true
            ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array("slug" => "sermon", 'with_front' => false), // Permalinks format
        'supports' => array('title','editor', 'thumbnail',  'page-attributes'),
        'taxonomies' => array( 'post_tag', 'category '),
        )
    );
    //flush_rewrite_rules( true );
}
function create_post_type() {
    $bibleArgs = array(
            'label'  => 'Bible Reading',
            'labels' => array(
                'singular_name' => 'Daily Reading'
                ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'author'),
            'rewrite' => array('slug' => 'reading')
        );
    register_post_type( 'reading', $bibleArgs );
}
add_action( 'init', 'create_post_type' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
