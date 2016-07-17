$(function(){

    $('#contacts-front').on('click', function() {
        $('.contacts-container').addClass('contacts-open');
    });

    $('.contacts-close').on('click', function() {
        $('.contacts-container').removeClass('contacts-open');
    });

});
