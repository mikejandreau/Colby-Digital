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

<body id="page-top" <?php body_class('site-wrap bg1');?>>
<div class="page-overlay">

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'digitalcolby' ); ?></a>



<header id="masthead" class="site-header">
    <nav class="navbar navbar-dark navbar-expand-lg justify-content-center" id="mainNav">
        <!-- <div class="container"> -->


      <a class="colbylibraries-logo mr-auto" href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/colby-libraries-logo-white.png" alt="<?php bloginfo( 'name' ); ?>"></a>


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

        <form class="form-inline my-2 my-md-0">
          <div class="input-group navbar-search">
            <input type="text" class="form-control" placeholder="Search collections" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-light" type="button"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </form>
        <a href="#" class="btn btn-light order-1 order-md-last">Browse All</a>
</div>
        <!-- </div> -->
    </nav>
</header>


<!--     <nav class="navbar navbar-dark navbar-expand-lg justify-content-center" id="mainNav">
      <a class="colbylibraries-logo mr-auto" href="/" target="_blank"><img src="img/colby-libraries-logo-white.png" alt=""></a>
      <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
        <ul class="navbar-nav mx-auto">

          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">Home</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/index2.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/index3.html">Help</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://digitalcommons.colby.edu/" target="_blank">Digital Commons</a>  
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
          <div class="input-group navbar-search">
            <input type="text" class="form-control" placeholder="Search collections" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-light" type="button"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </form>
        <a href="#" class="btn btn-light order-1 order-md-last">Browse All</a>
      </div>
    </nav> -->


<?php /*
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$digitalcolby_description = get_bloginfo( 'description', 'display' );
			if ( $digitalcolby_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $digitalcolby_description; ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'digitalcolby' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
*/ ?>



	<div id="content" class="site-content page-content">









      <section class="title-block">
        <div class="container">
          <h1>Digital Colby</h1>
        </div>
      </section>

      <section class="triple-feature">
        <div class="container">
          <div class="col-md-12">
            <div class="row">
              <div class="col-sm-4 triple-feature-block bg-image">
                <a href="/index4.html" class="triple-feature-link">College Archives</a>
              </div>
              <div class="col-sm-4 triple-feature-block bg-image">
                <a href="#" class="triple-feature-link">Scholarship</a>
              </div>
              <div class="col-sm-4 triple-feature-block bg-image">
                <a href="#" class="triple-feature-link">Unique Collections</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="intro-copy">
        <div class="container">
          <div class="content-dark-bg intro-copy-block">
            <p class="lead">Digital Colby presents the intellectual, creative and scholarly culture of the Colby College Community. It is a collection of outstanding student work, faculty scholarship, college records, campus history, and the unique materials of the Libraries' Special Collections.</p>
          </div>
        </div>
      </section>






      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="/img/colby-colbiana.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Colbiana</a>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="/img/colby-map.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Atlas of Maine</a>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit aliquam aperiam nulla perferendis dolor nobis numquam, rem expedita, aliquid optio, alias illum eaque. Non magni, voluptates quae, necessitatibus unde temporibus.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="/img/colby-rubaiyat.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Rubaiyat</a>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="/img/colby-music.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Sounds of Colby</a>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit aliquam aperiam nulla perferendis dolor nobis numquam, rem expedita, aliquid optio, alias illum eaque. Non magni, voluptates quae, necessitatibus unde temporibus.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
