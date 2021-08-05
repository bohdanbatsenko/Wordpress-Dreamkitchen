<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package redgroupvanna
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">

				<div class="col-md-3 col-sm-6">
					<div class="footer-branding">
					<a href="" class="logo"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt=""></a>
						<p class="descr">Качественную, кухонную мебель мебель изготовим по Вашим размерам</p>
						<div class="wrapper_social_in_footer">
							<div class="cont_in_footer">
								<a class="cih_left"><i class="fab fa-facebook-f"></i></a>
							</div> <!-- cont_in_header -->

							<div class="cont_in_footer">
								<a class="cih_left"><i class="fab fa-youtube"></i></a>
							</div> <!-- cont_in_header -->

							<div class="cont_in_footer">
								<div class="cih_left"><i class="fab fa-instagram"></i></div>
							</div> <!-- cont_in_header -->
						</div> <!-- wrapper_social_in_footer -->

						
							<button data-modal-target="#modal-footer" class=" btn btn_light" >Вызвать замерщика
							</button>
							<div class="modal card " id="modal-footer">
							<div class="modal__header">
								<div class="title">Вызвать замерщика</div>
								<button data-close-button class="close-button">X</button>
							</div>							
								<div class="modal__content">
									<?php echo do_shortcode('[contact-form-7 id="76" title="Форма номер 1"]');?>
								</div>
							</div>
					</div><!-- footer-branding -->
				</div><!-- col-md-3 -->

				<div class="col-md-4 col-sm-6">
					<div class="footer-categories-wrap">
					<div class="footer-header">
						<h4>Категории</h4>
					</div>
					<div class="footer-categories">
					<?php

			$categories = get_categories(
				array( 'parent' => 3)
			); ?>
			<ul>
			<?php
			foreach ($categories as $c) {
				?>
					
						<li>
							<?php
								echo '<a href="' . 
								get_category_link( $c->term_id ) . '" title="' . 
								sprintf( __( "View all posts in %s" ), $c->name ) . '" ' . '>' . 
								$c->name.'</a>';
							?>
						</li>
					
				<?php	}	?>
				</ul>
				</div><!-- footer-categories -->	
				</div><!-- footer-categories-wrap -->
			</div><!-- col-md-3 -->	

				<div class="col-md-3 col-sm-6">
					<div class="footer-customer-wrap">
						<div class="footer-header">
							<h4>Клиентам</h4>
						</div>
						
						<div class="footer-customer">

						<?php
						wp_nav_menu( array(
							'theme_location' => 'footer_menu',
							'menu_class'     => 'footer-customer-list',
							'container' 		 => false,

							'menu'            => '', 
							'container_class' => false, 
							'container_id'    => false,
							'menu_id'         => false,
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							//'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 3,
							'walker'          => false,							
						 ) );
					?>

							<!-- <ul class="footer-customer-list">
								<li><a href="#" class="customer-link">Материалы</a></li>
								<li><a href="#" class="customer-link">Условия оплаты</a></li>
								<li><a href="#" class="customer-link">Вопрос ответ</a></li>
								<li><a href="#" class="customer-link">Доставка и упаковка</a></li>
							</ul> -->

							<div class="cont_in_footer">
								<div class="cih_left">
								<i class="fas fa-phone-alt"></i>
								</div>
								<div class="cih_right">
									<div class="cih_small">
										Ежедневно с 9:00 до 21:00
									</div>
									<div class="cih_main">
									+38(096) 946 57 47<br>
									</div>
									<div class="cih_main">
									+38(096) 946 57 47<br>
									</div>
								</div> <!-- cih_right -->
							</div> <!-- cont_in_header -->

							<div class="developed">Разработка сайта: <a href="https://www.bohdandev.com.ua/" target="_blank">BBDesign</a></div>

						</div><!-- footer-customer -->
					</div><!-- footer-customer-wrap -->
				</div><!-- col-md-4 -->

				<div class="col-md-2 col-sm-6">
					<div class="footer-company-wrap">
						<div class="footer-header">
							<h4>О компании</h4>
						</div>
						
						<div class="footer-company">

							<ul class="footer-company-list">
								<li><a href="#" class="company-link">Производство</a></li>
								<li><a href="#" class="company-link">Политика конфиденциальности</a></li>
								<li><a href="#" class="company-link">Карта сайта</a></li>
								<li><a href="#" class="company-link">История компании</a></li>
							</ul>

							<div class="footer-address">
								г. Киев, ул. Семена Скляренка, 335Г<br>
								dream_k@ukr.net
							</div>

						</div><!-- footer-customer -->
					</div><!-- footer-customer-wrap -->
				</div><!-- col-md-3 -->



			</div><!-- row -->
		</div><!-- container -->
	</footer><!-- #colophon -->
	<div class="backdrop"></div>
</div><!-- #page -->

<?php wp_footer(); ?>
<script>




</script>
</body>
</html>
