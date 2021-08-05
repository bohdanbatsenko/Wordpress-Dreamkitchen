<?php 

/**
 * Template Name: blog
 */

 ?>
<?php get_header(); ?>

<div class="page-header" >
	<div class="page-header-bg" style="background-image: 
		url(<?php bloginfo('template_url'); ?>/img/homepage/hero-bg.jpg);"></div>
	<div class="container">
		<div class="page-header-content">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
	<div class="col-md-9">
<section id="services" class="blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="wrapper_services" id="row_append">
					<?php
					
						$args = array(
							'post_type' => 'post',
							'post_status' => 'publish',
							'cat' => 2,
							'posts_per_page' => '2',
							'paged' => 1
						);
						$blog_posts = new WP_Query($args);
					?>
					
				<?php if ($blog_posts->have_posts()) : ?>
					<?php while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>

						<?php get_template_part('inc/template', 'blog'); ?>
							<?php endwhile; ?>
							<?php endif; ?>
							<?php wp_reset_postdata(); ?>	

				</div> <!-- wrapper_services -->
				<div class="wrapper_btn"><div class="btn btn_filled btn_no" id="more_posts" data-template="blog">Показать еще</div></div>				
			</div> <!-- col-lg-8 -->
			
		</div> <!-- row -->
	</div> <!-- container -->

</section>
</div>
<div class="col-md-3">
<?php get_sidebar(); ?>
</div>
</div><!-- row -->
</div> <!-- container -->
<?php get_footer(); ?>
