(function () {
    'use strict';

    $('body').on('click', '.btn-group label', function () {
        var id = $(this).data('id');

        $('.lacarte > div').addClass('hide');
        console.log('.lacarte #' + id);
        $('.lacarte #' + id).removeClass('hide');
    });

}());

