<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Carro;

class CadastrarController extends Controller
{
    public function salvarCarro(Request $request){
        $request->validate([
            "Placa" => "required|min:7",
            "Modelo" => "required|min:3",
            "Cor" => "required|min:3",
            "Câmbio" => "required|min:6",
            "Combustível" => "required|min:4"
        ]);
        $obj = new Carro();
        $obj->fill($request->all());
        $obj->save();

        return view('cadastroSalvo');
    }
}