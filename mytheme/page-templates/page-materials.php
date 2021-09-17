<?php
/**
 * Template Name: Materials
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ortodont1
 */

get_header();
?>

<div class="container">

	<?php 
		if ( have_posts() ) :
	?>

	<div class="blog-posts__header-wrapper">
		<div class="blog-posts__header-categories">
			<?php get_template_part( 'template-parts/content', 'blog-filters'); ?>
		</div>
	</div>

	<div id="blogPostsWrapper" class="blog-posts_wrapper">
		<?php

	</div>

</div>