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
		<div class="container">
			<?php 
				for ($i=0; $i < 50; $i++) { 
					echo '<h1>Iago, uma divindade</h1>';
				}
			?>
		</div>
	</main>
<?php
get_footer();
