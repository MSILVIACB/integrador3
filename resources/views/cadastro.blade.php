@extends ('layouts.main')
@section ('content')

<div class="container-fluid text-center">
  <img src="/img/banners/banner0.jpg" class="img-fluid d-block w-100" alt="Banner">
  <h1 class="mt-3">Cadastro do Aluno</h1>
</div>

<form class="container row g-3 mx-auto"
  action="{{ route('aluno.store') }}" method="post">
  @csrf
  <div class="col-md-8">
    <label class="form-label" for="nome">Nome completo</label class="form-label">
    <input class="form-control" type="text" name="nome">
  </div>

  <div class="col-md-4">
    <label  class="form-label" for="usuario">Nome de usuário</label class="form-label">
    <input class="form-control" type="text" name="usuario">
  </div>

  <div class="col-md-6">
    <label class="form-label" for="email">E-mail</label class="form-label">
    <input class="form-control" type="email" name="email">
  </div>

  <div class="col-md-6">
    <label class="form-label" for="senha">Senha</label class="form-label">
    <input class="form-control" type="password" name="senha">
  </div>

  <div class="col-md-5">
    <label class="form-label" for="cidade">Cidade</label class="form-label">
    <input class="form-control" type="text" name="cidade">
  </div>

  <div class="col-md-3">
    <label class="form-label" for="estado">Estado</label class="form-label">
      <input class="form-control" type="text" name="estado">
  </div>

  <div class="col-md-4">
    <label class="form-label" for="cep">CEP</label  class="form-label">
    <input class="form-control" type="text" name="cep">
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
      <label class="form-check-label" for="invalidCheck">Por favor, concorde com os <a href="/termos-e-condicoes" target="_blank">termos e condições.</a></label>
      <div class="invalid-feedback">
        <span>Por favor, concorde antes de enviar os dados.</span>
      </div>
    </div>
  </div>

  <div class="col-12">
    <button class="btn btn-warning" type="submit">Enviar dados</button>
  </div>
</form>

@endsection