$('#sideMenu_btn').on('click', function() {
    $('body').addClass('sidebar_open');
});

$('#closeBtn').on('click', function() {
    $('body').removeClass('sidebar_open');
});