<?php
/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

if ( ! function_exists( 'interview_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own interview_setup() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 */
function interview_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentysixteen
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'twentysixteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentysixteen' );

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
	 * Enable support for custom logo.
	 *
	 *  @since Intrview 1.0
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
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

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

}
 function read_more($limit)
 {
   $post_content = explode(" ", get_the_content());
   $less_content = array_slice($post_content, 0, $limit);
   echo implode(" ",$less_content );
   
 }
endif; // interview_setup
add_action( 'after_setup_theme', 'interview_setup');

// Metabox Setup reuired file

  require_once  '/metabox/init.php';
  require_once '/metabox/functions.php';


// Custom post-type slider

  /**
  * Registers a new post type
  * @uses $wp_post_types Inserts new post type object into the list
  *
  * @param string  Post type key, must not exceed 20 characters
  * @param array|string  See optional args description above.
  * @return object|WP_Error the registered post type object, or an error object
  */
  function inter_slider() {
  
  	$labels = array(
  		'name'                => __( 'sliders', 'interview_text' ),
  		'singular_name'       => __( 'Slider', 'interview_text' ),
  		'add_new'             => _x( 'Add New Slider', 'interview_text', 'interview_text' ),
  		'add_new_item'        => __( 'Add New Slider', 'interview_text' ),
  		'edit_item'           => __( 'Edit Slider', 'interview_text' ),
  		'new_item'            => __( 'New Slider', 'interview_text' ),
  		'view_item'           => __( 'View Slider', 'interview_text' ),
  		'search_items'        => __( 'Search sliders', 'interview_text' ),
  		'not_found'           => __( 'No sliders found', 'interview_text' ),
  		'not_found_in_trash'  => __( 'No sliders found in Trash', 'interview_text' ),
  		'parent_item_colon'   => __( 'Parent Slider:', 'interview_text' ),
  		'menu_name'           => __( 'sliders', 'interview_text' ),
  	);
  
  	$args = array(
  		'labels'                   => $labels,
  		'hierarchical'        => false,
  		'description'         => 'description',
  		'taxonomies'          => array(),
  		'public'              => true,
  		'show_ui'             => true,
  		'show_in_menu'        => true,
  		'show_in_admin_bar'   => true,
  		'menu_position'       => null,
  		'menu_icon'           => null,
  		'show_in_nav_menus'   => true,
  		'publicly_queryable'  => true,
  		'exclude_from_search' => false,
  		'has_archive'         => true,
  		'query_var'           => true,
  		'can_export'          => true,
  		'rewrite'             => true,
  		'capability_type'     => 'post',
  	 'supports'            => array(
  		'title','thumbnail'
  		 	)
  	);
  
  	register_post_type( 'slider', $args );
  }
  
  add_action( 'init', 'inter_slider' );

//service post type

  /**
  * Registers a new post type
  * @uses $wp_post_types Inserts new post type object into the list
  *
  * @param string  Post type key, must not exceed 20 characters
  * @param array|string  See optional args description above.
  * @return object|WP_Error the registered post type object, or an error object
  */
  function inter_service() {
  
  	$labels = array(
  		'name'                => __( 'Services', 'interview_text' ),
  		'singular_name'       => __( 'Service', 'interview_text' ),
  		'add_new'             => _x( 'Add New Service', 'interview_text', 'interview_text' ),
  		'add_new_item'        => __( 'Add New Service', 'interview_text' ),
  		'edit_item'           => __( 'Edit Service', 'interview_text' ),
  		'new_item'            => __( 'New Service', 'interview_text' ),
  		'view_item'           => __( 'View Service', 'interview_text' ),
  		'search_items'        => __( 'Search Services', 'interview_text' ),
  		'not_found'           => __( 'No Services found', 'interview_text' ),
  		'not_found_in_trash'  => __( 'No Services found in Trash', 'interview_text' ),
  		'parent_item_colon'   => __( 'Parent Service:', 'interview_text' ),
  		'menu_name'           => __( 'Services', 'interview_text' ),
  	);
  
  	$args = array(
  		'labels'                   => $labels,
  		'hierarchical'        => false,
  		'description'         => 'description',
  		'taxonomies'          => array(),
  		'public'              => true,
  		'show_ui'             => true,
  		'show_in_menu'        => true,
  		'show_in_admin_bar'   => true,
  		'menu_position'       => null,
  		'menu_icon'           => null,
  		'show_in_nav_menus'   => true,
  		'publicly_queryable'  => true,
  		'exclude_from_search' => false,
  		'has_archive'         => true,
  		'query_var'           => true,
  		'can_export'          => true,
  		'rewrite'             => true,
  		'capability_type'     => 'post',
  		'supports'            => array('title')
  	);
  
  	register_post_type( 'service', $args );
  }
  
  add_action( 'init', 'inter_service' );

  // For Domain section

  /**
  * Registers a new post type
  * @uses $wp_post_types Inserts new post type object into the list
  *
  * @param string  Post type key, must not exceed 20 characters
  * @param array|string  See optional args description above.
  * @return object|WP_Error the registered post type object, or an error object
  */
  function inter_domain() {
  
  	$labels = array(
  		'name'                => __( 'Domains', 'interview_text' ),
  		'singular_name'       => __( 'Domain', 'interview_text' ),
  		'add_new'             => _x( 'Add New Domain', 'interview_text', 'interview_text' ),
  		'add_new_item'        => __( 'Add New Domain', 'interview_text' ),
  		'edit_item'           => __( 'Edit Domain', 'interview_text' ),
  		'new_item'            => __( 'New Domain', 'interview_text' ),
  		'view_item'           => __( 'View Domain', 'interview_text' ),
  		'search_items'        => __( 'Search Domains', 'interview_text' ),
  		'not_found'           => __( 'No Domains found', 'interview_text' ),
  		'not_found_in_trash'  => __( 'No Domains found in Trash', 'interview_text' ),
  		'parent_item_colon'   => __( 'Parent Domain:', 'interview_text' ),
  		'menu_name'           => __( 'Domains', 'interview_text' ),
  	);
  
  	$args = array(
  		'labels'                   => $labels,
  		'hierarchical'        => false,
  		'description'         => 'description',
  		'taxonomies'          => array(),
  		'public'              => true,
  		'show_ui'             => true,
  		'show_in_menu'        => true,
  		'show_in_admin_bar'   => true,
  		'menu_position'       => null,
  		'menu_icon'           => null,
  		'show_in_nav_menus'   => true,
  		'publicly_queryable'  => true,
  		'exclude_from_search' => false,
  		'has_archive'         => true,
  		'query_var'           => true,
  		'can_export'          => true,
  		'rewrite'             => true,
  		'capability_type'     => 'post',
  		'supports'            => array(
  			'title'
  			)
  	);
  
  	register_post_type( 'domain', $args );
  }
  
  add_action( 'init', 'inter_domain' );

//domain taxonomy register

  /**
   * Create a taxonomy
   *
   * @uses  Inserts new taxonomy object into the list
   * @uses  Adds query vars
   *
   * @param string  Name of taxonomy object
   * @param array|string  Name of the object type for the taxonomy object.
   * @param array|string  Taxonomy arguments
   * @return null|WP_Error WP_Error if errors, otherwise null.
   */
  function inter_domain_left() {
  
    $labels = array(
      'name'          => _x( 'left domain categories', 'Taxonomy plural name', 'interview_text' ),
      'singular_name'      => _x( 'left-category', 'Taxonomy singular name', 'interview_text' ),
      'search_items'      => __( 'Search left domain categories', 'interview_text' ),
      'popular_items'      => __( 'Popular left domain categories', 'interview_text' ),
      'all_items'        => __( 'All left domain categories', 'interview_text' ),
      'parent_item'      => __( 'Parent left-category', 'interview_text' ),
      'parent_item_colon'    => __( 'Parent left-category', 'interview_text' ),
      'edit_item'        => __( 'Edit left-category', 'interview_text' ),
      'update_item'      => __( 'Update left-category', 'interview_text' ),
      'add_new_item'      => __( 'Add New left-category', 'interview_text' ),
      'new_item_name'      => __( 'New left-category Name', 'interview_text' ),
      'add_or_remove_items'  => __( 'Add or remove left domain categories', 'interview_text' ),
      'choose_from_most_used'  => __( 'Choose from most used interview_text', 'interview_text' ),
      'menu_name'        => __( 'left-category', 'interview_text' ),
    );
  
    $args = array(
      'labels'            => $labels,
      'public'            => true,
      'show_in_nav_menus' => true,
      'show_admin_column' => false,
      'hierarchical'      => true,
      'show_tagcloud'     => true,
      'show_ui'           => true,
      'query_var'         => true,
      'rewrite'           => true,
      'query_var'         => true,
      'capabilities'      => array(),
    );
  
    register_taxonomy( 'left-daomain', array( 'domain' ), $args );
  }
  
  add_action( 'init', 'inter_domain_left' );

  //footer widget register 
  
  function footer_widget()
  {
       /**
      * Creates a sidebar
      * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
      */
      $args = array(
        'name'          => __( 'footer Widget', 'interview_text' ),
        'id'            => 'footer_sidebar_1',
        'description'   => 'Footer address area',
        'class'         => '',
        'before_widget' => '<div class="col-md-3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="title">',
        'after_title'   => '</h4>'
      );
    
      register_sidebar( $args );
    
  }

  add_action( 'widgets_init', 'footer_widget');


  //Enqueue  script and style


     /**
    * Enqueue scripts
    *
    * @param string $handle Script name
    * @param string $src Script url
    * @param array $deps (optional) Array of script names on which this script depends
    * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
    * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
    */
   function interview_css_js() {
     wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/font-awesome.min.css', 'null', 'v1.0', 'all' );
     wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri().'/css/bootstrap.min.css', 'null', 'v1.0', 'all' );
     wp_enqueue_style( 'owl-carosual', get_template_directory_uri().'/css/owl.carousel.min.css', 'null', 'v1.0', 'all' );
     wp_enqueue_style( 'bxslider-min-css', get_template_directory_uri().'/css/jquery.bxslider.min.css', 'null', 'v1.0', 'all' );
     wp_enqueue_style( 'main-css', get_template_directory_uri().'/style.css', 'null', 'v1.0', 'all' );
     wp_enqueue_style( 'responsive-css', get_template_directory_uri().'/css/responsive-style.css', 'null', 'v1.0', 'all' );
     wp_enqueue_style( 'main-color-1', get_template_directory_uri().'/css/main-color-1.css', 'null', 'v1.0', 'all' );

     wp_enqueue_script( 'jquery-min', get_template_directory_uri().'/js/jquery-2.2.2.min.js', '', false, true);
     wp_enqueue_script( 'bootstrap-min-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery-min'), false, true);
     wp_enqueue_script( 'validate-js', get_template_directory_uri().'/js/jquery.validate.min.js', array('jquery-min'), false, true);
     wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery-min'), false, true);
     wp_enqueue_script( 'jquery-bxslider-js', get_template_directory_uri().'/js/jquery.bxslider.min.js', array('jquery-min'), false, true);
     wp_enqueue_script( 'jquery-waypoints-min-js', get_template_directory_uri().'/js/jquery.waypoints.min.js', array('jquery-min'), false, true);
     wp_enqueue_script( 'counterup-min-js', get_template_directory_uri().'/js/jquery.counterup.min.js', array('jquery-min'), false, true);
     wp_enqueue_script( 'isotope-min-js', get_template_directory_uri().'/js/isotope.min.js', array('jquery-min'), false, true);
     wp_enqueue_script( 'retina-js', get_template_directory_uri().'/js/retina.min.js', array('jquery-min'), false, true);
     wp_enqueue_script( 'main-js', get_template_directory_uri().'/js/main.js', array('jquery-min'), false, true);
     
   }
 
   add_action( 'wp_enqueue_scripts', 'interview_css_js' );
 
  
  
  




