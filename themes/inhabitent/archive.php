<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent Theme
 */

get_header(); ?>

  <div class="grid-container">

    
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );

					the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
					
				
			</header><!-- .page-header -->

			<?php /* Start the Loop */
			
			
			
			?>


			<section class="archive-product">

			<?php while ( have_posts() ) : the_post(); ?>
			<article class="archive-single">


				<?php
					get_template_part( 'template-parts/content' );?>
         
				
</article>
			<?php endwhile; ?>
			</section>

			<?php the_posts_navigation(); ?>


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

			

		<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>

<?php get_footer(); ?>
