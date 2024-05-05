<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;


//INDEX
Route::get('/', function () {
    return redirect()->route('register'); // Redirige a la ruta de registro
});

//Define las rutas de autenticación utilizando el método Auth::routes()
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//RUTA DE VERIFICACION DE ROLES
//Profesores
Route::prefix('profesorinfo')->group(function () {
    Route::get('/', function () {
        return view('profesorinfo.inicio');
    })->name('profesorinfo.inicio');

    Route::get('/expe', function () {
        return view('profesorinfo.expe');
    })->name('profesorinfo.expe');

    Route::get('/materia', function () {
        return view('profesorinfo.materia');
    })->name('profesorinfo.materia');

    Route::get('/ayuda', function () {
        return view('profesorinfo.ayuda');
    })->name('profesorinfo.ayuda');

    Route::get('/contacto', function () {
        return view('profesorinfo.contacto');
    })->name('profesorinfo.contacto');

    Route::get('/acerca', function () {
        return view('profesorinfo.acerca');
    })->name('profesorinfo.acerca');

    Route::get('/nota', function () {
        return view('profesorinfo.nota');
    })->name('profesorinfo.nota');

    Route::get('/inforegistro', [UsuariosController::class, 'index'])->name('profesorinfo.inforegistro');
    
});


//Alumnos
Route::prefix('alumnoinfo')->group(function () {
    Route::get('/', function () {
        return view('alumnoinfo.inicio');
    })->name('alumnoinfo.inicio');

    Route::get('/expe', function () {
        return view('alumnoinfo.expe');
    })->name('alumnoinfo.expe');

    Route::get('/materia', function () {
        return view('alumnoinfo.materia');
    })->name('alumnoinfo.materia');

    Route::get('/ayuda', function () {
        return view('alumnoinfo.ayuda');
    })->name('alumnoinfo.ayuda');

    Route::get('/contacto', function () {
        return view('alumnoinfo.contacto');
    })->name('alumnoinfo.contacto');

    Route::get('/acerca', function () {
        return view('alumnoinfo.acerca');
    })->name('alumnoinfo.acerca');

    // Ruta para las notas de los alumnos
    Route::get('/nota', function () {
        return view('alumnoinfo.nota');
    })->name('alumnoinfo.nota');
});

