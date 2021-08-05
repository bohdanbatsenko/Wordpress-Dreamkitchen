<article>
	<div class="row">
		<div class="col-lg-6"><img src="<?php the_post_thumbnail_url('full'); ?>" alt="" class="img-responsive"></div>
		<div class="col-lg-6">
			<div class="info_article">
				<h2><?php the_title(); ?></h2>
				<p><?php do_excerpt(strip_tags(get_the_content()), 28); ?></p>
				<a href="<?php the_permalink(); ?>" class="link_article">Подробнее</a>
			</div>
		</div>
	</div>
</article>