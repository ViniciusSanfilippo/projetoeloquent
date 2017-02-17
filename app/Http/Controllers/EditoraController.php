<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editora;

class EditoraController extends Controller
{
    //
    public function index()
    {

      $editoras = Editora::all();

      return view('editora.index', compact('editoras'));

    }
    public function show(Editora $editora)
    {

      return view('editora.show', compact('editora'));

    }
    public function formulario()
    {
      return view('editora.formulario');
    }
    public function armazena()
    {
      //dd(request()->all());
      Editora::create(request()->all());

      return redirect('/editoras');
    }
}
