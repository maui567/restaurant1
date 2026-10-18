<?php
$url_base="htt://localhost/restaurant/admin/";
?>
<!--Vamos a tener elementos de acceso -->
<!doctype html>
<html lang="en">
    <head>
        <title>Administrador del sitio web</title>
        <!-- Required meta tags -->
         <meta charset="uft-8" />
         <meta
              name="viewport"
              content="width-device-width, initial-scale-1, shrink-to-fit=no"/>

              <!-- Bootstrap CSS v5.2.1 -->
               <link
               href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
               rel="stylesheet"
               integrity="sh384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPKSM2HN"
               crossorigin="anonymous"
            />
        </head>
        <body>
            <header>
                <!-- menu navegable -->
                 <nav class="navbar navbar-expand navbar-light bg-light">
                    <div class="nav navbar-nav">
                        <a class="nav-item nav-link active" href="#" aria-current="page"
                        >Administrador</a>
                        <!-- Agregar algunos enlaces -->

                        <a class="nav-item nav-link" href="<?php echo $url_base;?>/seccion/banners/">Banners</a>
                        <a class="nav-item nav-link" href="<?php echo $url_base;?>/seccion/colaboradores/">Colaboradores</a>
                        <a class="nav-item nav-link" href="<?php echo $url_base;?>/seccion/testimonios/">Testimonios</a>
                        <a class="nav-item nav-link" href="<?php echo $url_base;?>/seccion/menu/">Menu</a>
                        <a class="nav-item nav-link" href="<?php echo $url_base;?>/seccion/comentario/">Comentarios</a>
                        <a class="nav-item nav-link" href="<?php echo $url_base;?>/seccion/usuarios/">Usuarios</a>
                        <a class="nav-item nav-link" href="#">Cerrar sesion</a>

                    </div> 
                </nav>
            </header> 
            <main>
                  






