<?php




function tofra_wp_boot_scripts() {
	/* CSS Global Compulsory */
	wp_enqueue_style( 'tofra_boot-bootstrap', get_template_directory_uri() . '/assets/plugins/bootstrap/css/bootstrap-rtl.min.css' );
	wp_enqueue_style( 'tofra_boot-rtl-style', get_template_directory_uri()  . '/style-rtl.css' );
	/*CSS Header and Footer*/
	wp_enqueue_style( 'tofra_boot-header', get_template_directory_uri()  . '/assets/css/css-rtl/headers/header-default-rtl.css' );
	wp_enqueue_style( 'tofra_boot-footer', get_template_directory_uri()  . '/assets/css/css-rtl/footers/footer-v1-rtl.css' );
	/*CSS Implementing Plugins*/
	wp_enqueue_style( 'tofra_boot-animate', get_template_directory_uri()  . 'assets/plugins/animate.css' );
	wp_enqueue_style( 'tofra_boot-line-icons', get_template_directory_uri()  . '/assets/plugins/line-icons/line-icons.css' );
	wp_enqueue_style( 'tofra_boot-font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.css' );
	wp_enqueue_style( 'tofra_boot-parallaxe', get_template_directory_uri() . '/assets/plugins/parallax-slider/css/parallax-slider-rtl.css' );
	wp_enqueue_style( 'tofra_boot-carousel', get_template_directory_uri() . '/assets/plugins/owl-carousel2/assets/owl.carousel.css' );
	wp_enqueue_style( 'tofra_boot-font-cubeportfolio', get_template_directory_uri() . '/assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css' );
	wp_enqueue_style( 'tofra_boot-font-custom-cube', get_template_directory_uri() . '/assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css' );
	/*CSS Page Style*/
	wp_enqueue_style( 'tofra_boot-font-portfolio', get_template_directory_uri() . '/assets/css/css-rtl/pages/portfolio-v1-rtl.css' );
	wp_enqueue_style( 'tofra_boot-timeline1-rtl', get_template_directory_uri() . '/assets/css/css-rtl/pages/shortcode_timeline1-rtl.cs' );
	/*Style Switcher*/
	wp_enqueue_style( 'tofra_boot-timeline1-rtl', get_template_directory_uri() . '/assets/css/plugins/style-switcher.css' );
	/*CSS Theme*/
	wp_enqueue_style( 'tofra_boot-colors', get_template_directory_uri() . '/assets/css/css-rtl/theme-colors/default.css' );
	wp_enqueue_style( 'tofra_boot-dark', get_template_directory_uri() . '/assets/css/css-rtl/theme-skins/dark.css' );
	/*RTL Customization*/
	wp_enqueue_style( 'tofra_boot-css-rtl', get_template_directory_uri() . '/assets/css/css-rtl/rtl.css' );
	/*CSS Customization*/
	wp_enqueue_style( 'tofra_boot-dark', get_template_directory_uri() . '/assets/css/css-rtl/custom-rtl.css' );


	/* JS Global Compulsory */
	wp_enqueue_script( 'tofra_boot-jquery', get_template_directory_uri() . '/assets/plugins/jquery/jquery.min.js','','', TRUE  );
	wp_enqueue_script( 'tofra_boot-migrate-js', get_template_directory_uri() . '/assets/plugins/jquery/jquery-migrate.min.js','','', TRUE  );
	wp_enqueue_script( 'tofra_boot-bootstrap', get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js', array('tofra_boot-jquery'),'', TRUE  );
	/*JS Implementing Plugins*/
	wp_enqueue_script( 'tofra_boot-top-js', get_template_directory_uri() . '/assets/plugins/back-to-top.js','','', TRUE  );
	wp_enqueue_script( 'tofra_boot-smoothScroll-js', get_template_directory_uri() . '/assets/plugins/smoothScroll.js','','', TRUE  );
	wp_enqueue_script( 'tofra_boot-modernizr-js', get_template_directory_uri() . '/assets/plugins/parallax-slider/js/modernizr.js','','', TRUE  );
	wp_enqueue_script( 'tofra_boot-parallax-js', get_template_directory_uri() . '/assets/plugins/parallax-slider/js/jquery.cslider.js','','', TRUE  );
	wp_enqueue_script( 'tofra_boot-carousel-js', get_template_directory_uri() . '/assets/plugins/owl-carousel2/owl.carousel.min.js','','', TRUE  );
	/*JS Customizat*/
	wp_enqueue_script( 'tofra_boot-custom-js', get_template_directory_uri() . '/assets/js/custom.js','','', TRUE  );
	/*JS Page Level*/
	wp_enqueue_script( 'tofra_boot-app-js', get_template_directory_uri() . '/assets/js/app.js','','', TRUE  );
	wp_enqueue_script( 'tofra_boot-carousel-js', get_template_directory_uri() . '/assets/plugins/owl-carousel2/owl.carousel.min.js','','', TRUE  );
	wp_enqueue_script( 'tofra_boot-parallax-slider-js', get_template_directory_uri() . '/assets/js/plugins/style-switcher-rtl.js','','', TRUE  );
	wp_enqueue_script( 'tofra_boot-carousel-js', get_template_directory_uri() . '/assets/js/plugins/parallax-slider.js','','', TRUE  );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tofra_wp_boot_scripts' );


/**
 * Disabling the Admin bar.
 */
//add_filter('show_admin_bar', '__return_false');


add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_tofra_wp_boot_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' )
		)
	);
}

add_action('init', 'register_tofra_wp_boot_menus');

// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

function create_tofra_wp_boot_widget($name, $id, $description) {

	register_sidebar( array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3><hr>'
	)); 
}

create_tofra_wp_boot_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_tofra_wp_boot_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );
create_tofra_wp_boot_widget( 'Front Page Middle', 'front-middle', 'Displays on the middle of the homepage' );

create_tofra_wp_boot_widget( 'Page Sidebar', 'page', 'Displays on the page' );
create_tofra_wp_boot_widget( 'Blog Sidebar', 'blog', 'Displays on the blog' );


//adding custom post types to the archives
function my_cptui_add_post_types_to_archives( $query ) {
	// We do not want unintended consequences.
	if ( is_admin() || ! $query->is_main_query() ) {
		return;    
	}

	if ( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
		$cptui_post_types = cptui_get_post_type_slugs();

		$query->set(
			'post_type',
			array_merge(
				array( 'post' ),
				$cptui_post_types
			)
		);
	}
}
add_filter( 'pre_get_posts', 'my_cptui_add_post_types_to_archives' );


// Show posts of 'post', 'page', 'birds' post types on home page
function search_filter( $query ) {
  if ( !is_admin() && $query->is_main_query() ) {
    if ( $query->is_search ) {
      $query->set( 'post_type', array( 'post', 'page', 'birds' ) );
    }
  }
}
 
add_action( 'pre_get_posts','search_filter' );