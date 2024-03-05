/**	
	* Template Name: Kindle
	* Version: 1.0	
	* Template Scripts
	* Author: MarkUps
	* Author URI: http://www.markups.io/

	Custom JS
	
	1. FIXED MENU
	2. MENU SMOOTH SCROLLING
	3. GOOGLE MAP
	4. READER TESTIMONIALS ( SLICK SLIDER )
	5. MOBILE MENU CLOSE 
	
**/



(function( $ ){


	/* ----------------------------------------------------------- */
	/*  1. FIXED MENU
	/* ----------------------------------------------------------- */


		jQuery(window).bind('scroll', function () {
    		if ($(window).scrollTop() > 150) {

		        $('#mu-header').addClass('mu-fixed-nav');
			    $('#mu-header').removeClass('backround');
			    } else {
			    $('#mu-header').removeClass('mu-fixed-nav');
			    $('#mu-header').addClass('backround');
			}
		});

		
	/* ----------------------------------------------------------- */
	/*  2. MENU SMOOTH SCROLLING
	/* ----------------------------------------------------------- */ 

		//MENU SCROLLING WITH ACTIVE ITEM SELECTED

		// Cache selectors
		var lastId,
		topMenu = $(".mu-menu"),
		topMenuHeight = topMenu.outerHeight()+13,
		// All list items
		menuItems = topMenu.find('a[href^=\\#]'),
		// Anchors corresponding to menu items
		scrollItems = menuItems.map(function(){
		  var item = $($(this).attr("href"));
		  if (item.length) { return item; }
		});

		// Bind click handler to menu items
		// so we can get a fancy scroll animation
		menuItems.click(function(e){
		  var href = $(this).attr("href"),
		      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+22;
		  jQuery('html, body').stop().animate({ 
		      scrollTop: offsetTop
		  }, 1500);
		  e.preventDefault();
		});

		
	/* ----------------------------------------------------------- */
	/*  3. GOOGLE MAP
	/* ----------------------------------------------------------- */ 
		    
	    // $('#mu-google-map').click(function () {

		//     $('#mu-google-map iframe').css("pointer-events", "auto");

		// });
		
		// $("#mu-google-map").mouseleave(function() {

		//   $('#mu-google-map iframe').css("pointer-events", "none"); 

		// });
		
		

	/* ----------------------------------------------------------- */
	/*  4. READER TESTIMONIALS (SLICK SLIDER)
	/* ----------------------------------------------------------- */

		$('.mu-testimonial-slide').slick({
			arrows: false,
			dots: true,
			infinite: true,
			speed: 500,
			autoplay: true,
			cssEase: 'linear'
		});

	/* ----------------------------------------------------------- */
	/*  5. MOBILE MENU CLOSE 
	/* ----------------------------------------------------------- */ 

		jQuery('.mu-menu').on('click', 'li a', function() {
		  $('.mu-navbar .in').collapse('hide');
		});



	
	
})( jQuery );


  
	