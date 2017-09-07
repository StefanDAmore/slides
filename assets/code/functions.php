<?php
/**
 * thomaswyss functions and definitions.
 *
 * Version: v1.0.35 (PRESENCE blank)
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package thomaswyss
 */

if ( ! function_exists( 'thomaswyss_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function thomaswyss_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on thomaswyss, use a find and replace
		 * to change 'thomaswyss' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'thomaswyss', get_template_directory() . '/languages' );

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
		add_image_size( 'thomaswyss-full-bleed', 2000, 1200, true );
		add_image_size( 'thomaswyss-index-img', 1000, 550, true );
		add_image_size( 'thomaswyss-featured', 250, 250, true );


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', [
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		] );

		// Add theme support for Custom Logo.
		add_theme_support( 'custom-logo', [
			'width'       => 90,
			'height'      => 90,
			'flex-width'  => true,
			'flex-height' => true,
		] );

		/* Editor styles */
		add_editor_style( [ 'inc/editor-styles.css', thomaswyss_fonts_url() ] );

		/**
		 * Allow deep linking widget edits.
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Set a default image size for the post thumbnails.
		 */
		set_post_thumbnail_size( 250, 250, true );

		// PRESENCE-CUSTOMIZE: theme support parts.
		add_theme_support( 'hero', [ 'style' => 'nav-logo-image-tag' ] );
		add_theme_support( 'footer', [ 'style' => 'menu-widget' ] );

	}
endif;
add_action( 'after_setup_theme', 'thomaswyss_setup' );


// override default customizer bits
function customize_register_init( $wp_customize ) {
	$wp_customize->remove_section( 'header_image' );
}

add_action( 'customize_register', 'customize_register_init' );


// add custom style to header or body if we specified a background image (in customizer) for either one.
function thomaswyss_add_backgrounds() {

	echo "<style type='text/css'>";

	if ( $bg = get_theme_mod( 'thomaswyss_bg' ) ) {
		echo "body{background-image:url('" . esc_url( $bg ) . "');}\n";
	}

	if ( $bgh = get_theme_mod( 'thomaswyss_header_bg' ) ) {
		echo "#masthead{background-image:url('" . esc_url( $bgh ) . "');}\n";
	}

	echo "</style>";
}

if ( get_theme_mod( 'thomaswyss_bg' ) OR get_theme_mod( 'thomaswyss_header_bg' ) ) {
	add_action( 'wp_head', 'thomaswyss_add_backgrounds' );
}


/**
 * Register custom fonts.
 */
function thomaswyss_fonts_url() {

	// PRESENCE-CUSTOMIZE: fonts for this install, please remove any that are unused.
	$font_families = [ 'Open Sans:300,400,400i,700', 'Libre+Baskerville:400' ];

	$query_args = [
		'family' => implode( '|', $font_families ),
		'subset' => 'latin,latin-ext',
	];

	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

	return $fonts_url;
}

/**
 * Add up to 99 case studies to the archive page.
 *
 * @param WP_Query $query the default WordPress query.
 */
function thomaswyss_case_studies_pre_get_posts( $query ) {
	if ( is_post_type_archive( 'case-studies' ) && $query->is_main_query() ) {
		$query->set( 'posts_per_page', 99 );
	}
}

add_action( 'pre_get_posts', 'thomaswyss_case_studies_pre_get_posts' );

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls          URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed.
 *
 * @return array $urls           URLs to print for resource hints.
 */
function thomaswyss_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'thomaswyss-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = [
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		];
	}

	return $urls;
}

add_filter( 'wp_resource_hints', 'thomaswyss_resource_hints', 10, 2 );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function thomaswyss_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'thomaswyss_content_width', 640 );
}

add_action( 'after_setup_theme', 'thomaswyss_content_width', 0 );


/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @origin Twenty Seventeen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 *
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function thomaswyss_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	if ( 900 <= $width ) {
		$sizes = '(min-width: 900px) 700px, 900px';
	}

	if ( is_active_sidebar( 'sidebar-1' ) || is_active_sidebar( 'sidebar-page' ) ) {
		$sizes = '(min-width: 900px) 600px, 900px';
	}

	return $sizes;
}

add_filter( 'wp_calculate_image_sizes', 'thomaswyss_content_image_sizes_attr', 10, 2 );

/**
 * Filter the `sizes` value in the header image markup.
 *
 * @origin Twenty Seventeen 1.0
 *
 * @param string $html   The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array  $attr   Array of the attributes for the image tag.
 *
 * @return string The filtered header image HTML.
 */
function thomaswyss_header_image_tag( $html, $header, $attr ) {
	if ( isset( $attr['sizes'] ) ) {
		$html = str_replace( $attr['sizes'], '100vw', $html );
	}

	return $html;
}

add_filter( 'get_header_image_tag', 'thomaswyss_header_image_tag', 10, 3 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @origin Twenty Seventeen 1.0
 *
 * @param array $attr       Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size       Registered image size or flat array of height and width dimensions.
 *
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function thomaswyss_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {

	if ( ! is_singular() ) {
		if ( is_active_sidebar( 'sidebar-1' ) ) {
			$attr['sizes'] = '(max-width: 900px) 90vw, 800px';
		} else {
			$attr['sizes'] = '(max-width: 1000px) 90vw, 1000px';
		}
	}

	return $attr;
}

add_filter( 'wp_get_attachment_image_attributes', 'thomaswyss_post_thumbnail_sizes_attr', 10, 3 );


/**
 * Register widget areas - for standard PRESENCE widgets
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function thomaswyss_widgets_init() {

	register_sidebar( [
		'name'          => esc_html__( 'Landing page', 'thomaswyss' ),
		'id'            => 'landing-page',
		'description'   => esc_html__( 'Add landing page widgets here.', 'thomaswyss' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	] );

	register_sidebar( [
		'name'          => esc_html__( 'Contact Page', 'thomaswyss' ),
		'id'            => 'contact-1',
		'description'   => esc_html__( 'Widgets for contact page go here.', 'thomaswyss' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	] );

	register_sidebar( [
		'name'          => esc_html__( '404 (Not Found) Page', 'thomaswyss' ),
		'id'            => 'sidebar-404',
		'description'   => esc_html__( 'Widgets placed here will be shown on the 404 Not Found page.', 'thomaswyss' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	] );


	register_sidebar( [
		'name'          => esc_html__( 'Sidebar widget 1', 'thomaswyss' ),
		'id'            => 'page-1',
		'description'   => esc_html__( '', 'thomaswyss' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	] );

	register_sidebar( [
		'name'          => esc_html__( 'Sidebar widget 2', 'thomaswyss' ),
		'id'            => 'page-2',
		'description'   => esc_html__( '', 'thomaswyss' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	] );

}

add_action( 'widgets_init', 'thomaswyss_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function thomaswyss_scripts() {
	wp_enqueue_style( 'thomaswyss-fonts', thomaswyss_fonts_url() );

	wp_enqueue_style( 'thomaswyss-style', get_template_directory_uri() . '/style.min.css', null, wp_get_theme()->get( 'Version' ) );

	wp_localize_script( 'thomaswyss-navigation', 'thomaswyssScreenReaderText', [
		'expand'   => __( 'Expand child menu', 'thomaswyss' ),
		'collapse' => __( 'Collapse child menu', 'thomaswyss' ),
	] );

	wp_enqueue_script( 'jquery-scrollto', get_theme_file_uri( '/js/jquery.scrollTo.js' ), [ 'jquery' ], '2.1.2', true );

	// bundle contains functions.js, navigation.js and skip-link-focus-fix.js.
	wp_enqueue_script( 'thomaswyss-bundle', get_template_directory_uri() . '/js/bundle.min.js', [ 'jquery' ], wp_get_theme()->get( 'Version' ), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'thomaswyss_scripts' );

/**
 * Registers an admin stylesheet.
 */
function thomaswyss_load_admin_style() {
	wp_enqueue_style( 'thomaswyss_admin', get_template_directory_uri() . '/style-admin.min.css', false, wp_get_theme()->get( 'Version' ) );
}

add_action( 'admin_enqueue_scripts', 'thomaswyss_load_admin_style' );

/**
 * Registers an editor stylesheet for the theme.
 */
function thomaswyss_add_editor_styles() {
	add_editor_style( 'style-tinymce.min.css' );
}

add_action( 'admin_init', 'thomaswyss_add_editor_styles' );

/**
 * Adds a simple table plugin to TinyMCE.
 *
 * @param array $plugin_array filterable array of TinyMCE plugins.
 *
 * @return array $plugins_array contains all TinyMCE plugins.
 */
function thomaswyss_tinymce_add_plugin( $plugin_array ) {
	$plugin_array['presence_tinymce'] = get_template_directory_uri() . '/js/tinymce-plugin.js';
	$plugin_array['table']            = get_template_directory_uri() . '/js/tinymce-table-plugin.min.js';

	return $plugin_array;
}

add_filter( 'mce_external_plugins', 'thomaswyss_tinymce_add_plugin' );

/**
 * Add custom buttons to TinyMCE.
 *
 * @param array $buttons default array of TinyMCE buttons.
 *
 * @return array $buttons including custom buttons.
 */
function thomaswyss_tinymce_register_buttons( $buttons ) {
	array_push( $buttons, 'highlight', 'big-quote' );
	array_push( $buttons, 'separator', 'table' );

	return $buttons;
}

add_filter( 'mce_buttons', 'thomaswyss_tinymce_register_buttons' );

/**
 * Check the theme support for our custom theme features.
 */
function thomaswyss_check_theme_supports() {
	require_if_theme_supports( 'navigation-above', get_theme_file_path( 'theme-features/navigation-above.php' ) );
	require_if_theme_supports( 'navigation-below', get_theme_file_path( 'theme-features/navigation-below.php' ) );
	require_if_theme_supports( 'hero', get_theme_file_path( 'theme-features/hero.php' ) );
	require_if_theme_supports( 'notification-bar', get_theme_file_path( 'theme-features/notification-bar.php' ) );
	require_if_theme_supports( 'footer', get_theme_file_path( 'theme-features/footer.php' ) );
}

add_action( 'after_setup_theme', 'thomaswyss_check_theme_supports', 100 );

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

/**
 * Load SVG icon functions.
 */
require get_template_directory() . '/inc/icon-functions.php';
