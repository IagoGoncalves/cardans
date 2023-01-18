<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="header" class="header" role="banner">
		<div id="menu" class="menu">
			<div id="main-navigation" class="main-navigation navbar navbar-default">	
				<div class="logo-menu">				
					<a class="logo-principal" href="<?php echo esc_url( home_url( 'home' ) ); ?>" alt="Cardans" title="Cardans"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-cardans.png"/></a>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
						<span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<nav class="collapse navbar-collapse navbar-main-navigation" role="navigation">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'depth'          => 2,
									'container'      => false,
									'menu_class'     => 'nav navbar-nav',
									'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
									'walker'         => new Odin_Bootstrap_Nav_Walker()
								)
							);
						?>
					</nav>
				</div>
				<div class="social">
					<?php
						$args = array('post_type' => 'dados','posts_per_page' => 1);
							$var = new WP_Query($args);
							if($var->have_posts()):
								while($var->have_posts()):
									$var->the_post(); ?>
										<?php 
											$telefone =  get_post_meta( $post->ID,'telefone', true );
											$telefone =  get_post_meta( $post->ID,'telefone2', true );
											$facebook =  get_post_meta( $post->ID,'facebook', true );
											$instagram =  get_post_meta( $post->ID,'instagram', true );
											$email =  get_post_meta( $post->ID,'email1', true );
										?>
										<div>
											<a href="<?php echo $facebook ?>" class="facebook" alt="Facebook" title="Facebook" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png"/>
											</a>
											<a href="<?php echo $instagram ?>" class="instagram" alt="instagram" title="instagram" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png"/>
											</a>
											<a class="email" href="mailto:<?php echo $email ?>" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/o-email.png"/>
											</a>
										</div>
										<a class="telefone" href="tel:<?php echo $telefone ?>" alt="tel: <?php echo $telefone ?>" title="tel: <?php echo $telefone ?>" target="_blank">    
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-call.png"/>
											<?php echo $telefone ?>
										</a>
									<?php
								endwhile;
							endif;
						wp_reset_postdata(); 
					?>
				</div>
			</div>
		</div>
	</header>