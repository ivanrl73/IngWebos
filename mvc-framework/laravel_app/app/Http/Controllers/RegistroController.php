<?php

namespace App\Http\Controllers;

use App\Models\Usuario; // Asegúrate de tener la ruta correcta para el modelo
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function registrarUsuario(Request $request)
    {
        // Validación y creación de usuario
        Usuario::create([
            'nombre' => $request->input('nombre'),
            'correo' => $request->input('email'),
            'contrasena' => bcrypt($request->input('password')),
        ]);

        // Otros pasos como redireccionar al inicio de sesión
    }

    public function index()
    {
        return view('registro');
    }
}
