<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="/js/scripts.js"></script>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid px-4 px-lg-6">
                    <a class="navbar-brand" href="/">
                        <img src="/img/logo/DynamicFit.svg" alt="Logotipo" class="w-50 rounded-2 img-fluid">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav d-flex justify-content-between">
                            <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/planos"><h3>Planos</h3></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/cadastro"><h3>Cadastro</h3></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/contato"><h3>Contato</h3></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/login"><h3>Login</h3></a>
                                </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        @yield('content')

        <footer class="w-100 py-3 bg-dark d-flex justify-content-center flex-column">
            <p class="m-0 text-center text-white">Copyright &copy; Dynamic Fit Website 2021</p>
            <div class="social-links text-center mt-2">
                <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white me-2"><i class="fab fa-whatsapp"></i></a>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>
