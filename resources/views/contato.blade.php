@extends ('layouts.main')
@section ('content')

<div class="container-fluid">
  <div class="row mt-4">
    <div class="col-12 col-md-6">
      <form action="{( route('aluno.store' )}" method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label class="form-label" for="message"></label>
          <textarea class="form-control" id="message" type="text" placeholder="Sua mensagem" style="height: 10rem;" data-sb-validations="required"></textarea>
          <div class="invalid-feedback" data-sb-feedback="message:required">
            <span>Digite sua mensagem antes de enviar.</span>
          </div>
        </div>
        <button type="submit" class="btn btn-warning" style="width: 7rem;">Enviar</button>
      </form>
    </div>
    <div class="col-12 col-md-6">
      <img src="/img/haltere5.jpg" class="w-100 mt-4 rounded"  alt="Imagem Exemplo">
    </div>
  </div>
</div>

@endsection