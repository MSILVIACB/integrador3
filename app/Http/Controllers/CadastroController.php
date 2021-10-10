<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index (){

        $cadastros = Cadastro::all();

        return view ('Cadastro', ['cadastros'=> $cadastros]);
    }

     public function create (){

         return view ('cadastros.create');
     }
}
