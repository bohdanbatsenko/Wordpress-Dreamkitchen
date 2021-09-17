/*AJAX*/

var page = 2;
$(document).ready(function(){

	$('body').on('click', '#more_posts', function() {
		let template = $(this).data('template');
		let data = {
			'action': 'load_posts_by_ajax_callback',
			'page': page,
			'security': blog.security,
			'template': template,
		};
	
		$.post(blog.ajaxurl, data, function(response) {
			console.log('click entered here');
			if($.trim(response) != '') {
				$('#row_append').append(response);
				page++;
				
			} else {
				$('#more_posts').hide();
			}
		});
	});



	

var page1 = 2;

	$('body').on('click', '.cat_button', function() {
		var id = $(this).data('id');
		var template = 'very';
		var mayThis = $(this);
		var link = $(this).data('link');

		// reset to all
		$('#reset_all').click(function() {
			$(this).attr("data-id",3);
			// $(this).link.textContent('');
			$('.cat_button').not(mayThis).removeClass('active');
			$(this).addClass('active');
			// $('.cat_button').not(mayThis).removeAttr('data-link');
			// $('.cat_button').not(mayThis).removeAttr('data-id');
		})

		$('#go_to_rz').attr('href', link);
		var data = {
			'action': 'load_posts_by_ajax_callback',
			'page': page1,
			'security': blog.security,
			'id': id,
			'template': template
		};
		//console.log('click entered here');
		$.post(blog.ajaxurl, data, function(response) {
			if($.trim(response) != '') {
				$('#row_append').empty();
				$('#row_append').append(response);
				page++;
				$(mayThis).addClass('active');
				$('.cat_button').not(mayThis).removeClass('active');
			}
		});
	});




});


/*AJAX*/