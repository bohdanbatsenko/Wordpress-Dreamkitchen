<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package redgroupvanna
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="archive-post-wrapper">
		<div class="archive-post-thumbnail">
		<a href="<?php the_permalink(); ?>">
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
  		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  			<div class="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">

  		</div>
		<?php endif; ?>

		</a>
	</div>
		
		<div class="archive-post-content">

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
		
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				redgroupvanna_posted_on();
				redgroupvanna_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->



	<div class="entry-content">
	<?php
		$maxchar = 52;
		$text = strip_tags( get_the_content() );
		echo mb_substr( $text, 0, $maxchar );
	?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php redgroupvanna_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	</div><!-- .article-post-content -->
	</div><!-- .article-post-wrapper -->
</article><!-- #post-<?php the_ID(); ?> -->
