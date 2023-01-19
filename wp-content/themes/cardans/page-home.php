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
								<div class="foto">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg"/>
								</div>
							</div>
							<div class="descricoes">
								<h2 data-swiper-parallax="2300">Concerto de <br><b>caminhões</b></h2>
								<h4>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de</h4>
							</div>		
						</div>	
					</div>	
					<div class="swiper-slide">
						<div class="banner2 padrao-banner">
							<div class="foto-banner" data-swiper-parallax="0">
								<div class="foto">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner2.jpg"/>
								</div>
							</div>
							<div class="descricoes">
								<h2 data-swiper-parallax="2300">Lorem ipsum<br><b>Desotich</b></h2>
								<h4>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de</h4>
							</div>		
						</div>	
					</div>	
					<!-- <div class="swiper-slide">
						<div class="banner3 padrao-banner">
							<div class="foto-banner" data-swiper-parallax="0">
								<div class="foto">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner3.jpg"/>
								</div>
							</div>
							<div class="descricoes">
								<h2 data-swiper-parallax="2300">Blocos e artefatos de cimento</h2>
							</div>		
						</div>	
					</div>	
					<div class="swiper-slide">
						<div class="banner3 padrao-banner">
							<div class="foto-banner" data-swiper-parallax="0">
								<div class="foto">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner3.jpg"/>
								</div>
							</div>
							<div class="descricoes">
								<h2 data-swiper-parallax="2300">Blocos e artefatos de cimento</h2>
							</div>		
						</div>	
					</div> -->
				</div>
				<div class="navegation align">
					<div class="swiper-button-prev swiper-button-white"></div>
					<div class="swiper-button-next swiper-button-white"></div>	
				</div>
				<div class="swiper-pagination swiper-pagination-white"></div>
			</div>			
		</section>
	</main>
<?php
get_footer();
