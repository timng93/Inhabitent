<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent Theme
 */
 get_header(); ?>
 	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
         <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="product-image">
			<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		    </div>
			<div class="product-content">
	<header class="entry-header">
		
		 <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		 <div class="product-price">
		 <?php echo CFS()->get ( 'price' ); ?>
</div>
 		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
 	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	<div class="social-button">
	<button><i class="fab fa-facebook"></i>
		Like
			</button>
	<button><i class="fab fa-twitter"></i>
		Tweet
			</button>
	<button><i class="fab fa-pinterest-p"></i>
		Pin
			</button>
			</div>
	</div><!-- .entry-content -->
 	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
            
           
 			<?php the_post_navigation(); ?>
 			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
 		<?php endwhile; // End of the loop. ?>
 		</main><!-- #main -->
	</div><!-- #primary -->
 <?php get_sidebar(); ?>
<?php get_footer(); ?>