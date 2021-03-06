        <video autoplay="true" loop muted playsinline id="background-video">
            <!-- MUDE O VIDEO NO LINK ABAIXO -->
            <source src="assets/images/video-teste.mp4" type="video/mp4">
            
            <!-- IMG IF NO VIDEO FOUND -->
            <img src="assets/images/video.png">
        </video>

        <iframe id="background-video" class="no-sm" frameborder="0" height="114%" width="100%"
            src="https://www.youtube.com/embed/8lAVbdnj4gI?autoplay=1&mute=1&controls=0&showinfo=0&autohide=1&loop=1&playlist=8lAVbdnj4gI">
        </iframe>

       
            
        
        <!--<img src="assets/images/video.png" style="" class="bg-video-sm">-->
        

        <header class="text-center hero" id="header-homepage" >
            

            <div id="espaco-full" style="height: 30%;" class="no-sm"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-ms-12">

                        <div id="espaco"></div>
                        <h1><?php echo $lang['homepage']['header']['h1']; ?></h1>
                        <button href="#contato" class="btn btn-action no-sm scroll-link upper"><?php echo $lang['homepage']['header']['button']; ?></button>
                        
                    </div>
                </div>
            </div>
            
            <img src="assets/images/full_video.svg" class="full-video" onclick="toggleFullScreen();">

            <span class="hero__scroll aos-init aos-animate no-sm" data-aos-easing="ease" data-aos-delay="800">
				<i class="chevron bottom" style="color: #FFF;"></i>
			</span>
            
        </header>