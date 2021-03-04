        <!-- MENU FOR TABLET AND PHONE -->
        <div class="modal fade" id="menu-modal" tabindex="-1" aria-labelledby="menu-modal" aria-hidden="true">
            <div  class="modal-dialog">
            <div class="modal-content" style="background-color: #FFF;position: fixed;width: 100%;height: 100%;padding:50px;">


                
                <div>
                    <a class="nav-link" href="index.php?bmode=true">
                        <img src="<?php echo URL; ?>assets/images/<?php echo $imode; ?>darkmode-btn.png" style="display:block;margin-left:auto;margin-right:auto;" alt="">
                    </a>

                    <img src="<?php echo URL; ?>assets/images/<?php echo $imode; ?>menu_close.png" style="float: right;margin-top:-35px;margin-right: -15px;" onclick="$('#menu-modal').modal('hide')">
                </div>


                <div class="navbar-collapse" id="navbar-menu-sm" style="margin-top:25px;">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link scroll-link" href="<?php echo URL; ?>#quem-somos"><?php echo $lang['menu']['sobre']; ?></a>
                        </li> 
                        
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="<?php echo URL; ?>servicos" id="menu-servicos-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $lang['menu']['servicos']['titulo']; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="menu-servicos-sm">
                            <a class="dropdown-item upper" href="<?php echo URL; ?>servicos#estrategia"><?php echo $lang['menu']['servicos'][1]; ?></a>
                            <a class="dropdown-item upper" href="<?php echo URL; ?>servicos#sustentabilidade"><?php echo $lang['menu']['servicos'][2]; ?></a>
                            <a class="dropdown-item upper" href="<?php echo URL; ?>servicos#tecnologia"><?php echo $lang['menu']['servicos'][3]; ?></a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link scroll-link" href="<?php echo URL; ?>blog"><?php echo $lang['menu']['artigos']; ?> </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link scroll-link" href="<?php echo URL; ?>#contato"><?php echo $lang['menu']['contato']; ?> </a>
                        </li>

                        <?php if(isset($_COOKIE['lang'])){ ?>
                            <?php if($_COOKIE['lang']=='en'){ ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL; ?>index.php?lang=pt">
                                        <img src="assets/images/<?php echo $imode; ?>en.png" alt="">
                                        PT
                                    </a>
                                </li>
                            <?php } ?>

                            <?php if($_COOKIE['lang']=='pt'){ ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL; ?>index.php?lang=en">
                                        EN
                                    </a>
                                </li>
                            <?php } ?>
                        <?php }else{ ?>

                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo URL; ?>index.php?lang=en">
                                    EN
                                </a>
                            </li>

                        <?php } ?>

                    </ul>
                </div>

            </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-default bg-default fixed-top" id="nav-top">
            <div class="container">    
                <a class="navbar-brand h1 mb-0" href="<?php echo URL; ?>">
                    <img src="<?php echo URL; ?>assets/images/<?php echo $imode; ?>logotipo.png" alt="" id="logo" class="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#menu-modal">
                    <img src="<?php echo URL; ?>assets/images/<?php echo $imode; ?>menu2.png" alt="">
                </button>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link scroll-link" href="<?php echo URL; ?>#quem-somos"><?php echo $lang['menu']['sobre']; ?></a>
                        </li>
                        
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" id="menu-servicos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $lang['menu']['servicos']['titulo']; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="menu-servicos">
                              <a class="dropdown-item upper" href="<?php echo URL; ?>servicos#estrategia"><?php echo $lang['menu']['servicos'][1]; ?></a>
                              <a class="dropdown-item upper" href="<?php echo URL; ?>servicos#sustentabilidade"><?php echo $lang['menu']['servicos'][2]; ?></a>
                              <a class="dropdown-item upper" href="<?php echo URL; ?>servicos#tecnologia"><?php echo $lang['menu']['servicos'][3]; ?></a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link scroll-link" href="<?php echo URL; ?>blog"><?php echo $lang['menu']['artigos']; ?> </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link scroll-link" href="<?php echo URL; ?>#contato"><?php echo $lang['menu']['contato']; ?> </a>
                        </li>
                        
                        <?php if(isset($_COOKIE['lang'])){ ?>

                            <?php if($_COOKIE['lang']=='en'){ ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL; ?>index.php?lang=pt">
                                        <img src="<?php echo URL; ?>assets/images/<?php echo $imode; ?>en.png" alt="">
                                        PT
                                    </a>
                                </li>
                            <?php } ?>

                            <?php if($_COOKIE['lang']=='pt'){ ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL; ?>index.php?lang=en">
                                        <img src="<?php echo URL; ?>assets/images/<?php echo $imode; ?>en.png" alt="">
                                        EN
                                    </a>
                                </li>
                            <?php } ?>

                        <?php }else{ ?>

                            <li class="nav-item xx">
                                <a class="nav-link" href="<?php echo URL; ?>index.php?lang=en">
                                    <img src="<?php echo URL; ?>assets/images/<?php echo $imode; ?>en.png" alt="">
                                    EN
                                </a>
                            </li>

                        <?php } ?>

                        <li class="nav-item xx" style="padding-left:0px;">
                            <a class="nav-link" href="<?php echo URL; ?>index.php?bmode=true">
                                <img src="<?php echo URL; ?>assets/images/<?php echo $imode; ?>darkmode-btn.png" alt="">
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>