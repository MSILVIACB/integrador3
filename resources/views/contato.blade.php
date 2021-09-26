@extends ('layouts.main')

@section ('content')

<body>
  <div class="container-fluid">
    <div class="row mt-4">
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
          <div class="mb-3">
            <label class="form-label" for="message"></label>
            <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
            <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
          </div>
          <button type="submit" class="btn btn-warning" style="width: 7rem;">Enviar</button>
        </form>
      </div>
      <div class="col-12 col-md-6">
        <img src="/img/haltere5.jpg" class="w-100 mt-4"  alt="Imagem Exemplo">
      </div>
    </div>
  </div>
</body>
@endsection
