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
              <ul class="navbar-nav d-flex justify-content-between">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#">Planos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Cadastros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contato</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/img/banners/banner0.jpg" class="img-fluid d-block w-100" alt="Banner">
            </div>
            <div class="carousel-item">
              <img src="/img/banners/banner1.jpg" class="img-fluid d-block w-100" alt="Banner">
            </div>
            <div class="carousel-item">
              <img src="/img/banners/banner2.jpg" class="img-fluid d-block w-100" alt="Banner">
            </div>
            <div class="carousel-item">
                <img src="/img/banners/banner3.jpg" class="img-fluid d-block w-100" alt="Banner">
            </div>
            <div class="carousel-item">
              <img src="/img/banners/banner4.jpg" class="img-fluid d-block w-100" alt="Banner">
            </div>
          </div>
        </div>
      <br>

      <div class="row justify-content-center" >
    <h1>"Escolha sua Modalidade preferida"</h1>
      </div>
          <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-12 col-med-6 col-lg-4"> <div class="card card-center" style="width: 18rem;">
                      <img src="/img/woman3.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Musculação Feminina</h5>
                        <p class="card-text">Some quick example text to build on the card
                              title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-warning">Selecione</a>
                      </div>
                    </div>
                    </div>
                    <div class="col-12 col-med-6 col-lg-4"> <div class="card card-center" style="width: 18rem;">
                      <img src="/img/zumba4.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Zumba</h5>
                        <p class="card-text">Some quick example text to build on the card
                              title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-warning">Selecione</a>
                      </div>
                    </div> </div>
                    <div class="col-12 col-med-6 col-lg-4"> <div class="card card-center" style="width: 18rem;">
                      <img src="/img/ginástica/girl5.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Ballet</h5>
                        <p class="card-text">Some quick example text to build on the card
                              title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-warning">Selecione</a>
                      </div>
                    </div> </div>

                    <p>
                        <div class="col-12 col-med-6 col-lg-4"> <div class="card card-center" style="width: 18rem;">
                        <img src="/img/cards/boxer.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Dynamic Boxe</h5>
                          <p class="card-text">Some quick example text to build on the card
                              title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-warning">Selecione</a>
                        </div>
                      </div> </div>
                      <div class="col-12 col-med-6 col-lg-4"> <div class="card card-center" style="width: 18rem;">
                        <img src="/img/cards/pilates.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Pilates</h5>
                          <p class="card-text">Some quick example text to build on the card
                              title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn btn-warning">Selecione</a>
                        </div>
                      </div>
                      </div>
                      <div class="col-12 col-med-6 col-lg-4"> <div class="card card-center" style="width: 18rem;">
                        <img src="/img/cards/jump.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Dynamic Jump</h5>
                          <p class="card-text">Some quick example text to build on the card
                                title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-warning">Selecione</a>
                        </div>
                        </div>
                      </div>
                    <p>
                      <div class="col-12 col-med-6 col-lg-4"> <div class="card card-center" style="width: 18rem;">
                        <img src="/img/yoga2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Yoga</h5>
                          <p class="card-text">Some quick example text to build on the card
                                title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-warning">Selecione</a>
                        </div>
                      </div> </div>

                      <div class="col-12 col-med-6 col-lg-4"> <div class="card card-center" style="width: 18rem;">
                        <img src="/img/ritmos.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Ritmos</h5>
                          <p class="card-text">Some quick example text to build on the card
                              title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-warning">Selecione</a>
                        </div>
                      </div> </div>
                      <div class="col-12 col-med-6 col-lg-4"> <div class="card card-center" style="width: 18rem;">
                        <img src="/img/man3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Musculação Masculina</h5>
                          <p class="card-text">Some quick example text to build on the card
                                title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-warning">Selecione</a>
                        </div>
                      </div>
                    </div>
                    <p>
                      <div class="col-12 col-med-6 col-lg-4"> <div class="card card-center" style="width: 18rem;">
                          <img src="/img/saude1.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Alimentação Fit</h5>
                            <p class="card-text">Some quick example text to build on the card
                                title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-warning">Selecione</a>
                          </div>
                        </div>
                        </div>
                  </div>
                <br>
                <br>
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

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
          crossorigin="anonymous">

      </script>
    </body>
</html>
