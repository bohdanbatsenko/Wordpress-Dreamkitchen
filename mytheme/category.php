<?php
/**
* A Simple Category Template
*/

get_header(); ?> 

<section id="primary" class="site-content">
<div id="content" role="main">

<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>


<div class="page-header" >
	<div class="page-header-bg" style="background-image: 
		url(<?php 
		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
		echo $featured_img_url; 
		?>">
		</div>
	<div class="container">
		<div class="page-header-content">
		<h2 class="archive-title">Категория: <?php single_cat_title(); ?></h2>
		<?php
// Display optional category description
 if ( category_description() ) : ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>		
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
	<div class="col-md-9">
<?php

// The Loop
while ( have_posts() ) : the_post(); ?>

<article class="category-archive-post">
<div class="category-archive-post-thumbnail">
<?php if (has_post_thumbnail( $post->ID ) ): ?>
  		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'category-archive-thumbnail' ); ?>
  			<div class="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">

  		</div>
		<?php endif; ?>

</div>
<div class="category-archive-post-content">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

<div class="entry">
<?php the_excerpt(); ?>

 <p class="postmetadata"><?php
  comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
?></p>
</div>
</div>
</article>

<?php endwhile; 

else: ?>
<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</div><!-- col-md-9 -->

<div class="col-md-3">
<?php get_sidebar(); ?>
</div><!-- col-md-3 -->

</div>
</div><!-- container -->
</div><!-- #content -->
</section>


<?php get_footer(); ?>