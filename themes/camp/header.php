<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body 

	<?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->
                <div class="header-bar">
				<div class="logo">
				<a href="http://localhost:8888/inhabitent/" rel="homepage">
								<img src="<?php echo get_template_directory_uri();?>/images/logos/inhabitent-logo-tent.svg" alt="inhabitent-logo"/>
								</a>

				
				
</div>

                <div class="navigation">
				<nav id="site-navigation" class="main-navigation" role="navigation">



				   
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<form class="navbar-search" role="search" action="<?php echo home_url( '/' ); ?>" method="get">
<div class="form-group">
    <div class="input-group">
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" class="form-control" placeholder="<?php __("Search"); ?>" />
        <span class="input-group-btn">
        </span>
        <button type="submit" class="button-search"><i class="fas fa-search"></i></button>
    </div>
</div>
</form>
				</nav>
</div>
</div><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
