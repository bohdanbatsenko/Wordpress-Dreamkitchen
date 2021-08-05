<div class="col-lg-4 col-md-6">
	<a data-fancybox href="https://www.youtube.com/watch?v=<?php the_field('id_ютуб_видео'); ?>&amp;autoplay=1&amp;rel=0" class="pro_item">
		<img src="<?php the_post_thumbnail_url('full'); ?>" alt="" class="img-responsive">
		<span class="pro_abs">
			<span class="arrow btn_youtube">
				<img src="<?php echo get_template_directory_uri(); ?>/img/youtube_.svg" alt="">
			</span>
			<span class="pro_info">
				<h4><?php the_title(); ?></h4>
				<span class="price"><?php the_field('стоимость_проекта'); ?> руб.</span>
				<span class="pro_line">
					<span class="small_line"></span>
				</span>
			</span>
		</span>
	</a>
</div>