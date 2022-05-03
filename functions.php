<?php 

// Iniciamos menú
register_nav_menus( array(
    'primary' => __( 'Principal Menu', 'THEMENAME' ),
    'legal' => __( 'Legal Menu', 'THEMENAME' ),
) );


// Soporte para widgets
add_action( 'widgets_init', 'mytheme_widgets_init' );

function mytheme_widgets_init() {
    register_sidebar( array(
        'name'          => ('header'),
        'id'            => 'sidebar-header',
        'description'   => ( 'Widgets del header'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget__title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => ('footer1'),
        'id'            => 'sidebar-footer1',
        'description'   => ( 'Widgets del footer'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget__title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => ('footer2'),
        'id'            => 'sidebar-footer2',
        'description'   => ( 'Widgets del footer'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget__title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => ('footer3'),
        'id'            => 'sidebar-footer3',
        'description'   => ( 'Widgets del footer'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget__title">',
        'after_title'   => '</h4>',
    ) );
}


//Custom post
function wporg_custom_post_type() {
    register_post_type('curso',
        array(
            'labels'      => array(
                'name'          => __( 'Cursos', 'text-domain' ),
                'singular_name' => __( 'Curso', 'text-domain' ),
                'add_new_item'  => __( 'Añadir nuevo curso', 'text-domain' ),
            ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'public'             => true,
            'taxonomies'         => array( 'genero' ),
            'publicly_queryable' => true,
            'rewrite'     => array( 'slug' => 'cursos' ), // my custom slug
        )
    );
}
add_action('init', 'wporg_custom_post_type');


//taxonomías para el customa post curso
// Lo enganchamos en la acción init y llamamos a la función create_book_taxonomies() cuando arranque
add_action( 'init', 'crea_curso_taxonomies', 0 );  

// Creamos una taxonomía modalidad para cursos 
function crea_curso_taxonomies() {
  /* Configuramos las etiquetas que mostraremos en el escritorio de WordPress */
  $labels = array(
    'name'             => _x( 'Modalidad', 'taxonomy general name' ),
    'singular_name'    => _x( 'Modalidad', 'taxonomy singular name' ),
    'search_items'     =>  __( 'Buscar por Modalidad' ),
    'all_items'        => __( 'Todos las Modalidades' ),
    'parent_item'      => __( 'Modalidad padre' ),
    'parent_item_colon'=> __( 'Modalidad padre:' ),
    'edit_item'        => __( 'Editar Modalidad' ),
    'update_item'      => __( 'Actualizar Modalidad' ),
    'add_new_item'     => __( 'Añadir nuevo Modalidad' ),
    'new_item_name'    => __( 'Nombre de la nueva Modalidad' ),
  );
  
  /* Registramos la taxonomía y la configuramos como jerárquica (al estilo de las categorías) */
  register_taxonomy( 'modalidad', array( 'curso' ), array(
    'hierarchical'       => true,
    'labels'             => $labels,
    'show_ui'            => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'modalidad' ),
  ));
  
  /* Si quieres añadir la siguiente taxonomía del ejemplo, sustituye esta línea por la del código correspondiente */
}