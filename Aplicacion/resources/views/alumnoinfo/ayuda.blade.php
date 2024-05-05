<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a School Space</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('css/galaxi.gif'); /* Fondo */
            background-size: cover; /* Para que el fondo cubra toda la pantalla */
            color: #FFFCF7; /* Color del texto */
            display: flex;
        }

        .navbar {
            background-color: #141325;
            color: #fff;
            padding: 10px 20px;
            text-align: left;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            min-height: 100vh; /* Mínimo tamaño de la pantalla */
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 10px;
            margin: 5px; /* Margen para evitar que el color de fondo se salga */
            border-radius: 5px;
            transition: background-color 0.3s ease;
            width: calc(100% - 10px); /* Ocupar todo el ancho menos el margen */
            text-align: left;
            display: block; /* Mostrar en cascada */
        }

        .navbar a:hover {
            background-color: #65a675;
        }

        .container {
            max-width: 800px;
            margin: 50px auto auto; /* Ajuste del margen superior para evitar superposición con el navbar */
            text-align: center;
            background-color: #141325; /* Color del contenedor de texto */
            padding: 20px;
            border-radius: 10px;
        }

        h1 {
            color: #67b588;
        }

        p {
            color: #ffffff;
            font-size: 18px;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #65a675;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #67b588;
        }

        .logo {
            text-align: center;
            padding: 20px;
        }

        .logo img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<div class="navbar">
        <div class="logo">
            <img src="{{ asset('css/Logo2.1.png') }}" alt="Logo de School Space" style="width: 200px;">
        </div>
        
        <a href="{{ route('alumnoinfo.inicio') }}">Inicio</a>
        <a href="{{ route('alumnoinfo.expe') }}">Expediente del Alumno</a>
        <a href="{{ route('alumnoinfo.nota') }}">Notas</a>
        <a href="{{ route('alumnoinfo.materia') }}">Materias</a>
        <a href="{{ route('alumnoinfo.ayuda') }}">Ayuda</a>
        <a href="{{ route('alumnoinfo.contacto') }}">Contacto</a>
        <a href="{{ route('alumnoinfo.acerca') }}">Acerca de Nosotros</a>
        <br><br><br><br><br>
      
        @auth
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endauth
    </div>
    <div class="container">
        <!-- Aquí puedes agregar tu contenido personalizado -->
        <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas Frecuentes</title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlazar archivo CSS -->
</head>
<body>
    <div class="container">
        <h1>Preguntas Frecuentes</h1>

        <div class="search-container">
            <form action="/buscar" method="GET">
                <input type="text" placeholder="Buscar en preguntas frecuentes..." name="q">
                <button type="submit">Buscar</button>
            </form>
        </div>

        <!-- Aquí añadiremos las preguntas frecuentes -->
        <div class="faq">
            <h2>¿Cómo creo una cuenta?</h2>
            <p>Para crear una cuenta, haz clic en el enlace "Registrarse" en la página de inicio.</p>
        </div>

        <div class="faq">
            <h2>¿Cómo cambio mi contraseña?</h2>
            <p>Para cambiar tu contraseña, ve a la sección "Configuración de la cuenta" en tu perfil.</p>
        </div>
        <div class="faq">
            <h2>¿Cómo accedo a los cursos disponibles en la aplicación?</h2>
            <p>Respuesta: Para acceder a los cursos disponibles en nuestra aplicación, simplemente inicia sesión en tu cuenta y navega a la sección de "Cursos". Aquí encontrarás una lista de todos los cursos disponibles organizados por categorías. Puedes hacer clic en un curso para obtener más detalles y comenzar a aprender..</p>
        </div>
    
    </div>


    </div>

</body>
</html>

    </div>
</body>
</html>
