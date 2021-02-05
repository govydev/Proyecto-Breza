<?php

class gestionCalibracion{

    public function formGestionCalibracion($privilegios, $calibracion){?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <title>Lista Calibracion</title>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="../style/css/bootstrap.css">
            <link rel="stylesheet" href="../style/css/main.css">
            <script type="text/javascript" src="../style/js/jquery-1.11.2.min.js"></script>
            <script type="text/javascript">
            (function(document) {
            'use strict';

            var LightTableFilter = (function(Arr) {

                var _input;

                function _onInputEvent(e) {
                _input = e.target;
                var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
                Arr.forEach.call(tables, function(table) {
                    Arr.forEach.call(table.tBodies, function(tbody) {
                    Arr.forEach.call(tbody.rows, _filter);
                    });
                });
                }

                function _filter(row) {
                var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
                row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
                }

                return {
                init: function() {
                    var inputs = document.getElementsByClassName('light-table-filter');
                    Arr.forEach.call(inputs, function(input) {
                    input.oninput = _onInputEvent;
                    });
                }
                };
            })(Array.prototype);

            document.addEventListener('readystatechange', function() {
                if (document.readyState === 'complete') {
                LightTableFilter.init();
                }
            });

            })(document);

            function reporte(){
                let year = parseInt(prompt("Año del reporte","2019"));
                let y = new Date().getFullYear();
                if(year < 2019 || year > y){
                    alert("El año no cuenta con reporte");
                }
                else{
                    if(!isNaN(year)){
                        let cod = prompt("Codigo: ","");
                        if(cod.trim() != ""){
                            let ver = prompt("Version:");
                            if (ver.trim() != "") {
                                document.getElementById("reporte").href = "reporte.php?tipo=0&a="+year+"&c="+cod+"&v="+ver;
                                return true;
                            }else{
                                alert("No ingreso version");
                            }
                        }else{
                            alert("No ingreso codigo");
                        }
                    }
                }
                return false;
            }
            </script>
        </head>
        <body>
            <!-- ====== Barra de navegacion ======-->
            <div class="full-width NavBar">
                <div class="full-width text-semi-bold NavBar-logo">
                    <img src="../style/assets/img/breza.png" class="imBreza" alt="">
                </div>
                <div class="titulo" >
                    Cronograma de Calibracion
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
                        <!--NOMBRE DE LA PERSONA RESPONSABLE HA ADMINISTRAR LA PAGINA-->
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
                <a href="../seguridad/cierreSesion.php"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i> Cerrar sesión</a>
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
                                    <?php foreach($privilegios as $value){?>
                                        <li class="nav-items <?php echo trim($value[0]) == "Cronograma Calibración"? " active" : " " ?>" data-tab="Provedores">
                                        <a class="nav-link " href="<?php  echo $value[1]?>"> <i class="<?php  echo $value[2]?>"></i><?php  echo $value[0]?></a>
                                        </li>
                                    <?php }?>
                                    <!--<li class="nav-items active" data-tab="Maquinas">
                                    <a class="nav-link" href="#" ><i class="fa fa-gear"></i> Maquinas</a>
                                    </li>
                                    <li class="nav-items" data-tab="Cronog. Mantenimiento">
                                    <a class="nav-link" href="#"> <i class="fa fa-calendar-o" ></i> Cronog. Mantenimiento</a>
                                    </li>
                                    <li class="nav-items" data-tab="Cronog. Mantenimiento">
                                    <a class="nav-link" href="#"> <i class="fa fa-calendar"></i> Cronog. Calibracion</a>
                                    </li>-->
                                </ul>
                            </div>
                            <!-- Contenido-->
                            <div class="full-width" style="padding: 15px; border: 1px solid #E1E1E1;">
                                <div class="d-flex bd-highlight">
                                    <div class="row no-gutters">
                                    <div class="col-sm-6 col-md-8">
                                        <div class="content-select">
                                            <input class="form-control col-md-3 light-table-filter" data-table="table table-striped" type="text" placeholder="Buscar">
                                        </div>
                                    </div>
                                        <form action="getCalibracion.php" method="POST">
                                            <div class="col-6 col-md-4">
                                            <input type="hidden" value="Nuevo" name="accion">
                                                <button style="left: 50px;" class="btn btn-second">Nuevo</button>									
                                            </div>
                                        </form>
                                        <div class="izq">
                                            <a href="" class="btn btn-info" id="reporte" onclick="return reporte()">Reporte</a>    
                                        </div>
                                    </div>	
                                </div>
                                <span></span>
                                <hr>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                            <th scope="col">FECHA</th>
                                            <th scope="col">N. CERTIFICADO</th>
                                            <th scope="col">MAQUINA</th>
                                            <th scope="col">PROVEEDOR</th>
                                            <th scope="col">ESTADO</th>
                                            </tr>
                                        </thead>
                                        <?php foreach($calibracion as $value){?>
                                        <tbody>
                                            <tr>
                                            <td><?php echo $value[1]?></td>
                                            <td><?php echo $value[2]?></td>
                                            <td><?php echo $value[3]?></td>
                                            <td><?php echo $value[4]?></td>
                                            <td><?php switch($value[5]){
                                                case '0':?>
                                                    <label style='color: green'>Realizado</label>
                                                    <?php break;    
                                                 case '1': ?>
                                                    <label style='color: orange'>En Proceso</label>
                                                    <?php break;    
                                                case '2': ?>
                                                    <label style='color: red'>Por Hacer</label>
                                                    <?php break;    
                                            } ?>
                                            </td>
                                            <td>  
                                                <form action="getCalibracion.php" method="post">
                                                    <input type="hidden" value="Modificar" name="accion">
                                                    <input type="hidden" value="<?php echo $value[0] ?>" name="txtid">
                                                    <button class="btn btn2-second ">Modificar</button>
                                                </form>
                                            </td> <!--cambiar referencia -->
                                            <!--
                                            <td>
                                                <form action="getMaquinas.php" method="post">
                                                    <input type="hidden" value="Eliminar" name="accion">
                                                    <input type="hidden" value="<?php //$lista[0] ?>" name="txtid">
                                                    <button class="btn btn-danger">Eliminar</button>
                                                </form>
                                            </td> --> <!--cambiar referencia --> 
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
            <script src="../style/style/js/bootstrap.min.js"></script>
            <script src="../style/js/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="../style/js/main.js"></script>
        </body>
        </html>
        <?php
    }
}

?>