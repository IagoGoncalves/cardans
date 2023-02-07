<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

	<footer id="footer" role="contentinfo">
		<div class="container">
			<article class="group">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( 'home' ) ); ?>" alt="Cardans" title="Cardans"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-rodape.png"/></a>
				</div>
				<?php
					$args = array('post_type' => 'dados','posts_per_page' => 1);
						$var = new WP_Query($args);
						if($var->have_posts()):
							while($var->have_posts()):
								$var->the_post(); ?>
									<?php 
										$telefone =  get_post_meta( $post->ID,'telefone', true );
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
									<div class="dados">
										<div class="agrupador">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gps-white.png"/>
											<?php if ($endereco != '') { ?> 
												<a class="loc" href="https://goo.gl/maps/s2fEp9xoL1n7ejVT6" target="_blank">
													<?php echo $logradouro ?> <?php echo $endereco ?>, <?php echo $numero ?> Bairro <?php echo $bairro ?> <br> <?php echo $cidade ?>/<?php echo $estado ?> <?php echo $complemento ?>
												</a>  
											<?php } else { ?>
												<span class="desabilitado"></span>
											<?php } ?> 
										</div>

										<div class="agrupador">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-call.png"/>
											<?php if ($telefone != '') { ?> 
												<a class="telefone" href="tel:<?php echo $telefone ?>" alt="tel: <?php echo $telefone ?>" title="tel: <?php echo $telefone ?>" target="_blank">    
													<?php echo $telefone ?>  
												</a>
											<?php } else { ?>
												<span class="desabilitado"></span>
											<?php } ?>
										</div>

										<div class="agrupador">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp-white.png"/>
											<?php if ($whatsapp != '') { ?> 
												<a class="whatsapp" href="https://api.whatsapp.com/send?phone=55<?php echo $whatsapp ?>&text=Olá, vim pelo site da Cardans" alt="<?php echo $whatsapp ?>" title="<?php echo $whatsapp ?>1" target="_blank">
													<?php echo $whatsapp ?>
												</a>
											<?php } else { ?>
												<span class="desabilitado"></span>
											<?php } ?>
										</div>
									</div>
									<div class="rede-socias align">
										<?php if ($instagram != '') { ?> 
											<a href="<?php echo $instagram ?>" class="instagram align" alt="instagram" title="instagram" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram-white.png"/>
											</a>
										<?php } else { ?>
											<span class="desabilitado"></span>
										<?php } ?>
										<?php if ($facebook != '') { ?> 
											<a class="align" href="<?php echo $facebook ?>" alt="Facebook" title="Facebook" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-logo-white.png"/>
											</a>
										<?php } else { ?>
											<span class="desabilitado"></span>
										<?php } ?>
									</div>
								<?php
							endwhile;
						endif;
					wp_reset_postdata(); 
				?>   
			</article>      
			<article class="copyright">
					<p>Copyright 2022© Todos os direitos reservados.</p>
					<a href="https://ideapublicidade.com.br/" target="_black"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idea.png"/></a>
			</article> 
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
