<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location:index.php");
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register MERCEPT</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="irm.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="clave">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form  method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" name="name" placeholder="Nombre completo">
                        <input type="email" name="email" placeholder="Email">
                        <input type="text" name="usuario" placeholder="Usuario">
                        <input type="password" name="clave" placeholder="Contraseña">
                        <button name="register">Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>
            <script src="js/script.js"></script>
        <?php 
        include("php/registrarm.php");
        ?>
</body>
</html>