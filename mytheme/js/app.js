// // Import jQuery module (npm i jquery)
import $ from '../../devgulp/node_modules/jquery'
window.jQuery = $
window.$ = $

// // Import vendor jQuery plugin example (not module)
// require('~/app/libs/mmenu/dist/mmenu.js')
require('../libs/slick/slick/slick.min.js')
//require('../libs/parallaxjs/parallax.min.js')

//require('../libs/juxtapose-master/build/js/juxtapose.min.js')
//require('../libs/twentytwenty/js/jquery.event.move.js')
//require('../libs/twentytwenty/js/jquery.twentytwenty.js')
//require('../libs/fancybox/dist/jquery.fancybox.min.js')


document.addEventListener('DOMContentLoaded', () => {
	// Custom JS


//$('body').hide();



	$("#hamburger-1").click(function(){
		$(this).toggleClass("is-active");

		if($(this).hasClass('is-active')){
			$('.mnu_top').slideDown(300);
		}else{
			$('.mnu_top').slideUp(300);
		}
	});

	/*clone big menu*/
	$('.big_mnu > .big').clone().prependTo('.mnu_top');
	/*clone big menu*/

	/*Big menu change image and text*/
	$('.big > .sub-menu > li').hover(function(){
		let image_src = $(this).data('img');
		let link = $(this).data('link');

		$('#changeimgbigmnu').attr('src', image_src);
		$('.abs_item > .btn').attr('href', link);
	});
	/*Big menu change image and text*/


	/*Load 1 sec header*/
	// setTimeout(function() {
	// 	$('header#header .wrapper_header').css('opacity', '1');
	// 	$('#nav .wrapper_nav').css('opacity', '1');
	// }, 200);
	/*Load 1 sec header*/



$('.slider_oldnew').slick({
	dots: true,
	arrows: true,
	infinite: false,
	slidesToShow: 1,
	slidesToScroll: 1,
	nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button"><i class="fas fa-chevron-right"></i>Next</button>',
	prevArrow: '<button class="slick-prev slick-arrow" aria-label="Next" type="button"><i class="fas fa-chevron-left"></i>Prev</button>',		
	appendArrows: $('.slider-custom-arrows'),
	appendDots: $('.slider-custom-arrows'),	
	//draggable: false,
	responsive: [
		{
			breakpoint: 480,
			settings: {
				dots: true,
				//arrows: false,
				draggable: true,
			}
		}
	]
});

	//https://codepen.io/kylerumble/pen/JjPEJmq
	//$(".slider_oldnew").twentytwenty();




	// tabs homepage
	$(function(){
	$('.stage').slice(1).hide();
	$('.buttons_tab > li:first-child').addClass('active');
	let currentLi = $('.buttons_tab > li');
	currentLi.click(function(e) {
		e.preventDefault();
		//let curStage = '.' + $(this).attr('data-stage');
		let stage = '.' + $(this).data('stage');
		currentLi.removeClass('active');
		$(this).addClass('active');
		$('.stage').not(stage).fadeOut();
		$(stage).fadeIn();
		if(stage == '.stage_5'){
			$('.slider_oldnew').slick('refresh');
		}
		if(stage == '.stage_6'){
			$('.st6_slider').slick('refresh');
		}
	});
});





$('.slider_oldnew').on('beforeChange', function(event, slick, currentSlide, nextSlide){
	
	const divider = document.querySelector('.divider');
	const before = document.querySelector('.img-container-before');
	const after = document.querySelector('.img-container-after');
	const containerBA1 = document.querySelector('.beforeAfter1 .slide_beforeafterwrap');
	const containerBA2 = document.querySelector('.beforeAfter2 .slide_beforeafterwrap');

	const dragBeforeAfter1 = (event) => {
		let xPos = event.layerX;
		let size = containerBA1.offsetWidth;
		before.style.width = xPos + 'px';
		divider.style.left = xPos + 'px';
		if(xPos < 50) {
			before.style.width = 0;
			divider.style.left = 0;
		}
		if(xPos + 30 > size){			
			before.style.width = size + 'px';
			divider.style.left = size + 'px';
		}
	}
	containerBA1.addEventListener('mousemove', dragBeforeAfter1);


	const dragBeforeAfter2 = (event) => {
		let xPos = event.layerX;
		let size = containerBA2.offsetWidth;
		before.style.width = xPos + 'px';
		divider.style.left = xPos + 'px';
		if(xPos < 50) {
			before.style.width = 0;
			divider.style.left = 0;
		}
		if(xPos + 30 > size){			
			before.style.width = size + 'px';
			divider.style.left = size + 'px';
		}
	}
	containerBA2.addEventListener('mousemove', dragBeforeAfter2);
});




	// 	const sliderBeforeAfter = document.querySelectorAll('.slide_oldnew');
	// 	sliderBeforeAfter.forEach(item =>{
	// 	const divider = document.querySelector('.divider');
	// 	const before = document.querySelector('.img-container-before');
	// 	const after = document.querySelector('.img-container-after');
	
	// 	const dragBeforeAfter = (event) => {
	// 		let xPos = event.layerX;
	// 		let size = item.offsetWidth;
	// 		before.style.width = xPos + 'px';
	// 		divider.style.left = xPos + 'px';
	// 		if(xPos < 50) {
	// 			before.style.width = 0;
	// 			divider.style.left = 0;
	// 		}
	// 		if(xPos + 30 > size){			
	// 			before.style.width = size + 'px';
	// 			divider.style.left = size + 'px';
	// 		}
	// 	}
	// 	item.addEventListener('mousemove', dragBeforeAfter);
	
	// });




// Before After Slider for a single instance
	// const divider = document.querySelector('.divider');
	// const before = document.querySelector('.img-container-before');
	// const after = document.querySelector('.img-container-after');
	// const containerBA = document.querySelector('.slide_oldnew');

	// const dragBeforeAfter = (event) => {
	// 	let xPos = event.layerX;
	// 	let size = containerBA.offsetWidth;
	// 	before.style.width = xPos + 'px';
	// 	divider.style.left = xPos + 'px';
	// 	if(xPos < 50) {
	// 		before.style.width = 0;
	// 		divider.style.left = 0;
	// 	}
	// 	if(xPos + 30 > size){			
	// 		before.style.width = size + 'px';
	// 		divider.style.left = size + 'px';
	// 	}
	// }
	// containerBA.addEventListener('mousemove', dragBeforeAfter);





// lifehacks from https://tpopovsky.ru/homeworks/web-start---diplom/
var tabsItem = $(".recommendations-item");
var contentItem = $(".lifehacks-content__item")

    tabsItem.on('click', function(event){
        var activeContent = $(this).attr("data-target");
        tabsItem.removeClass('recommendations-item--active');
        contentItem.removeClass("lifehacks-content__item--active")
        $(activeContent).addClass('lifehacks-content__item--active');
        $(this).addClass("recommendations-item--active");
    });



	/*What we do change image and text*/
	$('.list_wd > li').click(function(){
		let image_src = $(this).data('img');
		let link = $(this).data('link');
		let name = $(this).children('p').text();

		$(this).addClass('is_active');
		$('.list_wd > li').not(this).removeClass('is_active');
		$('#change_what_we_do').attr('src', image_src);
		$('#what_we_do_btn').attr('href', link);
		$('#what_we_do_link').attr('href', link);
		$('.info_list_what > h4').text(name);
	})



	$('.st6_slider').slick({
		dots: true,
		arrows: false,
		infinite: false,
		slidesToShow: 2,
		slidesToScroll: 2,
		responsive: [
			{
					breakpoint: 480,
					settings: {
					slidesToShow: 1,
					slidesToScroll: 1,					
					dots: true,
					arrows: false,
					draggable: true,
				}
			}
		]		
	});



//modal WebDev Simplified
const openModalButtons = document.querySelectorAll('[data-modal-target]');
const closeModalButtons = document.querySelectorAll('[data-close-button]');
const overlay = document.querySelector('.backdrop');


openModalButtons.forEach(button => {
	button.addEventListener('click', ()=> {
		const modal = document.querySelector(button.dataset.modalTarget);
		openModal(modal);
	});
});

overlay.addEventListener('click', () => {
	const modals = document.querySelectorAll('.modal.visible');
	modals.forEach(modal => {
		closeModal(modal);
	})
});

closeModalButtons.forEach(button => {
	button.addEventListener('click', ()=> {
		const modal = button.closest('.modal');
		closeModal(modal);
	});
});

const openModal = modal => {
	if (modal == null) return;
	modal.classList.add('visible');
	overlay.classList.add('visible');
}
const closeModal = modal => {
	if (modal == null) return;
	modal.classList.remove('visible');
	overlay.classList.remove('visible');
}



// Scroll to Top
let linkToTop = '<a href="#top" class="top">&uarr;</a>';
$('body').append(linkToTop);
$('.top').hide();
$('body').scroll(function (e) {
	e.preventDefault();
	if ($(this).scrollTop() > 100) {
		$('.top').fadeIn();
	} else {
		$('.top').fadeOut();
	}
});
$('.top').click(function (e) {
	e.preventDefault();
	$('html, body').animate({scrollTop: 0}, 400);
});






});
// End of Document.contentLoaded







