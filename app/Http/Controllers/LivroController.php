<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livro;

class LivroController extends Controller
{
    //
    public function index(){

      $livros = Livro::all();

      return view('livro.index', compact ('livros'));
    }


}
