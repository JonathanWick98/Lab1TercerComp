<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario; // Importa el modelo Usuario

class UsuariosController extends Controller
{
    public function index()
    {
        // Obtener todos los usuarios que sean de tipo 'alumno'
        $usuarios = Usuario::select('id', 'name', 'email', 'rol')->get();

        
        // Pasar los usuarios a la vista 'inforegistro'
        return view('profesorinfo.inforegistro', ['usuarios' => $usuarios]);
    }

    // Otros métodos del controlador
}
