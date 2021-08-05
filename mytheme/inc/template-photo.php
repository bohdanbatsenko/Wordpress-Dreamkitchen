<div class="col-lg-4 col-md-6 pro_item_wrap">
	<a href="<?php the_permalink(); ?>" class="pro_item">
		<img src="<?php the_post_thumbnail_url('full'); ?>" alt="" class="img-responsive">
		<span class="arrow">
			<img src="<?php echo get_template_directory_uri(); ?>/img/homepage/right-arrow.svg" alt="">
		</span>
		<span class="pro_abs">
			<span class="pro_info">
				<h4><?php the_title(); ?></h4>
				<!--span class="price"><!--?php the_field('стоимость_проекта'); ?> </span-->
				<span class="pro_line">
					<span class="small_line"></span>
				</span>
			</span>
		</span>
	</a>
</div>