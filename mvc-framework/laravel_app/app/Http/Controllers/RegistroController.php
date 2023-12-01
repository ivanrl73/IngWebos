<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function registrarUsuario(Request $request)
    {
        // Validación y creación de usuario
        Usuario::create([
            'username' => $request->input('nombre'),
            'correo' => $request->input('email'),
            'contrasena' => bcrypt($request->input('password')),
        ]);

        // Otros pasos como redireccionar al inicio de sesión
    }
}
