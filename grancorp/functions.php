<?php

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
};

function SearchFilter($query) {
  if ($query->is_search) {
    // Insert the specific post type you want to search
    $query->set('post_type', 'post');
  }
  return $query;
}
 
// This filter will jump into the loop and arrange our results before they're returned
add_filter('pre_get_posts','SearchFilter');

setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
date_default_timezone_set('America/Sao_Paulo');

// Include Scripts
function theme_scripts() {

	// Deregister jQuery
	wp_deregister_script('jquery');

	// Include main styling
	wp_enqueue_style( 'custom-style', get_stylesheet_uri() );

	// Register scripts
	wp_register_script('jquery',get_template_directory_uri().'/js/01-jquery.min.js');
	wp_register_script('bootstrap',get_template_directory_uri().'/js/02-bootstrap.min.js');
	wp_register_script('mask',get_template_directory_uri().'/js/03-mask.min.js');
	wp_register_script('parallax_scroll',get_template_directory_uri().'/js/04-parallax-scroll.js');
	wp_register_script('slick',get_template_directory_uri().'/js/05-slick.min.js');
	wp_register_script('masonry',get_template_directory_uri().'/js/06-masonry.pkgd.min.js');
	wp_register_script('wow',get_template_directory_uri().'/js/07-wow.js');
	wp_register_script('appear',get_template_directory_uri().'/js/08-appear.js');
	wp_register_script('google_maps',		'//maps.googleapis.com/maps/api/js?key=AIzaSyDC6ZMaciNZhe0foaUC0KHufaCr9G9a81A&extension=.js');
	wp_register_script('functions',get_template_directory_uri().'/js/functions.js');

	// Enqueue scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap');
	wp_enqueue_script('mask');
	wp_enqueue_script('parallax_scroll');
	wp_enqueue_script('slick');
	wp_enqueue_script('masonry');
	wp_enqueue_script('wow');
	wp_enqueue_script('appear');
	wp_enqueue_script('google_maps');
	wp_enqueue_script('functions');
		
}
/* Setup ACF Google Maps API */
function setup_acf_gm_api() {
	acf_update_setting('google_api_key', 'AIzaSyDooYn5i5DO8Fk5mMKRx4-Wzut3Ngs3VfY');
}

add_action('wp_enqueue_scripts', 'theme_scripts');

// Map
function get_map($id = NULL, $zoom = 14, $width = '100%', $height = '100%', $lat = '48.856614', $lng = '2.3522219000000177') {
	$map_id = $id;
	$zoom 	= $zoom;
	$width 	= $width;
	$height = $height;

	include 'elements/map.php';
}


add_action('init', 'create_opcoes'); // Add our HTML5 Blank Custom Post Type
// Opções do tema
function create_opcoes()
{
    register_post_type('opcoes', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Opções', 'opcao'), // Rename these to suit
            'singular_name' => __('Opção', 'opcao'),
            'add_new' => __('Adicionar novo', 'opcao'),
            'add_new_item' => __('Adicionar novo post', 'opcao'),
            'edit' => __('Editar', 'opcao'),
            'edit_item' => __('Editar Post', 'opcao'),
            'new_item' => __('Novo Post', 'opcao'),
            'view' => __('Ver Post', 'opcao'),
            'view_item' => __('Ver Post', 'opcao'),
            'search_items' => __('Procurar Post', 'opcao'),
            'not_found' => __('Não encontrado', 'opcao'),
            'not_found_in_trash' => __('Não encontrado na lixeira', 'opcao')
        ),
        'public' => true,
        'menu_position' => 5,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true
    ));
}

// add_action('init', 'create_empreendimentos'); // Add our HTML5 Blank Custom Post Type
// EMPREENDIMENTOS
// function create_empreendimentos()
// {
//     register_post_type('empreendimentos', // Register Custom Post Type
//         array(
//         'labels' => array(
//             'name' => __('Empreendimentos', 'empreendimentos'), // Rename these to suit
//             'singular_name' => __('Empreendimento', 'empreendimentos'),
//             'add_new' => __('Adicionar novo', 'empreendimentos'),
//             'add_new_item' => __('Adicionar novo post', 'empreendimentos'),
//             'edit' => __('Editar', 'empreendimentos'),
//             'edit_item' => __('Editar Post', 'empreendimentos'),
//             'new_item' => __('Novo Post', 'empreendimentos'),
//             'view' => __('Ver Post', 'empreendimentos'),
//             'view_item' => __('Ver Post', 'empreendimentos'),
//             'search_items' => __('Procurar Post', 'empreendimentos'),
//             'not_found' => __('Não encontrado', 'empreendimentos'),
//             'not_found_in_trash' => __('Não encontrado na lixeira', 'empreendimentos')
//         ),
//         'public' => true,
//         'menu_position' => 5,
//         'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
//         'has_archive' => true,
//         'supports' => array(
//             'title'
//         ), // Go to Dashboard Custom HTML5 Blank post for supports
//         'can_export' => true
//     ));
// }


function change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Blog';
    $submenu['edit.php'][5][0] = 'Blog';
    $submenu['edit.php'][10][0] = 'Add post';
    $submenu['edit.php'][16][0] = 'Nova tag';
    echo '';
}
function change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Blog';
    $labels->singular_name = 'Blog';
    $labels->add_new = 'Add post';
    $labels->add_new_item = 'Add Post';
    $labels->edit_item = 'Edit Post';
    $labels->new_item = 'Post';
    $labels->view_item = 'View Post';
    $labels->search_items = 'Search Post';
    $labels->not_found = 'No Post found';
    $labels->not_found_in_trash = 'No Post found in Trash';
    $labels->all_items = 'All Post';
    $labels->menu_name = 'Blog';
    $labels->name_admin_bar = 'Blog';
}
 
add_action( 'admin_menu', 'change_post_label' );
add_action( 'init', 'change_post_object' );

// Theme Options
// if (function_exists('acf_add_options_page') ) {
// 	$theme_options = acf_add_options_page(array(
// 		'page_title' 	=> 'Opções do Tema',
// 		'menu_title' 	=> 'Opções do Tema',
// 		'redirect' 		=> false,
// 		'position'		=> 30,
// 	));
// }

// Set excerpt length
// function wpdocs_custom_excerpt_length($length) {
//     return 25;
// }
// add_filter('excerpt_length','wpdocs_custom_excerpt_length',999);

// Set post views count
// function wpb_set_post_views($postID) {
//     $count_key = 'wpb_post_views_count';
//     $count = get_post_meta($postID, $count_key, true);
//     if($count==''){
//         $count = 0;
//         delete_post_meta($postID, $count_key);
//         add_post_meta($postID, $count_key, '0');
//     }else{
//         $count++;
//         update_post_meta($postID, $count_key, $count);
//     }
// }
// remove_action('wp_head','adjacent_posts_rel_link_wp_head',10,0);

// Track post views
// function wpb_track_post_views ($post_id) {
//     if ( !is_single() ) return;
//     if ( empty ( $post_id) ) {
//         global $post;
//         $post_id = $post->ID;    
//     }
//     wpb_set_post_views($post_id);
// }
// add_action( 'wp_head', 'wpb_track_post_views');

// Get post views
// function wpb_get_post_views($postID){
//     $count_key = 'wpb_post_views_count';
//     $count = get_post_meta($postID, $count_key, true);
//     if($count==''){
//         delete_post_meta($postID, $count_key);
//         add_post_meta($postID, $count_key, '0');
//         return "0";
//     }
//     return $count;
// }

// Get ID by slug
function get_id_by_slug($page_slug) {
	$page = get_page_by_path($page_slug);
	if ($page) {
		return $page->ID;
	} else {
		return null;
	}
}

// Default theme functions
if (!function_exists('default_theme_setup')):
	function default_theme_setup() {
		load_theme_textdomain('default_theme', get_template_directory() . '/languages');
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		register_nav_menus(array(
			'menu-1' => esc_html__('Primary', 'default_theme'),
		));
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));
		add_theme_support('custom-background', apply_filters('default_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));
		add_theme_support('customize-selective-refresh-widgets');
	}
	add_action('after_setup_theme', 'default_theme_setup');
endif;

function default_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters('default_theme_content_width', 640);
}
add_action('after_setup_theme', 'default_theme_content_width', 0);

function default_theme_widgets_init() {
	register_sidebar(array(
		'name'          => esc_html__( 'Sidebar', 'default_theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'default_theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'default_theme_widgets_init');

function default_theme_scripts() {
	wp_enqueue_style('default_theme-style', get_stylesheet_uri());

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'default_theme_scripts');

?>