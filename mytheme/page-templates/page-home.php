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


<!--  -->

<section id="main_banner" class="plashka_gradient_70"  style="background-image: 
		url(<?php bloginfo('template_url'); ?>/img/homepage/hero-bg.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="information_main_wrap">
					<div class="information_main">
						<h1>Идеальная кухня</h1>
						<h2>Качественную, кухонную мебель мебель изготовим по Вашим размерам</h2>
						<div class="discount">
							<div class="left_discount">
								<p>Скидка для Вас</p>
								<p>Только до <b>00:00</b></p>
							</div>  <!-- left-discount -->
							<div class="right_discount">15%</div>
						</div>  <!-- discount -->
						<a data-fancybox data-src="#call_me" href="javascript:;" class="btn btn_filled">Получить скидку</a>
						
					</div>  <!-- information_main -->
				</div> <!-- information_main_wrap -->
			</div> <!-- col-lg-6 -->

			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="advantages_main_wrap">
				<div class="advantages_main">
					<ul>
						<li>
							<img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages/quality.svg" class="img-responsive" alt="">
							<b>25 лет</b>
							<p>на рынке</p>
						</li>
						<li>
							<img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages/measuring-tape.svg" class="img-responsive" alt="">
							<b>Замеры</b>
							<p>бесплатно</p>
						</li>
						<li>
							<img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages/hammer.svg" class="img-responsive" alt="">
							<b>Изготовление</b>
							<p>2-3 недели</p>
						</li>
						<li>
							<img src="<?php bloginfo('template_url'); ?>/img/homepage/advantages/guarantee.svg" class="img-responsive" alt="">
							<b>Гарантия</b>
							<p>3 года</p>
						</li>

					</ul>
				</div>
				</div<!-- advantages_main_wrap -->
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
					<div class="img-border"><img src="<?php bloginfo('template_url'); ?>/img/homepage/how_we_work/measure_triangle.svg" class="img-responsive" alt=""></div>
					<p>Замеры</p>
				</li>
				<li data-stage="stage_2">
					<div class="img-border"><img src="<?php bloginfo('template_url'); ?>/img/homepage/how_we_work/design.svg" class="img-responsive" alt=""></div>
					<p>Дизайн</p>
				</li>
				<li  data-stage="stage_3">
					<div class="img-border"><img src="<?php bloginfo('template_url'); ?>/img/homepage/how_we_work/manufacturing.svg" class="img-responsive" alt=""></div>
					<p>Изготовление</p>
				</li>
				<li data-stage="stage_4">
					<div class="img-border"><img src="<?php bloginfo('template_url'); ?>/img/homepage/how_we_work/transport.svg" class="img-responsive" alt=""></div>
					<p>Доставка</p>
				</li>
				<li data-stage="stage_5">
					<div class="img-border"><img src="<?php bloginfo('template_url'); ?>/img/homepage/how_we_work/portfolio.svg" class="img-responsive" alt=""></div>
					<p>Наши проекты</p>
				</li>
				<li data-stage="stage_6">
					<div class="img-border"><img src="<?php bloginfo('template_url'); ?>/img/homepage/how_we_work/reviews.svg" class="img-responsive" alt=""></div>
					<p>Отзывы</p>
				</li>
			</ul>
			</div> <!-- wrapper_nav_stages -->
		</div> <!-- container -->
	</div> <!-- nav_stages -->



<div class="stage stage_1" >
		<div class="stage_1_bg" style="background-image: 
		url(<?php bloginfo('template_url'); ?>/img/homepage/measuring/curve_green.png);">
	<div class="container">
		<div class="row">
			<div class="col-md-7">

				<div class="heading">
					<b>1</b>
					<h3>Замер + разработка проекта мебели для ванной в удобное для Вас время</h3>
				</div><!-- heading -->

				<div class="description">
				При замерах на кухне необходимо соблюдать определенные правила, применяемые лишь по отношению к этому помещению. В любой кухне имеются различные инженерные коммуникации, вентиляционные отверстия и короба, месторасположение которых не всегда удобно, но и перенести их невозможно. Нельзя не учесть и высокую техническую оснащенность этого помещения бытовым оборудованием. 
				</div>

				<a href="" class="btn btn_white">Выбрать дату или время</a>

				<div class="have">
					<b>Что будет у замерщика</b>
					<ul>
						<li><img src="<?php bloginfo('template_url'); ?>/img/homepage/measuring/measure_tape.png" class="img-responsive" alt=""></li>
						<li><img src="<?php bloginfo('template_url'); ?>/img/homepage/measuring/ladder.png" class="img-responsive" alt=""></li>
						<li><img src="<?php bloginfo('template_url'); ?>/img/homepage/measuring/ruler.png" class="img-responsive" alt=""></li>
						<li><img src="<?php bloginfo('template_url'); ?>/img/homepage/measuring/notebook.png" class="img-responsive" alt=""></li>

					</ul>
				</div>
				<div class="attention">
					<img src="" alt="">
					<p>При необходимости дадим рекомендации по разводу сантехники и электрики.</p>
				</div> <!-- atetntion -->	

			</div> <!-- col-lg-7 -->

			<div class="col-md-5">
				<!-- wrapper_img originally here -->
				<div class="wrapper_img">

					<!--img src="<?php bloginfo('template_url'); ?>/img/homepage/measure.jpg" class="img-responsive" alt=""-->
				</div>	
			</div><!-- col-lg-5 -->

		</div> <!-- row -->

		</div> <!-- container -->

		</div><!-- stage_1_bg -->
		<div class="quotes">
			<div class="container"><p>Замеры - едва ли не самый важный етап работы с клиентом. Здесь нужна особая щепетильность и точность. Именно этими качествами обладают наши замерщики!</p></div>
		</div>		
	</div> <!-- stage stage_1 -->



	<div class="stage stage_2">
		<div class="container">
				<div class=" heading">
					<b>2</b>
					<h3>Разработаем для вас один из двух вариантов дизайн-проекта кухонной мебели</h3>
				</div><!-- heading -->
		<div class="row">
			<div class="col-md-6">

				<div class="st2_design">
					<div class="top_st2">
						<h4>PRO 100</h4>
						<div class="sale">Бесплатно!</div>
					</div>
				</div>

				<img src="<?php bloginfo('template_url'); ?>/img/homepage/how_we_work/stage_2_design1.jpg" class="img-responsive st2_img" alt="">

				<div class="small_description">
				Мы сможем воплотить в реальность Ваши пожелания, создать эргономичный проект, соответствующий модным тенденциям, сочетающий в себе индивидуальность, стиль и экономичность.
				</div>

				<div class="attention">
				<img src="<?php bloginfo('template_url'); ?>/img/homepage/att.svg" class="img-responsive" alt="">
					<p>Также Вы получите коммерческое предложение на изготовление мебели в кухню комнату с учетом выбранных материалов</p>
				</div> <!-- attention -->	

		
			</div> <!-- col-lg-6 -->

			<div class="col-md-6">

				<div class="st2_design">
					<div class="top_st2">
						<h4>3D Max</h4>
						<div class="sale">2500 грн.</div>
					</div>
				</div>
				
				<img src="<?php bloginfo('template_url'); ?>/img/homepage/how_we_work/stage_2_design2.jpg" class="img-responsive st2_img" alt="">

				<div class="small_description">
				Дизайнер поможет Вам создать не просто графический рисунок, а 3D проект, который вполне достоверно поможет представить Ваш кухонный гарнитур. 
				</div>

				<div class="ps">
				<img src="<?php bloginfo('template_url'); ?>/img/homepage/ps.svg" class="img-responsive" alt="">
				<p>Стоимость зависит от материала и фурнитуры, готовы предложить Вам несколько вариантов просчета</p>				
				</div>

			</div><!-- col-lg-6 -->

		</div> <!-- row -->
		</div> <!-- container -->

		<div class="quotes">
			<div class="container">Не проблема, если Вам трудно определиться с дизайном. У нас есть опытные дизайнеры с многолетним стажем. Они подскажут, какой цвет, размер, расположение лучше! </div>
		</div>		
	</div> <!-- stage stage_2 -->


	<div class="stage stage_3" style="background-image: 
		url(<?php bloginfo('template_url'); ?>/img/homepage/bg_st3.jpg);">
		<div class="container">
				<div class="heading">
					<b>3</b>
					<h3>Ознакомьтесь с процессом изготовления Вашей кухни</h3>
				</div><!-- heading -->

				<div class="description">
				Срок изготовления от 2-х до 3-х недель!
				</div>

				<div class="st3_images">
					<div class="st3_item">
						<img src="<?php bloginfo('template_url'); ?>/img/homepage/production/production1.jpg" class="img-responsive" alt="">
						<p>Распил ДСП</p>
					</div>
					<div class="st3_item">
						<img src="<?php bloginfo('template_url'); ?>/img/homepage/production/production2.jpg" class="img-responsive" alt="">
						<p>Оклейка торцов</p>
					</div>
					<div class="st3_item">
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/production/production3.jpg" class="img-responsive" alt="">
						<p>Сверление меток</p>
					</div>
					<div class="st3_item">
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/production/production4.jpg" class="img-responsive" alt="">
						<p>Подготовка и упаковка</p>
					</div>
					<div class="st3_item">
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/production/production5.jpg" class="img-responsive" alt="">
						<p>Сборка</p>
					</div>
				</div>

		</div> <!-- container -->
		<div class="quotes">
			<div class="container">Процесс изготовления кухни требует сепциалистов и профессионалов. Именно такие люди работают в нашей компании. Они знают свое дело!</div>
		</div>		
	</div> <!-- stage stage_3 -->


	<div class="stage stage_4" style="background-image: 
		url(<?php bloginfo('template_url'); ?>/img/homepage/delivery/delivery.jpg);">
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
			<div class="container">Мы доставим готовую продукцию в любой уголок нашей страны. Вам не нужно заботиться о транспортировке, договариватся о наличии автомобиля, считать расстояния - мы сделаем это все за вас!</div>
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
				На данной странице представлены лишь некоторые наши проекты.
				Каждый проект уникален, и мы стараемся подобрать индивидуальную мебель под каждого заказчика, учитывая ваши предпочтения, вкусы и возможности.

				</div>
				<h4>Следите за обновлениями реализованных проектов в наших социальных сетях</h4>

				<ul class="list_st_5">
					<li>
						<a href="" class="list_st_5_item">
							<div class="list_st_5_icon_wrap">
								<i class="fab fa-facebook-f"></i>
						</div>
							<span class="ls5_item">
								<i>Кухня мечты</i>
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
								<i>Кухня мечты</i>
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
								<i>Кухня мечты</i>
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
						<div class="slide_oldnew beforeAfter1">
							<div class="slide_beforeafterwrap">
								<div class="img-container-after"><img src="<?php bloginfo('template_url'); ?>/img/homepage/beforeafter/01after.jpg" class="after" data-label="После" alt=""></div>
								<div class="img-container-before"><img src="<?php bloginfo('template_url'); ?>/img/homepage/beforeafter/01before.jpg" class="before" data-label="До" alt=""></div>
								<div class="divider"></div>							
							</div>
						</div>

						<div class="slide_oldnew beforeAfter2">
							<div class="slide_beforeafterwrap">
								<div class="img-container-after"><img src="<?php bloginfo('template_url'); ?>/img/homepage/beforeafter/02after.jpg" class="after" data-label="После" alt=""></div>
								<div class="img-container-before"><img src="<?php bloginfo('template_url'); ?>/img/homepage/beforeafter/02before.jpg" class="before" data-label="До" alt=""></div>
								<div class="divider"></div>
							</div>
						</div>


						<!-- <div class="slide_oldnew ">
						<img src="<?php bloginfo('template_url'); ?>/img/homepage/beforeafter/01before.jpg" data-label="До" alt="">
							<img src="<?php bloginfo('template_url'); ?>/img/homepage/beforeafter/01after.jpg" data-label="После" alt="">
						</div>
						<div class="slide_oldnew ">
						<img src="<?php bloginfo('template_url'); ?>/img/homepage/beforeafter/02before.jpg" data-label="До" alt="">
							<img src="<?php bloginfo('template_url'); ?>/img/homepage/beforeafter/02after.jpg" data-label="После" alt="">
						</div> -->

					</div><!-- slider_oldnew -->
					<div class="slider-custom-arrows">
					
					</div>						

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
			<div class="container">Уже более 10 лет мы производим качественные и надежные кухни. Независимо от региона, наша продукция представлена практически в каждом городе. Мы гордимся каждым нашим проектом!</div>
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
						<div class="date">29.05.2021</div>
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
						<div class="date">11.06.2021</div>
					</div> <!-- st6_slide -->					

				</div>  <!-- st6_slider -->

		


		</div> <!-- container -->
		<div class="quotes">
			<div class="container">Самое большое вознаграждение от нашей работы - это теплые отзывы и благодарность наших дорогих клиентов!</div>
		</div>	
		
	</div> <!-- stage stage_6 -->

</section>



<!--section class="lifehacks">
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
                          
                            </div>
                       
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
                    
                            </div>
                    
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
                          
                            </div>
                        
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
                       
                            </div>
                      
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
               
                            </div>
      
                            <span class="lifehacks-tools">css</span>
                            <h1 class="lifehacks-title clamp-text-2">Возможности CSS Grid Layout , которые уже можно применять</h1>
                            <button class="button-read">Читать далее<img class="button-read__arrow" src="<?php bloginfo('template_url'); ?>/img/homepage/Arrow.svg" alt="Button: Read">
                            </button>
                        </div>
                    </div>
                </li>
               </ul>
 
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

            </div>

        </div>
    </section-->



<section id="what_we_do">
	<div class="container">
		<h3>Что мы делаем?</h3>
		<div class="circle"></div>
		<small>Мы изготовим для Вас качественную кухонную мебель по Вашим размерам, любых цветов и форм.</small>
		<div class="row">
			<div class="col-lg-6">
				<ul class="list_wd">

				<li data-img="<?php bloginfo('template_url'); ?>/img/homepage/whatwedo/garnitury.jpg"
							data-time="Срок изготовления от 2 до 3 недель" class="is_active"
					>
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/icon_list_what.svg" alt="">
					<p>Кухонные гарнитуры</p>
				</li>
				<li data-img="<?php bloginfo('template_url'); ?>/img/homepage/whatwedo/ugolki.jpg"
							data-time="Срок изготовления от 2 до 3 недель" class=""
					>
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/icon_list_what.svg" alt="">
					<p>Кухонные уголки</p>
				</li>
				<li data-img="<?php bloginfo('template_url'); ?>/img/homepage/whatwedo/nabory.jpg"
							data-time="Срок изготовления от 2 до 3 недель" class=""
					>
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/icon_list_what.svg" alt="">
					<p>Наборы кухонные столы и стулья</p>
				</li>
				<li data-img="<?php bloginfo('template_url'); ?>/img/homepage/whatwedo/stolovye.jpg"
							data-time="Срок изготовления от 2 до 3 недель" class=""
					>
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/icon_list_what.svg" alt="">
					<p>Столовые</p>
				</li>
				<li data-img="<?php bloginfo('template_url'); ?>/img/homepage/whatwedo/obed_komplekt.jpg"
							data-time="Срок изготовления от 2 до 3 недель" class=""
					>
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/icon_list_what.svg" alt="">
					<p>Обеденные комплекты</p>
				</li>
				<li data-img="<?php bloginfo('template_url'); ?>/img/homepage/whatwedo/divan.jpg"
							data-time="Срок изготовления от 2 до 3 недель" class=""
					>
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/icon_list_what.svg" alt="">
					<p>Кухонные диваны</p>
				</li>
				<li data-img="<?php bloginfo('template_url'); ?>/img/homepage/whatwedo/taburet.jpg"
							data-time="Срок изготовления от 2 до 3 недель" class=""
					>
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/icon_list_what.svg" alt="">
					<p>Табуретки</p>
				</li>
				<a href="#" class="btn btn_filled">Подробнее</a>

				</ul>
			</div><!-- col-lg-6 -->

			<div class="col-lg-6">

				<div class="info_list_what">
					<h4>Кухонные гарнитуры</h4>
					<img src="<?php bloginfo('template_url'); ?>/img/homepage/whatwedo/garnitury.jpg" id="change_what_we_do" alt="" class="img-responsive">
					<div class="time_what">
						<p><img src="<?php bloginfo('template_url'); ?>/img/homepage/whatwedo/clock_green.svg" alt="" class="img-clock">Срок изготовления от 2 до 3 недель</p>					
					</div>
				</div>

			</div> <!-- col-lg-6 -->
		</div> <!-- row -->
	</div> <!-- container -->
</section> <!-- what_we_do -->




<section id="project_main">
	<div class="container">
		<h2>6 новых выполненных проектов</h2>
		<div class="circle"></div>
		<?php $userposts = get_posts('cat=3&showposts=-1'); $count=count($userposts); ?>
		<small><b>6</b> новых выполненных проектов из более 70! <b><?php echo $count; ?></b></small>
		<div class="categories">
			<?php
				$categories = get_categories(
					array( 'parent' => 3)
				);
				foreach ($categories as $c) {
					echo '<div class="btn btn_dark cat_button" 
					data-link="' . get_category_link($c->term_id) . '"
					data-id="' . $c->term_id . '">'.
					$c->cat_name.'</div>';
				}
				
				?>

		</div><!-- categories -->

		<div class="projects">
			<div class="row" id="row_append">

		<?php
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'tax_query'     => array(
						array(
								'taxonomy'          => 'category',
								'terms'             => 3,
								'field'             => 'term_id',
							//	'operator'          => 'AND',
								'include_children'  => true
						)
						),
					'parent' => 3,
					'posts_per_page' => '6',
					'paged' => 1
				);
				$blog_posts = new WP_Query($args);
			?> 

						<?php if ($blog_posts->have_posts()) : ?>
						<?php while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
							<?php get_template_part('inc/template', 'photo'); ?>
								<?php endwhile; ?>
								<?php endif; ?>

								<!--?php wp_reset_postdata(); ?-->	
						
			</div><!-- row -->
		</div> <!-- projects -->	
		
		<div class="wrapper_btn">
			<a href="" class="btn btn_filled btn_no" id="go_to_rz">
				Перейти в раздел
			</a>
		</div> <!-- wrapper_btn -->
	
	</div> <!-- container -->
</section>
	
				


<?php
get_footer();
