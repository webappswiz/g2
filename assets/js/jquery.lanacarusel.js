/*! Lana Carusel - v0.0.1 - 2016-03-29
* http://lanadev.com/
* Includes: 
* Copyright jQuery Foundation and other contributors; Licensed MIT */

(function($){
  jQuery.fn.responsiveCarusel = function(options){
  	
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
    	'justify-content' : 'center'
    	});
    $(this).find('ul').css({'transition' : '.2s'});
    $(this).find('ul').wrap("<div class='la-viewport'></div>").css("display", "flex");
   	$(this).prepend("<span class='la-arrow-left la-rounded la-color'>");
   	$(this).append("<span class='la-arrow-right la-rounded la-color'>");

   	// Set Viewport Width
   	var viewportWidth = $(this).find('.la-viewport').width();
   	if (settings.items == 1) {
   		var itemWidth = viewportWidth;
   		$(this).find('li').css("min-width", viewportWidth + "px");
   	} else {
   		var itemWidth = $(this).find('li').width();
   		}

    // Set Control Position
    if (!settings.controlPositionY) {
      settings.controlPositionY = $(this).find('.la-viewport').height() / 2 - $(this).find('.la-arrow-left').height() / 2;
    }
    settings.controlPositionX = (settings.controlPosition == 'above') ? settings.controlPositionX : -(+(settings.controlPositionX) + ($(this).find('.la-arrow-left').width()));

    $(this).find('.la-arrow-left').css({
      'top' : settings.controlPositionY + 'px',
      'left' : settings.controlPositionX + 'px'
    });
    $(this).find('.la-arrow-right').css({
      'top' : settings.controlPositionY + 'px',
      'right' : settings.controlPositionX + 'px'
    });

    // Set Control Color
    $(this).find('.la-color').css({'color' : settings.controlColor, 'border-color' : settings.controlColor});

    // Set Resposive Viewport Width & Controls Position
   	if (((viewportWidth + 10) >= $('body').width()) && itemWidth < ($('body').width() - 150)) {
   		console.log("первое условие" + itemWidth < ($('body').width() - 150));
   		$('.la-viewport').width($('body').width() - 150);
   		$('.la-arrow-left').css("left", "5px");
   		$('.la-arrow-right').css("right", "5px");
   		var viewportWidth = $('.la-viewport').width();
   	} else if (itemWidth >= ($('body').width() - 150)) {
   		$('.la-viewport').width(itemWidth);
   		$('.la-arrow-left').css("left", "5px");
   		$('.la-arrow-right').css("right", "5px");
   		var viewportWidth = $('.la-viewport').width();
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
	   	if(itemMargin <= 0) {itemMargin = 0;}
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
    		console.log(x);
    		$(this).next().find('ul').css({"transform": "translateX(" + x + "px)"});
    		count = itemLength - settings.items;
    	}
    });
  };
})(jQuery);
