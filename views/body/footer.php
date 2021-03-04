        <button href="#body" class="btn btn-action scroll-link btn-back-top">Back to top</button>
        
        <div id="footer" class="bg-grey color-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-12 md-center  order-md-2 order-lg-1">
                        <p class="pt-8">
                            <?php echo $lang['footer']['text']; ?>
                        </p>
                    </div>
                    <div class="col-lg-5 col-md-12 text-right md-center  order-md-1 order-lg-2">
                        <p class="pt-8">
                            <a href="<?php echo URL; ?>legal-info" style="color:white;">
                                <?php echo $lang['footer']['legal']; ?>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="<?php echo URL; ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

        <script src="<?php echo URL; ?>assets/js/main.js"></script>
        
        <script src="<?php echo URL; ?>node_modules/aos/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <script>
                                        
            var is_scroll = false;
            $(window).scroll(function() {
                /** **/

                var hTbtt = $('.show-back-to-top').offset().top,
                    hHbtt = $('.show-back-to-top').outerHeight(),
                    wHbtt = $(window).height(),
                    wSbtt = $(this).scrollTop();
                    
                if (wSbtt > (hTbtt+hHbtt-wHbtt)){
                    $('.btn-back-top').show()
                }else{
                    $('.btn-back-top').hide()
                }

            });

        </script>

        

        