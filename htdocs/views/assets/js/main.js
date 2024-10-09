$(document).ready(function() {
    $('.tab-button').click(function() {
        const tabId = $(this).attr('id').replace('tab-', '');

        $('.tab-content').removeClass('active');
        $('#' + tabId).addClass('active');

        $('.tab-button').removeClass('active');
        $(this).addClass('active');
    });
    $('#tab-tecnicas-tecnologias').click();
});