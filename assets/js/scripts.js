// Slider price-filter
$(function () {
    $("#slider-range").slider({
        range: true,
        min: 20,
        max: 5000,
        values: [90, 5000],
        slide: function (event, ui) {
            $("#amount-1").val(ui.values[0]);
            $("#amount-2").val(ui.values[1]);
        }
    });
    $("#amount-1").val($("#slider-range").slider("values", 0));
    $("#amount-2").val($("#slider-range").slider("values", 1));
});

// Slider age filter
$(function () {
    $("#slider-range-max-1").slider({
        range: "max",
        min: 1,
        max: 84,
        value: 14,
        slide: function (event, ui) {
            $("#age-1").val(Math.floor(ui.value / 12));
            $("#age-2").val(ui.value % 12);
        }
    });
    $("#age-1").val(Math.floor(+($("#slider-range-max-1").slider("value")) / 12));
    $("#age-2").val(+($("#slider-range-max-1").slider("value")) % 12);
});

// Slider size-filter
$(function () {
    $("#slider-range-3").slider({
        range: true,
        min: 1,
        max: 25,
        values: [5, 20],
        slide: function (event, ui) {
            $("#size-1").val(ui.values[0]);
            $("#size-2").val(ui.values[1]);
        }
    });
    $("#size-1").val($("#slider-range-3").slider("values", 0));
    $("#size-2").val($("#slider-range-3").slider("values", 1));
});

// Tabs
$(function () {
    $("#tabs").tabs();
});

// Quantity select
$(function () {
    itemQuantity = $('div[id*="item-id"]'); // Нахожу все блоки корзины
    itemQuantity.each(function (i) {          // В каждом блоке к элеиентам .btn и input
        box = $(this);                      // добавляю data с счетчиком
        curentClass = 'inp-' + i;
        box.find('input').attr('data-box-count', curentClass);
        box.find('.btn-plus').attr('data-box-count', curentClass);
        box.find('.btn-minus').attr('data-box-count', curentClass);
    });

    $('.btn-plus').click(function () {              // Вешаю обработчик на плюс
        boxCount = $(this).attr('data-box-count');  //  для input с тким же значением data
        val = Number($('input[data-box-count=' + boxCount + ']').attr('value'));
        $('input[data-box-count=' + boxCount + ']').attr('value', ++val);
    });

    $('.btn-minus').click(function () {             // Вешаю обработчик на минус
        boxCount = $(this).attr('data-box-count');  // с проверкой на 0
        val = Number($('input[data-box-count=' + boxCount + ']').attr('value'));
        if (val > 1) {
            $('input[data-box-count=' + boxCount + ']').attr('value', --val);
        }
    });

});

// Gender select
$(document).ready(function () {
    $('.gender-select .toggle').click(function () {
        if ($('.gender-select .drop-box').is(":hidden")) {
            $('.gender-select .drop-box').slideDown(400);
        } else {
            $('.gender-select .drop-box').slideUp(400);
        }
    });
    $('.gender-select .drop-box input').click(function () {
        $('.gender-select .toggle').text($(this).data('gender'));
        $('.gender-select .drop-box').slideUp(400);
    });

    // Date dropdown select
    $('.date-dropdown-holder input[name="years"]').click(
        function () {
            console.log('click!');
            if ($('ul.option.year').is(':hidden')) {
                $('ul.option.year').slideDown(400);
            } else {
                $('ul.option.year').slideUp(400);
            }
        }
    );

    $('.date-dropdown-holder input[name="gender"]').click(
        function () {
            console.log('click!');
            if ($('ul.option.gender').is(':hidden')) {
                $('ul.option.gender').slideDown(400);
            } else {
                $('ul.option.gender').slideUp(400);
            }
        }
    );

    $('ul.option.gender li').click(function () {
        $('.date-dropdown-holder input[name="gender"]').attr('value', ($(this).text()));
        $('ul.option.gender').slideUp(400);
    });

    $('ul.option.year li').click(function () {
        $('.date-dropdown-holder input[name="years"]').attr('value', ($(this).text()));
        $('ul.option.year').slideUp(400);
    });

    $('.date-dropdown-holder input[name="months"]').click(
        function () {
            console.log('click!');
            if ($('ul.option.month').is(':hidden')) {
                $('ul.option.month').slideDown(400);
            } else {
                $('ul.option.month').slideUp(400);
            }
        }
    );

    $('ul.option.month li').click(function () {
        $('.date-dropdown-holder input[name="months"]').attr('value', ($(this).text()));
        $('ul.option.month').slideUp(400);
    });

});

// Data Select
$(function () {
    $("#datepicker").datepicker();
});

// Dropdown select in Order Shipping form
$(document).ready(function () {
    $('.shipping-form input[name="state"]').click(
        function () {
            if ($('ul.option.state').is(':hidden')) {
                $('ul.option.state').slideDown(400);
            } else {
                $('ul.option.state').slideUp(400);
            }
        }
    );

    $('ul.option.state li').click(function () {
        $('.shipping-form input[name="state"]').attr('value', ($(this).text()));
        $('ul.option.state').slideUp(400);
    })

    $('.shipping-form input[name="country"]').click(
        function () {
            if ($('ul.option.country').is(':hidden')) {
                $('ul.option.country').slideDown(400);
            } else {
                $('ul.option.country').slideUp(400);
            }
        }
    );

    $('ul.option.country li').click(function () {
        $('.shipping-form input[name="country"]').attr('value', ($(this).text()));
        $('ul.option.state').slideUp(400);
    })


    $('.shipping-form input[name="ship_state"]').click(
        function () {
            if ($('ul.option.state_ship').is(':hidden')) {
                $('ul.option.state_ship').slideDown(400);
            } else {
                $('ul.option.state_ship').slideUp(400);
            }
        }
    );

    $('ul.option.state_ship li').click(function () {
        $('.shipping-form input[name="ship_state"]').attr('value', ($(this).text()));
        $('ul.option.state').slideUp(400);
    })

    $('.shipping-form input[name="ship_country"]').click(
        function () {
            if ($('ul.option.country_ship').is(':hidden')) {
                $('ul.option.country_ship').slideDown(400);
            } else {
                $('ul.option.country_ship').slideUp(400);
            }
        }
    );

    $('ul.option.country_ship li').click(function () {
        $('.shipping-form input[name="ship_country"]').attr('value', ($(this).text()));
        $('ul.option.state').slideUp(400);
    });

    $('#dif-shipping').click(function () {
        if ($('#dif-shipping').is(':checked')) {
            $('.dif-shipping-container').slideDown(600);
        } else {
            $('.dif-shipping-container').slideUp(600);
        }
    });

// Swich to Second Step Order
    $('#order-next').click(function () {
        $('#step-one').animate({'height': '0', 'width': '0', 'opacity': '0'});
        $('#step-two').animate({'height': 'toggle', 'width': 'toggle', 'opacity': 'toggle'});
        $('.step-counter .step-one').toggleClass('active');
        $('.step-counter .step-two').toggleClass('active');
    })

// Confirm order
    $('#submit-order').click(function () {
        if ($('#confirm').is(':checked')) {
        } else {
            event.preventDefault();
        }
    })
});

// Preview puppy image
$(document).ready(function () {
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#uploadImg').css({'opacity': '1'}).attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#puppy-img-load").change(function () {
        readURL(this);
    });
});

// FAQ Accordion
$(document).ready(function () {
    $('.faq li').click(function () {
        console.log($(this).find(':after'));
        $(this).find('h3.rad-5').toggleClass('active');
        $(this).find('div').animate({
            'opacity': 'toggle',
            'height': 'toggle'
        });
        $(this).toggleClass('open');
    });
});

// Home Page Carusel
$(function () {
    $('#carusel-1').responsiveCarusel(
        {
            'items': '4',
            'controlPosition': 'beside',
            'controlPositionY': '95',      // Margin top
            'controlPositionX': '40',      // Margin inner / outer
            'controlColor': '#ed1968'
        });
});

// Home Page Gallery Carusel
// $(function() {
//    $('#gallery-carusel').responsiveCarusel(
//     {
//     'items' : '4',
//     'controlPosition' : 'beside',
//     'controlPositionY' : '95',      // Margin top
//     'controlPositionX' : '40',      // Margin inner / outer  
//     'controlColor' : '#ed1968'
//   });
// });

// Gallery Page Gallery Carusel
$(function () {
    $('#gallery-carusel-2').responsiveCarusel(
        {
            'items': '4',
            'controlPosition': 'beside',
            'controlPositionY': '95',      // Margin top
            'controlPositionX': '40',      // Margin inner / outer
            'controlColor': '#ed1968'
        });
});

// Catalog Carusel
$(function () {
    $('#slider_catalog').responsiveCarusel(
        {
            'items': '1',
            'controlPosition': 'above',
            'controlPositionX': '40',       // Margin inner / outer
            'controlColor': '#fff'
        });
});

// Product Detail Carusel
$(function () {
    $('#carusel-2').responsiveCarusel(
        {
            'items': '4',
            'controlPosition': 'beside',
            'controlPositionY': '95',      // Margin top
            'controlPositionX': '40',      // Margin inner / outer
            'controlColor': '#ed1968'
        });
});

// Gallery Goodybox Carusel
$(function () {
    $('#carusel-goodiebox').responsiveCarusel(
        {
            'items': '1',
            'controlPosition': 'beside',
            'controlPositionX': '40',      // Margin inner / outer
            'controlColor': '#f79320'
        });
});

// Aside Filter / Cart Toggle
$(function () {

    function _asideToggle(elem) {
        if ($('.catalog-aside').width() == 0 && elem) {
            $('.catalog-aside').animate({'width': '278', 'opacity': '1'});
            elem.show().prev().show();
            control = elem;
        } else if (elem.is(':hidden')) {
            elem.show().prev().show();
        } else {
            $('.catalog-aside').animate({'width': '0', 'opacity': '0'});
            elem.hide().prev().hide();

        }
    }

    $('.sidebar-toggle .fa-filter').click(function () {
        $(this).toggleClass('active');
        _asideToggle($('.catalog-aside .product-filter'));
        $('.fa-shopping-cart.active').removeClass('active');
    });

    $('.sidebar-toggle .fa-shopping-cart').click(function () {
        $(this).toggleClass('active');
        $('.catalog-aside .cart-box').toggleClass('active');
        _asideToggle($('.catalog-aside .cart-box'));
        $('.fa-filter.active').removeClass('active');
    })
});

// Mobile menu
$(function () {
    $('.nav-toggle').click(function () {
        if ($('.top-nav').is(':hidden')) {
            $('.top-nav').show(500);
        } else {
            $('.top-nav').hide(400);
        }
    })
});

// Gallery on Home Page
// $(function(){
//   $('.content-box.photo').responsiveGallery();
// });

// Gallery on Catalog Page
$(function () {
    $('.product-detail .col-left .thumb-line').responsiveGallery($('#top-img'));
});

// See detail hover link add
/*$(document).ready(function () {
 var link;
 var linkElem = $('.product-preview');
 for ( i = 0; i < linkElem.length; i++ ) {
 link = $(linkElem[i]).find("a").attr("href");
 $(linkElem[i]).find('img').wrap('<a href="' + link + '" class="preview-link">');
 }
 });*/

// Feedback read more toggle
$(document).ready(function () {
    $('.item.feed').find('a.link').click(function () {
        event.preventDefault();
        if ($(this).prev().hasClass("open")) {
            $(this).prev().height("6em").toggleClass("open");
        } else {
            $(this).prev().height("auto").toggleClass("open");
        }
    });
});

// Resposive YouToube video
$(document).ready(function () {
    // Find all YouTube videos
    var $allVideos = $("iframe[src^='https://www.youtube.com']"),

    // The element that is fluid width
        $fluidEl = $(".video-box");

    // Figure out and save aspect ratio for each video
    $allVideos.each(function () {

        $(this)
            .data('aspectRatio', this.height / this.width)

            // and remove the hard coded width/height
            .removeAttr('height')
            .removeAttr('width');

    });

    // When the window is resized
    $(window).resize(function () {

        var newWidth = $fluidEl.width();

        // Resize all videos according to their own aspect ratio
        $allVideos.each(function () {

            var $el = $(this);
            $el
                .width(newWidth)
                .height(newWidth * $el.data('aspectRatio'));

        });

        // Kick off one resize to fix all videos on page load
    }).resize();
});

// Label for product-preview
$(document).ready(function () {
    $('.product-preview.label-sale').append('<div class="label sale">');
    $('.product-preview.label-new').append('<div class="label new">');
});

$(document).ready(function(){
    $('.new-puppy h3').click(function(){
        console.log('click');
        $('.new-puppy form').show();
        $('.my-puppies .col-12.row').removeClass("col-12", "row").addClass("col-6");
        $(this).unbind();
    });
});



$(function () {

    $('.subscribe').on('click', function () {
        var email = $('#subscr_email').val();
        var firstname = $('#subscr_name').val();
        $.post('/main/subscribe', {'email': email,'firstname':firstname}).done(function (data) {
            var i = $.parseJSON(data);
            if(i.msg=='success'){
                $('#subscribe_window p.text-center').text();
                $('#subscribe_window a.subscribe').hide();
                $('#subscribe_window p').hide();
                $('#subscribe_window h1').text('Sikeresen feliratkoztál!');
            }
            if(i.msg=='exists'){
                $('#subscribe_window p.text-center').text();
                $('#subscribe_window a.subscribe').hide();
                $('#subscribe_window p').hide();
                $('#subscribe_window h1').text('Ez az email cím már feliratkozott!');
            }
        });
    });

    $('.felirat,.subscr').click(function (event) { // лoвим клик пo ссылки с id="go"
        event.preventDefault(); // выключaем стaндaртную рoль элементa
        $('#overlay').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
            function () { // пoсле выпoлнения предъидущей aнимaции
                $('#subscribe_window')
                    .css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
                    .animate({opacity: 1, top: '60%'}, 200); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
            });
    });
    /* Зaкрытие мoдaльнoгo oкнa, тут делaем тo же сaмoе нo в oбрaтнoм пoрядке */
    $('#subscribe_close, #overlay').click(function () { // лoвим клик пo крестику или пoдлoжке
        $('#subscribe_window')
            .animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
                function () { // пoсле aнимaции
                    $(this).css('display', 'none'); // делaем ему display: none;
                    $('#overlay').fadeOut(400); // скрывaем пoдлoжку
                }
            );
    });



});