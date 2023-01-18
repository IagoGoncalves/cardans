<?php

function type_post_porsonalizados() {
   //Banner--------------------------------------
      $banner = new Odin_Post_Type(
         'Banner',
         'banner'
      );
      $banner->set_labels(
         array( 'menu_name' => __( 'Banner', 'odin' ))
      );
      $banner->set_arguments(
         array(
            'public' => true,
            'supports' => array('title','thumbnail'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-image'   
         )
      );
   //Editais--------------------------------------
      $editais = new Odin_Post_Type(
         'Comunicado',
         'editais'
      );
      $editais->set_labels(
         array( 'menu_name' => __( 'Editais', 'odin' ))
      );
      $editais->set_arguments(
         array(
            'public' => true,
            'supports' => array('title','thumbnail'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-aside',
            'show_in_nav_menus' => true,
            'show_in_rest' => true   
         )
      );
   //Noticia--------------------------------------
      $noticia = new Odin_Post_Type(
         'Notícia',
         'noticia'
      );
      $noticia->set_labels(
         array( 'menu_name' => __( 'Notícia', 'odin' ))
      );
      $noticia->set_arguments(
         array(
            'public' => true,
            'supports' => array('title','author','thumbnail','revisions', 'editor'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-welcome-widgets-menus',
            'show_in_nav_menus' => true,
            'show_in_rest' => true
         )
      );
   //Contatos------------------------------------------------
      $contatos = new Odin_Post_Type(
         'Contato',
         'contatos'
      );
      $contatos->set_labels(
         array( 'menu_name' => __( 'Contatos', 'odin' ))
      );
      $contatos->set_arguments(
         array(
            'public' => true,
            'supports' => array('title', 'author'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-phone',
            'show_in_nav_menus' => true
         )
      );
   //-----------------------------------------------------      
}

add_action('init', 'type_post_porsonalizados', 1);

