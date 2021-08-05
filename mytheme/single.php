<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package redgroupvanna
 */

get_header();
?>
<!-- <div class="page-header" >
	<div class="page-header-bg" style="background-image: 
		url(<?php 
		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
		echo $featured_img_url; 
		?>">
		</div>
	<div class="container">
		<div class="page-header-content">
			<h2><?php the_title(); ?></h2>
		</div>
	</div>
</div> -->

<div class="container">
	<div class="row">
	<div class="col-md-9">
	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'redgroupvanna' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'redgroupvanna' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</main><!-- #main -->
</div>
<div class="col-md-3">
<?php
get_sidebar();
?>
</div>
</div><!-- row -->
</div> <!-- container -->
<?php get_footer(); ?>