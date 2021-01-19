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


