        <?php require_once('views/body/header.php'); ?>
        
        <div class="bg-white" style="padding-top: 100px;margin-top: -100px;">

            <div class="text-center  d-block d-md-none d-lg-none d-xl-none m-b-50" style="margin-top:-25px;">
                <button class="btn btn-action m-b-25 scroll-link" href="#contato"><?php echo $lang['homepage']['button']; ?></button>
                <div>
                
                    <img src="assets/images/<?php echo $imode; ?>elipses-titles.svg" class="m-t-45 img-center" data-aos="fade-up">

                </div>
                <div>
                    <img src="assets/images/<?php echo $imode; ?>down.svg" class="m-t-50 mg-fluid"  data-aos="fade-up">
                </div>
            </div>
            
            
            
            <div id="quem-somos" class="show-back-to-top">

                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 col-md-12 col-sm-12 order-lg-1 order-md-2 order-2">

                            <div class="row">
                                <div class="col-lg-6 col-md-12 md-center " style="min-height: 350px;">

                                    <a href="https://www.linkedin.com/in/eleniccecandido/" target="_blank">
                                        <div class="col-persona">
                                            <div class="card card-persona" data-aos="fade-right">
                                                <img class="card-img" src="assets/images/elenice.svg">
                                                <div class="card-body">
                        
                                                        <img src="assets/images/<?php echo $imode; ?>linkedin-btn.svg" align="left" class="linkedin">
                                                        <p class="name md-center">    
                                                            Elenice Cândido da Silva<br>
                                                            <small>• <?php echo $lang['homepage']['sobre']['cargo_elenice']; ?></small>
                                                        </p>
                                                        <img src="assets/images/<?php echo $imode; ?>linkedin-btn-sm.svg" class="linkedin-sm">
                                                        
                                                </div>
                                            </div>
                                        </div>

                                    </a>

                                </div>

                                <div class="col-lg-5 col-md-12 offset-lg-5 md-center" style="min-height: 350px;">

                                    <a href="https://www.linkedin.com/in/antinsan" target="_blank">

                                        <div class="col-persona">
                                            <div class="card card-persona" data-aos="fade-right">
                                                <img class="card-img" src="assets/images/antonio.svg">
                                                <div class="card-body">
                                                    
                                                        <img src="assets/images/<?php echo $imode; ?>linkedin-btn.svg" align="left" class="linkedin">
                                                        <p class="name md-center">    
                                                            Antonio Insana<br>
                                                            <small>• <?php echo $lang['homepage']['sobre']['cargo_antonio']; ?></small>
                                                        </p>
                                                        <img src="assets/images/<?php echo $imode; ?>linkedin-btn-sm.svg" class="linkedin-sm">
            
                                                </div>
                                            </div>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            

                        </div>

                        <div class="col-12 col-lg-6 col-md-12 col-sm-12 order-lg-2 order-md-1 order-1 md-center">
                            
                            <div data-aos="fade-left">

                            <!-- SVG -->

                                <img src="assets/images/<?php echo $imode; ?>elipses-titles.svg"  data-aos="fade-left" class="m-t-45 no-sm" style="position: absolute; right:0px;margin-top:-10px;">

                                <div class="color-orange we-300 pt-13"><?php echo $lang['homepage']['sobre']['h5']; ?></div>
                                
                                <div class="color-blue font-philosopher pt-38 we-700" style="margin-bottom: 15px;">
                                    <?php echo $lang['homepage']['sobre']['h2']; ?>
                                    
                                </div>

                                <div class="divider bg-blue"></div>
                                <p class="pt-13 line-h-24 we-400">
                                    <?php echo $lang['homepage']['sobre']['text1']; ?>
                                </p>

                                <p class="pt-13 line-h-24 we-400 d-none d-lg-block d-xs-block">
                                <?php echo $lang['homepage']['sobre']['text2']; ?>
                                </p>
                            </div>

                        </div>
                    </div>

                    <p class="pt-13 line-h-24 we-400 d-sm-block d-md-block d-lg-none d-xs-none md-center">
                        <?php echo $lang['homepage']['sobre']['text2']; ?>
                    </p>

                    <div id="timeline">

                        <div class="row justify-content-center"  data-aos="fade-up">
                            <div class="col-lg-6 p-r"></div>
                            <div class="col-lg-6 p-l y2014"  data-toggle="popover" id="tl-y2014">
                                <h5 class="font-philosopher color-orange pt-38">2014 <div class="circle-l size-28"></div></h5>
                                
                                <?php 
                                
                                echo $lang['homepage']['timeline']['2014']; 

                                ?>
                            </div>
                        </div>

                        <div class="row justify-content-center" data-aos="fade-up">
                            <div class="col-lg-6 text-lg-right p-r" id="tl-y2015">
                                <h5 class="font-philosopher color-orange pt-38">2015 <div class="circle-r size-22"></div></h5>
                                
                                <?php echo $lang['homepage']['timeline']['2015']; ?>
                            </div>
                            <div class="col-lg-6 p-l"></div>
                        </div>

                        <div class="row justify-content-center" data-aos="fade-up">
                            <div class="col-lg-6 p-r"></div>
                            <div class="col-lg-6 p-l" id="tl-y2016">
                                <h5 class="font-philosopher color-orange pt-38">2016 <div class="circle-l size-28"></div></h5>
                                
                                <?php echo $lang['homepage']['timeline']['2016']; ?>
                            </div>
                        </div>

                        <div class="row justify-content-center" data-aos="fade-up">
                            <div class="col-lg-6 text-lg-right p-r">
                                <h5 class="font-philosopher color-orange pt-38">2017 <div class="circle-r size-22"></div></h5>
                                
                                <?php echo $lang['homepage']['timeline']['2017']; ?>
                            </div>
                            <div class="col-lg-6 p-l"></div>
                        </div>

                        <div class="row justify-content-center" data-aos="fade-up">
                            <div class="col-lg-6 p-r"></div>
                            <div class="col-lg-6 p-l">
                                <h5 class="font-philosopher color-orange pt-38">2018 <div class="circle-l size-28"></div></h5>
                                
                                <?php echo $lang['homepage']['timeline']['2018']; ?>
                            </div>
                        </div>

                        <div class="row justify-content-center" data-aos="fade-up">
                            <div class="col-lg-6 text-lg-right p-r">
                                <h5 class="font-philosopher color-orange pt-38">2020 <div class="circle-r size-22"></div></h5>
                                
                                <?php echo $lang['homepage']['timeline']['2019']; ?>
                            </div>
                            <div class="col-lg-6 p-l"></div>
                        </div>

                        <div class="row justify-content-center" data-aos="fade-up">
                            <div class="col-lg-6 p-r"></div>
                            <div class="col-lg-6 p-l">
                                <h5 class="font-philosopher color-orange pt-38">2021 <div class="circle-l size-28"></div></h5>
                                
                                <?php echo $lang['homepage']['timeline']['2020']; ?>
                            </div>
                        </div>

                    </div>
                   


                    


                    <img src="assets/images/<?php echo $imode; ?>elipses_quemsomos.svg" class="elipses d-block d-lg-none d-xl-none d-md-none" style="margin-top: -2px;">
                    <img src="assets/images/<?php echo $imode; ?>elipses_quemsomos.svg" class="elipses d-none d-lg-block d-xl-block d-md-block">

                </div>
            </div>

            <div id="comentario" class="bg-blue-5">
                
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-md-9">

                            <div class="comentario md-center">

                                <div class="abre-aspas font-philosopher color-blue pt-150 aspas">“</div>

                                <p class="font-philosopher pt-18 we-700 texto" id="comentario-elenice"></p>

                                <div class="autor text-right upper we-300 md-center">
                                    <div>
                                        <img src="assets/images/<?php echo $imode; ?>assinatura.png" class="img-fluid" alt="">
                                    </div>
                                    <div style="width:18px;border-bottom:solid 1px #000;position:absolute;right:180px;margin-top:15px;" id="traco"></div> Elenice Cândido
                                </div>

                                <div class="fecha-aspas font-philosopher color-blue pt-150 aspas">”</div>

                            </div>

                        </div>
                    </div>                
                </div>

            </div>

            <div id="missao">

                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-4 col-md-7" data-aos="fade-up">
                            <div class="item  md-center">

                                <div class="circle bg-orange d-none d-md-none d-lg-block d-xl-block"></div>

                                <img src="assets/images/missao.png" class="radius-15 item-img m-b-25 img-fluid">
                                <div class="conteudo">
                                    <strong class="we-500 color-blue upper pt-13"><?php echo $lang['homepage']['missao']['titulo']; ?></strong>
                                    <p class="pt-13 we-400 m-t-15 line-h-24">
                                        <?php echo $lang['homepage']['missao']['descricao']; ?>
                                    </p>
                                </div>

                                <div class="circle-sm bg-orange d-lg-none d-xs-none d-sm-block d-md-block"></div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-7 " data-aos="fade-up">
                            <div class="item m-t-50 md-center">

                                <div class="circle bg-orange d-sm-none d-md-none d-lg-block d-xs-block no-sm" style="top:200px"></div>
                                
                                <img src="assets/images/visao.png" class="radius-15 item-img m-b-25 img-fluid">

                                <div class="conteudo">
                                    
                                    <strong class="we-500 color-blue upper m-t-15"><?php echo $lang['homepage']['visao']['titulo']; ?></strong>
                                    <p class="pt-13 we-400 m-t-15 line-h-24">
                                    <?php echo $lang['homepage']['visao']['descricao']; ?>
                                    </p>
                                </div>

                                <div class="circle-sm bg-orange d-lg-none d-xs-none d-sm-block d-md-block"></div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-7" data-aos="fade-up">
                            <div class="item m-t-100 md-center">
                                <img src="assets/images/valores.png" class="radius-15 item-img m-b-25 img-fluid">
                                <div>
                                    <strong class="we-500 color-blue upper"><?php echo $lang['homepage']['valores']['titulo']; ?></strong>
                                    <p class="pt-13 we-400 m-t-15 line-h-24">
                                        <?php echo $lang['homepage']['valores']['descricao']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>  

                    <img src="assets/images/<?php echo $imode; ?>elipses-titles.svg" class="elipses d-block d-lg-none d-xl-none img-center m-t-45 no-sm">
                    
                   

                </div>

            </div>

            <svg id="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path <?php if(isset($_COOKIE['bmode'])){ echo 'fill="#252525"'; }else{ echo 'fill="#F2F2FA"'; } ?> fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,176C384,171,480,181,576,197.3C672,213,768,235,864,224C960,213,1056,171,1152,144C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
            
            <div id="servicos" class="bg-blue-5" style="margin-top">
                
                <div class="container" style="margin-top: -50px;">
                    <div class="row justify-content-md-center">

                        <div class="col-lg-12 col-md-12 titulo-servicos">
                            <div  data-aos="fade-up">
                                <h5 class="color-orange we-300 pt-13 upper"><?php echo $lang['homepage']['servicos']['h5']; ?></h5>
                                <h2 class="pt-38 font-philosopher we-700 color-blue"><?php echo $lang['homepage']['servicos']['h2']; ?></h2>
                                <div class="divider bg-blue m-t-15 m-b-50 no-sm"></div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-7" data-aos="fade-up">

                            <a href="<?php echo URL; ?>servicos#estrategia" style="text-decoration:none;">

                                <div class="servico radius-15" data-aos="fade-up">
                                    <img src="assets/images/<?php echo $imode; ?>icone-estrategia.svg" class="icone">
                                    <div class="conteudo">
                                        <div class="titulo upper color-blue we-500 pt-13 m-b-25 m-t-50 text-center">

                                            <?php echo $lang['homepage']['servicos']['item1']['titulo']; ?>

                                        </div>
                                        <div class="texto text-center line-h-24">

                                            <?php echo $lang['homepage']['servicos']['item1']['descricao']; ?>

                                            <div class="text-right m-t-10">
                                                <img src="assets/images/<?php echo $imode; ?>arrow-right.svg" style="width: 30px;" alt="">
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                            </a>

                        </div>

                        <div class="col-lg-4 col-md-7" data-aos="fade-up">

                            <div class="m-b-100 no-sm no-md"><br></div>

                            <a href="<?php echo URL; ?>servicos#sustentabilidade" style="text-decoration:none;">

                                <div class="servico radius-15">
                                    <img src="assets/images/<?php echo $imode; ?>icone-sustentabilidade.svg" class="icone">
                                    <div class="conteudo">
                                        <div class="titulo upper color-blue we-500 pt-13 m-b-25 m-t-50 text-center">

                                            <?php echo $lang['homepage']['servicos']['item2']['titulo']; ?>

                                        </div>
                                        <div class="texto text-center line-h-24">

                                            <?php echo $lang['homepage']['servicos']['item2']['descricao']; ?>

                                            <div class="text-right m-t-10">
                                                <img src="assets/images/<?php echo $imode; ?>arrow-right.svg" style="width: 30px;" alt="">
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                            </a>

                        </div>

                        <div class="col-lg-4 col-md-7" style="min-height: 434px;" data-aos="fade-up">

                            <div class="m-b-100 no-sm no-md"><br><br><br></div>

                            <a href="<?php echo URL; ?>servicos#tecnologia"style="text-decoration:none;">

                                <div class="servico radius-15">
                                    <img src="assets/images/<?php echo $imode; ?>icone-tecnologia.svg" class="icone">
                                    <div class="conteudo">
                                        <div class="titulo upper color-blue we-500 pt-13 m-b-25 m-t-50 text-center">

                                            <?php echo $lang['homepage']['servicos']['item3']['titulo']; ?>

                                        </div>
                                        <div class="texto text-center line-h-24">

                                            <?php echo $lang['homepage']['servicos']['item3']['descricao']; ?>

                                            <div class="text-right m-t-10">
                                                <img src="assets/images/<?php echo $imode; ?>arrow-right.svg" style="width: 30px;" alt="">
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                            </a>

                        </div>

                    </div>

                    <img src="assets/images/<?php echo $imode; ?>elipses-titles.svg" class="m-t-45 d-none d-lg-block d-xl-block" style="margin-top:-30px;margin-bottom:25px;margin-left:-50px;">

                    <img src="assets/images/<?php echo $imode; ?>elipses-titles.svg" class="m-t-45 img-center d-block d-lg-none d-xl-none" style="margin-top:-30px;margin-bottom:50px;">

                </div>
            </div>

            <div id="contato">
                <div class="container">
                    <div class="row">

                        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 order-2 order-sm-2 order-md-2 order-lg-1">
                            <div id="googleMap" class="mapa img-fluid" data-aos="fade-up" style="width:593px; height:395px;">
                            <iframe class="embed-responsive"
                            width="593"
                            height="395"
                            frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAgxD7eBy_ksw6oF1oWDDKHLEvF0iHZOxQ&q=Rua+Reinaldo+Schaffenberg+de+Quadros,308+Curitiba" allowfullscreen>
                            </iframe>
                            </div>
                        </div>

                        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 order-1 order-sm-1 order-md-1 order-lg-2 md-center">
                            <div class="conteudo" data-aos="fade-up">
                                <h5 class="color-orange we-300 pt-13 upper"><?php echo $lang['homepage']['contato']['h5']; ?></h5>
                                <h2 class="pt-38 font-philosopher we-700 color-blue"><?php echo $lang['homepage']['contato']['h2'] ?></h2>
                                <div class="divider bg-blue m-t-15 m-b-35"></div>

                                <div style="padding-left: 40px;">

                                    <p class="pt-13 we-400 line-h-24">
                                        <img src="assets/images/<?php echo $imode; ?>email.svg" class="icone">
                                        <a href="mailto:contactus@consultingbrics.com" class="color-black">contactus@consultingbrics.com</a> 
                                    </p>

                                    <p class="pt-13 we-400 line-h-24">
                                        <img src="assets/images/<?php echo $imode; ?>location.svg" class="icone" style="margin-top: -3px;">
                                        Rua Reinaldo Schaffenberg de Quadros, 308<br>
                                        Sala 4, Alto da XV - 80045 -070<br>
                                        Curitiba (PR)<br>
                                        Brasil
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div>
                        <img src="assets/images/elipses_contacto.svg" class="elipses d-none d-md-block d-lg-none d-xs-none">
                        
                        <?php if(isset($_COOKIE['bmode'])){ ?>

                            <svg style="position:absolute;margin-left:-150px;margin-top:-130px;" id="svgcirclelinebottom" width="700px" height="300px" class="circle d-none d-lg-block d-xl-block" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 678 247" shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
                                <style>
                                    <![CDATA[#e11fc7imikvsq2_to {animation: e11fc7imikvsq2_to__to 18000ms linear infinite normal forwards}@keyframes e11fc7imikvsq2_to__to { 0% {offset-distance: 0%} 10% {offset-distance: 14.285714%} 23.333333% 
                                    {offset-distance: 28.571429%} 33.333333% {offset-distance: 42.857143%} 50% {offset-distance: 57.142857%} 63.333333% {offset-distance: 71.428571%} 83.333333% {offset-distance: 85.714286%} 100% {offset-distance: 100%} }]]>
                                </style>
                                <g id="e11fc7imikvsq2_to" style="offset-path:path('M16,16.992204C37.733501,45.313492,56.930083,170.457148,146.417093,199.291088Q226.403421,238.066955,459.955441,182.225951Q508.653239,163.388357,572.267348,179.285848Q606.258791,192.201359,644,215.155096Q546.721720,148.099826,457.303506,182.813972Q242.421135,239.242997,147.122717,198.249509Q80.427344,186.615166,16,16.992204');offset-rotate:0deg">
                                    <circle id="e11fc7imikvsq2" r="12" transform="translate(0,-0.000004)" fill="rgb(127, 127, 201)" stroke="none" stroke-width="1"/>
                                </g>
                            <circle id="e11fc7imikvsq3" r="16" transform="matrix(1 0 0 1 16 16.99220000000000)" fill="rgb(127, 127, 201)" fill-opacity="0.5" stroke="none" stroke-width="1"/>
                            <path id="e11fc7imikvsq4" d="M23.500000,30.992200C55.666700,94.325500,70.100000,228.792000,266.500000,213.992000C512,195.492000,489,128.992000,643.500000,213.992000" fill="none" stroke="rgb(127, 127, 201)" stroke-width="1"/>
                            </svg>

                        <?php }else{ ?>
                        
                            <svg style="position:absolute;margin-left:-150px;margin-top:-130px;" id="svgcirclelinebottom" width="700px" height="300px" class="circle d-none d-lg-block d-xl-block" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 678 247" shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
                                <style>
                                    <![CDATA[#e11fc7imikvsq2_to {animation: e11fc7imikvsq2_to__to 18000ms linear infinite normal forwards}@keyframes e11fc7imikvsq2_to__to { 0% {offset-distance: 0%} 10% {offset-distance: 14.285714%} 23.333333% 
                                    {offset-distance: 28.571429%} 33.333333% {offset-distance: 42.857143%} 50% {offset-distance: 57.142857%} 63.333333% {offset-distance: 71.428571%} 83.333333% {offset-distance: 85.714286%} 100% {offset-distance: 100%} }]]>
                                </style>
                                <g id="e11fc7imikvsq2_to" style="offset-path:path('M16,16.992204C37.733501,45.313492,56.930083,170.457148,146.417093,199.291088Q226.403421,238.066955,459.955441,182.225951Q508.653239,163.388357,572.267348,179.285848Q606.258791,192.201359,644,215.155096Q546.721720,148.099826,457.303506,182.813972Q242.421135,239.242997,147.122717,198.249509Q80.427344,186.615166,16,16.992204');offset-rotate:0deg">
                                    <circle id="e11fc7imikvsq2" r="12" transform="translate(0,-0.000004)" fill="rgb(0,0,148)" stroke="none" stroke-width="1"/>
                                </g>
                            <circle id="e11fc7imikvsq3" r="16" transform="matrix(1 0 0 1 16 16.99220000000000)" fill="rgb(0,0,148)" fill-opacity="0.5" stroke="none" stroke-width="1"/>
                            <path id="e11fc7imikvsq4" d="M23.500000,30.992200C55.666700,94.325500,70.100000,228.792000,266.500000,213.992000C512,195.492000,489,128.992000,643.500000,213.992000" fill="none" stroke="rgb(0,0,148)" stroke-width="1"/>
                            </svg>

                        <?php } ?>

                        <img src="assets/images/<?php echo $imode; ?>elipses_contactos_small.svg" class="elipses d-block d-md-none d-lg-none d-xl-none" style="margin-top:50px">
                        
                    </div>
                    <a href="https://www.linkedin.com/company/consultingbrics/">
                            <div style="height: 150px;padding-top:50px;">
                                <img class="col-persona" src="assets/images/<?php echo $imode; ?>linkedin-btn-sm.svg" id="footer-linkedin">
                            </div>                            
                        </a>
                    

                </div>
            </div>

<script>
    
    var is_scroll = false;
    $(window).scroll(function() {

        var hT = $('#comentario-elenice').offset().top,
            hH = $('#comentario-elenice').outerHeight(),
            wH = $(window).height(),
            wS = $(this).scrollTop();

        if (wS > (hT+hH-wH)){
            $('.aspas').addClass('animate__animated animate__bounceIn')
        }else{
            $('.aspas').removeClass('animate__animated animate__bounceIn')
        }

        if (wS > (hT+hH-wH) && is_scroll==false){
            typewriter.typeString('<?php echo lang($lang['homepage']['comentario']); ?>').start();
            is_scroll = true
        }

    });

</script>

<script>

    $(document).ready(function(){
        $("#tl-y2014").popover({
            content: '<?php echo lang($lang['homepage']['timeline']['2014_title']); ?>',
            html: true,
            trigger:'hover',
            placement : 'bottom'
        }); 

        $("#tl-y2015").popover({
            content: '<?php echo lang($lang['homepage']['timeline']['2015_title']); ?>',
            html: true,
            trigger:'hover',
            placement : 'bottom'
        }); 

        $("#tl-y2016").popover({
            content: '<?php echo lang($lang['homepage']['timeline']['2016_title']); ?>',
            html: true,
            trigger:'hover',
            placement : 'bottom'
        }); 
        
    });

    
    

</script>
