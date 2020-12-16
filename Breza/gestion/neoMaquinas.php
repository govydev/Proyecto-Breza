<?php

class NeoMaquinas{

    public function neoMaquinas($titulo){?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <title>NUEVA-MAQUINA</title>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/main.css">
        </head>
        <body>
            <!-- ====== Barra de navegacion ======-->
            <div class="full-width NavBar">
                <div class="full-width text-semi-bold NavBar-logo">
                    <img src="assets/img/breza.png" class="imBreza" alt="">
                </div>
                <div class="titulo" >
                    NUEVA MAQUINA
                </div>

                <nav class=" full-width NavBar-Nav">
                    <div class="full-width NavBar-Nav-bg hidden-md hidden-lg show-menu-mobile"></div>
                    <ul class="list-unstyled full-width menu-mobile-c">
                        <div class="full-width hidden-md hidden-lg header-menu-mobile">
                            <i class="fa fa-times header-menu-mobile-close-btn show-menu-mobile" aria-hidden="true"></i>
                            <!--
                                Aqui va los elementos para hacerlos responsive	
                            -->
                            <img src="assets/img/user.png" alt="" class="header-menu-mobile-icon">
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
                        <li class="hidden-xs hidden-sm"><a class="btn-PopUpLogin" href="#!">Nombre</a></li>
                        <li class="hidden-xs hidden-sm">
                            <!--<i class="fa fa-user NavBar-Nav-icon btn-PopUpLogin" aria-hidden="true"></i>-->
                            <img src="assets/img/user.png" alt="" class="NavBar-Nav-icon btn-PopUpLogin">
                        </li>
                    </ul>
                </nav>
                <i class="fa fa-bars hidden-md hidden-lg btn-mobile-menu show-menu-mobile" aria-hidden="true"></i>
                
            </div>
            <!-- ====== PopUpLogin ======-->
            <section class="full-width PopUpLogin PopUpLogin-2">
                <div class="full-width">
                    <a href="perfil.html"><i class="fa fa-user fa-fw" aria-hidden="true"></i> Tu perfil</a>
                    <a href="config.html"><i class="fa fa-cogs fa-fw" aria-hidden="true"></i> Configuración</a>
                    <div role="separator" class="divider"></div>
                    <a href="#!"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i> Cerrar sesión</a>
                </div>
            </section>
        <!-- ====== Contenido de pagina ======-->
            <section class="contenido_principal">
                <div class="contenido">
                    <form class="form">
                        <div class="grupo inner-addon">
                            <label class="labe" for="">CÓDIGO</label>  
                            <input type="text" placeholder="Ingrese código" required><span class="barra"></span>  
                        </div>
                        <div class="grupo inner-addon">
                            <label class="labe" for="">Nombre</label>  
                            <input type="text" placeholder="Ingrese su nombre" required><span class="barra"></span>  
                        </div>
                        <div class="grupo inner-addon">
                            <label class="labe" for="">DESCRIPCIÓN</label>                      
                            <textarea class="form-control" placeholder="Ingrese descripción" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="grupo inner-addon">
                            <label class="labe" for=""> UBICACIÓN</label>                      
                            <input type="text" placeholder="Ingrese ubicación" required ><span class="barra"></span>
                        </div>
                        <div class="grupo inner-addon">
                            <label class="labe" for="">TIPO</label>                      
                            <div class="content-select">
                                <select name="" id="">
                                    <option value="">Eligir tipo</option>
                                    <option value=""> </option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                </select>
                                <i></i>
                            </div>
                        </div>
                        <button style="width: 280px; margin-top: 30px;"  class="btn btn3-second">Guardar</button>        
                    </form>
                </div>
            </section>
            <!-- ====== Pie de pagina ======-->
        <!-- 	<footer class="full-width footer">
                <div class="container">
                    <p class="text-semi-bold">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequatur quia voluptates voluptas accusamus aliquid in magni. Ullam non, at dolore accusantium ab fugit. Optio quidem blanditiis possimus at vero?
                    </p>
                    
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <h4 class="text-light text-center">Síguenos en las redes sociales</h4> 
                            <ul class="list-unstyled fullwidth text-center footer-social">
                                <li>
                                    <a href="#!">
                                        <i class="fa fa" aria-hidden="true">A</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="fa fa-g" aria-hidden="true">G</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="fa fa-youtube" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <h4 class="text-light text-center">Descárgate nuestras apps gratuitas</h4>
                            <ul class="list-unstyled fullwidth text-center footer-app-store">
                                <li>
                                    <a href="#!">
                                        <i class="fa fa-apple" aria-hidden="true"></i> App Store
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="fa fa-android" aria-hidden="true"></i> Play Store
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="fa fa-windows" aria-hidden="true"></i> Windows Store
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="col-xs-12">
                        <ul class="list-unstyled text-center full-width footer-copyright">
                            <li>&copy; 2020 Company</li>
                            <li><a href="#!">Semillitas</a></li>
                            <li><a href="#!">del</a></li>
                            <li><a href="#!">Saber</a></li>
                        </ul>
                    </div>
                </div>
            </footer> -->
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="js/main.js"></script>
        </body>
        </html>
        <?php
    }
}

?>