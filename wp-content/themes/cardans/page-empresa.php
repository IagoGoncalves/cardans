<?php
/**
 * Template Name: Empresa
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>a
	<main id="empresa" class="empresa" tabindex="-1" role="main">
		<section class="navegacao">
			<h1>Empresa</h1>
			<article class="breadcrumb">
				<div class="container">
					<ul>
						<li><a href="<?php echo esc_url( home_url( 'home' ) ); ?>">Home </a></li>
						<li class="atual"><h1>> Empresa</h1></li>
					</ul>
				</div>
			</article>
		</section>
		<div class="container">
			<section class="sobre align">
				<?php echo odin_thumbnail(667, 501, get_the_title(), false, false);?>
				<div class="descritivo">
					<h3>Sobre a nossa empresa</h3>
					<h2>Atuamos no mercado desde 2007</h2>
					<?php the_content()?>
				</div>
			</section>
			<section class="principios">
				<div class="card missao">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/missao.png"/>
					<h3>Missão</h3>
					<p><?php echo get_post_meta( $post->ID,'missao', true )?></p>
				</div>
				<div class="card visao">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/visao.png"/>
					<h3>Visão</h3>
					<p><?php echo get_post_meta( $post->ID,'visao', true )?></p>
				</div>
				<div class="card valores">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/valores.png"/>
					<h3>Valores</h3>
					<?php echo get_post_meta( $post->ID,'valores', true )?>
				</div>
			</section>
		</div>
		<section class="quebra-secao"></section>
	</main>
<?php
get_footer();
