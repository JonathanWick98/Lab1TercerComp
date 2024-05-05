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
          <!-- Sección de información de contacto -->
    <div class="contacto">
        <h2>Información de Contacto</h2>
        <p>Si necesitas asistencia personalizada contactanos</p>
        <!-- Imágenes en miniatura junto a la información de contacto -->
        <div class="contacto-info">
            <!--<img src="g.png" alt="Correo Electrónico"><br>-->
            
                <strong>Correo Electrónico:</strong> dr266812@gmail.com
            
        </div>
        <div class="contacto-info">
            <!--<img src="w.png" alt="Teléfono">-->
            <strong>Teléfono:</strong> +503 7124 6206
    
        </div>

        <form action="/enviar-correo" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required><br><br>

            <label for="mensaje">Mensaje:</label><br>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br><br>

            <button type="submit">Enviar Mensaje</button>
        </form>

    </div>

</body>
</html>

    </div>
</body>
</html>

    </div>
</body>
</html>
