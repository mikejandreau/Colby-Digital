<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Digital_Colby_V1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body id="page-top" <?php body_class('site-wrap');?>>
<div class="page-overlay">

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'digitalcolby' ); ?></a>

	<header id="masthead" class="site-header">
		<nav class="navbar navbar-dark navbar-expand-lg justify-content-center" id="mainNav">
			<!-- <div class="container"> -->
			<a class="colbylibraries-logo mr-auto" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/colby-libraries-logo-white.png" alt="<?php bloginfo( 'name' ); ?>"></a>

			<button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
				<?php 
					wp_nav_menu(array(
					'menu'              => 'Main Menu',
					'theme_location'    => 'Primary',
					'menu_id'        	=> 'menu-1',
					'menu_class'        => 'navbar-nav mx-auto',
					'depth'             => 2,
					'container'         => '', // div wrapper for ul, leaving blank so search can be included
					'container_id' 		=> '', // div wrapper for ul, leaving blank so search can be included
					'container_class'   => '', // div wrapper for ul, leaving blank so search can be included
					'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					'walker'            => new wp_bootstrap_navwalker()
					)); 
				?>

				<!-- <form class="form-inline my-2 my-md-0">
					<div class="input-group navbar-search">
						<input type="text" class="form-control" placeholder="Search collections" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-light" type="button"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</form> -->


    <form class="form-inline search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    	<div class="input-group navbar-search">
    		<input class="form-control border-white" type="text" aria-label="Search collections" placeholder="<?php echo esc_attr_x( 'Search collections', 'search', 'digitalcolby' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'search', 'digitalcolby' ) ?>">
    		<div class="input-group-append"><button class="btn btn-light bg-white border-0" type="submit"><i class="fa fa-search"></i></button></div>
    	</div>
    </form>

    <?php // get_search_form(); ?> 




				<!-- <a href="#" class="btn btn-light order-1 order-md-last">Browse All</a> -->
				<?php echo '<a class="btn btn-light order-1 order-md-last browse-all-btn" href="' . get_permalink( get_option( 'page_for_posts' ) ) . '">Browse All</a>'; ?>

			</div>
			<!-- </div> -->
		</nav>
	</header>




	<div id="content" class="site-content page-content">






