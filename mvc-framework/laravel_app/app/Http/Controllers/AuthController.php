<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\RegistersUsers;

class AuthController extends Controller
{
    use RegistersUsers;

    // ... otros métodos del controlador

    public function registro(Request $request)
    {
        // Lógica de registro aquí
    }
}

