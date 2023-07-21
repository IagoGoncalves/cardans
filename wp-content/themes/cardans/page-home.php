<?php
/**
 * Template Name: Index
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>
	<main id="home" class="home" tabindex="-1" role="main">
		<section class="banner">
			<div class="swiper-container banner-home">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="banner1 padrao-banner">
							<div class="foto-banner" data-swiper-parallax="0">
								<div class="foto foto1">
									<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg"/> -->
								</div>
							</div>
							<div class="descricoes">
								<h2 data-swiper-parallax="2300">Conserto de <br><b>caminhões</b></h2>
								<h4 data-swiper-parallax="2000">Nossa oficina mecânica de conserto de caminhões possui especialização em manutenção e fabricação de cardans, proporcionando soluções eficientes para problemas mecânicos em caminhões.</h4>
							</div>		
						</div>	
					</div>	
					<div class="swiper-slide">
						<div class="banner2 padrao-banner">
							<div class="foto-banner" data-swiper-parallax="0">
								<div class="foto foto2">
									<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner2.jpg"/> -->
								</div>
							</div>
							<div class="descricoes">
								<h2 data-swiper-parallax="2300">Engraxe dos<br><b>cardans</b></h2>
								<h4 data-swiper-parallax="2000">Aplicamos graxa especializada reduzindo o atrito e desgaste dos cardans. A manutenção preventiva ajuda prolongar a vida útil, evitando falhas e reduzindo o custo de reparos futuros.</h4>
							</div>		
						</div>	
					</div>	
				</div>
				<div class="navegation align">
					<div class="swiper-button-prev swiper-button-white"></div>
					<div class="swiper-button-next swiper-button-white"></div>	
				</div>
				<div class="swiper-pagination swiper-pagination-white"></div>
			</div>			
		</section>
		<div class="container">
			<section class="card align">
				<?php
					$args = array('post_type' => 'dados','posts_per_page' => 1);
						$var = new WP_Query($args);
						if($var->have_posts()):
							while($var->have_posts()):
								$var->the_post(); ?>
									<?php 
										$telefone =  get_post_meta( $post->ID,'telefone', true );
										$horarioseg =  get_post_meta( $post->ID,'horario-semana', true );
										$horariosab =  get_post_meta( $post->ID,'horario-fds', true );
										$logradouro =  get_post_meta( $post->ID,'logradouro', true );
										$endereco =  get_post_meta( $post->ID,'endereco', true );
										$numero =  get_post_meta( $post->ID,'numero', true );
										$bairro =  get_post_meta( $post->ID,'bairro', true );
										$cidade =  get_post_meta( $post->ID,'cidade', true );
										$estado =  get_post_meta( $post->ID,'estado', true );
										$complemento =  get_post_meta( $post->ID,'complemento', true );
									?>
									<article class="align horario">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/clock-banner-white.png"/>
										<h3>Horário de funcionamento</h3>
										<h4><?php echo $horarioseg?></h4>
										<h4><?php echo $horariosab?></h4>
									</article>
									<article class="align">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/telephone-banner-white.png"/>
										<h3>Contato</h3>
										<h3><?php echo $telefone?></h3>
									</article>
									<article class="align">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/location-banner-white.png"/>
										<h4><?php echo $logradouro?> <?php echo $endereco?>, <?php echo $numero?><br> Bairro <?php echo $bairro?> - <?php echo $cidade?>/<?php echo $estado?><br> <?php echo $complemento?></h4>
									</article>
								<?php
							endwhile;
						endif;
					wp_reset_postdata(); 
				?>  
			</section>
			<section class="servico">
				<h2>Nossas soluções</h2>
				<article class="margins">
					<?php $args = array('post_type' => 'servico','posts_per_page' => 12);
						$var = new WP_Query($args);
						if($var->have_posts()):
							while($var->have_posts()):
								$var->the_post(); ?> 
									<a class="card" href="<?php the_permalink(); ?>">								
										<?php echo odin_thumbnail( 326, 319, false, true);?>
										<h3><?php the_title(); ?></h3>
										<div class="saiba-mais align">
											<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/mais-white.png" alt="saiba-mais"/>
											<p>Saiba mais</p>		
										</div>				
									</a>						
								<?php 
							endwhile;
						endif;
					wp_reset_postdata(); ?>
				</article>
			</section>
		</div>
		<section class="informativo align">
			<h2>Prevenção e Fidelização</h2>
			<h3>Passo a passo do processo de fidelização agindo como prevenção, <br> tendo por base o engraxe do cardan.</h3>
			<a href="<?php echo esc_url( home_url( 'empresa' ) ); ?>">Saiba mais</a>
		</section>
		<section class="clientes">
			<div class="container">
				<h2>Clientes</h2>
				<div class="swiper-container clientes-destaque">
                    <div class="swiper-wrapper">
                        <?php 
                            $args = array('post_type' => 'clientes','posts_per_page' => -1, 'orderby' => 'rand');
                            $var = new WP_Query($args);
                            if($var->have_posts()):
                                while($var->have_posts()):
                                    $var->the_post();?>                                   
                                        <div class="swiper-slide">
                                            <div class="box">
                                                <?php echo odin_thumbnail(160, 150, get_the_title(), false, false);?>
                                            </div>
                                        </div>
                                    <?php
                                endwhile;
                            endif;
                        wp_reset_postdata(); ?>
                    </div> 
                </div>
			</div>
			<div class="swiper-next swiper-btn">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-direita-azul.png"/>
			</div>
			<div class="swiper-prev swiper-btn">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-esquerda-azul.png"/>
			</div>	
		</section>
	</main>
<?php
get_footer();
