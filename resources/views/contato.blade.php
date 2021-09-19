@extends ('layouts.main')

@section ('content')

<body >
    <header>
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
                <a class="nav-link" aria-current="page" href="#"><h2>Planos</h2></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><h2>Cadastro</h2></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><h2>Contato</h2></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
          <br>

          <div class="container-fluid">
            <div class="row mt-2">
              <div class="col-12 col-md-6">
       <form>
        <div class="mb-4">
          <label for="exampleInputEmail1" class="form-label">Email </label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Nunca compartilharemos seu email.</div>
        </div>
        <div class="mb-4">
          <label for="exampleInputPassword1" class="form-label">Senha</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-4 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Confirmar</label>
        </div>
        <button type="submit" class="btn btn-warning">Enviar</button>
      </form>
        </div>
      <div class="col-12 col-md-6">
        <img src="/img/haltere5.jpg" class="w-100 mt-2" height="280" alt="Imagem Exemplo">
        </div>
       </div>
          </div>
       <br>
      <br>
        </header>
        </body>

      @endsection
=======
<body>
  <div class="row mt-3 m-3 d-flex align-items-center">
    <div class="col-12 col-md-6">
      <form>
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="email" class="form-control" id="nome" aria-describedby="nome">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Nunca compartilharemos seu email.</div>
        </div>
        <div class="form-group mb-3">
          <label for="textarea">Sua mensagem</label>
          <textarea class="form-control" id="textarea" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-warning">Enviar</button>
      </form>
    </div>
    <div class="col-12 col-md-6">
      <img src="/img/haltere5.jpg" class="img-fluid rounded" height="280" alt="Imagem Exemplo">
    </div>
  </div>
</body>
@endsection
>>>>>>> 1d5aa61bbb439155c4e7f3d5ffe5e387e965dc91
