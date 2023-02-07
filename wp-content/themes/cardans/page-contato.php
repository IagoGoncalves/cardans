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
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.38681477824!2d-46.313365470623694!3d-22.8251741928821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ceacf427e5d39b%3A0x9eefda0a82d64039!2sCARDANS%20EXTREMA!5e0!3m2!1spt-BR!2sbr!4v1675346808249!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
													<?php echo $telefone ?> 
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
					<form class="contact2-form formulario" id="contato" name="enviar-email" method="post">
						<input class="tipo-email" type="hidden" name="tipo-email" value="contato">	
						
						<div class="campos campo1">
							<input autocomplete="off" class="input2" type="text" name="name" required>
							<span class="focus-input2" data-placeholder="Nome"></span>
						</div>

						<div class="campos campo2">
							<input autocomplete="off" class="input2" type="email" name="email" required>
							<span class="focus-input2" data-placeholder="E-mail"></span>					
						</div>

						<div class="campos campo3">
							<input autocomplete="off" class="input2" type="tel" name="telefone" required>
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

						<!-- Recaptcha -->
						<div class="g-recaptcha_align campo4">
							<div class="g-recaptcha" data-sitekey="6LevSF4kAAAAABCnvBWXBUC5H64UrR1iiSN-zca9"></div>
						</div>	
						<script>
							window.onload = function() {
							var recaptcha = document.forms["contato"]["g-recaptcha-response"];
							recaptcha.required = true;
							recaptcha.oninvalid = function(e) {
								// fazer algo, no caso to dando um alert
								alert("Por favor Click no reCaptcha para validar o Formulario.");
								}
							}
						</script>		
						<div class="valida-envio" style="display:none;"></div>
							<svg width='50px' height='50px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-default load"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(0 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(30 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.08333333333333333s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(60 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.16666666666666666s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(90 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.25s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(120 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.3333333333333333s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(150 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.4166666666666667s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(180 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(210 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5833333333333334s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(240 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.6666666666666666s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(270 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.75s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(300 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.8333333333333334s' repeatCount='indefinite'/></rect><rect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='#082559' transform='rotate(330 50 50) translate(0 -30)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.9166666666666666s' repeatCount='indefinite'/></rect>
							</svg>
						<div class="botao-enviar">
							<button class="btn" value="submit">Enviar</button>
						</div>
					</form>
				</article>
			</section>
		</div>
	</main>
<?php
get_footer();
