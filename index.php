<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
				<h1>Archive</h1>
			</div>
		</section>

		<section class="pt-0 main wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
			<div class="container">
				<div class="card">
					<div class="card-body p-5">
						<div class="row">

							<div class="col-lg-8">

<h2 class="mb-4">Archive Subtitle</h2>

	                <?php
	                    $counter = 0; // Number of posts to pull
	                    $recentPosts = new WP_Query(array(
	                        'showposts' => $counter, 
	                        'offset' => 0,  // Set this to 1 to skip over first post, 2 to skip the first two, etc.
	                        'order' => 'DESC', // Puts new posts first, to put oldest posts first, change to 'ASC'
	                        'post__not_in' => get_option("sticky_posts"), // Ignore sticky posts for this particular query
	                    ));
	                ?>

	                <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
	                <div class="collection-block box<?php echo $counter--; ?>" data-wow-duration="1s" data-wow-delay="0.4s">
	                    <h4><a href="<?php echo get_permalink( get_the_ID() );?>"><?php echo get_the_title(); ?></a><?php if( in_category( 'locked' ) ): ?> &nbsp;<span class="text-danger"><i class="fa fa-lock"></i></span><?php endif; ?></h4>
	                    <?php the_excerpt(); ?>
	                </div>
	                <?php endwhile; wp_reset_postdata(); ?>



		<?php /*
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;


			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		*/ ?>

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
