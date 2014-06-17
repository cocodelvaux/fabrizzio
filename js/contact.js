(function () {
    'use strict';

    var modal = window.Modal;

    function validateEmail(email) {
        var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return regex.test(email);
    }

    $('form').on('submit', function (event) {

        var name = $('form input[name=realname]');
        var email = $('form input[name=email]');
        var message = $('form textarea[name=message]');

        name.parent().removeClass('has-error');
        email.parent().removeClass('has-error');
        message.parent().removeClass('has-error');

        if (name && email && message &&
            name.val() !== '' && email.val() !== '' && message.val() !== '' &&
            validateEmail(email.val())
        ) {
            var originalCharset = document.charset;

            message.val('\r\n\r\n' + message.val());

            document.charset = 'ISO-8859-1';

            window.onbeforeunload = function () {
                document.charset = originalCharset;
            };
        } else {
            event.preventDefault();

            if (name.val() === '') {
                name.parent().addClass('has-error');
            }

            if (email.val() === '' || !validateEmail(email.val())) {
                email.parent().addClass('has-error');
            }

            if (message.val() === '') {
                message.parent().addClass('has-error');
            }

            modal.simpleContainer('Email', 'Pour pouvoir envoyer un email vous devez renseigner tous les champs.');
        }
    });

}());
