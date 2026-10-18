
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Orureña</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ICONOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            background: #f5f5f5;
            font-family: Arial;
        }

        /* MENU */
        .navbar {
            background: black;
        }

        .navbar a {
            color: grey !important;
            font-weight: bold;
        }

        .navbar a:hover {
            color: white !important;
        }

        /* TITULOS */
        h2 {
            font-weight: bold;
        }

        /* CHEFS */
        .chef-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            background: white;
            text-align: center;
            transition: 0.3s;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
        }

        .chef-card:hover {
            transform: scale(1.05);
        }

        .chef-img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        .social {
            margin-top: 10px;
        }

        .social i {
            margin: 8px;
            font-size: 18px;
            cursor: pointer;
            color: #333;
        }

        .social i:hover {
            color: #8B0000;
        }

        /* TESTIMONIOS */
        .testimonio {
            border: 1px solid #ddd;
            border-radius: 8px;
            background: white;
            padding: 15px;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
        }

        /* FOOTER */
        footer {
            background: black;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }

        /* ESTILO PARA LOS CUBIERTOS BLANCOS */
        .cubiertos-blancos {
            color: white;
            font-size: 1em;
            margin-right: 5px;
        }

        /* ESTILOS PARA LAS CARDS DEL MENU */
        .menu-card-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .card {
            height: 100%;
        }
        .card-body {
            display: flex;
            flex-direction: column;
        }
        .card-text {
            flex-grow: 1;
        }
        .precio-text {
            margin-top: auto;
            font-weight: bold;
            margin-bottom: 0;
        }
        /* Clase para la franja de bienvenida */
        .bg-dark {
            background-color: black !important;
        }
        
        /* Estilo para la sección de horario */
        .horario-section {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            margin-top: 30px;
            margin-bottom: 20px;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <!-- MENU -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand text-white" href="#">
                <i class="fas fa-utensils cubiertos-blancos"></i> Restaurant Orureña
            </a>
            <button class="navbar-toggler bg-blue" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menú del día</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Chefs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimonios</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contactos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#horario">Horario</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- BANNER -->
    <section id="banner" class="container-fluid p-0">
        <div class="banner-img" style="position:relative; background:url(images/image1.jpg) center/cover no-repeat; height:400px;">
            <div class="banner-text" style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); text-align:center; color:#fff;">
                <h1> La Orureña </h1>
                <p>Restaurant del mejor sabor plato tipico</p>
                <a href="#menu" class="btn btn-primary">Ver Menu</a>
            </div>
        </div>
    </section>

    <!-- BIENVENIDA -->
    <section id="bienvenida" class="container mt-4 text-center">
        <div class="jumbotron bg-dark text-white p-4 rounded">
            <h2> ¡Bienvenida al Restaurante la Orureña!</h2>
            <p> Descubre una experiencia culinaria unica</p>
        </div>
    </section>

    <!-- CHEFS -->
    <section class="container mt-5">
        <h2 class="text-center">Nuestros Chefs</h2>
        <div class="row mt-4 text-center">
            <!-- CHEF 1 -->
            <div class="col-md-4">
                <div class="chef-card">
                    <img src="images/colaboradores/chef1.jpg" class="chef-img" alt="Chef 1">
                    <div class="p-3">
                        <h5>Chef 1</h5>
                        <p>La chef Marcos K</p>
                        <div class="social">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-linkedin"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CHEF 2 -->
            <div class="col-md-4">
                <div class="chef-card">
                    <img src="images/colaboradores/chef2.jpg" class="chef-img" alt="Chef 2">
                    <div class="p-3">
                        <h5>Chef 2</h5>
                        <p>La chef Marisa Y</p>
                        <div class="social">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-linkedin"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CHEF 3 -->
            <div class="col-md-4">
                <div class="chef-card">
                    <img src="images/colaboradores/chef3.jpg" class="chef-img" alt="Chef 3">
                    <div class="p-3">
                        <h5>Chef 3</h5>
                        <p>La chef Maria G</p>
                        <div class="social">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-linkedin"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIOS -->
    <section class="container mt-5">
        <h2 class="text-center">Testimonios</h2>
        <div class="row mt-4">
            <!-- TESTIMONIO 1 -->
            <div class="col-md-6">
                <div class="testimonio">
                    <p>Muy buena comida</p>
                    <hr>
                    <p>Oscar Uh</p>
                </div>
            </div>
            <!-- TESTIMONIO 2 -->
            <div class="col-md-6">
                <div class="testimonio">
                    <p>Muy buena comida</p>
                    <hr>
                    <p>Oscar Uh</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION DE MENU (Nuestra recomendación) -->
    <section id="menu" class="container mt-4">
        <h2 class="text-center">Menu (nuestra recomendacion)</h2>
        <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
            <!-- Item 1: Pique Macho -->
            <div class="col d-flex">
                <div class="card">
                    <img src="images/menu/Image3.jpg" alt="Pique Macho" class="card-img-top menu-card-img">
                    <div class="card-body">
                        <h5 class="card-title">Pique Macho</h5>
                        <p class="card-text small"><strong>Ingredientes:</strong> Plato tipico, trozos de carne de res, salchichas, papas fritas, cebolla, tomate y locoto acompañado con huevo duro.</p>
                        <p class="precio-text"><strong>Precio:</strong> Bs 40</p>
                    </div>
                </div>
            </div>
            <!-- Item 2: Silpancho -->
            <div class="col d-flex">
                <div class="card">
                    <img src="images/menu/Image4.jpg" alt="Silpancho" class="card-img-top menu-card-img">
                    <div class="card-body">
                        <h5 class="card-title">Silpancho</h5>
                        <p class="card-text small"><strong>Ingredientes:</strong> Plato tipico carne de res apanada, servida sobre arroz blanco, con papas fritas, huevo, ensalada de tomate y cebolla.</p>
                        <p class="precio-text"><strong>Precio:</strong> Bs 45</p>
                    </div>
                </div>
            </div>
            <!-- Item 3: Anticucho -->
            <div class="col d-flex">
                <div class="card">
                    <img src="images/menu/Image5.jpg" alt="Anticucho" class="card-img-top menu-card-img">
                    <div class="card-body">
                        <h5 class="card-title">Anticucho</h5>
                        <p class="card-text small"><strong>Ingredientes:</strong> Preparado con trozos de corazon de res asados en brochetas sobre carbon, se sirve papas cocidas, aji de mani.</p>
                        <p class="precio-text"><strong>Precio:</strong> Bs 30</p>
                    </div>
                </div>
            </div>
            <!-- Item 4: Charquekan -->
            <div class="col d-flex">
                <div class="card">
                    <img src="images/menu/Image6.jpg" alt="Charquekan" class="card-img-top menu-card-img">
                    <div class="card-body">
                        <h5 class="card-title">Charquekan</h5>
                        <p class="card-text small"><strong>Ingredientes:</strong> Plato tipico, preparado con charque (carne de res deshidratada), mote de maiz, papas cocidas, huevo duro.</p>
                        <p class="precio-text"><strong>Precio:</strong> Bs 40</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION DE CONTACTO -->
    <section id="contacto" class="container mt-4">
        <div class="row">
            <!-- Columna Izquierda: Formulario de Contacto (alineado con la primera foto) -->
            
                <h2>Contacto</h2>
                <p>Estamos aqui para servirle</p>
                <form action="?" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="name" name="nombre" placeholder="Escribe tu nombre..." required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electronico:</label>
                        <input type="email" class="form-control" id="email" name="correo" placeholder="Escribe tu correo electronico..." required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje:</label>
                        <textarea id="message" class="form-control" name="mensaje" rows="5" placeholder="Escribe tu mensaje..."></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Enviar mensaje">
                </form>
            </div>
            
            <!-- Columna Derecha: Vacía para mantener el equilibrio (opcional) -->
            <div class="col-md-6">
                <!-- Espacio vacío para mantener la estructura de columnas -->
            </div>
        </div>
    </section>

    <!-- SECCION DE HORARIO (Abajo y centrado) -->
        <div class="text-center bg ligth P-4">
            <h3 class="mb-4"> Horario de atencion </h3>
        <div>
            <p><strong>Lunes a Viernes</strong></p>
            <p><strong>11:00 a.m - 10:00 p.m</strong><p>
        </div>
        <div>

            <p><strong>Sabado</strong><p>
            <p><strong>12:00 a.m - 5:00 p.m</strong><p>
        </div>
        <div>
            <p><strong>Domingo</strong><p>
            <p><strong>7:00 a.m - 2:00 p.m</strong><p>                     
        </div>
        </div>
    

    <!-- FOOTER (Franja horizontal negra) -->
    <footer class="bg-dark text-light text-center py-3">
        <p class="mb-0">© 2026 Restaurant Orureña - Todos los derechos reservados</p>
    </footer>

    <!-- SCRIPT DE BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>