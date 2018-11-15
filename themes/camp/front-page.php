<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

        <!--End of default loop -->



      <section class="frontpage-shop">
          <h2>Shop Stuff</h2>
      <div class="frontpage-terms">
       <?php
    //Get the terms for our products and do some clever stuffs with images.
    $terms = get_terms(array(
        'taxonomy' => 'product_type',
        'hide_empty' => 0,
    ));

    foreach($terms as $term): ?>
        <div class="frontpage-term">
            <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' .
            $term->slug . '.svg' ?>"
             alt="<?php echo $term->name; ?>" />
     <p><?php echo $term->description; ?> </p> 
            <p class="term">
          <a href="<?php echo get_term_link( $term ); ?>"><?php echo
           $term->name; ?> Stuff </a> </p> 
            


            
</div>

   <?php endforeach;

       ?>

       </div>

       </section>
       
       
       
       <h2>Inhabitent Journal </h2>
       <?php
        //TODO get_posts of Journal Posts
        /*
        *Get the blog Journal Entries
        **/
        
   $args = array( 'post_type' => 'post', 'order' => 'date', 'posts_per_page' => '3' );
   $journal_posts = get_posts( $args ); // returns an array of posts
?>
<section class="front-page-journal">
<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
<article class="journal-entry">
            <?php the_post_thumbnail( 'small' ); ?>
            <span class="journal-meta">
            <?php red_starter_posted_on(); ?>
            <?php echo '/';
            comments_number('0 Comments', '1 Comment', '% Comments');
            ?>
            </span>
   <a href="<?php echo get_the_permalink(); ?>">
   
   <?php the_title(); ?> </a>
   
   <button>
   <a class="read-more" href="<?php echo get_the_permalink(); ?>">
   
   Read Entry </a>

   </button>

</article>
   <?php /* Content from your array of post results goes here */ ?>
<?php endforeach; wp_reset_postdata(); 
        ?>
</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
