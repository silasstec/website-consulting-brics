$(".scroll-link").click(function(e) {
    e.preventDefault();
    var aid = $(this).attr("href");

    console.log(aid)    

    $('html,body').animate({scrollTop: $(aid).offset().top},'slow');
});


$('#navbar-menu-sm .navbar-nav .nav-item .scroll-link').click(function(){
    $('#menu-modal').modal('hide');
})

function toggleFullScreen() {
    var player = document.querySelector('#background-video');
    if (!document.mozFullScreen && !document.webkitFullScreen) {
        if (player.mozRequestFullScreen) {
            player.mozRequestFullScreen();
        } 
        else {
            player.webkitRequestFullScreen();
        }
    } else {
        if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else {
            document.webkitCancelFullScreen();
        }
    }
}

var app = document.getElementById('comentario-elenice');

var typewriter = new Typewriter(app, {
    loop: false,
    delay: 10,
});


var is_scroll = false;
$(window).scroll(function() {
    var hT = $('#comentario-elenice').offset().top,
        hH = $('#comentario-elenice').outerHeight(),
        wH = $(window).height(),
        wS = $(this).scrollTop();
    if (wS > (hT+hH-wH) && is_scroll==false){
        typewriter.typeString('A Consulting Brics nasceu do sonho de conectar o Brasil ao mundo e dar-lhe a conhecer o seu enorme potencial. Nascida no Mato Grosso e criada na fazenda de família, idealizei e construí uma empresa de consultoria global, com o objetivo de ajudar na urgente migração dos modelos de negócio para as áreas da sustentabilidade.').start();
        is_scroll = true
    }
 });