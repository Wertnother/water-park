<?php

if (!function_exists('water-park_setup')) {
    function water_park_setup()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');   
    }

    add_action('after_setup_theme', 'water_park_setup');
}

// For frontend of the site
function water_park_scripts() {
    wp_enqueue_style('main', get_stylesheet_uri());
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap');
    wp_enqueue_style('icon_font_fa', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css');
    wp_enqueue_style('icon_font_bi', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');
    wp_enqueue_style('lib_animate', get_template_directory_uri() . '/lib/animate/animate.min.css');
    wp_enqueue_style('lib_owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css');
    wp_enqueue_style('lib_lightbox', get_template_directory_uri() . '/lib/lightbox/css/lightbox.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array('main'));
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array('bootstrap'));

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array(), null, true);
    wp_enqueue_script('jquery');

    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/lib/wow/wow.min.js', array('jquery'), null, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/lib/easing/easing.min.js', array('jquery'), null, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array('jquery'), null, true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array('jquery', 'waypoints'), null, true);
    wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('lightbox', get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js', array('jquery'), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery', 'bootstrap', 'wow', 'easing', 'waypoints', 'counterup', 'owlcarousel', 'lightbox'), null, true);
}
add_action('wp_enqueue_scripts', 'water_park_scripts');


function water_park_menus()
{
    $locations = array(
        'header' => __('Header Menu', 'carpenter'),
        'footer_left' => __('Footer left Menu', 'carpenter'),
        'footer_right' => __('Footer ri Menu', 'carpenter'),
    );
    register_nav_menus($locations);
}

add_action('init', 'water_park_menus');

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    // Открытие <ul>
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $classes = $depth === 0 ? 'dropdown-menu m-0' : 'dropdown-menu';
        $output .= "\n$indent<ul class=\"$classes\">\n";
    }

    // Рендер пункта меню
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array)$item->classes;

        // Добавляем класс `dropdown` для <li>, если есть вложенные элементы
        $li_classes = $depth === 0 && in_array('menu-item-has-children', $classes) ? 'dropdown' : '';
        $li_class_names = $li_classes ? ' class="' . esc_attr($li_classes) . '"' : '';
        $output .= sprintf('<li%s>', $li_class_names);

        // Формируем классы для <a>
        $link_classes = array();
        if ($depth === 0) {
            $link_classes[] = in_array('menu-item-has-children', $classes) ? 'nav-link dropdown-toggle' : 'nav-link';
        } else {
            $link_classes[] = 'dropdown-item';
        }
        $link_class_names = join(' ', array_filter($link_classes));

        // Атрибуты для тега <a>
        $atts = array(
            'title'  => !empty($item->attr_title) ? $item->attr_title : '',
            'target' => !empty($item->target) ? $item->target : '',
            'rel'    => !empty($item->xfn) ? $item->xfn : '',
            'href'   => !empty($item->url) ? $item->url : '',
            'class'  => $link_class_names,
        );

        // Добавляем атрибуты Bootstrap для dropdown
        if ($depth === 0 && in_array('menu-item-has-children', $classes)) {
            $atts['data-bs-toggle'] = 'dropdown';
            $atts['aria-expanded'] = 'false';
            $atts['role'] = 'button';
        }

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $output .= sprintf('<a%s>%s</a>', $attributes, $title);
    }

    // Закрытие <li>
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }
}

add_action( 'widgets_init', 'water_park_widget_init' );

function water_park_widget_init(){

	register_sidebar( array(
		'name' => 'Sidebar on footer',
		'id'   => 'sidebar-footer',
		'description'   => 'Displayed as a sidebar only on the home page of the site.',
		'before_widget' => '<div id="%1$s" class="footer-item %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="text-white mb-4">',
		'after_title'   => '</h4>',
	) );
}


add_action('init', 'features_init');
function features_init(){
	register_post_type('feature', array(
		'labels'             => array(
			'name'               => 'Features', // Основное название типа записи
			'singular_name'      => 'Feature', // отдельное название записи типа Book
			'add_new'            => 'Add new Features',
			'add_new_item'       => 'Add new Feature',
			'edit_item'          => 'Edit Feature',
			'new_item'           => 'New Feature',
			'view_item'          => 'View Feature',
			'search_items'       => 'Find Feature',
			'not_found'          => 'Features not found',
			'not_found_in_trash' => 'Features not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Features'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','thumbnail','excerpt')
	) );
}

add_action('init', 'testimonials_init');
function testimonials_init(){
	register_post_type('testimonials', array(
		'labels'             => array(
			'name'               => 'Testimonials', // Основное название типа записи
			'singular_name'      => 'Testimonial', // отдельное название записи типа Book
			'add_new'            => 'Add new Testimonial',
			'add_new_item'       => 'Add new Testimonial',
			'edit_item'          => 'Edit Testimonial',
			'new_item'           => 'New Testimonial',
			'view_item'          => 'View Testimonial',
			'search_items'       => 'Find Testimonial',
			'not_found'          => 'Testimonials not found',
			'not_found_in_trash' => 'Testimonials not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Testimonials'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','thumbnail','excerpt')
	) );
}

add_action('init', 'team_init');
function team_init(){
	register_post_type('team', array(
		'labels'             => array(
			'name'               => 'Member', 
			'singular_name'      => 'Member', 
			'add_new'            => 'Add new Member',
			'add_new_item'       => 'Add new Member',
			'edit_item'          => 'Edit Member',
			'new_item'           => 'New Member',
			'view_item'          => 'View Member',
			'search_items'       => 'Find Member',
			'not_found'          => 'Member not found',
			'not_found_in_trash' => 'Member not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Our team'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','thumbnail','excerpt', 'custom-fields')
	) );
}

add_action('init', 'ticket_packages_init');
function ticket_packages_init(){
	register_post_type('ticket_packages', array(
		'labels'             => array(
			'name'               => 'Ticket package', 
			'singular_name'      => 'Ticket package', 
			'add_new'            => 'Add new Ticket package',
			'add_new_item'       => 'Add new Ticket package',
			'edit_item'          => 'Edit Ticket package',
			'new_item'           => 'New Ticket package',
			'view_item'          => 'View Ticket package',
			'search_items'       => 'Find Ticket package',
			'not_found'          => 'Ticket package not found',
			'not_found_in_trash' => 'Ticket package not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Ticket packages'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'editor', 'thumbnail','excerpt', 'custom-fields')
	) );
}

add_action('init', 'attractions_packages_init');
function attractions_packages_init(){
	register_post_type('attractions', array(
		'labels'             => array(
			'name'               => 'Attraction', 
			'singular_name'      => 'Attraction', 
			'add_new'            => 'Add new Attraction',
			'add_new_item'       => 'Add new Attraction',
			'edit_item'          => 'Edit Attraction',
			'new_item'           => 'New Attraction',
			'view_item'          => 'View Attraction',
			'search_items'       => 'Find Attraction',
			'not_found'          => 'Attraction not found',
			'not_found_in_trash' => 'Attraction not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Attractions'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'thumbnail')
	) );
}
?>