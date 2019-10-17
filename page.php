<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
									the_content();
								endwhile; else: ?>
									<p>Sorry, no posts matched your criteria.</p>
								<?php endif; ?>
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
