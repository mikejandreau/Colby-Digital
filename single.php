<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Digital_Colby_V1
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		<section class="title-block">
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
								<?php
								while ( have_posts() ) :
									the_post();

									get_template_part( 'template-parts/content', get_post_type() );

									the_post_navigation();

									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;

								endwhile; // End of the loop.
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
