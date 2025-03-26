<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


abstract class Controller
{
    //
}

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        // Aqui você pode adicionar lógica para enviar e-mail ou salvar no banco de dados

        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}

