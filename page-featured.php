<?php
/**
 * Template Name: Featured Items
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






      <section class="title-block title-block-alt">
        <div class="container">
          <h1>College Archives</h1>
        </div>
      </section>

      <div class="featured-items">
        <div class="container">

          <div class="row">

            <div class="col-sm-6 col-md-3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
              <div class="card">
                <img class="card-img-top" src="https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1930&q=80" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Title of Archive</h5>
                  <p class="card-text">Example text describing this collection.</p>
                  <a href="#" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="card">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1498079022511-d15614cb1c02?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Title of Archive</h5>
                  <p class="card-text">Example text describing this collection.</p>
                  <a href="#" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
              <div class="card">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1494809610410-160faaed4de0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Title of Archive</h5>
                  <p class="card-text">Example text describing this collection.</p>
                  <a href="#" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
              <div class="card">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1453733190371-0a9bedd82893?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Title of Archive</h5>
                  <p class="card-text">Example text describing this collection.</p>
                  <a href="#" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="main wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
        <div class="container">
          <div class="card">
            <div class="card-body p-5">


              <div class="row">
                <div class="col-lg-8">
                  <h2 class="mb-4">Collections</h2>

                  <div class="collection-block">
                    <h4><a href="#">Title of Collection</a></h4>
                    <p>Brief description of collection</p>
                  </div>

                  <div class="collection-block">
                    <h4><a href="#">Title of Collection</a></h4>
                    <p>Brief description of collection</p>
                  </div>

                  <div class="collection-block">
                    <h4><a href="#">Title of Collection</a></h4>
                    <p>Brief description of collection</p>
                  </div>

                  <div class="collection-block">
                    <h4><a href="#">Title of Collection</a></h4>
                    <p>Brief description of collection</p>
                  </div>

                  <div class="collection-block">
                    <h4><a href="#">Title of Collection</a> <span class="text-danger"><i class="fa fa-lock"></i></span></h4>
                    <p>Brief description of collection</p>
                  </div>

                  <div class="collection-block">
                    <h4><a href="#">Title of Collection</a></h4>
                    <p>Brief description of collection</p>
                  </div>

                  <div class="collection-block">
                    <h4><a href="#">Title of Collection</a></h4>
                    <p>Brief description of collection</p>
                  </div>

                </div>
                <div class="col-lg-4">

                  <div class="search-block-alt mb-4">

                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Search our collections" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    <a href="#" class="btn btn-primary btn-block">Browse All</a>
                  </div>

                  <h3>Recent Additions</h3>
                  <ul>
                    <li><a href="#">New Item</a></li>
                    <li><a href="#">New Item</a></li>
                    <li><a href="#">New Item</a></li>
                    <li><a href="#">New Item</a></li>
                    <li><a href="#">New Item</a></li>
                    <li><a href="#">New Item</a></li>
                  </ul>

                  <h4>Contact Info</h4>
                  <p>Copyright information for collections, refers broadly to items as a whole.</p>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>






		<section class="title-block">
			<div class="container">
				<h1><?php echo get_the_title(); ?> test</h1>
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
