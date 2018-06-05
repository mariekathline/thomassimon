/* Side bar effect menu */

$('#burgermenu').click(function(){
    $('#bigContainer').addClass('menuOpen');
    $('#navMenu').addClass('menuOpen');
    $('body').addClass('menuOpen');
});

$('#divCloseMenu').click(function(){
    $('#bigContainer').removeClass('menuOpen');
    $('#navMenu').removeClass('menuOpen');
    $('body').removeClass('menuOpen');
});

$('#closeButton').click(function(){
    $('#bigContainer').removeClass('menuOpen');
    $('#navMenu').removeClass('menuOpen');
    $('body').removeClass('menuOpen');
});
