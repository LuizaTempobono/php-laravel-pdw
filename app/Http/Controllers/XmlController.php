<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Carro;

class XmlController extends Controller
{
    public function gerarXmlCarro(){
       $dados = Carro::all();

       return response()->view('data-xml', ['registros' => $dados])->header('Content-Type', 'application/xml');
    }
}
