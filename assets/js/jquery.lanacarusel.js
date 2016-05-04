/*! Lana Carusel - v0.1.2 - 2016-04-24
* http://lanadev.com/
* Includes: 
* Copyright jQuery Foundation and other contributors; Licensed MIT */

(function($){
  $.fn.touchScrolling = function(max){
    var startPos = 0;
    var semiPos = 0;
    //console.log(semiPos);
    var x = 0;
    self = $(this);
 
    self.bind('touchstart', function(event) {
        var e = event.originalEvent;
        startPos = self.scrollLeft() + e.touches[0].pageX
    });

    self.bind('touchmove', function(event) {
        var e = event.originalEvent;
        // var transX = $(this).css('transform').split(",");
        // var semiPos = +transX[4];
        // console.log(semiPos);
        x = semiPos + e.touches[0].pageX - startPos;
        // console.log("-max" + -max);
        // console.log("x " + x);
        if (x < 0 && x > -max) {
          self.css({"transform": "translateX(" + x + "px)"});
        }
        e.preventDefault();
    });

    self.bind('touchend', function(event) {
      if (x > 0) {
          x = 0;
        } else if (x < -max) {
          x = -max;
        }
      console.log("x after " + x);
      semiPos = x;
    });
};
  jQuery.fn.responsiveCarusel = function(options){

    if ($(this).length == 0) {return;}
  	
  	// Defaul Settings
  	defaultSettings = {
  		'items' : '1',
  		'controlPosition' : 'beside',
      'controlPositionX' : '40',
      'controlColor' : '#f79320'
  	};
  	var settings = $.extend({}, defaultSettings, options);
    
    // Add Viewport and controls
    $(this).css({
    	'position' : 'relative',
    	'display' : 'flex',
    	'justify-content' : 'center',
      'margin' : 'auto'
    	});
    $(this).find('ul').css({'transition' : '.2s'});
    $(this).find('ul').wrap("<div class='la-viewport'></div>").css("display", "flex");
   	$(this).prepend("<span class='la-arrow-left la-rounded la-color'>");
   	$(this).append("<span class='la-arrow-right la-rounded la-color'>");

    ctrlLeft = $(this).find('.la-arrow-left');
    ctrlRight = $(this).find('.la-arrow-right');
   
   	// Set Viewport Width
   	var viewportWidth = $(this).find('.la-viewport').width();
   	if (settings.items == 1) {
   		var itemWidth = viewportWidth;
   		$(this).find('li').css("min-width", viewportWidth + "px");
   	} else {
   		var itemWidth = $(this).find('li').width();
   		}

    // Set Control Position
    var controlWidth = ctrlLeft.outerWidth();
    if (!settings.controlPositionY) {
      settings.controlPositionY = $(this).find('.la-viewport').height() / 2 - ctrlLeft.height() / 2;
    }
    settings.controlPositionX = (settings.controlPosition == 'above') ? settings.controlPositionX : -(+(settings.controlPositionX) + ($(this).find('.la-arrow-left').width()));
    
    ctrlLeft.css({
      'top' : settings.controlPositionY + 'px',
      'left' : settings.controlPositionX + 'px'
    });
    ctrlRight.css({
      'top' : settings.controlPositionY + 'px',
      'right' : settings.controlPositionX + 'px'
    });

    // Set Control Color
    $(this).find('.la-color').css({'color' : settings.controlColor, 'border-color' : settings.controlColor});

    // Set Resposive Viewport Width & Controls Position
   	if (((viewportWidth + 150) >= $('body').width()) && itemWidth < ($('body').width() - 150)) {
      $('.la-viewport').width($('body').width() - 150);
   		$(this).width($('body').width() - 150);
      if (settings.controlPosition == 'beside') {
        ctrlLeft.css("left", "-65px");
        ctrlRight.css("right", "-65px");
      }
   		
   		var viewportWidth = $('.la-viewport').width();

   	} else if (itemWidth >= ($('body').width() - 150) && itemWidth <= ($('body').width() - 40)) {
   		$('.la-viewport').width(itemWidth);
      if (settings.controlPosition == 'beside') {
        ctrlLeft.removeClass('la-rounded').addClass('slim');
        ctrlRight.removeClass('la-rounded').addClass('slim');
   		  $('.la-arrow-left').css("left", "0px");
   		  $('.la-arrow-right').css("right", "0px");
      }
   		var viewportWidth = $('.la-viewport').width();
   	} else {
      $(this).find('li').width($('body').width() - 40);
      itemWidth = $(this).find('li').width();
      $('.la-viewport').width($('body').width() - 40);
      if (settings.controlPosition == 'beside') {
        ctrlLeft.removeClass('la-rounded').addClass('slim');
        ctrlRight.removeClass('la-rounded').addClass('slim');
        $('.la-arrow-left').css("left", "0px");
        $('.la-arrow-right').css("right", "0px");
      }
    }

   	// Check settings.items
   	if (viewportWidth <= itemWidth * settings.items) {
   		settings.items = Math.floor(viewportWidth / itemWidth);
   	}

   	// Set Margin
   	if (settings.items > 1) {
	   	var itemMarginRight = Math.floor((viewportWidth - itemWidth * settings.items) / (settings.items - 1));
	   	$(this).find('li').css({'margin-right' : itemMarginRight + 'px'});
	   } else {
	   	var itemMargin = Math.floor((viewportWidth - itemWidth) / 2);
	   	if(itemMargin <= 0) {itemMargin = 10;}
	   	$(this).find('li').css({'margin-right' : itemMargin + 'px', 'margin-left' : itemMargin + 'px'});
	   }

    // Get Item Lenght, Slide Width; Set Counter
    var itemLength = $(this).find('li').length;
    var slideWidth = $(this).find('li').outerWidth(true);
    var count = 0;
   
    // Right click
    $(this).find('.la-arrow-right').click(function(){
    	if (itemLength - count > settings.items){
    		x = count * -slideWidth -slideWidth;
    		$(this).prev().find('ul').css({"transform": "translateX(" + x + "px)"});
    		count++;
    	} else {
    		$(this).prev().find('ul').css({"transform": "translateX(0px)"});
    		count = 0;
    	}
    });

    // Left click
    $(this).find('.la-arrow-left').click(function(){
    	if (count > 0){
    		x = count * -slideWidth +slideWidth;
    		$(this).next().find('ul').css({"transform": "translateX(" + x + "px)"});
    		count--;
    	} else {
    		x = -(itemLength * slideWidth - settings.items * slideWidth);
     		$(this).next().find('ul').css({"transform": "translateX(" + x + "px)"});
    		count = itemLength - settings.items;
    	}
    });

    // Touch Move
    var max = slideWidth * (itemLength - 1);
    $(this).find('ul').touchScrolling(max);
  };
})(jQuery);

// Versions
// 0.1.0 - Relise
// 0.1.1 - Minor fixes
// 0.1.2 - Add swipe control
// 0.1.3 - Responsive Controlls, Swipe fixes