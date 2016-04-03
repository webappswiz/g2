// Slider price-filter
$(function() {
  $( "#slider-range" ).slider({
    range: true,
    min: 20,
    max: 899,
    values: [ 90, 790 ],
    slide: function( event, ui ) {
      $( "#amount-1" ).val( "$" + ui.values[ 0 ] );
      $( "#amount-2" ).val( "$" + ui.values[ 1 ] );
    }
  });
  $( "#amount-1" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) );
  $( "#amount-2" ).val( "$" + $( "#slider-range" ).slider( "values", 1 ) );
});

// Slider age filter
$(function() {
    $( "#slider-range-max-1" ).slider({
      range: "max",
      min: 1,
      max: 10,
      value: 2,
      slide: function( event, ui ) {
        $( "#age-1" ).val( ui.value );
      }
    });
    $( "#age-1" ).val( $( "#slider-range-max-1" ).slider( "value" ) );
  });

// Slider size-filter
$(function() {
  $( "#slider-range-3" ).slider({
    range: true,
    min: 1,
    max: 25,
    values: [ 5, 20 ],
    slide: function( event, ui ) {
      $( "#size-1" ).val( ui.values[ 0 ] );
      $( "#size-2" ).val( ui.values[ 1 ] );
    }
  });
  $( "#size-1" ).val( $( "#slider-range-3" ).slider( "values", 0 ) );
  $( "#size-2" ).val( $( "#slider-range-3" ).slider( "values", 1 ) );
});

$(function() {
    $( "#tabs" ).tabs();
  });

// Quantity select
$(function(){
  itemQuantity = $('div[id*="item-id"]'); // Нахожу все блоки корзины
  itemQuantity.each(function(i){          // В каждо блоке к элеиентам .btn и input
      box = $(this);                      // добавляю data с счетчиком
      curentClass = 'inp-'+i;
      box.find('input').attr('data-box-count', curentClass);
      box.find('.btn-plus').attr('data-box-count', curentClass);
      box.find('.btn-minus').attr('data-box-count', curentClass);
      });

  $('.btn-plus').click(function(){              // Вешаю обработчик на плюс
    boxCount = $(this).attr('data-box-count');  //  для input с тким же значением data
    val = Number($('input[data-box-count='+boxCount+']').attr('value'));
    $('input[data-box-count='+boxCount+']').attr('value', ++val);
  });

  $('.btn-minus').click(function(){             // Вешаю обработчик на минус
    boxCount = $(this).attr('data-box-count');  // с проверкой на 0
    val = Number($('input[data-box-count='+boxCount+']').attr('value'));
    if (val > 1) {
      $('input[data-box-count='+boxCount+']').attr('value', --val);
    }
  });
      
});

// Gender select
$(document).ready(function(){
  $('.gender-select .toggle').click(function(){
    if ($('.gender-select .drop-box').is(":hidden")) {
      $('.gender-select .drop-box').slideDown(400);
    } else {
      $('.gender-select .drop-box').slideUp(400);
    }
  });
  $('.gender-select .drop-box input').click(function(){
    $('.gender-select .toggle').text(this.value);
  });

});

// Data Select
$(function() {
    $( "#datepicker" ).datepicker();
});

// Dropdown select in Order Shipping form
$(document).ready(function() {
  $('.shipping-form input[name="state"]').click(
    function() {
      if ($('ul.option.state').is(':hidden')) {
        $('ul.option.state').slideDown(400);
      } else {
        $('ul.option.state').slideUp(400);
      }
    }
  );

  $('ul.option.state li').click(function(){
    $('.shipping-form input[name="state"]').attr('value', ($(this).text()));
  })

  $('.shipping-form input[name="country"]').click(
    function() {
      if ($('ul.option.country').is(':hidden')) {
        $('ul.option.country').slideDown(400);
      } else {
        $('ul.option.country').slideUp(400);
      }
    }
  );

  $('ul.option.country li').click(function(){
    $('.shipping-form input[name="country"]').attr('value', ($(this).text()));
  })


  $('.shipping-form input[name="ship_state"]').click(
    function() {
      if ($('ul.option.state_ship').is(':hidden')) {
        $('ul.option.state_ship').slideDown(400);
      } else {
        $('ul.option.state_ship').slideUp(400);
      }
    }
  );

  $('ul.option.state_ship li').click(function(){
    $('.shipping-form input[name="ship_state"]').attr('value', ($(this).text()));
  })

  $('.shipping-form input[name="ship_country"]').click(
    function() {
      if ($('ul.option.country_ship').is(':hidden')) {
        $('ul.option.country_ship').slideDown(400);
      } else {
        $('ul.option.country_ship').slideUp(400);
      }
    }
  );

  $('ul.option.country_ship li').click(function(){
    $('.shipping-form input[name="ship_country"]').attr('value', ($(this).text()));
  });

  $('#dif-shipping').click(function() {
      if ($('#dif-shipping').is(':checked')) {
        $('.dif-shipping-container').slideDown(600);
      } else {
        $('.dif-shipping-container').slideUp(600);
      }
    });



// Swich to Second Step Order
  $('#order-next').click(function(){
    $('#step-one').animate({'height' : '0', 'width' : '0', 'opacity' : '0'});
    $('#step-two').animate({'height': 'toggle', 'width' : 'toggle', 'opacity' : 'toggle'});
    $('.step-counter .step-one').toggleClass('active');
    $('.step-counter .step-two').toggleClass('active');
  })

// Confirm order
  $('#submit-order').click(function(){
    if ($('#confirm').is(':checked')) {
      console.log('go!');
    } else {
      event.preventDefault();
      console.log('huyak-huyak');
    }
  })
});

 