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
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt=""></a>
		<div class="cont_in_header">
			<div class="cih_left">
			<i class="fas fa-phone-alt"></i>
			</div>
			<div class="cih_right">
				<div class="cih_small">
					Ежедневно с 9:00 до 21:00
				</div>
				<div class="cih_main">
				+38(096) 946 57 47
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


		<button data-modal-target="#modal-header-home" class="btn btn_light">Вызвать замерщика
		</button>
    <div class="modal card" id="modal-header-home">
			<div class="modal__header">
				<div class="title">Вызвать замерщика</div>
				<button data-close-button class="close-button">X</button>
			</div>
      <div class="modal__content">
				<?php echo do_shortcode('[contact-form-7 id="76" title="Форма номер 1"]');?>
      </div>

    </div>


		</div> <!-- wrapper_social_in_header -->
	</div> <!-- wrapper_header -->
	</div> <!-- container -->
</header>

<nav id="nav">
			<div class="container">
				<div class="wrapper_nav">
					<button class="hamburger" id="hamburger-1" aria-label="Open menu">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</button>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'left_menu',
							'menu_class'     => 'mnu_top',
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
					<div class="search_nav">
					<form role="search" method="get"  class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'radiate' ); ?></span>
        <input type="поиск" class="search-field" placeholder="<?php echo esc_attr_x( 'Поиск &hellip;', 'placeholder', 'radiate' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" >
    </label>
    <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Поиск', 'submit button', 'radiate' ); ?>">
					</form>	
						<!-- <form>
							<input type="search" placeholder="Поиск..." name="search">
						</form> -->
					</div>
				</div>
			</div>
		</nav>


