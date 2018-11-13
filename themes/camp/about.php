<?php
/**
 * The template for displaying the about page on Inhabitent.
 *
 * @package RED_Starter_Theme
 * Template Name: About Page Template
 */

get_header(); ?>
  <div class="grid-container">


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
