<?php

class principalUsuario{

    public function formGestionUsuario($privilegios, $lista){?>
    <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <title>Gestion Usuarios</title>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="../style/css/bootstrap.css">
            <link rel="stylesheet" href="../style/css/main.css">
        </head>
        <body>
            <!-- ====== Barra de navegacion ======-->
            <div class="full-width NavBar">
                <div class="full-width text-semi-bold NavBar-logo">
                    <img src="../style/assets/img/breza.png" class="imBreza" alt="">
                </div>
                <div class="titulo" >
                    Usuarios
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
            <section class="full-width section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <!-- <div>
                                debe ir aqui la lista a buscar cada tabla
                            </div> -->
                            <div class="full-width user-menu-xs">
                                
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-9">
                            
                            <div class="full-width bar-info-user containerTab">
                                <ul class="nav nav-tabs">
                                    <li class="nav-items active" data-tab="Provedores">
                                    <a class="nav-link " href="getUsuario.php"> <i class="fa fa-group"></i> Usuarios</a>
                                    </li>
                                    <?php foreach ($privilegios as $value) {
                                        if($value[0] == "Usuario")  continue;?>
                                        <li class="nav-items" data-tab="<?php echo $value[0]?>">
                                            <a class="nav-link" href="<?php echo $value[1]?>"> <i class="fa fa-calendar"></i><?=$value[0]?></a>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                            <!-- Contenido-->
					<div class="full-width" style="padding: 15px; border: 1px solid #E1E1E1;">
						<div class="d-flex bd-highlight">
							<div class="row no-gutters">
								<div class="col-sm-6 col-md-8">
									<div class="content-select">
										<select name="" id="">
											<option value="">option 1</option>
											<option value="">option 2</option>
											<option value="">option 3</option>
										</select>
										<i></i>
									</div>
								</div>
								<div class="col-6 col-md-4">
									<div class="der">
                                        <form action="getUsuario.php" method="POST">
										    <input type="submit" class="btn btn-second" value="Nuevo" name="accion">
                                        </form>    
									</div>
							  </div>	
						</div>
						<span></span>
						<hr>
							<table class="table table-striped" style="text-align: center">
								<thead>
									<tr>
									<th scope="col"><center>Nombre</center></th>
									<th scope="col"><center>Apellido Paterno</center></th>
									<th scope="col"><center>Apellido Materno</center></th>
                                    <th scope="col"><center>Usuario</center></th>
                                    <th scope="col"><center>Estado</center></th>
                                </tr>
								</thead>
								<tbody>
                                    <?php foreach ($lista as $value) {
                                        if($value[0] == $_SESSION['user'][0])   continue;?>
                                        <tr>
                                            <td><?php echo $value[1]?></td>
                                            <td><?php echo $value[2]?></td>
                                            <td><?php echo $value[3]?></td>
                                            <td><?php echo $value[4]?></td>
                                            <td><?php echo $value[6] = 1? "<label style='color: green'>Habilitado</label>":"<label style='color: red'>Deshabilitado</label>"?></td>
                                            <td><div class="izq">
                                                <form action="getUsuario.php" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $value[0]?>">
                                                    <input type="hidden" name="accion" value="Editar">
                                                    <button class="btn btn2-second ">Editar</button>
                                                </form>
                                                 
                                            </div>
                                            </td>
                                        </tr>
                                    <?php }?>
								</tbody>
							</table>
					</div>
                        </div>
                    </div>
                </div>
            </section>
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