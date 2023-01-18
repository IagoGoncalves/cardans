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
            'supports' => array('title', 'editor', 'thumbnail'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-image'   
         )
      );
   //Dados
      $dados = new Odin_Post_Type(
         'Dados da empresa',
         'dados'
      );
      $dados->set_labels(
         array( 'menu_name' => __( 'Dados da empresa', 'odin' ))
      );
      $dados->set_arguments(
         array(
            'public' => true,
            'supports' => array('title','editor','author','revisions'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-id-alt',
            'show_in_nav_menus'   => true,
               'show_in_rest' => true
         )
      );
}

add_action('init', 'type_post_porsonalizados', 1);

