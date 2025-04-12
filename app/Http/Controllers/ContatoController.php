<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(Request $req)
    {
        $dadosContato = [
            'home' => $req->input('home'),
            'celular' => $req->input('celular')
        ];
        
        return view('contato', compact('dadosContato'));
    }
}
