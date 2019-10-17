<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Digital_Colby_V1
 */

get_header();
?>

<?php if ( is_home() && is_front_page() ) : // If front page is set to show latest posts, get this markup ?>
    <?php 
        while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', 'page' );
            /* // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
            comments_template();
            endif; */
        endwhile; // End of the loop.
        // the_posts_navigation(); // If front page is set to show latest posts, get the default post navigation
        new_england_vascular_access_numeric_posts_nav(); // Numbered pagination links
    ?>

<?php else : // If front page is set to show a static page, show this markup before content area ?>
    <?php /*
    */ ?>

      <section class="title-block">
        <div class="container">
          <h1><?php echo get_the_title(); ?></h1>
        </div>
      </section>

      <section class="triple-feature">
        <div class="container">
          <div class="col-md-12">
            <div class="row">
              <div class="col-sm-4 triple-feature-block bg-image">
                <a href="#" class="triple-feature-link">College Archives</a>
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
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
            endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
          </div>
        </div>
      </section>









    <div class="about-block">
        <div class="container">




            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                </div>
                <!-- <div class="col-sm-4">
                    <?php // get_sidebar( new_england_vascular_access_template_base() ); ?>
                </div> -->
            </div>




<?php /*
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-center"><a class="btn btn-primary btn-lg" href="<?php echo get_site_url(); ?>/archives/">View Archives</a></p>
                </div>
            </div>
*/ ?>

        </div>
    </div>

<?php endif; ?>


<?php if ( !is_home() && is_front_page() ) : // If front page is set to show a static page, show this markup after content area ?>





    <section class="section blog-section">
        <div class="container">




            <?php /*
            */ ?>
            <div class="row">

                <div class="col-sm-12">
                    <div class="row">
                                

                        <?php
                            $counter = 6; // Number of posts to pull
                            $recentPosts = new WP_Query(array(
                                'showposts' => $counter, 
                                'offset' => 0,  // Set this to 1 to skip over first post, 2 to skip the first two, etc.
                                'order' => 'DESC', // Puts new posts first, to put oldest posts first, change to 'ASC'
                                'post__not_in' => get_option("sticky_posts"), // Ignore sticky posts for this particular query
                                // 'cat' => '-3', // Ignore events, which category ID=3
                            ));
                        ?>

                        <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                        <div class="col-lg-6 mb-4 wow fadeIn box<?php echo $counter--; ?>" data-wow-duration="1s" data-wow-delay="0.4s">
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
                                    <?php the_excerpt(); ?>
                                    <?php /*
                                    <a class="btn btn-primary" href="<?php echo get_permalink( get_the_ID() );?>">Read More</a>
                                    */ ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_postdata(); ?>


                        <div class="col-sm-12 line-link-more">
                        <?php echo '<hr><a class="button button-primary" href="' . get_permalink( get_option( 'page_for_posts' ) ) . '">See more posts <i class="fa fa-fw fa-angle-double-right"></i></a>'; ?>
                        </div>


                    </div>
                </div>

            </div>










        </div>
    </section>




<?php endif; ?>


<?php
get_sidebar();
get_footer();

