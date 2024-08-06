<?php
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );
// add_action('init', function() {
//   add_rewrite_rule('(.?.+?)/page/?([0-9]{1,})/?$', 'index.php?pagename=$matches[1]&paged=$matches[2]', 'top');
// });
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'post-thumbnails', array( 'post', 'Featured','producttab', ) );

add_filter( 'post_thumbnail_html', 'remove_wps_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_wps_width_attribute', 10 );

function remove_wps_width_attribute( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
/**
 * Limit excerpt to a number of characters
 * 
 * @param string $excerpt
 * @return string
 */
function custom_short_excerpt($excerpt){
	return substr($excerpt, 0, 300);
}
add_filter('the_excerpt', 'custom_short_excerpt');
function register_footer_menu() {
    register_nav_menu('primary-menu', __('primary-menu'));
}
add_action('init', 'register_footer_menu');
function register_blog_menu() {
    register_nav_menu('blog-menu', __('blog-menu'));
}
add_action('init', 'register_blog_menu');
/******add widget support ********/	
	function footer_widgets1_init() {

	register_sidebar( array(
		'name' => 'Footer Area 1 ',
		'id' => 'footer_widget_1',
		'before_widget' => '<div class="footer-links">',
		'after_widget'  => '</div>',
		 'before_title' => '<h4>',
        'after_title' => '</h4>',
		
	) );
}
add_action( 'widgets_init', 'footer_widgets1_init' );

/******demo form ********/	
	function demo_widgets1_init() {

	register_sidebar( array(
		'name' => 'Trail form widget ',
		'id' => 'demo_widgets1',
		'before_widget' => '<div class="contact-form">',
		'after_widget'  => '</div>',
		
		
	) );
}
add_action( 'widgets_init', 'demo_widgets1_init' );

/******demo form ********/	
	function demo_widgets2_init() {

	register_sidebar( array(
		'name' => 'Demo form widget ',
		'id' => 'demo_widgets2',
		'before_widget' => '<div class="contact-form">',
		'after_widget'  => '</div>',
		
		
	) );
}
add_action( 'widgets_init', 'demo_widgets2_init' );

function footer_widgets2_init() {

	register_sidebar( array(
		'name' => 'Footer Area 2 ',
		'id' => 'footer_widget_2',
		'before_widget' => '<div class="footer-links">',
		'after_widget'  => '</div>',
		 'before_title' => '<h4>',
        'after_title' => '</h4>',
		
	) );
}
add_action( 'widgets_init', 'footer_widgets2_init' );

function footer_widgets3_init() {

	register_sidebar( array(
		'name' => 'Footer Area 3 ',
		'id' => 'footer_widget_3',
		'before_widget' => '<div class="footer-links">',
		'after_widget'  => '</div>',
		 'before_title' => '<h4>',
        'after_title' => '</h4>',
		
	) );
}
add_action( 'widgets_init', 'footer_widgets3_init' );

function footer_widgets4_init() {

	register_sidebar( array(
		'name' => 'Footer Area 4 ',
		'id' => 'footer_widget_4',
		'before_widget' => '<div class="footer-links contact">',
		'after_widget'  => '</div>',
		 'before_title' => '<h4>',
        'after_title' => '</h4>',
		
	) );
}
add_action( 'widgets_init', 'footer_widgets4_init' );

function footer_bottom_widget_1() {

	register_sidebar( array(
		'name' => 'Footer Bottom Area 1 ',
		'id' => 'footer_bottom_widget_1',
		'before_widget' => '<div class="copyright">',
		'after_widget'  => '</div>',
		
	) );
}
add_action( 'widgets_init', 'footer_bottom_widget_1' );

function footer_bottom_widget_2() {

	register_sidebar( array(
		'name' => 'Footer Bottom Area 2 ',
		'id' => 'footer_bottom_widget_2',
		'before_widget' => '<div class="terms-links">',
		'after_widget'  => '</div>',

		
	) );
}
add_action( 'widgets_init', 'footer_bottom_widget_2' );

function subscriber_widget() {

	register_sidebar( array(
		'name' => 'subscriber form ',
		'id' => 'subscriber_bottom_widget_2',
		'before_widget' => '',
		'after_widget'  => '',

		
	) );
}
add_action( 'widgets_init', 'subscriber_widget' );

/******add custom post type ********/	
add_action( 'init', 'create_custom_post_type');

function create_custom_post_type() {
    $args = array(
                  'description' => 'Featured Post Type',
                  'show_ui' => true,
                  'menu_position' => 4,
                  'exclude_from_search' => true,
                  'labels' => array(
                                    'name'=> 'Featured',
                                    'singular_name' => 'Featured',
                                    'add_new' => 'Add New Featured',
                                    'add_new_item' => 'Add New Featured',
                                    'edit' => 'Edit Featured',
                                    'edit_item' => 'Edit Featured',
                                    'new-item' => 'New Featured',
                                    'view' => 'View Featured',
                                    'view_item' => 'View Featured',
                                    'search_items' => 'Search Featured',
                                    'not_found' => 'No Featured Found',
                                    'not_found_in_trash' => 'No Featured Found in Trash',
                                    'parent' => 'Parent Featured'
                                   ),
                 'public' => true,
                 'capability_type' => 'post',
                 'hierarchical' => true,
                 'rewrite' => true,
                 'supports' => array('title', 'editor' , 'custom-fields','thumbnail',)
				

                 );
				 
    register_post_type( 'Featured' , $args );
    /****** custom post for Testomonal **********/ 
    $args = array(
                  'description' => 'Become a Partner Post Type',
                  'show_ui' => true,
                  'menu_position' => 4,
                  'exclude_from_search' => true,
                  'labels' => array(
                                    'name'=> 'Partner',
                                    'singular_name' => 'Partner',
                                    'add_new' => 'Add New Partner',
                                    'add_new_item' => 'Add New Partner',
                                    'edit' => 'Edit Partner',
                                    'edit_item' => 'Edit Partner',
                                    'new-item' => 'New Partner',
                                    'view' => 'View Partner',
                                    'view_item' => 'View Partner',
                                    'search_items' => 'Search Partner',
                                    'not_found' => 'No Partner Found',
                                    'not_found_in_trash' => 'No Partner Found in Trash',
                                    'parent' => 'Parent Partner'
                                   ),
                 'public' => true,
                 'capability_type' => 'post',
                 'hierarchical' => true,
                 'rewrite' => true,
                 'supports' => array('title', 'custom-fields','thumbnail',)
				

                 );
				 
    register_post_type( 'Partner' , $args );
    
    /****** custom post for Testomonal **********/
	
	$args = array(
                  'description' => 'Testimonials Post Type',
                  'show_ui' => true,
                  'menu_position' => 9,
                  'exclude_from_search' => true,
                  'labels' => array(
                                    'name'=> 'Testimonials',
                                    'singular_name' => 'Testimonials',
                                    'add_new' => 'Add New Testimonials',
                                    'add_new_item' => 'Add New Testimonials',
                                    'edit' => 'Edit Testimonials',
                                    'edit_item' => 'Edit Testimonials',
                                    'new-item' => 'New Testimonials',
                                    'view' => 'View Testimonials',
                                    'view_item' => 'View Testimonials',
                                    'search_items' => 'Search Testimonials',
                                    'not_found' => 'No Testimonials Found',
                                    'not_found_in_trash' => 'No Testimonials Found in Trash',
                                    'parent' => 'Parent Testimonials'
                                   ),
                 'public' => true,
                 'capability_type' => 'post',
                 'hierarchical' => true,
                 'rewrite' => true,
                 'supports' => array('title', 'editor' , 'custom-fields','thumbnail')
				

                 );
    register_post_type( 'Testimonials' , $args );
    
    
     /****** custom post for Testomonal **********/
	
	$args = array(
                  'description' => 'Brands Post Type',
                  'show_ui' => true,
                  'menu_position' => 10,
                  'exclude_from_search' => true,
                  'labels' => array(
                                    'name'=> 'Brands',
                                    'singular_name' => 'Brands',
                                    'add_new' => 'Add New Brands',
                                    'add_new_item' => 'Add New Brands',
                                    'edit' => 'Edit Brands',
                                    'edit_item' => 'Edit Brands',
                                    'new-item' => 'New Brands',
                                    'view' => 'View Brands',
                                    'view_item' => 'View Brands',
                                    'search_items' => 'Search Brands',
                                    'not_found' => 'No Brands Found',
                                    'not_found_in_trash' => 'No Brands Found in Trash',
                                    'parent' => 'Parent Brands'
                                   ),
                 'public' => true,
                 'capability_type' => 'post',
                 'hierarchical' => true,
                 'rewrite' => true,
                 'supports' => array('title','thumbnail')
				

                 );
				 
    register_post_type( 'Brands' , $args );
    
    /****** custom post for Features **********/ 
    
    $args = array(
                  'description' => 'Features Post Type',
                  'show_ui' => true,
                  'menu_position' => 4,
                  'exclude_from_search' => true,
                  'labels' => array(
                                    'name'=> 'Features',
                                    'singular_name' => 'Features',
                                    'add_new' => 'Add New Features',
                                    'add_new_item' => 'Add New Features',
                                    'edit' => 'Edit Features',
                                    'edit_item' => 'Edit Features',
                                    'new-item' => 'New Features',
                                    'view' => 'View Features',
                                    'view_item' => 'View Features',
                                    'search_items' => 'Search Features',
                                    'not_found' => 'No Features Found',
                                    'not_found_in_trash' => 'No Features Found in Trash',
                                    'parent' => 'Parent Features'
                                   ),
                 'public' => true,
                 'capability_type' => 'post',
                 'hierarchical' => true,
                 'rewrite' => true,
                 'supports' => array('title', 'editor' ,'excerpt', 'custom-fields','thumbnail')
				

                 );
				 
    register_post_type( 'Features' , $args );
    
        /****** custom post for webinar **********/ 
    
    $args = array(
                  'description' => 'webinar Post Type',
                  'show_ui' => true,
                  'menu_position' => 4,
                  'exclude_from_search' => true,
                  'labels' => array(
                                    'name'=> 'webinar',
                                    'singular_name' => 'webinar',
                                    'add_new' => 'Add New webinar',
                                    'add_new_item' => 'Add New webinar',
                                    'edit' => 'Edit webinar',
                                    'edit_item' => 'Edit webinar',
                                    'new-item' => 'New webinar',
                                    'view' => 'View webinar',
                                    'view_item' => 'View webinar',
                                    'search_items' => 'Search webinar',
                                    'not_found' => 'No webinar Found',
                                    'not_found_in_trash' => 'No webinar Found in Trash',
                                    'parent' => 'Parent webinar'
                                   ),
                 'public' => true,
                 'capability_type' => 'post',
                 'hierarchical' => true,
                 'query_var' => true,
        'rewrite' => TRUE,
        'rewrite' => array( 'slug' => 'webinar', 'with_front' => FALSE,),
                 'supports' => array('title', 'editor' ,'excerpt', 'custom-fields','thumbnail')
				

                 );
				 
    register_post_type( 'webinar' , $args );
    
           /****** custom post for webinar **********/ 
    
    $args = array(
                  'description' => 'Ebook Post Type',
                  'show_ui' => true,
                  'menu_position' => 4,
                  'exclude_from_search' => true,
                  'labels' => array(
                                    'name'=> 'Ebook',
                                    'singular_name' => 'Ebook',
                                    'add_new' => 'Add New Ebook',
                                    'add_new_item' => 'Add New Ebook',
                                    'edit' => 'Edit Ebook',
                                    'edit_item' => 'Edit Ebook',
                                    'new-item' => 'New Ebook',
                                    'view' => 'View Ebook',
                                    'view_item' => 'View Ebook',
                                    'search_items' => 'Search Ebook',
                                    'not_found' => 'No Ebook Found',
                                    'not_found_in_trash' => 'No Ebook Found in Trash',
                                    'parent' => 'Parent Ebook'
                                   ),
                 'public' => true,
                 'capability_type' => 'post',
                 'hierarchical' => true,
                 'rewrite' => true,
                 'supports' => array('title', 'editor' ,'excerpt', 'custom-fields','thumbnail')
				

                 );
				 
    register_post_type( 'Ebook' , $args );
     /****** custom post for Features **********/ 
    
    $args = array(
                  'description' => 'Industry-sector Post Type',
                  'show_ui' => true,
                  'menu_position' => 5,
                  'exclude_from_search' => true,
                  'labels' => array(
                                    'name'=> 'Industry-sector',
                                    'singular_name' => 'Industry-sector',
                                    'add_new' => 'Add New Industry-sector',
                                    'add_new_item' => 'Add New Industry-sector',
                                    'edit' => 'Edit Industry-sector',
                                    'edit_item' => 'Edit Industry-sector',
                                    'new-item' => 'New Industry-sector',
                                    'view' => 'View Industry-selector',
                                    'view_item' => 'View Industry-sector',
                                    'search_items' => 'Search Industry-sector',
                                    'not_found' => 'No Industry-sector Found',
                                    'not_found_in_trash' => 'No Industry-sector Found in Trash',
                                    'parent' => 'Parent Industry-sector'
                                   ),
                 'public' => true,
                 'capability_type' => 'post',
                 'hierarchical' => true,
                 'rewrite' => true,
                 'supports' => array('title', 'editor' ,'excerpt','thumbnail')
				

                 );
				 
    register_post_type( 'Industryselector' , $args );
    
    /****** custom post for pricing **********/ 
    
    $args = array(
                  'description' => 'pricing Post Type',
                  'show_ui' => true,
                  'menu_position' => 4,
                  'exclude_from_search' => true,
                  'labels' => array(
                                    'name'=> 'pricing',
                                    'singular_name' => 'pricing',
                                    'add_new' => 'Add New pricing',
                                    'add_new_item' => 'Add New pricing',
                                    'edit' => 'Edit pricing',
                                    'edit_item' => 'Edit pricing',
                                    'new-item' => 'New pricing',
                                    'view' => 'View pricing',
                                    'view_item' => 'View pricing',
                                    'search_items' => 'Search pricing',
                                    'not_found' => 'No pricing Found',
                                    'not_found_in_trash' => 'No pricing Found in Trash',
                                    'parent' => 'Parent pricing'
                                   ),
                 'public' => true,
                 'capability_type' => 'post',
                 'hierarchical' => true,
                 'rewrite' => true,
                 'order' => 'ASC',
                 'supports' => array('title', 'editor' ,'excerpt', 'custom-fields','thumbnail')
				

                 );
				 
    register_post_type( 'pricing' , $args );
    
    /****** custom post for pricing **********/ 
    
    $args = array(
                  'description' => 'Case Study Post Type',
                  'show_ui' => true,
                  'menu_position' => 4,
                  'exclude_from_search' => true,
                  'labels' => array(
                                    'name'=> 'Case-Study',
                                    'singular_name' => 'Case-Study',
                                    'add_new' => 'Add New Case-Study',
                                    'add_new_item' => 'Add New Case-Study',
                                    'edit' => 'Edit Case-Study',
                                    'edit_item' => 'Edit Case-Study',
                                    'new-item' => 'New Case-Study',
                                    'view' => 'View Case-Study',
                                    'view_item' => 'View Case-Study',
                                    'search_items' => 'Search Case-Study',
                                    'not_found' => 'No Case-Study Found',
                                    'not_found_in_trash' => 'No Case-Study Found in Trash',
                                    'parent' => 'Parent Case-Study'
                                   ),
                 'public' => true,
                 'capability_type' => 'post',
                 'hierarchical' => true,
                 'rewrite' => true,
                 'supports' => array('title', 'editor' ,'excerpt', 'custom-fields')
				

                 );
				 
    register_post_type( 'casestudy' , $args );
    
    $args = array(
                  'description' => 'Product-tab Post Type',
                  'show_ui' => true,
                  'menu_position' => 4,
                  'exclude_from_search' => true,
                  'labels' => array(
                                    'name'=> 'Product-tab',
                                    'singular_name' => 'Producttab',
                                    'add_new' => 'Add New Product-tab',
                                    'add_new_item' => 'Add New Product-tab',
                                    'edit' => 'Edit Features',
                                    'edit_item' => 'Edit Product-tab',
                                    'new-item' => 'New Product-tab',
                                    'view' => 'View Product-tab',
                                    'view_item' => 'View Producttab',
                                    'search_items' => 'Search Producttab',
                                    'not_found' => 'No Producttab Found',
                                    'not_found_in_trash' => 'No Producttab Found in Trash',
                                    'parent' => 'Parent Producttab'
                                   ),
                 'public' => true,
                 'capability_type' => 'post',
                 'hierarchical' => true,
                 'rewrite' => true,
                 'order' => 'ASC',
                 'supports' => array('title', 'editor' , 'custom-fields','thumbnail')
				

                 );
				 
    register_post_type( 'Producttab' , $args );
	}
	/*====================================================
Register Custom Taxonomies
======================================================*/

add_action('init', 'register_testimonial_taxonomy');

function register_testimonial_taxonomy() {
  register_taxonomy('testimonial_category',
                    'testimonials',
                     array (
                           'labels' => array (
                                              'name' => 'Testimonial Categories',
                                              'singular_name' => 'Testimonial Categories',
                                              'search_items' => 'Search Testimonial Categories',
                                              'popular_items' => 'Popular Testimonial Categories',
                                              'all_items' => 'All Testimonial Categories',
                                              'parent_item' => 'Parent Testimonial Category',
                                              'parent_item_colon' => 'Parent Testimonial Category:',
                                              'edit_item' => 'Edit Testimonial Category',
                                              'update_item' => 'Update Testimonial Category',
                                              'add_new_item' => 'Add New Testimonial Category',
                                              'new_item_name' => 'New Testimonial Category',
                                            ),
                            'hierarchical' =>true,
                            'show_ui' => true,
                            'show_tagcloud' => true,
                            'rewrite' => true,
                            'public'=>true,
							'has_archive'=>true,
                            )
                     );
}


	
require get_template_directory() . '/bootstrap-navwalker.php';
require get_template_directory() . '/shortcodes.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array('jquery'), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');
