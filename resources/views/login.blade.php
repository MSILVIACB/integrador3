@extends ('layouts.main')

@section ('content')

<body>
<br>
    <div class="bg-dark py-3">
        <div class="container px-4 px-lg-5 my-5">
          <div class="text-center text-white">
            <h2 class="display-4 fw-bolder">"Dica Dynamic"</h2>
            <p class="lead fw-normal text-white-50 mb-0"><h3>' Estar de bem com o corpo, mente e humor é imprecindível para que o nosso dia a dia fique mais leve.'</h3></p>
          </div>
        </div>
      </div>
    </div>

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
