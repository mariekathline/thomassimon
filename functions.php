<?php

register_nav_menus( array(
  'mainmenu'    => __( 'Menu Principal' ),
) );

register_sidebars(2, array('name'=>'Espace de widget %d'));

add_theme_support( 'post-thumbnails' );



function create_posttype() {
  register_post_type( 'event',
    array(
      'labels' => array(
        'name' => __( 'Parcours' ),
        'singular_name' => __( 'Parcours' ),
        'add_new_item' => 'Ajouter une étape',
        'edit_item' => "Modifier l'étape",
        'menu_name' => 'Parcours'
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'parcours'),
      'menu_position' => 4,
      'menu_icon' => 'dashicons-exerpt-view',
    )
  );

  register_post_type( 'skills',
    array(
      'labels' => array(
        'name' => __( 'Compétences' ),
        'singular_name' => __( 'Compétence' ),
        'add_new_item' => 'Ajouter une compétence',
        'edit_item' => "Modifier la compétence",
        'menu_name' => 'Compétences'
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'compétence'),
      'menu_position' => 5,
      'menu_icon' => 'dashicons-universal-access',
    )
  );

  register_post_type( 'hobbies',
    array(
      'labels' => array(
        'name' => __( 'Loisirs' ),
        'singular_name' => __( 'Loisir' ),
        'add_new_item' => 'Ajouter un loisir',
        'edit_item' => "Modifier le loisir",
        'menu_name' => 'Loisirs'
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'loisir'),
      'menu_position' => 6,
      'menu_icon' => 'dashicons-heart',
    )
  );
}
add_action( 'init', 'create_posttype' );
