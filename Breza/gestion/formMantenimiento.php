<?php

class formMantenimiento{

    public function formMantenimientos($tipo = null, $detalle = null, $maquina = null, $proveedor = null){
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <title><?php echo $tipo?> MANTENIMIENTO</title>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="../style/css/bootstrap.css">
            <link rel="stylesheet" href="../style/css/main.css">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
            <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script> 
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
            <script type='text/javascript'>
                $(document).ready(function() {
                    $('#datetimepicker1').datetimepicker({format: 'Y-MM-D',});
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
                    <?php echo $tipo?>  CRONOGRAMA DE MANTENIMIENTO
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
                        <li class="hidden-xs hidden-sm"><a class="btn-PopUpLogin" ><?php echo $nombre;?></a></li>
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
                    <a href="perfil.html"><i class="fa fa-user fa-fw" aria-hidden="true"></i> Tu perfil</a>
                    <a href="config.html"><i class="fa fa-cogs fa-fw" aria-hidden="true"></i> Configuración</a>
                    <div role="separator" class="divider"></div>
                    <a href="#!"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i> Cerrar sesión</a>
                </div>
            </section>
        <!-- ====== Contenido de pagina ======-->
            <section class="contenido_principal2">
                <div class="contenido">
                    <form class="form" action="getMantenimiento.php" method="post">
                        <div class="grupo inner-addon">
                            <label class="labe" for="">MAQUINA</label>                      
                            <div class="content-select">
                                <select name="ddMaquina" id="">
                                    <?php foreach ($maquina as $value) {?>
                                        <option value="<?php echo $value[0]?>" <?php echo $detalle[4] == $value[2]? "selected":"" ?>><?php echo $value[1]." - ".$value[2]?></option>
                                    <?php } ?>
                                </select>
                                <i></i>
                            </div>
                        </div>
                        <br>
                        <div class="grupo inner-addon">
                            <label class="labe" for="">PROVEEDOR</label>                      
                            <div class="content-select">
                                <select name="ddProveedor" id="">
                                    <?php foreach ($proveedor as $value) {?>
                                        <option value="<?php echo $value[0]?>" <?php echo $detalle[5] == $value[1]? "selected":"" ?>><?php echo $value[1]?></option>
                                    <?php } ?>
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
                                        <input type='text' name="txtFecha" placeholder="Seleccione fecha" class="form-control" value="<?php echo isset($detalle)? $detalle[2]:""?>"/>
                                        <span class="input-group-addon" >
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                        <hr>
                                        
                                    </div>
                                </div>
                            </div>      
                        </div>
                        <div class="grupo inner-addon">
                            <label class="labe" for="">FACTURA</label>  
                            <input type="number" name="nbFactura" placeholder="Ingrese factura" value="<?php echo isset($detalle)? $detalle[3]:""?>" required><span class="barra"></span>  
                        </div>
                        <div class="grupo inner-addon">
                            <label class="labe" for="">MOTIVO</label>                      
                            <textarea class="form-control" name="txtMotivo" placeholder="Ingrese descripción" id="exampleFormControlTextarea1" rows="3"><?php echo isset($detalle)? $detalle[1]:""?></textarea>
                        </div>
                        <div class="grupo inner-addon">
                            <label class="labe" for="">OBSERVACIÓN</label>                      
                            <textarea class="form-control" name="txtObservacion" placeholder="Ingrese descripción" id="exampleFormControlTextarea1" rows="3"><?php echo isset($detalle)? $detalle[6]:""?>
                            </textarea>
                        </div>
                        <div class="grupo inner-addon">
                            <label class="labe" for="">ESTADO</label>                      
                            <div class="content-select">
                                <select name="ddEstado" id="">
                                    <option value="0" <?php echo $detalle[7] == 0? "selected":"" ?>>Realizado</option>
                                    <option value="1" <?php echo $detalle[7] == 1? "selected":"" ?>>En Proceso</option>
                                    <option value="2" <?php echo $detalle[7] == 2? "selected":"" ?>>Por Hacer</option>
                                </select>
                                <i></i>
                            </div>
                        </div>
                        <input type="hidden" name="accion" value="Guardar">
                        <input type="hidden" name="registrar" value="<?php echo $tipo?>">
                        <?php if(isset($detalle)){?> 
                            <input type="hidden" name="id" value="<?php echo $detalle[0]?>">
                        <?php }?>
                        <button  style="width: 280px; margin-top: 30px; padding: 8px" class="btn btn3-second">Guardar</button>        
                    </form>
                </div>
            </section>
            <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
            <script src="../style/js/bootstrap.min.js"></script>
            <script src="../style/js/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="../style/js/main.js"></script>
        </body>
        </html>
    <?php }

}

?>