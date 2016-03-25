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

// $(function() {
//   $( "#slider-range-2" ).slider({
//     range: true,
//     min: 1,
//     max: 100,
//     values: [ 10, 90 ],
//     slide: function( event, ui ) {
//       $( "#age-1" ).val( ui.values[ 0 ] );
//       $( "#age-2" ).val( ui.values[ 1 ] );
//     }
//   });
//   $( "#age-1" ).val( $( "#slider-range-2" ).slider( "values", 0 ) );
//   $( "#age-2" ).val( $( "#slider-range-2" ).slider( "values", 1 ) );
// });

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