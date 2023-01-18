<?php

function custom_metabox() {
   global $post;
  //Pagina consepe-------------------------
     $post_metabox = new Odin_Metabox(
        'info-pdf', // Slug/ID of the Metabox (Required)
        'Info', // Metabox name (Required)
        'page', // Slug of Post Type (Optional)
        'normal', // Context (options: normal, advanced, or side) (Optional)
        'high', // Priority (options: high, core, default or low) (Optional)
        'page-consepe.php'
     );
     $post_metabox->set_fields(
        array(
          array(
                'id'          => 'arquivo-consepe', // Required
                'label'       => __( 'Selecione o arquivo', 'odin' ), // Required
                'type'        => 'upload', // Required
                // 'attributes' => array(), // Optional (html input elements)
                // 'default'    => '', // Optional (file url)
            ),    
        )
     );
  //Editais -----------------------------
     $post_metabox = new Odin_Metabox(
        'edital', // Slug/ID of the Metabox (Required)
        'Editais', // Metabox name (Required)
        'editais', // Slug of Post Type (Optional)
        'normal', // Context (options: normal, advanced, or side) (Optional)
        'high' // Priority (options: high, core, default or low) (Optional)
     );
     $post_metabox->set_fields(
        array(
          array(
                'id'          => 'arquivo-edital', // Required
                'label'       => __( 'Selecione o arquivo', 'odin' ), // Required
                'type'        => 'upload', // Required
                // 'attributes' => array(), // Optional (html input elements)
                // 'default'    => '', // Optional (file url)
            ),    
        )
     );
  //Noticia ------------------------------
    $post_metabox = new Odin_Metabox(
      'fonte-foto', // Slug/ID of the Metabox (Required)
      'Fonte', // Metabox name (Required)
      'noticia', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
    );
    $post_metabox->set_fields(
      array(
        array(
              'id'          => 'fonte-divulgacao', // Required
              'label'       => __( 'Digite a fonte', 'odin' ), // Required
              'type'        => 'text', // Obrigatório
              'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
              'description' => __( 'Insira o autor da foto', 'odin' ), // Optional
          ),    
      )
    );
  //Contatos -----------------------------
     $post_metabox = new Odin_Metabox(
        'contatos', // Slug/ID of the Metabox (Required)
        'Contatos', // Metabox name (Required)
        'contatos', // Slug of Post Type (Optional)
        'normal', // Context (options: normal, advanced, or side) (Optional)
        'high' // Priority (options: high, core, default or low) (Optional)
     );
     $post_metabox->set_fields(
        array(
              array(
                'id'          => 'telefone', // Required
                'label'       => __( 'Telefone', 'odin' ), // Required
                'type'        => 'input', // Required
                // 'default'  => 'Default text', // Optional
                'attributes'  => array( // Optional (html input elements)
                    'type' => 'tel'
                )
              ),
              array(
                'id'          => 'logradouro-gratuito', // Required
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
                'id'          => 'endereco-gratuito', // Obrigatório
                'label'       => __( 'Endereço:', 'odin' ), // Obrigatório
                'type'        => 'text', // Obrigatório
                'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
                'description' => __( 'Nome da rua, avenida, praça, etc, sem o número', 'odin' ), // Optional
              ),
              array(
                'id'          => 'numero-gratuito', // Obrigatório
                'label'       => __( 'Número:', 'odin' ), // Obrigatório
                'type'        => 'text', // Obrigatório
                'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
                'description' => __( 'Número do estabelecimento', 'odin' ), // Optional
              ),
              array(
                'id'          => 'complemento-gratuito', // Obrigatório
                'label'       => __( 'Complemento:', 'odin' ), // Obrigatório
                'type'        => 'text', // Obrigatório
                'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
                'description' => __( '', 'odin' ), // Optional
              ),
              array(
                'id'          => 'bairro-gratuito', // Obrigatório
                'label'       => __( 'Bairro:', 'odin' ), // Obrigatório
                'type'        => 'text', // Obrigatório
                'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
                'description' => __( '', 'odin' ), // Optional
              ),
              array(
                'id'          => 'cidade-gratuito', // Obrigatório
                'label'       => __( 'Cidade:', 'odin' ), // Obrigatório
                'type'        => 'text', // Obrigatório
                'default'     => 'Extrema', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
                'description' => __( '', 'odin' ), // Optional
              ),
              array(
                'id'          => 'estado-gratuito', // Required
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
           )
     );
}

add_action( 'init', 'custom_metabox', 1 );
