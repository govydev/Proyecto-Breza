<?php
class Index{

    public function formIndex(){?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>LogIn</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="./style/css/style.css">
    </head>
    <body class="autenticar">
    <div class="splash">
        <img style="display: flex; position: absolute;" src="./style/assets/img/breza.png" alt="">
    </div>
        <div class="container">
            <div class="first-column">
            </div>    
        <!--  <div class="breza">
                <img src="breza.png" alt="">
            </div> -->
            <div class="second-column">
            <!--  <img src="breza.png" alt=""> -->
                <div class="social-media">
                    <svg id="logo" width="309" height="53" viewBox="0 0 309 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="path-1-outside-1" maskUnits="userSpaceOnUse" x="0.28125" y="0" width="309" height="53" fill="black">
                        <rect fill="white" x="0.28125" width="309" height="53"/>
                        <path d="M2.28125 50V4.5H17.1562C22.0938 4.5 25.8021 5.52083 28.2812 7.5625C30.7812 9.60417 32.0312 12.625 32.0312 16.625C32.0312 18.75 31.4271 20.6354 30.2188 22.2812C29.0104 23.9062 27.3646 25.1667 25.2812 26.0625C27.7396 26.75 29.6771 28.0625 31.0938 30C32.5312 31.9167 33.25 34.2083 33.25 36.875C33.25 40.9583 31.9271 44.1667 29.2812 46.5C26.6354 48.8333 22.8958 50 18.0625 50H2.28125ZM8.28125 28.7188V45.0938H18.1875C20.9792 45.0938 23.1771 44.375 24.7812 42.9375C26.4062 41.4792 27.2188 39.4792 27.2188 36.9375C27.2188 31.4583 24.2396 28.7188 18.2812 28.7188H8.28125ZM8.28125 23.9062H17.3438C19.9688 23.9062 22.0625 23.25 23.625 21.9375C25.2083 20.625 26 18.8438 26 16.5938C26 14.0938 25.2708 12.2812 23.8125 11.1562C22.3542 10.0104 20.1354 9.4375 17.1562 9.4375H8.28125V23.9062Z"/>
                        <path d="M47.5312 50H41.75V16.1875H47.5312V50ZM41.2812 7.21875C41.2812 6.28125 41.5625 5.48958 42.125 4.84375C42.7083 4.19792 43.5625 3.875 44.6875 3.875C45.8125 3.875 46.6667 4.19792 47.25 4.84375C47.8333 5.48958 48.125 6.28125 48.125 7.21875C48.125 8.15625 47.8333 8.9375 47.25 9.5625C46.6667 10.1875 45.8125 10.5 44.6875 10.5C43.5625 10.5 42.7083 10.1875 42.125 9.5625C41.5625 8.9375 41.2812 8.15625 41.2812 7.21875Z"/>
                        <path d="M70.8438 50.625C66.2604 50.625 62.5312 49.125 59.6562 46.125C56.7812 43.1042 55.3438 39.0729 55.3438 34.0312V32.9688C55.3438 29.6146 55.9792 26.625 57.25 24C58.5417 21.3542 60.3333 19.2917 62.625 17.8125C64.9375 16.3125 67.4375 15.5625 70.125 15.5625C74.5208 15.5625 77.9375 17.0104 80.375 19.9062C82.8125 22.8021 84.0312 26.9479 84.0312 32.3438V34.75H61.125C61.2083 38.0833 62.1771 40.7812 64.0312 42.8438C65.9062 44.8854 68.2812 45.9062 71.1562 45.9062C73.1979 45.9062 74.9271 45.4896 76.3438 44.6562C77.7604 43.8229 79 42.7188 80.0625 41.3438L83.5938 44.0938C80.7604 48.4479 76.5104 50.625 70.8438 50.625ZM70.125 20.3125C67.7917 20.3125 65.8333 21.1667 64.25 22.875C62.6667 24.5625 61.6875 26.9375 61.3125 30H78.25V29.5625C78.0833 26.625 77.2917 24.3542 75.875 22.75C74.4583 21.125 72.5417 20.3125 70.125 20.3125Z"/>
                        <path d="M96.2188 16.1875L96.4062 20.4375C98.9896 17.1875 102.365 15.5625 106.531 15.5625C113.677 15.5625 117.281 19.5938 117.344 27.6562V50H111.562V27.625C111.542 25.1875 110.979 23.3854 109.875 22.2188C108.792 21.0521 107.094 20.4688 104.781 20.4688C102.906 20.4688 101.26 20.9688 99.8438 21.9688C98.4271 22.9688 97.3229 24.2812 96.5312 25.9062V50H90.75V16.1875H96.2188Z"/>
                        <path d="M137.219 42.1562L145.594 16.1875H151.5L139.375 50H134.969L122.719 16.1875H128.625L137.219 42.1562Z"/>
                        <path d="M170.656 50.625C166.073 50.625 162.344 49.125 159.469 46.125C156.594 43.1042 155.156 39.0729 155.156 34.0312V32.9688C155.156 29.6146 155.792 26.625 157.062 24C158.354 21.3542 160.146 19.2917 162.438 17.8125C164.75 16.3125 167.25 15.5625 169.938 15.5625C174.333 15.5625 177.75 17.0104 180.188 19.9062C182.625 22.8021 183.844 26.9479 183.844 32.3438V34.75H160.938C161.021 38.0833 161.99 40.7812 163.844 42.8438C165.719 44.8854 168.094 45.9062 170.969 45.9062C173.01 45.9062 174.74 45.4896 176.156 44.6562C177.573 43.8229 178.812 42.7188 179.875 41.3438L183.406 44.0938C180.573 48.4479 176.323 50.625 170.656 50.625ZM169.938 20.3125C167.604 20.3125 165.646 21.1667 164.062 22.875C162.479 24.5625 161.5 26.9375 161.125 30H178.062V29.5625C177.896 26.625 177.104 24.3542 175.688 22.75C174.271 21.125 172.354 20.3125 169.938 20.3125Z"/>
                        <path d="M196.031 16.1875L196.219 20.4375C198.802 17.1875 202.177 15.5625 206.344 15.5625C213.49 15.5625 217.094 19.5938 217.156 27.6562V50H211.375V27.625C211.354 25.1875 210.792 23.3854 209.688 22.2188C208.604 21.0521 206.906 20.4688 204.594 20.4688C202.719 20.4688 201.073 20.9688 199.656 21.9688C198.24 22.9688 197.135 24.2812 196.344 25.9062V50H190.562V16.1875H196.031Z"/>
                        <path d="M232.156 50H226.375V16.1875H232.156V50ZM225.906 7.21875C225.906 6.28125 226.188 5.48958 226.75 4.84375C227.333 4.19792 228.188 3.875 229.312 3.875C230.438 3.875 231.292 4.19792 231.875 4.84375C232.458 5.48958 232.75 6.28125 232.75 7.21875C232.75 8.15625 232.458 8.9375 231.875 9.5625C231.292 10.1875 230.438 10.5 229.312 10.5C228.188 10.5 227.333 10.1875 226.75 9.5625C226.188 8.9375 225.906 8.15625 225.906 7.21875Z"/>
                        <path d="M240.031 32.8125C240.031 27.625 241.26 23.4583 243.719 20.3125C246.177 17.1458 249.396 15.5625 253.375 15.5625C257.333 15.5625 260.469 16.9167 262.781 19.625V2H268.562V50H263.25L262.969 46.375C260.656 49.2083 257.438 50.625 253.312 50.625C249.396 50.625 246.198 49.0208 243.719 45.8125C241.26 42.6042 240.031 38.4167 240.031 33.25V32.8125ZM245.812 33.4688C245.812 37.3021 246.604 40.3021 248.188 42.4688C249.771 44.6354 251.958 45.7188 254.75 45.7188C258.417 45.7188 261.094 44.0729 262.781 40.7812V25.25C261.052 22.0625 258.396 20.4688 254.812 20.4688C251.979 20.4688 249.771 21.5625 248.188 23.75C246.604 25.9375 245.812 29.1771 245.812 33.4688Z"/>
                        <path d="M276.031 32.7812C276.031 29.4688 276.677 26.4896 277.969 23.8438C279.281 21.1979 281.094 19.1562 283.406 17.7188C285.74 16.2812 288.396 15.5625 291.375 15.5625C295.979 15.5625 299.698 17.1562 302.531 20.3438C305.385 23.5312 306.812 27.7708 306.812 33.0625V33.4688C306.812 36.7604 306.177 39.7188 304.906 42.3438C303.656 44.9479 301.854 46.9792 299.5 48.4375C297.167 49.8958 294.479 50.625 291.438 50.625C286.854 50.625 283.135 49.0312 280.281 45.8438C277.448 42.6562 276.031 38.4375 276.031 33.1875V32.7812ZM281.844 33.4688C281.844 37.2188 282.708 40.2292 284.438 42.5C286.188 44.7708 288.521 45.9062 291.438 45.9062C294.375 45.9062 296.708 44.7604 298.438 42.4688C300.167 40.1562 301.031 36.9271 301.031 32.7812C301.031 29.0729 300.146 26.0729 298.375 23.7812C296.625 21.4688 294.292 20.3125 291.375 20.3125C288.521 20.3125 286.219 21.4479 284.469 23.7188C282.719 25.9896 281.844 29.2396 281.844 33.4688Z"/>
                        </mask>
                        <path d="M2.28125 50V4.5H17.1562C22.0938 4.5 25.8021 5.52083 28.2812 7.5625C30.7812 9.60417 32.0312 12.625 32.0312 16.625C32.0312 18.75 31.4271 20.6354 30.2188 22.2812C29.0104 23.9062 27.3646 25.1667 25.2812 26.0625C27.7396 26.75 29.6771 28.0625 31.0938 30C32.5312 31.9167 33.25 34.2083 33.25 36.875C33.25 40.9583 31.9271 44.1667 29.2812 46.5C26.6354 48.8333 22.8958 50 18.0625 50H2.28125ZM8.28125 28.7188V45.0938H18.1875C20.9792 45.0938 23.1771 44.375 24.7812 42.9375C26.4062 41.4792 27.2188 39.4792 27.2188 36.9375C27.2188 31.4583 24.2396 28.7188 18.2812 28.7188H8.28125ZM8.28125 23.9062H17.3438C19.9688 23.9062 22.0625 23.25 23.625 21.9375C25.2083 20.625 26 18.8438 26 16.5938C26 14.0938 25.2708 12.2812 23.8125 11.1562C22.3542 10.0104 20.1354 9.4375 17.1562 9.4375H8.28125V23.9062Z" stroke="black" stroke-width="4" mask="url(#path-1-outside-1)"/>
                        <path d="M47.5312 50H41.75V16.1875H47.5312V50ZM41.2812 7.21875C41.2812 6.28125 41.5625 5.48958 42.125 4.84375C42.7083 4.19792 43.5625 3.875 44.6875 3.875C45.8125 3.875 46.6667 4.19792 47.25 4.84375C47.8333 5.48958 48.125 6.28125 48.125 7.21875C48.125 8.15625 47.8333 8.9375 47.25 9.5625C46.6667 10.1875 45.8125 10.5 44.6875 10.5C43.5625 10.5 42.7083 10.1875 42.125 9.5625C41.5625 8.9375 41.2812 8.15625 41.2812 7.21875Z" stroke="black" stroke-width="4" mask="url(#path-1-outside-1)"/>
                        <path d="M70.8438 50.625C66.2604 50.625 62.5312 49.125 59.6562 46.125C56.7812 43.1042 55.3438 39.0729 55.3438 34.0312V32.9688C55.3438 29.6146 55.9792 26.625 57.25 24C58.5417 21.3542 60.3333 19.2917 62.625 17.8125C64.9375 16.3125 67.4375 15.5625 70.125 15.5625C74.5208 15.5625 77.9375 17.0104 80.375 19.9062C82.8125 22.8021 84.0312 26.9479 84.0312 32.3438V34.75H61.125C61.2083 38.0833 62.1771 40.7812 64.0312 42.8438C65.9062 44.8854 68.2812 45.9062 71.1562 45.9062C73.1979 45.9062 74.9271 45.4896 76.3438 44.6562C77.7604 43.8229 79 42.7188 80.0625 41.3438L83.5938 44.0938C80.7604 48.4479 76.5104 50.625 70.8438 50.625ZM70.125 20.3125C67.7917 20.3125 65.8333 21.1667 64.25 22.875C62.6667 24.5625 61.6875 26.9375 61.3125 30H78.25V29.5625C78.0833 26.625 77.2917 24.3542 75.875 22.75C74.4583 21.125 72.5417 20.3125 70.125 20.3125Z" stroke="black" stroke-width="4" mask="url(#path-1-outside-1)"/>
                        <path d="M96.2188 16.1875L96.4062 20.4375C98.9896 17.1875 102.365 15.5625 106.531 15.5625C113.677 15.5625 117.281 19.5938 117.344 27.6562V50H111.562V27.625C111.542 25.1875 110.979 23.3854 109.875 22.2188C108.792 21.0521 107.094 20.4688 104.781 20.4688C102.906 20.4688 101.26 20.9688 99.8438 21.9688C98.4271 22.9688 97.3229 24.2812 96.5312 25.9062V50H90.75V16.1875H96.2188Z" stroke="black" stroke-width="4" mask="url(#path-1-outside-1)"/>
                        <path d="M137.219 42.1562L145.594 16.1875H151.5L139.375 50H134.969L122.719 16.1875H128.625L137.219 42.1562Z" stroke="black" stroke-width="4" mask="url(#path-1-outside-1)"/>
                        <path d="M170.656 50.625C166.073 50.625 162.344 49.125 159.469 46.125C156.594 43.1042 155.156 39.0729 155.156 34.0312V32.9688C155.156 29.6146 155.792 26.625 157.062 24C158.354 21.3542 160.146 19.2917 162.438 17.8125C164.75 16.3125 167.25 15.5625 169.938 15.5625C174.333 15.5625 177.75 17.0104 180.188 19.9062C182.625 22.8021 183.844 26.9479 183.844 32.3438V34.75H160.938C161.021 38.0833 161.99 40.7812 163.844 42.8438C165.719 44.8854 168.094 45.9062 170.969 45.9062C173.01 45.9062 174.74 45.4896 176.156 44.6562C177.573 43.8229 178.812 42.7188 179.875 41.3438L183.406 44.0938C180.573 48.4479 176.323 50.625 170.656 50.625ZM169.938 20.3125C167.604 20.3125 165.646 21.1667 164.062 22.875C162.479 24.5625 161.5 26.9375 161.125 30H178.062V29.5625C177.896 26.625 177.104 24.3542 175.688 22.75C174.271 21.125 172.354 20.3125 169.938 20.3125Z" stroke="black" stroke-width="4" mask="url(#path-1-outside-1)"/>
                        <path d="M196.031 16.1875L196.219 20.4375C198.802 17.1875 202.177 15.5625 206.344 15.5625C213.49 15.5625 217.094 19.5938 217.156 27.6562V50H211.375V27.625C211.354 25.1875 210.792 23.3854 209.688 22.2188C208.604 21.0521 206.906 20.4688 204.594 20.4688C202.719 20.4688 201.073 20.9688 199.656 21.9688C198.24 22.9688 197.135 24.2812 196.344 25.9062V50H190.562V16.1875H196.031Z" stroke="black" stroke-width="4" mask="url(#path-1-outside-1)"/>
                        <path d="M232.156 50H226.375V16.1875H232.156V50ZM225.906 7.21875C225.906 6.28125 226.188 5.48958 226.75 4.84375C227.333 4.19792 228.188 3.875 229.312 3.875C230.438 3.875 231.292 4.19792 231.875 4.84375C232.458 5.48958 232.75 6.28125 232.75 7.21875C232.75 8.15625 232.458 8.9375 231.875 9.5625C231.292 10.1875 230.438 10.5 229.312 10.5C228.188 10.5 227.333 10.1875 226.75 9.5625C226.188 8.9375 225.906 8.15625 225.906 7.21875Z" stroke="black" stroke-width="4" mask="url(#path-1-outside-1)"/>
                        <path d="M240.031 32.8125C240.031 27.625 241.26 23.4583 243.719 20.3125C246.177 17.1458 249.396 15.5625 253.375 15.5625C257.333 15.5625 260.469 16.9167 262.781 19.625V2H268.562V50H263.25L262.969 46.375C260.656 49.2083 257.438 50.625 253.312 50.625C249.396 50.625 246.198 49.0208 243.719 45.8125C241.26 42.6042 240.031 38.4167 240.031 33.25V32.8125ZM245.812 33.4688C245.812 37.3021 246.604 40.3021 248.188 42.4688C249.771 44.6354 251.958 45.7188 254.75 45.7188C258.417 45.7188 261.094 44.0729 262.781 40.7812V25.25C261.052 22.0625 258.396 20.4688 254.812 20.4688C251.979 20.4688 249.771 21.5625 248.188 23.75C246.604 25.9375 245.812 29.1771 245.812 33.4688Z" stroke="black" stroke-width="4" mask="url(#path-1-outside-1)"/>
                        <path d="M276.031 32.7812C276.031 29.4688 276.677 26.4896 277.969 23.8438C279.281 21.1979 281.094 19.1562 283.406 17.7188C285.74 16.2812 288.396 15.5625 291.375 15.5625C295.979 15.5625 299.698 17.1562 302.531 20.3438C305.385 23.5312 306.812 27.7708 306.812 33.0625V33.4688C306.812 36.7604 306.177 39.7188 304.906 42.3438C303.656 44.9479 301.854 46.9792 299.5 48.4375C297.167 49.8958 294.479 50.625 291.438 50.625C286.854 50.625 283.135 49.0312 280.281 45.8438C277.448 42.6562 276.031 38.4375 276.031 33.1875V32.7812ZM281.844 33.4688C281.844 37.2188 282.708 40.2292 284.438 42.5C286.188 44.7708 288.521 45.9062 291.438 45.9062C294.375 45.9062 296.708 44.7604 298.438 42.4688C300.167 40.1562 301.031 36.9271 301.031 32.7812C301.031 29.0729 300.146 26.0729 298.375 23.7812C296.625 21.4688 294.292 20.3125 291.375 20.3125C288.521 20.3125 286.219 21.4479 284.469 23.7188C282.719 25.9896 281.844 29.2396 281.844 33.4688Z" stroke="black" stroke-width="4" mask="url(#path-1-outside-1)"/>
                        </svg>
                        
                </div><!-- social media -->
                
                <form class="form" method="POST" action="./seguridad/getIndex.php">
                    
                    <div class="grupo inner-addon left-addon">
                        <label class="labe" for="">Usuario</label>  
                        
                            <i class="far fa-user icon-modify"></i>
                            <input type="text" name="txtUser" placeholder="Ingrese su nombre" required><span class="barra"></span>  
                    </div>
                    <div class="grupo inner-addon left-addon">
                        <label class="labe" for="">Contraseña</label>  
                        
                            <i id="log" class="fas fa-lock icon-modify"></i>
                            <input type="password" name="txtPassword" placeholder="Ingrese su contraseña" required ><span class="barra"></span>
                        
                    </div>
                    <input type="hidden" value="Ingresar" name="login"> 
                    <button class="btn btn-second">ingresar</button>       
                    <?if($_GET['msg'] != null){?>
                        <?if($_GET['msg'] == 0){?>
                            <label style="color: red; text-align: center"><? echo "El usuario no se encuentra habilitado o no esta registrado."?></label>
                        <?}else{?>
                            <label style="color: red; text-align: center"><? echo "La contraseña ingresada no es valida."?></label>
                        <?}?>
                    <?}?>
                    
                </form>
                
                </div>
            </div><!-- second-content -->
        </div>

        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="./style/js/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="./style/js/bootstrap.min.js"></script>
        <script src="./style/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="./style/js/main.js"></script>-->
    </body>
    </html>
    <?php
    }
    
}
?>