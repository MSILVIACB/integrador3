@extends ('layouts.main')

@section ('content')

    <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand d-none d-sm-md-block d-lg-block d-xl-block" href="/" id="logo">
            <img src="/img/logo/Dynamic00.png" alt="Logotipo" class="w-25 rounded-2">
          </a>
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav d-flex justify-content-between ">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#">Planos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Cadastro</a>
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

      <div class="row text-center mt-3">
        <h1>"Escolha sua Modalidade preferida"</h1>
      </div>
          <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-12 col-med-6 col-lg-4">
                      <div class="card card-center" style="width: 18rem;">
                        <img src="/img/woman3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Musculação Feminina</h5>
                          <p class="card-text">Melhora o condicionamento cardiorrespiratório, diminui a quantidade de gordura e auxilia no emagrecimento.</p>
                          <a href="#" class="btn btn-warning">Selecione</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-med-6 col-lg-4">
                      <div class="card card-center" style="width: 18rem;">
                        <img src="/img/zumba4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Zumba</h5>
                          <p class="card-text">Aula de fitness-dança que incorpora música latina e internacional, juntamente com passos de dança combinando ritmos rápidos e lentos.</p>
                          <a href="#" class="btn btn-warning">Selecione</a>
                        </div>
                    </div>
                   </div>

                    <div class="col-12 col-med-6 col-lg-4"> <div class="card card-center" style="width: 18rem;">
                      <img src="/img/ginástica/girl5.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Ballet</h5>
                        <p class="card-text">Auxilia no autoconhecimento. Beneficia a Elasticidade, Postura, Equilíbrio, Respiração, Emagrecimento e Definição muscular.</p>
                        <a href="#" class="btn btn-warning">Selecione</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-med-6 col-lg-4">
                    <div class="card card-center" style="width: 18rem;">
                      <img src="/img/cards/boxer.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Dynamic Combat</h5>
                        <p class="card-text">Programa baseado nos mais diversos estilos de Artes Marciais como: Boxe, Karatê,Muay Thai, Jiu Jitsu, Capoeira e Kick Boxing.
                            Desenvolve o condicionamento físico.
                        </p>
                        <a href="#" class="btn btn-warning">Selecione</a>
                      </div>
                    </div>
                  </div>
                      <div class="col-12 col-med-6 col-lg-4"> <div class="card card-center" style="width: 18rem;">
                        <img src="/img/cards/pilates.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Pilates</h5>
                          <p class="card-text">A Aula mescla exercícios de flexibilidade e força a partir do trabalho da musculatura envolvendo nosso centro de gravidade e equilíbrio..</p>
                          <a href="#" class="btn btn btn-warning">Selecione</a>
                        </div>
                      </div>
                      </div>
                      <div class="col-12 col-med-6 col-lg-4"> <div class="card card-center" style="width: 18rem;">
                        <img src="/img/cards/jump.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Dynamic Jump</h5>
                          <p class="card-text">Aula com mini-trampolim e a combinação entre músicas e movimentos através de coreografias. Proporcionam o trabalho cardio, equilíbrio e diversão.</p>
                          <a href="#" class="btn btn-warning">Selecione</a>
                        </div>
                        </div>
                      </div>

                      <div class="col-12 col-med-6 col-lg-4"> <div class="card card-center" style="width: 18rem;">
                        <img src="/img/yoga2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Yoga</h5>
                          <p class="card-text">Prática milenar com benefícios físicos e mentais. Proporciona redução do estresse, alívio da ansiedade, melhora da concentração, força, flexibilidade e gasto calórico</p>
                          <a href="#" class="btn btn-warning">Selecione</a>
                        </div>
                      </div>
                     </div>

                     <div class="col-12 col-med-6 col-lg-4"> <div class="card card-center" style="width: 18rem;">
                        <img src="/img/ritmos.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Ritmos</h5>
                          <p class="card-text">Aulas de dança fitness ao som de vários estilos musicais com coreografias criadas pelo professor da aula.
                              Trabalha a coordenação, reduzo estresse e a ansiedade.</p>
                            <a href="#" class="btn btn-warning">Selecione</a>
                        </div>
                      </div> </div>
                      <div class="col-12 col-med-6 col-lg-4"> <div class="card card-center" style="width: 18rem;">
                        <img src="/img/man3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Musculação Masculina</h5>
                          <p class="card-text">Melhora a postura , diminui a quantidade de gordura, tonifica os músculos,
                               aumenta a densidade óssea e melhora o condicionamento cardiorrespiratório.</p>
                          <a href="#" class="btn btn-warning">Selecione</a>
                        </div>
                      </div>
                    </div>
                  </div>

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
          </div>
                @endsection
