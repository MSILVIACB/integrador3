@extends ('layouts.main')

@section ('content')

<body>

       <div class="row mt-2">
        <div class="col-12 col-md-6">
       <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email </label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Nunca compartilharemos seu email.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Senha</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
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
       <br>
      <br>
        </header>
        </body>

      @endsection
