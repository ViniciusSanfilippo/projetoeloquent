@extends('layouts.master')

@section('title','Lista de Editoras')

@section('page-header-contant','Lista de Editoras')


@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">Ações</h3></div>
        <div class="panel-body">
          <a href="/editoras/formulario">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Editora
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          @foreach($editoras as $editora)
            <tr>
              <td>{{ $editora->id }}</td>
              <td>{{ $editora->nome }}</td>
              <td>{{ $editora->email }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
