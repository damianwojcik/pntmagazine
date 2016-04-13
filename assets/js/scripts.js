jQuery(document).ready(function($) {

	scroll_based_animations();
	select2_init();

	function scroll_based_animations(){

		var $elements = $('.animation-element'),
		$window = $(window);
			
		function check_if_in_view(){

			var window_height = $window.height(),
			window_top_pos = $window.scrollTop(),
			window_bottom_pos = (window_top_pos + window_height - 200);

			$.each($elements, function(){

				var $element = $(this),
				element_height = $element.outerHeight(),
				element_top_pos = $element.offset().top,
				element_bottom_pos = (element_top_pos + element_height);

				//check to see if this current container is within viewport
				if ((element_top_pos <= window_bottom_pos) ){
					$element.addClass('in-view');
				} else {
					$element.removeClass('in-view');
				}

			});

		}

		$window.on('scroll resize', check_if_in_view);
		$window.trigger('scroll');

	}

	function select2_init(){

		$('#ninja_forms_field_27').select2({
	  		minimumResultsForSearch: Infinity
		});
		
	}

});

