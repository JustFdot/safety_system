/*
 * Application
 *
 */

(function($) {

    $(document).tooltip({
        selector: "[data-toggle=tooltip]"
    })

    // Focus state for append/prepend inputs
    $('.input-group').on('focus', '.form-control', function () {
        $(this).closest('.input-group, .form-group').addClass('focus');
    }).on('blur', '.form-control', function () {
        $(this).closest('.input-group, .form-group').removeClass('focus');
    });

    // Behavior AJAX errors
    $(window).on('ajaxErrorMessage', function(event, message){
        alert('TEST :: JS HANDLED: ' + message);
        event.preventDefault();
    })

})(jQuery);