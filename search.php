<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Digital_Colby_V1
 */

get_header();
?>



<div id="primary" class="content-area">
	<main id="main" class="site-main">

      <section class="title-block wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			<div class="container">
				<h1>Archives</h1>
			</div>
		</section>

		<section class="pt-0 main wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
			<div class="container">
				<div class="card">
					<div class="card-body p-5">
						<div class="row">

							<div class="col-lg-8">




		<?php if ( have_posts() ) : ?>

				<h2 class="mb-4">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'digitalcolby' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h2>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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
