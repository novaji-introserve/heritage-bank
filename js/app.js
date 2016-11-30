$(document).ready(function () {

    $('#account-info').hide();
    $('#personal-info-next').click(function () {
        $('#personal-info').fadeOut(1000);
        $('#account-info').fadeIn(1000);
    });
    $('#account-info-prev').click(function () {
        $('#account-info').fadeOut(1000);
        $('#personal-info').fadeIn(1000);

    });

});