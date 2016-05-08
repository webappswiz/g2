$(function() {
    $('.btn-minus').on('click',function(){
        var product_id = $(this).data('productid');
        var qty = $(this).next('.qty').val();
        $.post('/cart/update', {'product_id': product_id,'product_qty':qty}).done(function (data) {
            var i = $.parseJSON(data);
            if (i.msg == 1) {
                location.reload();
            }
        });
    });
    $('.btn-plus').on('click',function(){
        var product_id = $(this).data('productid');
        var qty = $(this).prev('.qty').val();
        $.post('/cart/update', {'product_id': product_id,'product_qty':qty}).done(function (data) {
            var i = $.parseJSON(data);
            if (i.msg == 1) {
                location.reload();
            }
        });
    });
});
