(function () {
    'use strict';

    function changeTab(id) {
        $('.lacarte > div').addClass('hide');
        $('.lacarte #' + id).removeClass('hide');
    }

    function checkSearch() {
        if ($('.search input').val() !== '') {
            $('.search .btn i').removeClass('fa-search').addClass('fa-times');
        } else {
            $('.search .btn i').removeClass('fa-times').addClass('fa-search');
            changeTab('pizzas');
        }
    }

    function clearSearch() {
        if ($('.search input').val() !== '') {
            $('.search input').val('');
            checkSearch();
        }
    }

    function search()
    {
        var search = $('.search input').val().toLowerCase();

        changeTab('pizzas-search');

        $('.btn-group > label.btn').removeClass('active');

        $('#pizzas-search > div.pizza').addClass('hide')
        .each(function (){
            if ($('.panel-heading', this).text().toLowerCase().indexOf(search) > -1 ||
                $('.panel-body', this).text().toLowerCase().indexOf(search) > -1) {
                $(this).removeClass('hide');
            }
        });
    }

    $('body').on('click', '.btn-group label', function () {
        clearSearch();
        changeTab($(this).data('id'));
    })
    .on('click', '.search .btn', function () {
        clearSearch();
    })
    .on('keyup', '.search input', function (){
        search();
        checkSearch();
    })
    .on('click', '.show-all', function () {
        clearSearch();
    });

}());

