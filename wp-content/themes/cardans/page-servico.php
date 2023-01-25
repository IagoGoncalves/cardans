<?php
/**
 * Template Name: Servicos
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>
	<main id="servicos" class="servicos" tabindex="-1" role="main">
		<section class="navegacao">
			<h1>Serviços</h1>
			<article class="breadcrumb">
				<div class="container">
					<ul>
						<li><a href="<?php echo esc_url( home_url( 'home' ) ); ?>">Home </a></li>
						<li class="atual"><h1>> Serviços</h1></li>
					</ul>
				</div>
			</article>
		</section>
		<div class="container">
			<section class="servico">
				<h2>Nossos Serviços</h2>
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
	</main>
<?php
get_footer();
