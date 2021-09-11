<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"crossorigin="anonymous">
        <link rel="stylesheet" href="/css/styles.css">
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
                <ul class="navbar-nav d-flex justify-content-between ">
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
        </header>

       <div class="container-fluid">
        <img src="/img/banners/bodycombat.jpg" class="img-fluid d-block w-100" alt="Banner">
      <h1>WORK YOUR BODY</h1></p>
    </div></div>
    <br>
  <div class="container-fluid">
  <select class="form-select form-select-lg mb-3" aria-label=" ">
        <option selected>Selecione as modalidades</option>
        <option value="1">Musculação Feminina</option>
        <option value="2">Zumba</option>
        <option value="3">Dynamic Combat</option>
        <option value="4">Pilates</option>
        <option value="5">Dynamic Jump</option>
        <option value="6">Yoga</option>
        <option value="7">Ritmos</option>
        <option value="8">Musculação Masculina</option>
        <option value="9">Ballet</option>

      </select>
</div>
<br>


<br>
</body>
</html>
