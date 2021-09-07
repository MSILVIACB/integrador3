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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid ">
            <div class="collapse navbar-collapse"
            id="navbarSupportedContent">
            <a class="navbar-link active"
            aria-current="page"
            href="#">
            <img src="/img/logodynamicfit/Dynamic001.png"
            class="d-block w-120 "
            alt="...">
            <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button></a>
            </div>
            <ul class="nav justify-content-end " >
                <div class="btn-group">
                    <a href="#" class="btn btn-warning active" aria-current="page">Planos</a>
                    <a href="#" class="btn btn-warning">Cadastro</a>
                    <a href="#" class="btn btn-warning">Contato</a>
                  </div>
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
