$(".scroll-link").click(function(e) {
    e.preventDefault();
    var aid = $(this).attr("href");

    aid_split = aid.split('#')    
    if(aid_split.lenght==1){
        $('html,body').animate({scrollTop: $(aid).offset().top},'slow');
    }else{
        window.location = aid
    }
});


$('#navbar-menu-sm .navbar-nav .nav-item .scroll-link').click(function(){
    $('#menu-modal').modal('hide');
})

function toggleFullScreen(event) {
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
    if(!!player.isMuted())
    {
        player.unMute();
    } else {
        player.mute();
    }
}

var app = document.getElementById('comentario-elenice');

var typewriter = new Typewriter(app, {
    loop: false,
    delay: 10,
});


