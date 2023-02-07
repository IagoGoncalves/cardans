<?php

function custom_metabox() {
   global $post;
//Dados
   $post_metabox = new Odin_Metabox(
      'conteudo-dados', // Slug/ID of the Metabox (Required)
      'INFORMAÇÕES', // Metabox name (Required)
      'dados', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
   );
   $post_metabox->set_fields(
      array(     
      //LOCALIZAÇÃO
         array(
            'd'   => 'localizacao-ouro', // Required
            'label'=> __( 'LOCALIZAÇÃO', 'odin' ), // Required
            'type' => 'title', // Required
         ),
         array(
            'id'          => 'logradouro', // Required
            'label'       => __( 'Logradouro:', 'odin' ), // Required
            'type'        => 'select', // Required
            'default'    => 'Rua', // Optional               
            'options' => 
            array(
            'Rua' => 'Rua',
            'Avenida' => 'Avenida',
            'Praça' => 'Praça',
            'Bosque' => 'Bosque',
            'Alameda' => 'Alameda',
            'Estrada' => 'Estrada',
            'Rodovia' => 'Rodovia',
            'Travessa' => 'Travessa',
            '-' => '-',
            ),
         ),
         array(
            'id'          => 'endereco', // Obrigatório
            'label'       => __( 'Endereço:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( 'Nome da rua, avenida, praça, etc, sem o número', 'odin' ), // Optional
         ),
         array(
            'id'          => 'numero', // Obrigatório
            'label'       => __( 'Número:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( 'Número do estabelecimento', 'odin' ), // Optional
         ),
         array(
            'id'          => 'complemento', // Obrigatório
            'label'       => __( 'Complemento:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ),
         array(
            'id'          => 'bairro', // Obrigatório
            'label'       => __( 'Bairro:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ),
         array(
            'id'          => 'cidade', // Obrigatório
            'label'       => __( 'Cidade:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => 'Extrema', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ),
         array(
            'id'          => 'estado', // Required
            'label'       => __( 'Estado:', 'odin' ), // Required
            'type'        => 'select', // Required
            'default'    => 'MG', // Optional
            'description' => __( '', 'odin' ), // Optional
            'options' => 
            array( // Required (id => title)
            'AC' => 'AC',
            'AL' => 'AL',
            'AM' => 'AM',
            'AP' => 'AP',
            'BA' => 'BA',
            'CE' => 'CE',
            'DF' => 'DF',
            'ES' => 'ES',
            'GO' => 'GO',
            'MA' => 'MA',
            'MG' => 'MG',
            'MS' => 'MS',
            'MT' => 'MT',
            'PA' => 'PA',
            'PB' => 'PB',
            'PE' => 'PE',
            'PI' => 'PI',
            'PR' => 'PR',
            'RJ' => 'RJ',
            'RN' => 'RN',
            'RO' => 'RO',
            'RR' => 'RR',
            'RS' => 'RS',
            'SC' => 'SC',
            'SE' => 'SE',
            'SP' => 'SP',
            'TO' => 'TO',
            ),
         ),
         array(
            'id'          => 'Cep', // Obrigatório
            'label'       => __( 'CEP:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'default'     => '37640-000', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
            'description' => __( '', 'odin' ), // Optional
         ),
      array(
         'id'   => 'separator1', // Obrigatório
         'type' => 'separator' // Obrigatório
      ),
      array(
         'id'          => 'telefone', // Obrigatório
         'label'       => __( 'Telefone:', 'odin' ), // Obrigatório
         'type'        => 'text', // Obrigatório
         'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
         'description' => __( 'Digite o numero com DDD ex.:(xx) xxxx-xxxx', 'odin' ),
         'attributes'  => array( // Optional (html input elements)
            'type' => 'tel'
         )
      ),
      array(
         'id'          => 'whatsapp', // Obrigatório
         'label'       => __( 'WhatsApp :', 'odin' ), // Obrigatório
         'type'        => 'text', // Obrigatório
         'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
         'description' => __( 'Digite o numero com DDD ex.:(xx) xxxx-xxxx', 'odin' ),
         'attributes'  => array( // Optional (html input elements)
            'type' => 'tel'
         )
      ),
      array(
            'id'          => 'email', // Required
            'label'       => __( 'E-mail', 'odin' ), // Required
            'type'        => 'input', // Required
            // 'default'  => 'Default text', // Optional
            'description' => __( 'Insira o e-mail', 'odin' ), // Optional
            'attributes'  => array( // Optional (html input elements)
               'type' => 'email'
            )
      ),
      array(
         'id'   => 'separator1', // Obrigatório
         'type' => 'separator' // Obrigatório
      ),
      //Rede Social
         array(
            'id'   => 'rede-social', // Required
            'label'=> __( 'REDE SOCIAL', 'odin' ), // Required
            'type' => 'title', // Required
         ),
         array(
            'id'          => 'facebook', // Obrigatório
            'label'       => __( 'Link do facebook:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório         
         ),
         array(
            'id'          => 'instagram', // Obrigatório
            'label'       => __( 'Link do instagram:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório         
         ),
      )
   );
//Empresa
   $post_metabox = new Odin_Metabox(
      'principios', // Slug/ID of the Metabox (Required)
      'Principios da empresa', // Metabox name (Required)
      'page', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high', // Priority (options: high, core, default or low) (Optional)
      'page-empresa.php'
    );
    $post_metabox->set_fields(
      array(        
         array(
            'id'          => 'missao', // Obrigatório
            'label'       => __( 'Missão:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
         ),
         array(
            'id'          => 'visao', // Obrigatório
            'label'       => __( 'Visão:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
         ),
         array(
            'id'          => 'valores', // Obrigatório
            'label'       => __( 'Valores:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
         ),
      )
   );
//Servico
   $post_metabox = new Odin_Metabox(
      'servico-interna', // Slug/ID of the Metabox (Required)
      'Serviço', // Metabox name (Required)
      'servico', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
   );
   $post_metabox->set_fields(
      array(     
         array(
            'id'          => 'interna', // Obrigatório
            'label'       => __( 'Imagem da interna', 'odin' ), // Obrigatório
            'type'        => 'image', // Obrigatório
         )
      )
   );
}

add_action( 'init', 'custom_metabox', 1 );
