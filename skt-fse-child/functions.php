<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// EV post types
function programas_setup(){
	$labels = array(
		'name' => 'Programas',
		'singular_name' => 'Programa',
		'manu_name' => 'Programas'
	); 

	$args = array(
		'label'  => 'Programas', 
    'description' => 'Programas de formacion de la editorial',
    'labels'       => $labels,
    'supports'   => array('title','editor','thumbnail', 'revisions'),
    'public'    => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'menu_icon'     => 'dashicons-welcome-learn-more',
    'can_export' => true,
    'publicly_queryable' => true,
    'rewrite'       => true,
    'show_in_rest' => true
	);
	register_post_type('Programas',$args);
}
add_action( 'init', 'programas_setup' );

function eventos_setup(){
	$labels = array(
		'name' => 'Eventos',
		'singular_name' => 'Evento',
		'manu_name' => 'Eventos'
	);

	$args = array(
		'label' => 'Eventos',
		'description' => 'Eventos academicos de la editorial',
		'labels' => $labels,
		'supports'   => array('title','editor','thumbnail', 'revisions'),
    'public'    => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'menu_icon'     => 'dashicons-calendar',
    'can_export' => true,
    'publicly_queryable' => true,
    'rewrite'       => true,
    'show_in_rest' => true
	);
	register_post_type('Evento',$args);
}
add_action('init','eventos_setup');

// EV categorias
//Categorias de Eventos    

function evRegisterTax(){
	$args=array(
		'hierarchical' => true,
		'labels' => array(
			'name' => 'Categorías de Eventos',
			'singular_name' => 'Categoría de Eventos'
		),
		'show_in_menu' => true,
		'show_admin_column' => true,
		'rewrite' =>array('slug' => 'categoria-eventos')
	);

	register_taxonomy('categoria-eventos', array('Eventos'), $args);
}

add_action( 'init', 'evRegisterTax');


//Categorias de Programas

function proRegisterTax(){
	$args=array(
		'hierarchical' => true,
		'labels' => array(
			'name' => 'Categorías de Programas',
			'singular_name' => 'Categoría de Programas'
		),
		'show_in_menu' => true,
		'show_admin_column' => true,
		'rewrite' =>array('slug' => 'categoria-programas')
	);

	register_taxonomy('categoria-programas', array('Programa'), $args);

	
	
}
add_action( 'init', 'proRegisterTax');

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'skt-fse-style','skt-fse-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION
