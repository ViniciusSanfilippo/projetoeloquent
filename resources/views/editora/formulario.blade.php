@extends('layouts.master')

@section('title','Cadastro de editora')

@section('page-header-contant','Cadastro')


@section('content')


  <form action="/editoras" method="post">
    {{csrf_field()}}
   <div class="form-group">
     <label for="nome">Editora:</label>
     <input type="text" class="form-control" name="nome" id="editora">
   </div>
   <div class="form-group">
     <label for="email">Email:</label>
     <input type="email" class="form-control" name="email" id="email">
   </div>
   <button type="submit" class="btn btn-primary">Salvar</button>
  </form>

@endsection
