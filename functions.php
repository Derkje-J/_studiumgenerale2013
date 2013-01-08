<?php
/**
 * Studium Generale 2013 functions and definitions
 *
 * @package Studium Generale 2013
 * @since Studium Generale 2013 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Studium Generale 2013 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 740; /* pixels */

if ( ! function_exists( 'sg2013_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since Studium Generale 2013 1.0
 */
function sg2013_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/tweaks.php' );

	/**
	 * Custom Theme Options
	 */
	//require( get_template_directory() . '/inc/theme-options/theme-options.php' );

	/**
	 * WordPress.com-specific functions and definitions
	 */
	//require( get_template_directory() . '/inc/wpcom.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Studium Generale 2013, use a find and replace
	 * to change 'sg2013' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'sg2013', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'sg2013' ),
	) );

	/**
	 * Add support for the Aside Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', ) );
}
endif; // sg2013_setup
add_action( 'after_setup_theme', 'sg2013_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since Studium Generale 2013 1.0
 */
function sg2013_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'sg2013' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'sg2013' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'First Front Page Widget Area', 'sg2013' ),
		'id' => 'sidebar-2',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'sg2013' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Second Front Page Widget Area', 'sg2013' ),
		'id' => 'sidebar-3',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'sg2013' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Third Front Page Widget Area', 'sg2013' ),
		'id' => 'sidebar-4',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'sg2013' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Event Footer Widget A', 'sg2013' ),
		'id' => 'sidebar-8',
		'description' => __( 'Appears on event pages below the content', 'sg2013' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Event Footer Widget B', 'sg2013' ),
		'id' => 'sidebar-9',
		'description' => __( 'Appears on event pages below the content', 'sg2013' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'First 404 Widget Area', 'sg2013' ),
		'id' => 'sidebar-10',
		'description' => __( 'Appears when displaying the 404 error code page', 'sg2013' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Second 404 Widget Area', 'sg2013' ),
		'id' => 'sidebar-11',
		'description' => __( 'Appears when displaying the 404 error code page', 'sg2013' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Third 404 Widget Area', 'sg2013' ),
		'id' => 'sidebar-12',
		'description' => __( 'Appears when displaying the 404 error code page', 'sg2013' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'sg2013_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function sg2013_scripts() {
	
	/*
	 * Loads our main stylesheet.
	 */
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	/*
	 * Adds JavaScript for handling the navigation menu hide-and-show behavior.
	 */
	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );

	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/*
	 * Loads javascript to navigate images by keyboard
	 */
	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'sg2013_scripts' );


/**
 * Enqueues scripts and styles for front-end.
 */
function sg2013_custom_fonts() {

	/*
	 * Loads our special font CSS file.
	 *
	 * The use of Open Sans by default is localized. For languages that use
	 * characters not supported by the font, the font can be disabled.
	 *
	 * To disable in a child theme, use wp_dequeue_style()
	 * function mytheme_dequeue_fonts() {
	 *     wp_dequeue_style( 'sg2013-fonts' );
	 * }
	 * add_action( 'wp_enqueue_scripts', 'mytheme_dequeue_fonts', 11 );
	 */

	/* translators: If there are characters in your language that are not supported
	   by Open Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'sg2013' ) ) {
		$subsets = 'latin,latin-ext';

		/* translators: To add an additional Open Sans character subset specific to your language, translate
		   this to 'greek', 'cyrillic' or 'vietnamese'. Do not translate into your own language. */
		$subset = _x( 'no-subset', 'Open Sans font: add new subset (greek, cyrillic, vietnamese)', 'sg2013' );

		if ( 'cyrillic' == $subset )
			$subsets .= ',cyrillic,cyrillic-ext';
		elseif ( 'greek' == $subset )
			$subsets .= ',greek,greek-ext';
		elseif ( 'vietnamese' == $subset )
			$subsets .= ',vietnamese';

		$protocol = is_ssl() ? 'https' : 'http';
		$query_args = array(
			'family' => 'Open+Sans:400italic,700italic,400,700',
			'subset' => $subsets,
		);
		//wp_enqueue_style( 'sg2013-fonts', add_query_arg( $query_args, "$protocol://fonts.googleapis.com/css" ), array(), null );
	}
}
add_action( 'wp_enqueue_scripts', 'sg2013_custom_fonts' );


/**
 * Extends the default WordPress body class to denote:
 * 1. Using a full-width layout, when no active widgets in the sidebar
 *    or full-width template.
 * 2. Front Page template: thumbnail in use and number of sidebars for
 *    widget areas.
 * 3. White or empty background color to change the layout and spacing.
 * 4. Custom fonts enabled.
 * 5. Single or multiple authors.
 *
 * @param array Existing class values.
 * @return array Filtered class values.
 */
function sg2013_body_class( $classes ) {
	$background_color = get_background_color();

	if ( ! is_active_sidebar( 'sidebar-1' ) || is_page_template( 'page-templates/full-width.php' ) )
		$classes[] = 'full-width';

	if ( is_page_template( 'page-templates/front-page.php' ) ) {
		$classes[] = 'template-front-page';
		if ( has_post_thumbnail() )
			$classes[] = 'has-post-thumbnail';
	}

	if ( empty( $background_color ) )
		$classes[] = 'custom-background-empty';
	elseif ( in_array( $background_color, array( 'fff', 'ffffff' ) ) )
		$classes[] = 'custom-background-white';

	// Enable custom font class only if the font CSS is queued to load.
	if ( wp_style_is( 'sg2013-fonts', 'queue' ) )
		$classes[] = 'custom-font-enabled';

	if ( ! is_multi_author() )
		$classes[] = 'single-author';

	return $classes;
}
add_filter( 'body_class', 'sg2013_body_class' );


/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );

/**
 * Remove obsolete options
 *
 * This removes the custom background or headers from the options menu. The reason is that
 * the background is set in the CSS and should not be overridden at this point.
 */
if (!function_exists('sg_remove_theme_options')) {
	add_action( 'after_setup_theme', 'sg_remove_theme_options');
	function sg_remove_theme_options() {
		remove_theme_support( 'custom-background' );
	}
}

/**
 * Add favicon
 */
if (!function_exists('sg_favicon_link')) {
	add_action('wp_head', 'sg_favicon_link');
	function sg_favicon_link() {
    	echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
	}
}

/*
 * Looks for all posts in all post types when searching on tag
 */
if (!function_exists('post_type_tags_fix')) {
	function post_type_tags_fix($request) {
		if ( isset($request['tag']) && !isset($request['post_type']) )
		$request['post_type'] = 'any';
		return $request;
	} 
	add_filter('request', 'post_type_tags_fix');
}

/**
 * Register Sidebars And Widgets
 *
 * Removes the main sidebar from the theme and adds two sidebars that are shown on 
 * every page with a post.
 */
	// Code for the shortcodes to work in widgets
	add_filter( 'widget_text', 'shortcode_unautop');
	add_filter( 'widget_text', 'do_shortcode');
	
/**
 * Renew Headers
 *
 * Removes the default headers and adds all those available in the img/headers/ folder.
 */
if (!function_exists('sg_remove_twenty_eleven_headers')) {

	// Do the action after the parent theme is done
	add_action( 'after_setup_theme', 'sg_remove_twenty_eleven_headers', 11 );
	
	function sg_remove_twenty_eleven_headers(){
		unregister_default_headers( array(
			'wheel',
			'trolley',
			'shore',
			'pine-cone',
			'chessboard',
			'lanterns',
			'willow' ,
			'hanoi')
			);
	}
			
	/* Build the Header Array from the theme headers */
	function cms_theme_headers() {
		$list = array();
		$thumbs = array();
		$imagepath = get_stylesheet_directory() .'/images/headers/';
		$imageurl = get_stylesheet_directory_uri();
		$dir_handle = @opendir($imagepath) or NULL; //die("Unable to open $path");
		
		if ($dir_handle == NULL)
			return array();
			
		while($file = readdir($dir_handle))
		{
			if ($file == "." || $file == ".." || is_dir($file)) { continue; }
			$filename = explode(".",$file);
			$cnt = count($filename); 
			if (count($filename) < 2) { continue; }
			$cnt--;
			$ext = $filename[$cnt];
			if (strtolower($ext) == ('png' || 'jpg'))
			{
				if (!strpos($file, '-thumbnail') > 0) {
					$header = array(
						'url' => $imageurl .'/images/headers/' .$file,
						'thumbnail_url' => $imageurl .'/images/headers/' .$filename[0] .'-thumbnail.' .$ext,
						'description' => __( $filename[0], 'sg' ),
						'file' => $file,
					);
					array_push($list, $header);
			  	} else {
					array_push($thumbs, $filename[0]);
				}
			}
		}
		// Creates thumbnails if not available
		foreach ($list as $header) {
			if (!in_array($header['file'].'-thumbnail', $thumbs))
				image_resize( $imagepath.$header['file'], 240, 48, true, 'thumbnail');
		}
		
		return $list;
	}
	
	// Add our own custom headers packaged with the child theme. in the child theme template directory 'img/headers/'
	register_default_headers( cms_theme_headers() );
}

/**
 * Custom Excerpt Length
 */
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 * Excerpt More
 */
function new_excerpt_more($more) {
       global $post;
	return ' ... <a href="'. get_permalink($post->ID) . '">'.__('[more]', 'sg2013').'</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>