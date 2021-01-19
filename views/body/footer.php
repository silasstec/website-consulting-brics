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
                            <a href="./legal.html" style="color:white;">
                                <?php echo $lang['footer']['legal']; ?>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

        <script src="assets/js/main.js"></script>
        <script src="node_modules/aos/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <script>
                                        
            var is_scroll = false;
            $(window).scroll(function() {
                var hT = $('#comentario-elenice').offset().top,
                    hH = $('#comentario-elenice').outerHeight(),
                    wH = $(window).height(),
                    wS = $(this).scrollTop();
                if (wS > (hT+hH-wH) && is_scroll==false){
                    typewriter.typeString('<?php echo lang($lang['homepage']['comentario']); ?>').start();
                    is_scroll = true
                }
            });

        </script>