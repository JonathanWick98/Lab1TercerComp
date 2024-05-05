<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a School Space</title>
    <link rel="stylesheet" href="{{ asset('css/ayuda.css') }}">

</head>
<body>
<div class="navbar">
        <div class="logo">
            <img src="{{ asset('css/Logo2.1.png') }}" alt="Logo de School Space" style="width: 200px;">
        </div>
        
        <a href="{{ route('profesorinfo.inicio') }}">Inicio</a>
        <a href="{{ route('profesorinfo.expe') }}">Expediente del Alumno</a>
        <a href="{{ route('profesorinfo.inforegistro') }}">Expediente</a>
        <a href="{{ route('profesorinfo.materia') }}">Materias</a>
        <a href="{{ route('profesorinfo.nota') }}">Notas</a>
        <a href="{{ route('profesorinfo.ayuda') }}">Ayuda</a>
        <a href="{{ route('profesorinfo.contacto') }}">Contacto</a>
        <a href="{{ route('profesorinfo.acerca') }}">Acerca de Nosotros</a>
        <br><br><br><br><br>
      
        @auth
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endauth
    </div>


    <div class="container">
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadro de Notas de: </title>
</head>
<body>

<h2>Cuadro de Notas</h2>

<table>
  <tr>
    <th>Asignatura</th>
    <th>Trimestre 1</th> <!-- Cambiamos la etiqueta de la columna de Nota -->
    <th>Trimestre 2</th> <!-- Agregamos una columna para el segundo trimestre -->
    <th>Trimestre 3</th> <!-- Agregamos una columna para el tercer trimestre -->
  </tr>
  <tr>
    <td>Matemáticas</td>
    <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
    <td><input type="number" min="0" max="10" step="0.1" value="0"></td> <!-- Agregamos inputs para el segundo trimestre -->
    <td><input type="number" min="0" max="10" step="0.1" value="0"></td> <!-- Agregamos inputs para el tercer trimestre -->
  </tr>
  <tr>
    <td>Ciencias</td>
    <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
    <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
    <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
  </tr>
  <tr>
    <td>Lenguaje</td>
    <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
    <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
    <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
  </tr>
  <tr>
    <td>Historia</td>
    <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
    <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
    <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
  </tr>
  <!-- Añade más filas según sea necesario para otras asignaturas -->
</table>

</body>
</html>
