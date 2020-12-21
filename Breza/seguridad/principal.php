<?php
class Principal{
    public function formPrincipal($path){?>
<<<<<<< HEAD
        <?php foreach ($path as $value) {?>
            <a href="<?php echo $value[1];?>">
            <?php echo $value[0]; ?>
            </a>
            <br>
        <?php } ?>
=======
       
>>>>>>> origin/milton
        <!DOCTYPE html>
        <html lang="es">
            <head>
                <title></title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='../style/text/css'>
                <link rel="stylesheet" href="../style/css/main.css">
            </head>
            
        <body>
            <div class="full-width NavBar">
                <div class="full-width text-semi-bold NavBar-logo">
                    <img src="../style/assets/img/breza.png" class="imBreza" alt="">
                </div>
                <div class="titulo" >
                
                </div>

                <nav class=" full-width NavBar-Nav">
                    <div class="full-width NavBar-Nav-bg hidden-md hidden-lg show-menu-mobile"></div>
                    <ul class="list-unstyled full-width menu-mobile-c">
                        <div class="full-width hidden-md hidden-lg header-menu-mobile">
                            <i class="fa fa-times header-menu-mobile-close-btn show-menu-mobile" aria-hidden="true"></i>
                            <!--
                                Aqui va los elementos para hacerlos responsive	
                            -->
                            <img src="../style/assets/img/user.png" alt="" class="header-menu-mobile-icon">
                            <div class="divider"></div>
                            <a href="#!" class="btn btn-success header-menu-mobile-btn">
                                <i class="fa fa-sign-out fa-fw" aria-hidden="true"></i> Cerrar sesión
                            </a>
                        </div>
                        <li>
                            <a href="index.html" class="">
                                <i class="fa fa-home fa-fw hidden-md hidden-lg" aria-hidden="true"></i> INICIO
                            </a>
                        </li>
                        <!-- 
                            NOMBRE DE LA PERSONA RESPONSABLE HA ADMINISTRAR LA PAGINA

                        -->
                        <?php session_start();
                        $nombre =  $_SESSION['user'][1]." ".$_SESSION['user'][2]." ".$_SESSION['user'][3];?>
                        <li class="hidden-xs hidden-sm"><a class="btn-PopUpLogin" href="#!"><?php echo $nombre;?></a></li>
                        <li class="hidden-xs hidden-sm">
                            <!--<i class="fa fa-user NavBar-Nav-icon btn-PopUpLogin" aria-hidden="true"></i>-->
                            <img src="../style/assets/img/user.png" alt="" class="NavBar-Nav-icon btn-PopUpLogin">
                        </li>
                    </ul>
                </nav>
                <i class="fa fa-bars hidden-md hidden-lg btn-mobile-menu show-menu-mobile" aria-hidden="true"></i>
                
            </div>
            <!-- ====== PopUpLogin ======-->
            <section class="full-width PopUpLogin PopUpLogin-2">
                <div class="full-width">
                    <a href="#!"><i class="fa fa-user fa-fw" aria-hidden="true"></i> Tu perfil</a>
                    <a href="#!"><i class="fa fa-cogs fa-fw" aria-hidden="true"></i> Configuración</a>
                    <div role="separator" class="divider"></div>
                    <a href="#!"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i> Cerrar sesión</a>
                </div>
            </section>


            <section class="section">
                <h2 class="text-center text-light">Elija su rol</h2><br>	
                <div class="container">
                <div class="full-width container-category">
                <?php foreach ($path as $value) {?>
                        <ul id="categori-1">
                        <a style=" display: flex; justify-content: center; margin-top: 45px; margin-right:30px;font-weight: 600;" href="<?php echo $value[1];?>">
                        <i class="fa fa-calendar-o"></i>
                        <?php  
                            echo $value[0]; 
                        ?>
                        </a>
                        </ul>
                <?php } ?>
                        <!--<a href="" id="categori-3">
                            <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            <span>Gestion de Proveedores</span>
                        </a>
                        <a href="" id="categori-6">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                            <span>Gestion Maquinas</span>
                        </a>
                        <a href="" id="categori-2">
                            <i class="	fa fa-group" aria-hidden="true"></i>
                            <span>Gestion de Usuarios</span>
                        </a>
                        <a href="" id="categori-9">
                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                            <span>Gestion de Calidad</span>
                        </a> -->
                    
                        <!-- <a href="" id="categori-3">
                            <i class="fa fa-address-book-o" aria-hidden="true"></i>
                            <span>Gestion de  proovedores</span>
                        </a> -->
                        
                    </div>
                </div>
        </section>


        <!--Pie de pagina-->

            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="../style/js/jquery-1.11.2.min.js"><\/script>')</script>
            <script src="../style/js/bootstrap.min.js"></script>
            <script src="../style/js/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="../style/js/main.js"></script>
        </body>
        </html>
        <?php
    }
}

?>