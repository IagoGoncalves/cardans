<?php

function type_post_porsonalizados() {
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

