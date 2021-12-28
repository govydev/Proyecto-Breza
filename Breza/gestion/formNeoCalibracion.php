<?php
namespace App\gestion;

class neoCalibracion{
    public function formNeoCalibracion($titulo = null, $proveedor = null, $maquina = null, $calibracion = null){?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <title><?php echo $titulo?> CALIBRACIÓN</title>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="../style/css/bootstrap.css">
            <link rel="stylesheet" href="../style/css/main.css">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
            <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script> 
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker1').datetimepicker({
                        viewMode: 'months',
                        format: 'YYYY-MM-DD', //año - mes - dia
                        showClose: true,
                        allowInputToggle: true,
                        keepInvalid: true,
                        ignoreReadonly: true,
                    });
                });
            </script>
        </head>
        <body>
            <!-- ====== Barra de navegacion ======-->
            <div class="full-width NavBar">
                <div class="full-width text-semi-bold NavBar-logo">
                    <img src="../style/assets/img/breza.png" class="imBreza" alt="">
                </div>
                <div class="titulo" >
                    <?php echo $titulo?> CALIBRACIÓN
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
                            <a href="../seguridad/cierreSesion.php" class="btn btn-success header-menu-mobile-btn">
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
                    <a href="#"><i class="fa fa-user fa-fw" aria-hidden="true"></i> Tu perfil</a>
                    <a href="#"><i class="fa fa-cogs fa-fw" aria-hidden="true"></i> Configuración</a>
                    <div role="separator" class="divider"></div>
                    <a href="../seguridad/cierreSesion.php"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i> Cerrar sesión</a>
                </div>
            </section>
        <!-- ====== Contenido de pagina ======-->
            <section class="contenido_principal3">
                <div class="contenido">
                <form class="form" acction="getCalibracion.php" method="POST" >
                        <div class="grupo inner-addon">
                            <label class="labe" for="">NUMERO DE CERTIFICADO</label>  
                            <input type="text" placeholder="Ingrese certificado" name="txtcertificado" <?php if($calibracion != null) echo "value='".$calibracion[2]."'"?> required><span class="barra"></span>  
                        </div>
                        <div class="grupo inner-addon">
                            <label class="labe" for="">MAQUINA</label>                      
                            <div class="content-select">
                                <select name="optmaquina" id="">
                                    <?php if($calibracion == null){
                                        foreach($maquina as $value){ ?>
                                            <option value="<?php echo $value[0]?>"><?php echo $value[2]?></option>
                                    <?php 
                                        }
                                    }else{?>
                                        <?php foreach($maquina as $value){ ?>
                                            <option value="<?php echo $value[0]?>" <?php if($value[2] == $calibracion[4]){echo "selected";};?> > <?php echo $value[2]?> </option>
                                        <?php
                                        }
                                    }?>
                                </select>
                                <i></i>
                            </div>
                        </div>
                        <br>
                        <div class="grupo inner-addon">
                            <label class="labe" for=""> FECHA</label>
                            <div class='col-md-10'>
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='text' placeholder="Seleccione fecha" class="form-control" name="txtfecha" <?php if($calibracion != null) echo "value='".$calibracion[1]."'"?> />
                                        <span class="input-group-addon" >
                                        <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>                                      
                            
                        </div>
                        <div class="grupo inner-addon">
                            <label class="labe" for="">PROVEEDOR</label>                      
                            <div class="content-select">
                                <select name="optproveedor" id="">
                                    <?php if($calibracion == null){
                                        foreach($proveedor as $value){ ?>
                                            <option value="<?php echo $value[0]?>"><?php echo $value[1]?></option>
                                    <?php 
                                        }
                                    }else{?>

                                        <?php foreach($proveedor as $value){ ?>
                                            <option value="<?php echo $value[0]?>" <?php if($value[1] == $calibracion[5]){echo "selected";};?> > <?php echo $value[1]?> </option>
                                        <?php
                                        }
                                    }?>
                                </select>
                                <i></i>
                            </div>
                        </div><br>
                        <div class="grupo inner-addon">
                            <label class="labe" for="">ESTADO</label>                      
                            <div class="content-select">
                                <select name="optestado" id="">
                                <?php if($calibracion == null){?>
                                        <option value="0">Realizado</option>
                                        <option value="1">En Proceso </option>
                                        <option value="2">Por Hacer </option>
                                    <?php }else{
                                        switch($calibracion[3]){
                                        case '0':?>
                                            <option value="0">Realizado</option>
                                            <option value="1">En Proceso </option>
                                            <option value="2">Por Hacer </option>
                                            <?php break;    
                                            case '1': ?>
                                            <option value="1">En Proceso </option>
                                            <option value="0">Realizado</option>
                                            <option value="2">Por Hacer </option>
                                            <?php break;    
                                        case '2': ?>
                                            <option value="2">Por Hacer </option>
                                            <option value="1">En Proceso </option>
                                            <option value="0">Realizado</option>
                                            <?php break;    
                                    } }?>
                                </select>
                                <i></i>
                            </div>
                        </div>
                        <input type="hidden" value="Guardar" name="accion">
                        <input type="hidden" <?php if($calibracion != null) echo "value='".$calibracion[0]."'"?> name="txtid">
                        <input type="hidden" value="<?php echo $titulo ?>" name="registrar">
                        <button style="width: 200px; margin-top: 30px;"  class="btn btn3-second">Guardar</button>      
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