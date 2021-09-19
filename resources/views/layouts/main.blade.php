<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded-bottom">
              <div class="container px-4 px-lg-5">
                <a class="navbar-brand d-none d-lg-block" href="/">
                  <img src="/img/logo/Dynamic00.png" alt="Logotipo" class="w-25 rounded-2">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav d-flex justify-content-between">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="/planos"><h2>Planos</h2></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/cadastro"><h2>Cadastro</h2></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/contato"><h2>Contato</h2></a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </header>
          
          @yield('content')

            <footer class="py-3 bg-dark rounded-top">
                <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Dynamic Fit Website 2021</p></div>
            </footer>
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
    </body>
</html>
