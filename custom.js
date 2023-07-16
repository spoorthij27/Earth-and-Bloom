$(document).ready(function () {
    $('.increment-btn').click(function(e){
        e.preventDefault();
        var qty =$(this).closest('.data').find('.input-qty').val();
        var value= parseInt(qty,10);
        value= isNaN(value) ? 0 : value;
        if(value<10){
            value++;
            $(this).closest('.data').find('.input-qty').val(value);
        }
    });

    $('.decrement-btn').click(function(e){
        e.preventDefault();
        var qty =$(this).closest('.data').find('.input-qty').val();
        
        var value= parseInt(qty,10);
        value= isNaN(value) ? 0 : value;
        if(value>1){
            value--;
            $(this).closest('.data').find('.input-qty').val(value);
        }
    });
});