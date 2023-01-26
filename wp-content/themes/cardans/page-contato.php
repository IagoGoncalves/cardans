<?php
/**
 * Template Name: Contato
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>
	<main id="contato" class="contato" tabindex="-1" role="main">
		<section class="navegacao">
			<h1>Contato</h1>
			<article class="breadcrumb">
				<div class="container">
					<ul>
						<li><a href="<?php echo esc_url( home_url( 'home' ) ); ?>">Home </a></li>
						<li class="atual"><h1>> Contato</h1></li>
					</ul>
				</div>
			</article>
		</section>
		<div class="container">
			<section>
				<article class="mapa">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470420.73684689886!2d-46.83502738595864!3d-22.90739460485394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ceacf427e5d39b%3A0x9eefda0a82d64039!2sCARDANS%20EXTREMA!5e0!3m2!1spt-BR!2sbr!4v1674668615485!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</article>
				<article class="descritivo">
					<aside class="dados">
						<?php
							$args = array('post_type' => 'dados','posts_per_page' => 1);
								$var = new WP_Query($args);
								if($var->have_posts()):
									while($var->have_posts()):
										$var->the_post(); ?>
											<?php 
												$telefone =  get_post_meta( $post->ID,'telefone', true );
												$telefone2 =  get_post_meta( $post->ID,'telefone2', true );
												$email =  get_post_meta( $post->ID,'email', true );
												$whatsapp =  get_post_meta( $post->ID,'whatsapp', true );
												$logradouro =  get_post_meta( $post->ID,'logradouro', true );
												$endereco =  get_post_meta( $post->ID,'endereco', true );
												$numero =  get_post_meta( $post->ID,'numero', true );
												$bairro =  get_post_meta( $post->ID,'bairro', true );
												$cidade =  get_post_meta( $post->ID,'cidade', true );
												$estado =  get_post_meta( $post->ID,'estado', true );
												$complemento =  get_post_meta( $post->ID,'complemento', true );
												$facebook =  get_post_meta( $post->ID,'facebook', true );
												$instagram =  get_post_meta( $post->ID,'instagram', true );
											?>
											<span class="endereco">
												<h3>Endereço:</h3>
												<a class="loc" href="https://goo.gl/maps/s2fEp9xoL1n7ejVT6" target="_blank">
													<?php echo $logradouro?> <?php echo $endereco?>, <?php echo $numero?> - Bairro <?php echo $bairro?><br> <?php echo $cidade?>/<?php echo $estado?> <?php echo $complemento?></p>
												</a>
											</span>
											<span class="email">
												<h3>E-mail:</h3>
												<a href="mailto: <?php echo $email?>"><?php echo $email?></a>
											</span>
											<span class="telefone">
												<h3>Telefones:</h3>
												<a class="telefone" href="tel:<?php echo $telefone ?>" alt="tel: <?php echo $telefone ?>" title="tel: <?php echo $telefone ?>" target="_blank">    
													<?php echo $telefone ?> | 
												</a>
												<a class="telefone2" href="tel:<?php echo $telefone2 ?>" alt="tel: <?php echo $telefone2 ?>" title="tel: <?php echo $telefone2 ?>" target="_blank">    
													<?php echo $telefone2 ?>
												</a>
											</span>
											<span class="whatsapp">
												<h3>Whatsapp:</h3>
												<a class="whatsapp" href="https://api.whatsapp.com/send?phone=55<?php echo $whatsapp ?>&text=Olá, vim pelo site da Cardans" alt="<?php echo $whatsapp ?>" title="<?php echo $whatsapp ?>1" target="_blank">
													<?php echo $whatsapp ?>
												</a>
											</span>
											<span class="rede-socias">
												<?php if ($facebook != '') { ?> 
													<a href="<?php echo $facebook ?>" alt="Facebook" title="Facebook" target="_blank">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-logo-azul.png"/>
													</a>
												<?php } else { ?>
													<span class="desabilitado"></span>
												<?php } ?>
												<?php if ($instagram != '') { ?> 
													<a href="<?php echo $instagram ?>" class="instagram" alt="instagram" title="instagram" target="_blank">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram-azul.png"/>
													</a>
												<?php } else { ?>
													<span class="desabilitado"></span>
												<?php } ?>
											</span>
										<?php
									endwhile;
								endif;
							wp_reset_postdata(); 
						?>  
					</aside>
					<form class="formulario">
						<div class="campo1">
							<div class="texto"><?php the_content();?></div>
						</div>
						<div class="campos campo1">
							<input autocomplete="off" class="input2" type="text" name="name" required>
							<span class="focus-input2" data-placeholder="Nome"></span>
						</div>

						<div class="campos campo2">
							<input autocomplete="off" class="input2" type="email" name="email" required>
							<span class="focus-input2" data-placeholder="E-mail"></span>					
						</div>

						<div class="campos campo3">
							<input autocomplete="off" class="input2" type="text" name="telefone" required>
							<span class="focus-input2" data-placeholder="Telefone"></span>
						</div>
						<div class="campos campo2">
							<input autocomplete="off" class="input2" type="text" name="assunto" required>
							<span class="focus-input2" data-placeholder="Assunto"></span>
						</div>

						<div class="campos campo1">
							<textarea autocomplete="off" class="input2 area" name="message"  required></textarea>
							<span class="focus-input2" data-placeholder="Mensagem"></span>
						</div>
						<div class="botao-enviar">
							<button class="btn">Enviar</button>
						</div>
					</form>
				</article>
			</section>
		</div>
	</main>
<?php
get_footer();
