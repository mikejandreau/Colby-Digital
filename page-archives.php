<?php
/**
 * Template Name: College Archives
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

      <section class="title-block wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			<div class="container">
				<h1><?php echo get_the_title(); ?></h1>
			</div>
		</section>



      <section class="section featured-items wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
        <div class="container">




            <?php /*
            */ ?>
            <div class="row">

                <div class="col-sm-12">
                    <div class="row">
                                

                        <?php
                            $counter = 4; // Number of posts to pull
                            $recentPosts = new WP_Query(array(
                                'showposts' => $counter, 
                                'offset' => 0,  // Set this to 1 to skip over first post, 2 to skip the first two, etc.
                                'order' => 'DESC', // Puts new posts first, to put oldest posts first, change to 'ASC'
                                'post__not_in' => get_option("sticky_posts"), // Ignore sticky posts for this particular query
                                // 'cat' => '-3', // Ignore events, which category ID=3
                            ));
                        ?>

                        <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                        <div class="col-sm-6 col-md-3 mb-4 wow fadeIn box<?php echo $counter--; ?>" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="card h-100">
                                <div class="blog-image">
                                    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); ?>
                                    <a href="<?php echo get_permalink( get_the_ID() );?>" style="background-image: url('<?php echo $thumb['0'];?>')"></a>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="<?php echo get_permalink( get_the_ID() );?>"><?php echo get_the_title(); ?></a></h4>
                                    <?php /*
                                    <div class="blog-author-date">
                                        <p class="author">
                                            
                                        <?php 
                                            // gets post date and bullet separator
                                            echo '<span class="blog-date">' . get_the_date('M j, Y') . '</span><span class="blog-bullet">&nbsp;&bull;&nbsp;</span>'; 

                                            // gets author name
                                            $fname = get_the_author_meta('first_name');
                                            $lname = get_the_author_meta('last_name');
                                            $full_name = '';

                                            if( empty($fname)){
                                                $full_name = $lname;
                                            } elseif( empty( $lname )){
                                                $full_name = $fname;
                                            } else {
                                                // both first name and last name are present
                                                $full_name = "{$fname} {$lname}";
                                            }
                                            echo '<span class="blog-author">By ' . $full_name . '</span>'; 
                                        ?>
                                        </p>
                                    </div>
                                    */ ?>
                                    <?php // the_excerpt(); ?>
                                    <?php /*
                                    <a class="btn btn-primary" href="<?php echo get_permalink( get_the_ID() );?>">Read More</a>
                                    */ ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_postdata(); ?>



            			<?php /*
                        <div class="col-sm-12 line-link-more">
                        <?php echo '<hr><a class="button button-primary" href="' . get_permalink( get_option( 'page_for_posts' ) ) . '">See more posts <i class="fa fa-fw fa-angle-double-right"></i></a>'; ?>
                        </div>
            			*/ ?>


                    </div>
                </div>

            </div>




        </div>
    </section>





      <div class="main wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
        <div class="container">
          <div class="card">
            <div class="card-body p-5">












              <div class="row">
                <div class="col-lg-8">


            	<h2 class="mb-4">Collections</h2>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
				endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>





	                <?php
	                    $counter = 6; // Number of posts to pull
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

                </div>
				<div class="col-lg-4">
					<?php get_sidebar(); ?>
				</div>
              </div>

            </div>
          </div>
        </div>
      </div>





	</main><!-- #main -->
</div><!-- #primary -->


<?php
get_footer();
