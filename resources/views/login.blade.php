@extends ('layouts.main')

@section ('content')

<body>
<div class="container-fluid">
    <div class="row mt-4">
      <div class="col-12 col-md-8">
        <form>
          <div class="col-auto w-auto col-12 col-md-6 mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3 col-auto w-auto">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <button type="submit" class="btn btn-warning mb-2">Login</button>
        </form>
      </div>
      <div class="col-12 col-md-4 d-none d-sm-block">
        <img src="/img/workout.jpg" class="w-100 rounded" height="300" alt="Imagem Exemplo">
      </div>
    </div>
  </div>
</body>
  @endsection
