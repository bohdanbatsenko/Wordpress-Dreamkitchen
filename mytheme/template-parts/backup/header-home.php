<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package redgroupvanna
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">



<header id="header">
	<div class="container">
	<div class="wrapper_header">
		<a href="" class="logo"><img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt=""></a>
		<div class="cont_in_header">
			<div class="cih_left">
			<i class="fas fa-phone-alt"></i>
			</div>
			<div class="cih_right">
				<div class="cih_small">
					Ежедневно с 9:00 до 21:00
				</div>
				<div class="cih_main">
				+7 (812) 915 30 13
				</div>
			</div> <!-- cih_right -->
		</div> <!-- cont_in_header -->

		<div class="wrapper_social_in_header">

		<div class="cont_in_header">
			<a class="cih_left"><i class="fab fa-facebook-f"></i></a>
			<div class="cih_right">
				<div class="cih_small">
					Следите за нами
				</div>
				<div class="cih_main">
					Наша группа
				</div>
			</div> <!-- cih_right -->
		</div> <!-- cont_in_header -->


		<div class="cont_in_header">
			<a class="cih_left"><i class="fab fa-youtube"></i></a>
			<div class="cih_right">
				<div class="cih_small">
					Постоянно новое
				</div>
				<div class="cih_main">
					Наш канал
				</div>
			</div> <!-- cih_right -->
		</div> <!-- cont_in_header -->

		<div class="cont_in_header">
			<div class="cih_left"><i class="fab fa-instagram"></i></div>
			<div class="cih_right">
				<div class="cih_small">
					Фото наших работ
				</div>
				<div class="cih_main">
					Наш Instagram
				</div>
			</div> <!-- cih_right -->
		</div> <!-- cont_in_header -->

		<a href="#" class="btn">Вызвать замерщика
	
		</a>

		</div> <!-- wrapper_social_in_header -->
	</div> <!-- wrapper_header -->
	</div> <!-- container -->
</header>

<nav id="nav">
	<div class="container">
		<div class="wrapper_nav">
			<ul class="mnu_top">
				<li><a href="">Мебель на заказ</a></li>
				<li><a href="">Фото и видео работ</a></li>
				<li><a href="">До и после</a></li>
				<li><a href="">Покупателю</a></li>
				<li><a href="">Блог</a></li>
				<li><a href="">Отзывы</a></li>
				<li><a href="">Контакты</a></li>
			</ul>

			<div class="search_nav">
				<form action="">
					<input type="search" placeholder="Поиск..." name="search">
				</form>
			</div>
		</div> <!-- wrapper_nav -->
	</div> <!-- container -->
</nav>


