<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
	<main id="servico-interno" class="servico-interno" tabindex="-1" role="main">
		<section class="navegacao">
			<h1><?php the_title()?></h1>
			<article class="breadcrumb">
				<div class="container">
					<ul>
						<li><a href="<?php echo esc_url( home_url( 'home' ) ); ?>">Home </a></li>
						<li>></li>
						<li><a href="<?php echo esc_url( home_url( 'servico' ) ); ?>"> Serviços </a></li>
						<li>></li>
						<li class="atual"><h1> <?php the_title()?></h1></li>
					</ul>
				</div>
			</article>
		</section>
		<section class="container interna">
			<article class="foto">
				<?php $foto = get_post_meta( $post->ID,'interna', true );?>				
				<img src="<?php echo odin_get_image_url( $foto, 526, 375, true, true);?>" >
			</article>
			<article class="texto">
				<?php the_content(); ?>
			</article>
		</section>
	</main>
<?php
get_footer();
