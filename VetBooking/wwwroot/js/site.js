// Please see documentation at https://docs.microsoft.com/aspnet/core/client-side/bundling-and-minification
// for details on configuring this project to bundle and minify static web assets.

// Write your JavaScript code.


$(document).ready(function () {

    $('.datepicker').datepicker({
        dateFormat: 'dd-mm-yy',
        autoclose: true,
        startDate: '0d',
        minDate: 0
    });

    $('.cell').click(function () {
        $('.cell').removeClass('select');
        $(this).addClass('select');
    });

});

$(document).ready(function () {
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var activeTab = $(e.target).text(); // Get the name of active tab
        var previousTab = $(e.relatedTarget).text(); // Get the name of previous tab
        $(".active-tab span").html(activeTab);
        $(".previous-tab span").html(previousTab);
    });
});
