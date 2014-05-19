(function () {
    'use strict';

    $('a').each(function (){
        var url = document.URL;

        if (url === this.href && !$(this).hasClass('navbar-brand')) {
            if($(this).parent().is('li')) {
                $(this).parent().addClass('active');
                if ($(this).parent().parent().hasClass('navbar-nav')) {
                    $(this).append($(document.createElement('div')).addClass('arrow-down'));
                }
            } else {
                $(this).addClass('active');
            }
        }
    });

}());

