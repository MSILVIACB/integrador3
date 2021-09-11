<h2> Esta é a página de contato </h2>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"crossorigin="anonymous">
        <link rel= "stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
        </head>
        <body >
        <header>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">
                <img src="/img/logo/Dynamic00.png" alt="Logotipo" class="w-25 rounded-2">
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


       <div class="row mt-2">
        <div class="col-12 col-md-6">
     <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-warning">Submit</button>
      </form>
        </div>
      <div class="col-12 col-md-6">
        <img src="/img/machines5.jpg" class="w-100 mt-2" height="280" alt="Imagem Exemplo">
        </div>
       </div>
       <br>
      <br>
    <div class="container-fluid">
        <p class="mt-8 text-base text-center ">
            © 2021 DynamicCompany, Inc. Todos os direitos reservados.</p>
       </div>
    </body>
</html>
