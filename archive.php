<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Digital_Colby_V1
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

      <section class="title-block wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			<div class="container">
				<h1><?php echo get_the_title(); ?></h1>
			</div>
		</section>

		<section class="pt-0 main wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
			<div class="container">
				<div class="card">
					<div class="card-body p-5">
						<div class="row">

							<div class="col-lg-8">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

							</div>
							
							<div class="col-lg-4">
								<?php get_sidebar(); ?>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->



<?php
get_footer();
