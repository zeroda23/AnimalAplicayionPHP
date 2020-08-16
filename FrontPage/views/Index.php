<!DOCTYPE html>
<html>
    <head>
        <link href="./css/styles.css" rel="stylesheet" type="text/css" /> 
        <title>Inicio de sesion</title>
        <link rel="shortcut icon" href="./images/icono.png"/>     
    </head>
    <body background="./images/fondoLogin.jpg">
        <div class="contenedorCenter">
            <div class="contenedorLogin">
                <img src="./images/imagenPrincipal.jpg"/>
                <div class="loginSection">     
                    <form  action="<?=base_url?>usuario/login" method="POST">
                        <label for="usuario">Usuario</label><br>
                        <input id="usuario" name="usuario" type="text" placeholder="Ingresar usuario"/>
                        <br>
                        <label for="password">Contraseña</label><br>
                        <input id="password" name="password" type="password" placeholder="Ingresa tu contraseña"/>
                        <br>
                        <input type="checkbox" /> Recordar usuario    
                        <br><br>    
                        <input type="submit" value="Iniciar sesión" id="iniciaSesion" />
                    </form>                   
                    <br><br>
                    <span id="error" >                   
                    </span>
                                    
                </div>
            </div>          
        </div>
    </body>
    <script src="./js/globalFunction.js"></script>
    <script src="./js/views/init/loginInit.js"></script>
    <script src="./js/views/events/loginEvents.js"></script>
    <script src="./js/pagesJS/login.js"></script>  
</html>