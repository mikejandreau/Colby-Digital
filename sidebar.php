<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Digital_Colby_V1
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">

	<section class="widget">
    <form class="form-inline search-form d-block mb-3" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    	<div class="input-group">
    		<input class="form-control" type="text" aria-label="Search collections" placeholder="<?php echo esc_attr_x( 'Search collections', 'search', 'digitalcolby' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'search', 'digitalcolby' ) ?>">
    		<div class="input-group-append"><button class="btn btn-primary border-0 " type="submit"><i class="fa fa-search"></i></button></div>
    	</div>
    </form>
    <?php echo '<a class="btn btn-primary btn-block text-white" href="' . get_permalink( get_option( 'page_for_posts' ) ) . '">Browse All</a>'; ?>
	</section>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
