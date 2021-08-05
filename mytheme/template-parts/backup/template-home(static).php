<?php
/**
 * Template Name: Home page
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

get_header('home');
?>

<section id="main_banner" class="plashka_gradient_70" style="background-image: 
		url(<?php bloginfo('template_url'); ?>/img/homepage/hero_bg.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="information_main_wrap">
					<div class="information_main">
						<h1>Мебель для ванной комнаты на заказ в Санкт-Петербурге</h1>
						<h2>Ккачественную, влагостойкую мебель в ванную комнату изготовим по Вашим размерам</h2>
						<div class="discount">
							<div class="left_discount">
								<p>Скидка для Вас</p>
								<p>Только до <b>00:00</b></p>
							</div>  <!-- left-discount -->
							<div class="right_discount">15%</div>
						</div>  <!-- discount -->
						<a data-fancybox data-src="#call_me" href="javascript:;" class="btn">Получить скидку</a>
					</div>  <!-- information_main -->
				</div> <!-- information_main_wrap -->
			</div> <!-- col-lg-6 -->

			<div class="col-lg-6 d-flex justify-content-end">
				<div class="advantages_main">
					<ul>
						<li>
							<img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages_1.svg" class="img-responsive" alt="">
							<b>Работаем</b>
							<p>по 54ФЗ</p>
						</li>
						<li>
							<img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages_1.svg" class="img-responsive" alt="">
							<b>Замеры</b>
							<p>по 54ФЗ</p>
						</li>
						<li>
							<img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages_1.svg" class="img-responsive" alt="">
							<b>Изготовление</b>
							<p>2-3 недели</p>
						</li>
						<li>
							<img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages_1.svg" class="img-responsive" alt="">
							<b>Гарантия</b>
							<p>3 года</p>
						</li>

					</ul>
				</div>
			</div>  <!-- col-lg-6 -->

		</div>  <!-- row -->
	</div>  <!-- container -->
</section>

	
<section id="how_we_work">

	<div id="nav_stages">
		<div class="container">
			<div class="wrapper_nav_stages">
			<h3>Как мы работаем</h3>
			<ul class="buttons_tab">
				<li data-stage="stage_1">
					<div class="img-border"><img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages_1.svg" class="img-responsive" alt=""></div>
					<p>Замеры</p>
				</li>
				<li data-stage="stage_2">
					<div class="img-border"><img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages_1.svg" class="img-responsive" alt=""></div>
					<p>Дизайн</p>
				</li>
				<li  data-stage="stage_3">
					<div class="img-border"><img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages_1.svg" class="img-responsive" alt=""></div>
					<p>Изготовление</p>
				</li>
				<li data-stage="stage_4">
					<div class="img-border"><img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages_1.svg" class="img-responsive" alt=""></div>
					<p>Доставка</p>
				</li>
				<li data-stage="stage_5">
					<div class="img-border"><img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages_1.svg" class="img-responsive" alt=""></div>
					<p>Наши проекты</p>
				</li>
				<li data-stage="stage_6">
					<div class="img-border"><img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages_1.svg" class="img-responsive" alt=""></div>
					<p>Отзывы</p>
				</li>
			</ul>
			</div> <!-- wrapper_nav_stages -->
		</div> <!-- container -->
	</div> <!-- nav_stages -->


<div class="stage stage_1" style="background-image: 
		url(<?php bloginfo('template_url'); ?>/img/homepage/curve.svg);">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="heading">
					<b>1</b>
					<h3>Замер + разработка проекта мебели для ванной в удобное для Вас время</h3>
				</div><!-- heading -->

				<div class="description">
				Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Послушавшись маленький назад ручеек, предупредила речью за возвращайся снова переписывается дорогу инициал прямо дал встретил, сбить продолжил взгляд свой сих? Обеспечивает, подпоясал прямо!
				</div>

				<a href="" class="btn btn_white">Выбрать дату или время</a>

				<div class="have">
					<b>Что будет у замерщика</b>
					<ul>
						<li><img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages_2.svg" class="img-responsive" alt=""></li>
						<li><img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages_2.svg" class="img-responsive" alt=""></li>
						<li><img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages_2.svg" class="img-responsive" alt=""></li>
						<li><img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages_2.svg" class="img-responsive" alt=""></li>

					</ul>
				</div>
				<div class="attention">
					<img src="" alt="">
					<p>При необходимости дадим рекомендации по разводу сантехники и электрики.</p>
				</div> <!-- atetntion -->			
			</div> <!-- col-lg-7 -->

			<div class="col-lg-5">
				<!-- wrapper_img originally here -->
				<div class="wrapper_img">
				<!--img src="<?php bloginfo('template_url'); ?>/img/homepage/curve.svg" class="abs_stage_1" alt=""-->
				<img src="<?php bloginfo('template_url'); ?>/img/homepage/measure.jpg" class="img-responsive" alt="">
				</div>	
			</div><!-- col-lg-5 -->

		</div> <!-- row -->

		</div> <!-- container -->

	
		<div class="quotes">
			<div class="container">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo ex, quas hic deleniti corporis nemo, nostrum minus quo natus est similique delectus velit impedit labore dicta eligendi vel ut. Fugit expedita quis culpa corrupti!</div>
		</div>		
	</div> <!-- stage stage_1 -->



	<div class="stage stage_2">
		<div class="container">
				<div class="heading">
					<b>2</b>
					<h3>Разработаем для вас один из двух вариантов дизайн-проекта мебели в ванную</h3>
				</div><!-- heading -->
		<div class="row">
			<div class="col-md-6">

				<div class="st2_design">
					<div class="top">
						<h4>PRO 100</h4>
						<div class="sale">Бесплатно!</div>
					</div>
				</div>

				<img src="<?php bloginfo('template_url'); ?>/img/homepage/design_1.jpg" class="img-responsive" alt="">

				<div class="small_description">
					Далеко-далеко за словесными горами в стране гласных и согласных живут, рыбные тексты. Океана скатился подпоясал не семь возвращайся, свое над толку речью.
				</div>

				<div class="attention">
				<img src="<?php bloginfo('template_url'); ?>/img/homepage/att.svg" class="img-responsive" alt="">
					<p>Также Вы получите коммерческое предложение на изготовление мебели в ванную комнату с учетом выбранных материалов</p>
				</div> <!-- attention -->	

		
			</div> <!-- col-lg-6 -->

			<div class="col-md-6">

				<div class="st2_design">
					<div class="top">
						<h4>3D Max</h4>
						<div class="sale">2500 руб.</div>
					</div>
				</div>
				
				<img src="<?php bloginfo('template_url'); ?>/img/homepage/design_1.jpg" class="img-responsive" alt="">

				<div class="small_description">
					Далеко-далеко за словесными горами в стране гласных и согласных живут, рыбные тексты. Океана скатился подпоясал не семь возвращайся, свое над толку речью.
				</div>

				<div class="ps">
				<img src="<?php bloginfo('template_url'); ?>/img/homepage/ps.svg" class="img-responsive" alt="">
				<p>Стоимость зависит от материала и фурнитуры, готовы предложить Вам несколько вариантов просчета</p>				
				</div>

			</div><!-- col-lg-6 -->

		</div> <!-- row -->
		</div> <!-- container -->
		<div class="quotes">
			<div class="container">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo ex, quas hic deleniti corporis nemo, nostrum minus quo natus est similique delectus velit impedit labore dicta eligendi vel ut. Fugit expedita quis culpa corrupti!</div>
		</div>		
	</div> <!-- stage stage_2 -->


	<div class="stage stage_3" style="background-image: 
		url(<?php bloginfo('template_url'); ?>/img/homepage/bg_st3.jpg);">
		<div class="container">
				<div class="heading">
					<b>3</b>
					<h3>Ознакомьтесь с процессом изготовления Вашей мебели</h3>
				</div><!-- heading -->

				<div class="description">
				Срок изготовления от 2-х до 3-х недель!
				</div>

				<div class="st3_images">
					<div class="st3_item">
						<img src="<?php bloginfo('template_url'); ?>/img/homepage/design_1.jpg" class="img-responsive" alt="">
						<p>Распил ДСП</p>
					</div>
					<div class="st3_item">
						<img src="<?php bloginfo('template_url'); ?>/img/homepage/design_1.jpg" class="img-responsive" alt="">
						<p>Кромка АБС</p>
					</div>
					<div class="st3_item">
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/design_1.jpg" class="img-responsive" alt="">
						<p>Изготовление фасадов</p>
					</div>
					<div class="st3_item">
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/design_1.jpg" class="img-responsive" alt="">
						<p>Искусственный камень</p>
					</div>
					<div class="st3_item">
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/design_1.jpg" class="img-responsive" alt="">
						<p>Сборка</p>
					</div>
				</div>

		</div> <!-- container -->
		<div class="quotes">
			<div class="container">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo ex, quas hic deleniti corporis nemo, nostrum minus quo natus est similique delectus velit impedit labore dicta eligendi vel ut. Fugit expedita quis culpa corrupti!</div>
		</div>		
	</div> <!-- stage stage_3 -->


	<div class="stage stage_4" style="background-image: 
		url(<?php bloginfo('template_url'); ?>/img/homepage/bg_st3.jpg);">
		<div class="container">
				<div class="heading">
					<b>4</b>
					<h3>Ознакомьтесь с процессом Доставки и установки</h3>
				</div><!-- heading -->

				<div class="description">
				Далеко-далеко, за словесными горами в стране гласных и согласных живут рыбные тексты. Составитель рукописи не коварный агентство там несколько заголовок, решила маленький приставка имени бросил диких?
				</div>

				<ul class="list_st_4">
					<li>
						<img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages_2.svg" class="img-responsive" alt="">
						<p>Заказ готов!</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages_2.svg" class="img-responsive" alt="">
						<p>Договариваемся на день и время доставки</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages_2.svg" class="img-responsive" alt="">
						<p>Доставка и установка в 1 день!</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages_2.svg" class="img-responsive" alt="">
						<p>Принимаете и подписываете акт приема мебели</p>
					</li>
				</ul>

				<div class="attention">
					<img src="" alt="">
					<p>При необходимости дадим рекомендации по разводке сантехники и электрики</p>
				</div>

		</div> <!-- container -->
		<div class="quotes">
			<div class="container">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo ex, quas hic deleniti corporis nemo, nostrum minus quo natus est similique delectus velit impedit labore dicta eligendi vel ut. Fugit expedita quis culpa corrupti!</div>
		</div>		
	</div> <!-- stage stage_4 -->


	<div class="stage stage_5">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
				
					<div class="heading">
					<b>5</b>
					<h3>Выполненные проекты<br>наших клиентов</h3>
				</div><!-- heading -->			
				<div class="description">
				Далеко-далеко, за словесными горами в стране гласных и согласных живут рыбные тексты. Составитель рукописи не коварный агентство там несколько заголовок, решила маленький приставка имени бросил диких?
				</div>
				<h4>Следите за обновлениями реализованных проектов в наших социмальных сетях</h4>

				<ul class="list_st_5">
					<li>
						<a href="" class="list_st_5_item">
							<div class="list_st_5_icon_wrap">
								<i class="fab fa-facebook-f"></i>
						</div>
							<span class="ls5_item">
								<i>Стильная ванная</i>
								<b>Вконтакте</b>
							</span>
						</a>
					</li>
					<li>
						<a href="" class="list_st_5_item">
						<div class="list_st_5_icon_wrap">
								<i class="fab fa-youtube"></i>
						</div>
							<span class="ls5_item">
								<i>Стильная ванная</i>
								<b>Youtube канал</b>
							</span>
						</a>
					</li>
					<li>
						<a href="" class="list_st_5_item">
						<div class="list_st_5_icon_wrap">
									<i class="fab fa-facebook-f"></i>
							</div>
							<span class="ls5_item">
								<i>Стильная ванная</i>
								<b>Instagram</b>
							</span>
						</a>
					</li>					

				</ul>

			</div><!-- col-lg-5 -->


			<div class="col-lg-6 offset-lg-1">
			
			
				<div class="before_after_st5">
					<h4>Последние проекты</h4>
					<small>Передвиньте ползунок, чтоб увидеть раобту до/после</small>
					<div class="slider_oldnew">
					
						<div class="slide_oldnew twenty">
							<img src="<?php bloginfo('template_url'); ?>/img/homepage/01_before.png" data-label="До" alt="">
							<img src="<?php bloginfo('template_url'); ?>/img/homepage/01_after.png" data-label="После" alt="">
						</div>
						<div class="slide_oldnew juxtapose">
						<img src="<?php bloginfo('template_url'); ?>/img/homepage/02_before.png" data-label="До" alt="">
							<img src="<?php bloginfo('template_url'); ?>/img/homepage/02_after.png" data-label="После" alt="">
						</div>
						<!-- <div class="slide_oldnew juxtapose">
						<img src="<?php bloginfo('template_url'); ?>/img/homepage/01_before.png" data-label="До" alt="">
							<img src="<?php bloginfo('template_url'); ?>/img/homepage/01_after.png" data-label="После" alt="">
						</div> -->
					</div><!-- slider_oldnew -->
					<div class="count_btn">
						<div class="count">
						(Всего 126 проектов)
						</div>
					</div>
				</div><!-- before_after_st5 -->

			</div>		<!-- col-lg-6 offset-lg-1 -->
			</div> <!-- row -->
		</div> <!-- container -->
		<div class="quotes">
			<div class="container">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo ex, quas hic deleniti corporis nemo, nostrum minus quo natus est similique delectus velit impedit labore dicta eligendi vel ut. Fugit expedita quis culpa corrupti!</div>
		</div>	
		
	</div> <!-- stage stage_5 -->



	<div class="stage stage_6">
		<div class="container">

				
					<div class="heading">
					<b>6</b>
					<h3>Ознакомьтесь с отзывами<br>наших клиентов</h3>
				</div><!-- heading -->	

				<div class="st6_slider">
					
					<div class="st6_slide">
						<div class="toping">
						<img src="<?php bloginfo('template_url'); ?>/img/homepage/user1.jpg" alt="">
							<div class="info_user">
								<div class="name">
									<p></p>
									<div class="socials">
										<a href=""></a>
									 </div>
								</div>
								<div class="user_position">Директор компании 1</div>
							</div> <!-- info_user -->

						</div> <!-- toping-->
						<div class="review">
							Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Безорфографичный рыбными имеет города? Безопасную, необходимыми возвращайся, вопроса последний за осталось букв диких точках грустный буквенных заманивший вскоре его свой ведущими даль пояс своего?
						</div><!-- review-->
						<div class="date">12.12.2019</div>
					</div> <!-- st6_slide -->

					<div class="st6_slide">
						<div class="toping">
						<img src="<?php bloginfo('template_url'); ?>/img/homepage/user1.jpg" alt="">
							<div class="info_user">
								<div class="name">
									<p></p>
									<div class="socials">
										<a href=""></a>
									 </div>
								</div>
								<div class="user_position">Директор компании 2</div>
							</div> <!-- info_user -->

						</div> <!-- toping-->
						<div class="review">
							Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Безорфографичный рыбными имеет города? Безопасную, необходимыми возвращайся, вопроса последний за осталось букв диких точках грустный буквенных заманивший вскоре его свой ведущими даль пояс своего?
						</div><!-- review-->
						<div class="date">12.12.2019</div>
					</div> <!-- st6_slide -->

					<div class="st6_slide">
						<div class="toping">
						<img src="<?php bloginfo('template_url'); ?>/img/homepage/user1.jpg" alt="">
							<div class="info_user">
								<div class="name">
									<p></p>
									<div class="socials">
										<a href=""></a>
									 </div>
								</div>
								<div class="user_position">Директор компании 3</div>
							</div> <!-- info_user -->

						</div> <!-- toping-->
						<div class="review">
							Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Безорфографичный рыбными имеет города? Безопасную, необходимыми возвращайся, вопроса последний за осталось букв диких точках грустный буквенных заманивший вскоре его свой ведущими даль пояс своего?
						</div><!-- review-->
						<div class="date">12.12.2019</div>
					</div> <!-- st6_slide -->					



				</div>  <!-- st6_slider -->

			
				<div class="before_after_st5">
					<h4>Последние проекты</h4>
					<small>Передвиньте ползунок, чтоб увидеть раобту до/после</small>

					<!-- <div class="slider_oldnew">
						<div class="slide_oldnew juxtapose">
							<img src="" alt="">
							<img src="" alt="">
						</div>
						<div class="slide_oldnew juxtapose">
							<img src="" alt="">
							<img src="" alt="">
						</div>
						<div class="slide_oldnew juxtapose">
							<img src="" alt="">
							<img src="" alt="">
						</div>
					</div> -->
					<!-- slider_oldnew -->
					<div class="count_btn">
						<div class="count">
						(Всего 126 проектов)
						</div>
					</div>
				</div><!-- before_after_st5 -->


		</div> <!-- container -->
		<div class="quotes">
			<div class="container">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo ex, quas hic deleniti corporis nemo, nostrum minus quo natus est similique delectus velit impedit labore dicta eligendi vel ut. Fugit expedita quis culpa corrupti!</div>
		</div>	
		
	</div> <!-- stage stage_6 -->

</section>



<section class="lifehacks">
        <div class="lifehacks-bg"></div>
        <div class="container">
            <div class="lifehacks-wrap">
               <ul class="lifehacks-content">
                   <li id="css-1" class="lifehacks-content__item">
                    <div class="lifehacks-article">
                        <img src="<?php bloginfo('template_url'); ?>/img/homepage/article-1.jpg" alt="Article: Main lifehack" class="lifehacks-img">
                        <div class="lifehacks-article__text">
                            <div class="author">
                                <img src="<?php bloginfo('template_url'); ?>/img/homepage/avatar-1.jpg" alt="Icon: Author" class="author__img">
                                <div class="author-text">
                                    <span class="author-text__name">Александр Батурин</span>
                                    <span class="author-text__prof">Разработчик</span>
                                </div>
                                <!-- /.lifehacks-text -->
                            </div>
                            <!-- /.lifehacks-author -->
                            <span class="lifehacks-tools">css</span>
                            <h1 class="lifehacks-title clamp-text-2">Как использовать CSS float <br> после того, как вышел Flexbox</h1>
                           <form action="article-1.html">
                                <button class="button-read">Читать далее<img class="button-read__arrow" src="<?php bloginfo('template_url'); ?>/img/homepage/Arrow.svg" alt="Button: Read">
                                </button>
                           </form>
                        </div>
                    </div>
                   </li>
                <li id="javascript" class="lifehacks-content__item lifehacks-content__item--active">
                    <div class="lifehacks-article">
                        <img src="<?php bloginfo('template_url'); ?>/img/homepage/article-2.jpg" alt="Article: Main lifehack" class="lifehacks-img">
                        <div class="lifehacks-article__text">
                            <div class="author">
                                <img src="<?php bloginfo('template_url'); ?>/img/homepage/avatar-2.jpg" alt="Icon: Author" class="author__img">
                                <div class="author-text">
                                    <span class="author-text__name">Давид Гуров</span>
                                    <span class="author-text__prof">Разработчик</span>
                                </div>
                                <!-- /.lifehacks-text -->
                            </div>
                            <!-- /.lifehacks-author -->
                            <span class="lifehacks-tools">JavaScript</span>
                            <h1 class="lifehacks-title clamp-text-2">На каком стандарте писать скрипты, если я фрилансер</h1>
                            <button class="button-read">Читать далее<img class="button-read__arrow" src="<?php bloginfo('template_url'); ?>/img/homepage/Arrow.svg" alt="Button: Read">
                            </button>
                        </div>
                    </div>
                </li>
                <li id="html" class="lifehacks-content__item">
                    <div class="lifehacks-article">
                        <img src="<?php bloginfo('template_url'); ?>/img/homepage/article-3.jpg" alt="Article: Main lifehack" class="lifehacks-img">
                        <div class="lifehacks-article__text">
                            <div class="author">
                                <img src="<?php bloginfo('template_url'); ?>/img/homepage/avatar-3.jpg" alt="Icon: Author" class="author__img">
                                <div class="author-text">
                                    <span class="author-text__name">Олег Костылев</span>
                                    <span class="author-text__prof">Разработчик</span>
                                </div>
                                <!-- /.lifehacks-text -->
                            </div>
                            <!-- /.lifehacks-author -->
                            <span class="lifehacks-tools">html</span>
                            <h1 class="lifehacks-title clamp-text-2">Правильно вставляем картинку на сайт для Retina дисплея</h1>
                            <button class="button-read">Читать далее<img class="button-read__arrow" src="<?php bloginfo('template_url'); ?>/img/homepage/Arrow.svg" alt="Button: Read">
                            </button>
                        </div>
                    </div>
                </li>
                <li id="web-design" class="lifehacks-content__item">
                    <div class="lifehacks-article">
                        <img src="<?php bloginfo('template_url'); ?>/img/homepage/article-4.jpg" alt="Article: Main lifehack" class="lifehacks-img">
                        <div class="lifehacks-article__text">
                            <div class="author">
                                <img src="<?php bloginfo('template_url'); ?>/img/homepage/avatar-4.jpg" alt="Icon: Author" class="author__img">
                                <div class="author-text">
                                    <span class="author-text__name">Вадим Иров</span>
                                    <span class="author-text__prof">Разработчик</span>
                                </div>
                                <!-- /.lifehacks-text -->
                            </div>
                            <!-- /.lifehacks-author -->
                            <span class="lifehacks-tools">Web Design</span>
                            <h1 class="lifehacks-title clamp-text-2">ТОП-10 плагинов для Figma</h1>
                            <button class="button-read">Читать далее<img class="button-read__arrow" src="<?php bloginfo('template_url'); ?>/img/homepage/Arrow.svg" alt="Button: Read">
                            </button>
                        </div>
                    </div>
                </li>
                <li id="css-2" class="lifehacks-content__item">
                    <div class="lifehacks-article">
                        <img src="<?php bloginfo('template_url'); ?>/img/homepage/article-5.jpg" alt="Article: Main lifehack" class="lifehacks-img">
                        <div class="lifehacks-article__text">
                            <div class="author">
                                <img src="<?php bloginfo('template_url'); ?>/img/homepage/avatar-5.jpg" alt="Icon: Author" class="author__img">
                                <div class="author-text">
                                    <span class="author-text__name">Александр Никитин</span>
                                    <span class="author-text__prof">Разработчик</span>
                                </div>
                                <!-- /.lifehacks-text -->
                            </div>
                            <!-- /.lifehacks-author -->
                            <span class="lifehacks-tools">css</span>
                            <h1 class="lifehacks-title clamp-text-2">Возможности CSS Grid Layout , которые уже можно применять</h1>
                            <button class="button-read">Читать далее<img class="button-read__arrow" src="<?php bloginfo('template_url'); ?>/img/homepage/Arrow.svg" alt="Button: Read">
                            </button>
                        </div>
                    </div>
                </li>
               </ul>
               <!-- /.lifehacks-article -->
               <div class="recommendations">
                   <h2 class="recommendations-title">Рекомендуем</h2>
                   <ul class="recommendations-links">
                       <li data-target="#css-1" class="recommendations-item">
                           <a class="recommendations-link">
                               <span class="recommendations__tools">Css</span>
                               <span id="clamp-text" class="recommendations__about clamp-text-2">Как использовать CSS float <br> после того, как вышел Flexbox</span>
                           </a>
                       </li>
                        <li data-target="#javascript" class="recommendations-item recommendations-item--active">
                            <a class="recommendations-link">
                                <span class="recommendations__tools">JavaScript</span>
                                <span class="recommendations__about clamp-text-2">На каком стандарте писать <br> скрипты, если я фрилансер</span>
                            </a>
                        </li>
                        <li data-target="#html" class="recommendations-item">
                            <a class="recommendations-link">
                                <span class="recommendations__tools">html</span>
                                <span class="recommendations__about clamp-text-2">Правильно вставляем картинку <br> на сайт для Retina дисплея</span>
                            </a>
                        </li>
                        <li data-target="#web-design" class="recommendations-item">
                            <a class="recommendations-link">
                                <span class="recommendations__tools">Web Design</span>
                                <span class="recommendations__about clamp-text-2">ТОП-10 плагинов для Figma</span>
                            </a>
                        </li>
                        <li data-target="#css-2" class="recommendations-item">
                            <a class="recommendations-link">
                                <span class="recommendations__tools">Css</span>
                                <span class="recommendations__about clamp-text-2">Возможности CSS Grid Layout , <br> которые уже можно применять</span>
                            </a>
                        </li>
                   </ul>
               </div>
               <!-- /.recommendations -->
            </div>
            <!-- /.lifehacks-wrap -->
        </div>
    </section>



<section id="what_we_do">
	<div class="container">
		<h3>Что мы делаем?</h3>
		<div class="circle"></div>
		<small>Мы изготовим для Вас качественную влагостойкую мебелдь в ванную комнату по Вашим размерам, любых цветов и форм.</small>
		<div class="row">
			<div class="col-lg-6">
				<ul class="list_wd">

				<li data-img="<?php bloginfo('template_url'); ?>/img/homepage/image_mebel.jpg"
							data-time="Срок изготовления от 2 до 3 недель" class="is_active"
					>
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/icon_list_what.svg" alt="">
					<p>Мебель для ванной под стиральную машину</p>
				</li>
				<li data-img="<?php bloginfo('template_url'); ?>/img/homepage/image_uglovaya.jpg"
							data-time="Срок изготовления от 2 до 3 недель" class="is_active"
					>
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/icon_list_what.svg" alt="">
					<p>Угловая мебель для ванной</p>
				</li>
				<li data-img="<?php bloginfo('template_url'); ?>/img/homepage/image_classic.jpg"
							data-time="Срок изготовления от 2 до 3 недель" class="is_active"
					>
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/icon_list_what.svg" alt="">
					<p>Классическая мебель для ванной</p>
				</li>
				<li data-img="<?php bloginfo('template_url'); ?>/img/homepage/image_penal.jpg"
							data-time="Срок изготовления от 2 до 3 недель" class="is_active"
					>
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/icon_list_what.svg" alt="">
					<p>Пенал для ванной на заказ</p>
				</li>
				<a href="#">Подробнее</a>

				</ul>
			</div><!-- col-lg-6 -->

			<div class="col-lg-6">

				<div class="info_list_what">
					<h4>Мебель для ванной под стиральную машину</h4>
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/image_what.jpg" id="change_what_we_do" alt="" class="img-responsive">
					<div class="time_what">
						<img src="<?php bloginfo('template_url'); ?>/img/homepage/date_icon.svg" alt="" class="">	
						<p>Срок изготовления от 2 до 3 недель</p>					
					</div>
				</div>

			</div> <!-- col-lg-6 -->
		</div> <!-- row -->
	</div> <!-- container -->
</section> <!-- what_we_do -->



<section id="project_main">
	<div class="container">
		<h3>6 новых выполненных проектов</h3>
		<div class="circle"></div>
		<small>6 новых выполненных проектов из более 70!</small>
		<div class="categories">
			<a href="#" class="btn btn_no active">Под стиральную машину</a>
			<a href="#" class="btn btn_no">Под стиральную машину</a>
			<a href="#" class="btn btn_no">Под стиральную машину</a>
			<a href="#" class="btn btn_no">Под стиральную машину</a>
			<a href="#" class="btn btn_no">Под стиральную машину</a>
			<a href="#" class="btn btn_no">Под стиральную машину</a>
			<a href="#" class="btn btn_no">Под стиральную машину</a>
			<a href="#" class="btn btn_no">Под стиральную машину</a>
			<a href="#" class="btn btn_no">Под стиральную машину</a>
			<a href="#" class="btn btn_no">Под стиральную машину</a>
		</div><!-- categories -->

		<div class="projects">
			<div class="row">

				<div class="col-lg-4 col md-6">
					<a href="" class="pro_item">
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/image_project.jpg" alt="" class="img-responsive">
						<span class="pro_abs">
							<span class="arrow">
								<img src="<?php bloginfo('template_url'); ?>/img/homepage/pro_arrow.svg" alt="">								
							</span>
							<span class="pro_info">
								<h4>Мебель для ванной Акватон Кантара</h4>
								<span class="price">20 000 руб.</span>
								<span class="pro_line">
									<span class="small_line"></span>
								</span>
							</span>
						</span>
					</a>
				</div> <!-- col-lg-4 col md-6 -->
				<div class="col-lg-4 col md-6">
					<a href="" class="pro_item">
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/image_project.jpg" alt="" class="img-responsive">
						<span class="pro_abs">
							<span class="arrow">
								<img src="<?php bloginfo('template_url'); ?>/img/homepage/pro_arrow.svg" alt="">								
							</span>
							<span class="pro_info">
								<h4>Мебель для ванной Акватон Кантара</h4>
								<span class="price">20 000 руб.</span>
								<span class="pro_line">
									<span class="small_line"></span>
								</span>
							</span>
						</span>
					</a>
				</div> <!-- col-lg-4 col md-6 -->
				<div class="col-lg-4 col md-6">
					<a href="" class="pro_item">
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/image_project.jpg" alt="" class="img-responsive">
						<span class="pro_abs">
							<span class="arrow">
								<img src="<?php bloginfo('template_url'); ?>/img/homepage/pro_arrow.svg" alt="">								
							</span>
							<span class="pro_info">
								<h4>Мебель для ванной Акватон Кантара</h4>
								<span class="price">20 000 руб.</span>
								<span class="pro_line">
									<span class="small_line"></span>
								</span>
							</span>
						</span>
					</a>
				</div> <!-- col-lg-4 col md-6 -->
				<div class="col-lg-4 col md-6">
					<a href="" class="pro_item">
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/image_project.jpg" alt="" class="img-responsive">
						<span class="pro_abs">
							<span class="arrow">
								<img src="<?php bloginfo('template_url'); ?>/img/homepage/pro_arrow.svg" alt="">								
							</span>
							<span class="pro_info">
								<h4>Мебель для ванной Акватон Кантара</h4>
								<span class="price">20 000 руб.</span>
								<span class="pro_line">
									<span class="small_line"></span>
								</span>
							</span>
						</span>
					</a>
				</div> <!-- col-lg-4 col md-6 -->

			</div><!-- row -->
		</div> <!-- projects -->		
	</div> <!-- container -->
</section>
	
				
	 
	


<?php
get_footer();
