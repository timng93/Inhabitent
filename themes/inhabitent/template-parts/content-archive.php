
<?php
/**
 * Template part for displaying posts.
 *
 * @package Inhabitent Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php echo get_the_permalink(); ?>">
			<?php the_post_thumbnail( 'large' ); ?>
</a>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title">', '</h2>' )); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->




