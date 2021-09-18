@extends ('layouts.main')

@section ('content')

<body>
  <div class="container-fluid">
    <img src="/img/banners/banner2.jpg" class="img-fluid d-block w-100" alt="Banner">
    <h1 class="text-center mt-3">Cadastro do Aluno</h1>
  </div>
  <form class="row g-3 needs-validation m-3" novalidate>
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Nome</label>
      <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
      <div class="valid-feedback">Perfeito!</div>
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Sobrenome</label>
      <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
      <div class="valid-feedback">Perfeito!</div>
    </div>
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label">Nome de usuário</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Por favor, digite um nome de usuário.</div>
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustom03" class="form-label">Cidade</label>
      <input type="text" class="form-control" id="validationCustom03" required>
      <div class="invalid-feedback">Por favor, digite um nome de cidade válido.</div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom04" class="form-label">Estado</label>
      <select class="form-select" id="validationCustom04" required>
        <option selected disabled value="">Escolha...</option>
        <option>SP</option>
        <option>MG</option>
        <option>RJ</option>
        <option>Outro</option>
        </select>
      <div class="invalid-feedback">Por favor, digite um nome de estado válido.</div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">CEP</label>
      <input type="text" class="form-control" id="validationCustom05" required>
      <div class="invalid-feedback">Por favor, digite um CEP válido.</div>
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">Por favor, concorde com os termos e condições.</label>
        <div class="invalid-feedback">Por favor, concorde antes de enviar os dados.</div>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Envie os dados</button>
    </div>
  </form>
</body>

    @endsection
