<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function store(Request $request)
    {
        $validacion = $request->validate([
            'nombre' => 'required|string|min:10',
            'mail' => 'required|email',
            'mensaje' => 'required|min:10',
        ]);
    }
}
