/*! Lana Gallery - v0.0.2 - 2016-03-29
* http://lanadev.com/
* Includes: 
* Copyright jQuery Foundation and other contributors; Licensed MIT */

(function($){
  jQuery.fn.responsiveGallery = function(){
    if ($(this).length == 0) {
      return;
    }

    // Create Gallery Frame
  	$('body').append('<div id="gallery_owerlay"><div id="la-space"><div class="gallery-viewport">');
  	$('#la-space .gallery-viewport').prepend('<span class="la-arrow-right la-rounded la-color">');
  	$('#la-space .gallery-viewport').append('<span class="la-arrow-left la-rounded la-color">');
  	$(this).find('img').clone().prependTo('#gallery_owerlay #la-space .gallery-viewport');
    
    // Add Hover effects to original images    
    $(this).find('img').wrap('<div class="la-hover-effect">');
    $(this).find('.la-hover-effect').mouseover(function(){
      $(this).toggleClass('x');
    });
    $(this).find('.la-hover-effect').mouseout(function(){
      $(this).toggleClass('x');
    });

    // Open gallery
  	$(this).find('.la-hover-effect').click(function(){
  		$('#gallery_owerlay').fadeIn(400);
  		activeImg = $('#la-space .gallery-viewport img[src="' + $(this).find('img').attr('src') + '"]').show(400);
      $('.gallery-viewport .la-arrow-left, .gallery-viewport .la-arrow-right').css({'top' : 'calc(50% - 30px)' });
  	});

    // Navigations
  	$('.gallery-viewport .la-arrow-right').click(function(){
      
		  if (activeImg.next('.gallery-viewport img').length == 1) {
        activeImg.hide(400);
		    activeImg = activeImg.next('.gallery-viewport img').show(400);
		  }

		  event.preventDefault();
		  event.stopPropagation();
	  });

	  $('.gallery-viewport .la-arrow-left').click(function(){
    
      if (activeImg.prev('.gallery-viewport img').length == 1) {
		    activeImg.hide(400);
		    activeImg = activeImg.prev('.gallery-viewport img').show(400);
      }
  		event.preventDefault();
  		event.stopPropagation();
	  });

    $('#gallery_owerlay .gallery-viewport').click(function(){
      event.preventDefault();
      event.stopPropagation();
    });
  	
    // Close Gallery
  	$('#gallery_owerlay').click(function(){
      activeImg.hide(400);
  		$(this).fadeOut(400);
  	});
  }
  })(jQuery);