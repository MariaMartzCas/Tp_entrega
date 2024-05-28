<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAC-MOVIES</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="estilos.css">
    <script src="https://kit.fontawesome.com/f7fb471b65.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <header class="header">
        <nav class="navegacion">
            <a class="anclaLogo" href="#">
                <i class="fas fa-film" aria-hidden="true"></i>
                <span>CAC-Movies</span>
            </a>
            <ul class="listaNav">
                <li class="listaItem"><a class="linkNav" href="#tendencias">Tendencias</a></li>
                <li class="listaItem"><a class="linkNav" href="registrarse.html">Registrarse</a></li>
                <li class="listaItem"><a class="linkNav iniciarSesion" href="iniciosesion.html">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <main id="main" class="main">
        <section data-aos="zoom-in"  data-aos-duration="1000" class="sectionPrincipal">
            <h1 class="tituloPrincipal">Películas y series ilimitadas <br> en un solo lugar</h1>
            <h2 class="subtituloPrincipal">Disfruta donde quieras. <br> Cancela en cualquier momento.</h2>
            <a class="botonRegistrarse" href="registrarse.html">Registrate</a>
        </section>
        <section data-aos="fade-up" data-aos-offset="300" data-aos-delay="50" data-aos-duration="1000" class="buscadorPrincipal">
            <h2 class="tituloSection">¿Qué estas buscando para ver?</h2>
            <form class="buscadorPeliculas">
                <input class="inputBuscador" type="text" placeholder="Buscar..." id="buscar" name="buscar">
                <input class="botonBuscador" type="submit" value="Buscar">
            </form>
        </section>
        <hr>
        <section id="tendencias" data-aos="fade-up" data-aos-offset="400" data-aos-delay="100" data-aos-duration="1000" class="peliculasTendencia">
            <h3 class="tituloSection">Las tendencias de hoy</h3>
            <div class="peliculas" id="tendenciasContainer">
                <!-- Aquí se cargarán las películas tendencia -->
            </div>
            <button class="boton anterior">Anterior</button>  
            <button class="boton siguiente">Siguiente</button>
        </section>
        <hr>
        <section data-aos="fade-up" data-aos-offset="200" data-aos-delay="100" data-aos-duration="2000" class="peliculasAclamadas">
            <h3 class="tituloSection">Las más aclamadas</h3>
            <div class="aclamadas" id="aclamadasContainer">
                <!-- Aquí se cargarán las películas más aclamadas -->
            </div>
        </section>
    </main>
    <footer class="footer">
        <nav class="navegacion">
            <ul class="listaNav">
                <li class="listaItem"><a class="linkNav" href="">Términos y condiciones</a></li>
                <li class="listaItem"><a class="linkNav" href="">Preguntas frecuentes</a></li>
                <li class="listaItem"><a class="linkNav" href="">Ayuda</a></li>
                <li class="listaItem"><a class="linkNav administradorPeliculas" href="">Administrador Peliculas</a></li>
            </ul>
        </nav>
        <a href="#main" class="flechaArriba">
            <img src="flecha-hacia-arriba.png" alt="ir arriba flecha">
        </a>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="peliculas.js"></script>
</body>
</html>








