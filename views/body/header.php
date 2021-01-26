        <video autoplay="true" loop muted playsinline id="background-video" class="no-md">
            <!-- MUDE O VIDEO NO LINK ABAIXO -->
            <source src="assets/images/video-teste.mp4" type="video/mp4">
            
            <!-- IMG IF NO VIDEO FOUND -->
            <img src="assets/images/video.png">
        </video>

        
        <img src="assets/images/video.png" style="position: fixed;z-index: -10;max-width: 100%;">
        

        <header class="text-center hero" id="header-homepage" >
            

            <div style="height: 30%;"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-ms-12">
                        <h1><?php echo $lang['homepage']['header']['h1']; ?></h1>
                        <button href="#contato" class="btn btn-action no-sm scroll-link upper"><?php echo $lang['homepage']['header']['button']; ?></button>
                        
                    </div>
                </div>
            </div>
            
            <img src="assets/images/full_video.png" class="full-video" onclick="toggleFullScreen();">

            <span class="hero__scroll aos-init aos-animate no-sm" data-aos-easing="ease" data-aos-delay="800">
				<i class="chevron bottom" style="color: #FFF;"></i>
			</span>
            
        </header>