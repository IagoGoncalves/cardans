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
   //Serviços
      $servico = new Odin_Post_Type(
         'Serviço',
         'servico'
      );
      $servico->set_labels(
         array( 'menu_name' => __( 'Serviços', 'odin' ))
      );
      $servico->set_arguments(
         array(
            'public' => true,
            'supports' => array('title','thumbnail','author','revisions' , 'editor'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-feedback',
            'show_in_nav_menus'   => true,
            'show_in_rest' => true
         )
      );
   //Clientes
      $clientes = new Odin_Post_Type(
         'Cliente',
         'clientes'
      );
      $clientes->set_labels(
         array( 'menu_name' => __( 'Clientes', 'odin' ))
      );
      $clientes->set_arguments(
         array(
            'public' => true,
            'supports' => array('title','editor','author','revisions','thumbnail'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-groups',
            'show_in_nav_menus'   => true,
            'show_in_rest' => true
         )
      );
}


add_action('init', 'type_post_porsonalizados', 1);

