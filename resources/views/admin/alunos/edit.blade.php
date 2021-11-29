@extends('layouts.main')
@section('content')

<div class="container-fluid text-center">
  <img src="/img/banners/banner0.jpg" class="img-fluid d-block w-100" alt="Banner">
  <h1 class="mt-3">Editar aluno da academia</h1>
</div>

<form class="container row g-3 mx-auto"
  action="{{ route('aluno.update', ['aluno'=>$aluno->id]) }}" method="post">
  @csrf
  @method('PUT')
  <div class="col-md-8">
    <label class="form-label" for="nome">Nome completo</label class="form-label">
    <input class="form-control" type="text" name="nome" value="{{ $aluno->nome }}">
  </div>

  <div class="col-md-4">
    <label  class="form-label" for="usuario">Nome de usuário</label class="form-label">
    <input class="form-control" type="text" name="usuario" value="{{ $aluno->usuario }}">
  </div>

  <div class="col-md-6">
    <label class="form-label" for="email">E-mail</label class="form-label">
    <input class="form-control" type="email" name="email" value="{{ $aluno->email }}">
  </div>

  <div class="col-md-6">
    <label class="form-label" for="senha">Senha</label class="form-label">
    <input class="form-control" type="password" name="senha" value="{{ $aluno->senha }}">
  </div>

  <div class="col-md-5">
    <label class="form-label" for="cidade">Cidade</label class="form-label">
    <input class="form-control" type="text" name="cidade" value="{{ $aluno->cidade }}">
  </div>

  <div class="col-md-3">
    <label class="form-label" for="estado">Estado</label class="form-label">
      <input class="form-control" type="text" name="estado" value="{{ $aluno->estado }}">
  </div>

  <div class="col-md-4">
    <label class="form-label" for="cep">CEP</label  class="form-label">
    <input class="form-control" type="text" name="cep" value="{{ $aluno->cep }}">
  </div>

  <div class="col-12">
  <button class="btn btn-warning" type="submit">Atualizar</button>
</div>
</form>
@endsection