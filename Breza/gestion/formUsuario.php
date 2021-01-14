<?php

class formUsuario{

    public function formUsuarios($privilegios = null, $tipo = null, $user = null, $detalle = null){?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <title><?php echo $tipo; ?> USUARIO</title>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="../style/css/bootstrap.css">
            <link rel="stylesheet" href="../style/css/main.css">
            <script>
                function verificar(){
                    var passUno = document.getElementById("password1").value;
                    var passDos = document.getElementById("password2").value;
                    if(passUno == passDos){
                        return true;
                    }else{
                        alert("Las contraseñas no coinciden. Verifique por favor.");
                        document.getElementById("password1").value = "";
                        document.getElementById("password2").value = "";
                        return false;
                    }
                }
            </script>
        </head>
        <body style="height: 153vh;">
            <!-- ====== Barra de navegacion ======-->
            <div class="full-width NavBar">
                <div class="full-width text-semi-bold NavBar-logo">
                    <img src="../style/assets/img/breza.png" class="imBreza" alt="">
                </div>
                <div class="titulo" >
                    <?php echo $tipo; ?> USUARIO
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
                        <?php session_start();
                        $nombre =  $_SESSION['user'][1]." ".$_SESSION['user'][2]." ".$_SESSION['user'][3];?>
                        <li class="hidden-xs hidden-sm"><label class="btn-PopUpLogin"><?php echo $nombre;?></label></li>
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
            <section class="contenido_principal">
                <div class="contenido">
                    <form class="form" action="getUsuario.php" method="POST">
                        <div class="grupo inner-addon">
                            <label class="labe" for="">Nombre :</label>  
                            <input type="text" placeholder="Ingrese su nombre" name="txtNombre" <?php if($user != null) echo "value='".$user[1]."'"?> required><span class="barra"></span>  
                        </div>
                        <div class="grupo inner-addon">
                            <label class="labe" for="">Apellido Paterno :</label>                      
                            <input type="text" placeholder="Ingrese apellido paterno" name="txtPaterno" <?php if($user != null) echo "value='".$user[2]."'"?> required ><span class="barra"></span>
                        </div>
                        <div class="grupo inner-addon">
                            <label class="labe" for="">Apellido Materno :</label>                      
                            <input type="text" placeholder="Ingrese apellido materno" name="txtMaterno" <?php if($user != null) echo "value='".$user[3]."'"?>required ><span class="barra"></span>
                        </div>
                        <div class="grupo inner-addon">
                            <label class="labe" for="">Usuario :</label>  
                            <input type="text" placeholder="Ingrese usuario" name="txtUsuario" <?php if($user != null) echo "value='".$user[4]."'  readonly"?> required><span class="barra"></span>  
                        </div>
                        <div class="grupo inner-addon">
                            <label class="labe" for="">Contraseña :</label>  
                            <input type="password" placeholder="Ingrese Contraseña" name="txtPassword" id="password1" <?php if($user != null) echo "value='".$user[5]."'"?> required><span class="barra"></span>  
                        </div>
                        <div class="grupo inner-addon">
                            <label class="labe" for="">Confirmar contraseña :</label>  
                            <input type="password" placeholder="Ingrese Contraseña" id="password2" <?php if($user != null) echo "value='".$user[5]."'"?> required><span class="barra"></span>  
                        </div>
                        <div class="grupo inner-addon">
                            <label class="labe">Privilegios</label>  
                            <?php 
                            $i=0; 
                            if($detalle == null){
                                foreach ($privilegios as $value) {
                                    echo "Gestión de ".$value[0]; ?>
                                    <input style="height: 30px; outline: none;" type='checkbox' name="privilegio<?php echo ++$i;?>" value="1">
                            <?php }
                            }else{
                                $j=0;
                                foreach ($privilegios as $value) {
                                    echo "Gestión de ".$value[0]; ?>
                                    <input style="height: 30px; outline: none;"  type='checkbox' name="privilegio<?php echo ++$i;?>" value="1" <?php if($detalle[$j][0] == $value[0]){ echo "checked='checked'"; $j++;}?>>
                                <?php                                    
                                }?>
                                <label class="labe">Estado</label>  
                                <input type="radio" name="rbEstado" value="0">Deshabilitado
                                <input type="radio" name="rbEstado" value="1">Habilitado
                            <?php } ?>                                        
                        </div>
                        <input type="hidden" name="accion" value="Guardar">
                        <input type="hidden" name="registrar" value="<?php echo $tipo?>">
                        <?php if($user != null){?> 
                            <input type="hidden" name="id" value="<?php echo $user[0]?>">
                        <?php }?>
                        <button style="width: 280px; justify-content: center; align-content: center;" class="btn btn3-second" type="submit" onclick="return verificar()">Guardar</button>        
                    </form>
                </div>
            </section>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="../style/js/jquery-1.11.2.min.js"><\/script>')</script>
            <script src="../style/style/js/bootstrap.min.js"></script>
            <script src="../style/js/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="../style/js/main.js"></script>
        </body>
        </html>
         <?php
         }
}

?>