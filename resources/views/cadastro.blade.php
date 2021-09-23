@extends ('layouts.main')

@section ('content')
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-4 px-lg-5">
          <a class="navbar-brand" href="#!">
            <img src="/img/logo/Dynamic01.png" alt="Logotipo" class="w-25 rounded-2">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav d-flex justify-content-between">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#"><h3>Planos</h3></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><h3>Cadastro</h3></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><h3>Contato</h3></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

       <div class="container-fluid">
        <img src="/img/banners/banner0.jpg" class="img-fluid d-block w-100" alt="Banner">
      <h1>Cadastro do Aluno</h1></p>

    <br>

    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Nome</label>
          <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
          <div class="valid-feedback">
            Perfeito!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Sobrenome</label>
          <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
          <div class="valid-feedback">
            Perfeito!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label">Nome de usuário</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Por favor, digite um nome de usuário.
            </div>
          </div>
        </div>

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Senha</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>

        <div class="col-md-5">
          <label for="validationCustom03" class="form-label">Cidade</label>
          <input type="text" class="form-control" id="validationCustom03" required>
          <div class="invalid-feedback">
            Por favor, digite um nome de cidade válido.
          </div>
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
          <div class="invalid-feedback">
            Por favor, digite um nome de estado válido.
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom05" class="form-label">CEP</label>
          <input type="text" class="form-control" id="validationCustom05" required>
          <div class="invalid-feedback">
            Por favor, digite um CEP válido.
          </div>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Por favor, concorde com os termos e condições.
            </label>
            <div class="invalid-feedback">
              Por favor, concorde antes de enviar os dados.
            </div>
          </div>
        </div>

        <div class="col-12">
          <button class="btn btn-warning" type="submit">Envie os dados</button>
        </div>
      </form>
    <br>
   <br>
 @endsection
