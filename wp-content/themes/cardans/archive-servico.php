<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
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
