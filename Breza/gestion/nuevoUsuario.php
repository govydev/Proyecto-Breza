<?php

class Usuario{

    public function formUsuario(){?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>NEO-USUARIO</title>
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
			NUEVO USUARIO
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
                    <label class="labe" for="">Nombre</label>  
                    <input type="text" placeholder="Ingrese su nombre" required><span class="barra"></span>  
                </div>
                <div class="grupo inner-addon">
                    <label class="labe" for="">AP PATERMO</label>                      
                    <input type="text" placeholder="Ingrese apellido paterno" required ><span class="barra"></span>
                </div>
                <div class="grupo inner-addon">
                    <label class="labe" for="">AP MATERNO</label>                      
                    <input type="text" placeholder="Ingrese apellido materno" required ><span class="barra"></span>
                </div>
                <div class="grupo inner-addon">
                    <label class="labe" for="">USUARIO</label>  
                    <input type="text" placeholder="Ingrese usuario" required><span class="barra"></span>  
                </div>
                <div class="grupo inner-addon">
                    <label class="labe" for="">PASSWORD</label>  
                    <input type="text" placeholder="Ingrese password" required><span class="barra"></span>  
                </div>
                <div class="grupo inner-addon">
                    <label class="labe" for="">Estado</label>                      
                    <input type="email" placeholder="Ingrese estado" required ><span class="barra"></span>
                </div>
                 <button style="width: 280px; justify-content: center; align-content: center; " class="btn btn3-second ">Guardar</button>        
            </form>
		</div>
	</section>
	<!-- ====== Pie de pagina ======-->
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