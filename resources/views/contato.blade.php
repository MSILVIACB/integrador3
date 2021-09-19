@extends ('layouts.main')

@section ('content')

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
