<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Se requiere iniciar sesion");
                window.location = "Acceder.php";
            </script>
        ';
       // header("location: Acceder.php");
        session_destroy();
        die();
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a Mercept</title>
    <link rel="stylesheet" href="css/normalize.css">
   
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/pagrest.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/skeleton.css">
    
    
        
</head>
<body>
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="four columns">
                <h1>Mercept: <?php echo $_SESSION['usuario'] ?></h1>

                <nav class="nav-principal contenedor">
                <a href="index.php">Inicio</a>
                <a href="nosotros.html">Nosotros</a>
                <a href="tienda.html">Tienda</a>
                <a href="contacto.html">Contacto</a> 
                <a href="php/cerrar_sesion.php">Cerrar Sesion </a></nav>

              
            </div>
            <div class="two columns u-pull-right">
                <ul>
                    <li class="submenu">
                            <img src="img/cart.png" id="img-carrito">
                            <div id="carrito">
                                    
                                    <table id="lista-carrito" class="u-full-width">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                            </div>
                    </li>
                </ul>
            </div>
        </div> 
    </div>
    </header>


    <div id="hero">
        <div class="container">
            <div class="row">
                    <div class="six columns">
                        <div class="contenido-hero">
                                <h2>Compra Con Nosotros</h2>
                                <p>Todos Nuestros muebles al mejor precio </p>
                                <form action="#" id="busqueda" method="post" class="formulario">
                                    <input class="u-full-width" type="text" placeholder="Busca Tu Producto" id="buscador">
                                    <input type="submit" id="submit-buscador" class="submit-buscador">
                                </form>
                        </div>
                    </div>
            </div> 
        </div>
    </div>

    <div class="barra">
        <div class="container">
            <div class="row">
                    <div class="four columns icono icono1">
                        <p>Compra con nosotros y brindanos buenas ideas <br></p>
                    </div>
                    <div class="four columns icono icono2">
                        <p>Productos de la mejor calidad <br>
                        Y lo mejor a un gran precio </p>
                    </div>
                    <div class="four columns icono icono3">
                        <p>Acceso 24 horas <br>
                        Pide lo que mas te guste </p>
                    </div>
            </div>
        </div>

    </div>

    <div id="lista-cursos" class="container">
        <h1 id="encabezado" class="encabezado">Algunos de Nuestros Productos</h1>
        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="img/galeria_01.jpg" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4>Cojunto para habitacion</h4>
                        <p>Mercept</p>
                        <img src="img/estrellas.png">
                        <p class="precio">$600.000 <span class="u-pull-right ">$450.000</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/galeria_02.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Mesa de noche mas cojunto para habitacion</h4>
                            <p>Mercept</p>
                            <img src="img/estrellas.png">
                            <p class="precio">$800.000  <span class="u-pull-right ">$550.000</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="2">Agregar Al Carrito</a>
                        </div>
                    </div>
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/galeria_03.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Cojunto para habitacion</h4>
                            <p>Mercept</p>
                            <img src="img/estrellas.png">
                            <p class="precio">$600.000  <span class="u-pull-right ">$400.000</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="3">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>

        </div> <!--.row-->
        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="img/galeria_04.jpg" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4>Sofas de la mejor calidad </h4>
                        <p>Mercept</p>
                        <img src="img/estrellas.png">
                        <p class="precio">$1.100.000 <span class="u-pull-right ">$900.000</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="4">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/galeria_05.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Decoración con productos de tu hogar</h4>
                            <p>Mercept</p>
                            <img src="img/estrellas.png">
                            <p class="precio">$1.200.000  <span class="u-pull-right ">$850.000</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="5">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/galeria_06.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Sofa para sala </h4>
                            <p>Mercept</p>
                            <img src="img/estrellas.png">
                            <p class="precio">$2.500.000  <span class="u-pull-right ">$1.500.000</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="6">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
        </div> <!--.row-->
        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="img/galeria_07.jpg" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4>Sala mas mesa para modelar tu hogar</h4>
                        <p>Mercept</p>
                        <img src="img/estrellas.png">
                        <p class="precio">$3.500.000  <span class="u-pull-right ">$2.600.000</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="7">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/galeria_08.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Sala Moderna </h4>
                            <p>Mercept</p>
                            <img src="img/estrellas.png">
                            <p class="precio">$4.500.000  <span class="u-pull-right ">$3.800.000</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="8">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/galeria_09.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Silla mas mesa </h4>
                            <p>Mercetp</p>
                            <img src="img/estrellas.png">
                            <p class="precio">$800.000  <span class="u-pull-right ">$600.000</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="9">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
            </div>
        </div> <!--.row-->
        <div class="row">
                <div class="four columns">
                    <div class="card">
                        <img src="img/producto3.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Mueble</h4>
                            <p>Mercept</p>
                            <img src="img/estrellas.png">
                            <p class="precio">$2.000.000  <span class="u-pull-right ">$1.300.000</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="10">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card-->
                </div>
                <div class="four columns">
                        <div class="card">
                            <img src="img/producto1.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Mueble </h4>
                                <p>Mercept</p>
                                <img src="img/estrellas.png">
                                <p class="precio">$2.600.000  <span class="u-pull-right ">$1.500.500</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="11">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
                <div class="four columns">
                        <div class="card">
                            <img src="img/producto2.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Sala todo incluido</h4>
                                <p>Juan Pedro</p>
                                <img src="img/estrellas.png">
                                <p class="precio">$5.500.000  <span class="u-pull-right ">$4.100.000</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="12">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card-->
                </div>
            </div> <!--.row-->
    </div>  

    <footer class="site-footer">
        <div class="grid-footer contenedor">
            <div>
                <nav>
                    <h3>Categorias</h3>
                    <nav class="footer-menu">
                        <a class="enlace" href="#">Cocina</a>
                        <a href="#">Oficina</a>
                        <a href="#">Jardin</a>
                        <a href="#">Cochera</a>
                        <a href="#">Dormitorios</a>
        

                    </nav>
                
                </nav>
            
            </div>

            <div>
                <h3>Sobre Nosotros</h3>
                <nav class="footer-menu">
                    <a href="#">Nuestro historia </a>
                    <a href="#">Mision  y valores</a>
                    <a href="#">Carreras</a>
                    <a href="#">Politica de privacidad</a>
                    <a href="#">Terminos de servicio</a>
                </nav>
            
                

            </div>

            <div>
                <h3>Soporte</h3>
                <nav>
                    <a href="#">Preguntas frcuentes </a>
                    <a href="#">Ayuda en linea </a>
                    <a href="#">Confianza y seguridad</a>
                    
                </nav>
            </div>


    </div>
        <p class="copyright">Todos los derechos reservados  , Tienda Mercept  </p>
    </footer>

    <script src="js/app.js"></script>

</body>
</html>