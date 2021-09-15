@extends ('layouts.main')

@section ('content')

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
        <img src="/img/bodycombat.jpg" class="img-fluid d-block w-100" alt="Banner">
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
<div class="card-group">
    <div class="card">
        <h1>Dynamic Student</h1>
        <div class="card text-white bg-dark mb-3" style="max-width: 24rem;">
        <h2 class="card-title">Plano Estudantil</h2>
        <p class="card-text"><h3>Plano para estudantes com débito mensal recorrente direto
             no cartão de crédito com permanência mínima de 12 meses. Disponível também por boleto bancário.</h3></p>
      </div>
      <button type="button" class="btn btn-warning"><h2>R$ 149,00</h2></button>
>   </div>

    <div class="card">
        <h1>Dynamic Fidelidade </h1>
        <div class="card text-white bg-dark  mb-3" style="max-width: 24rem;">
        <h2 class="card-title">Plano Recorrente</h2>
        <p class="card-text"><h3>Plano fidelidade com débito mensal recorrente direto
            no cartão de crédito com permanência mínima de 12 meses. Disponível também por boleto bancário.</h3></p>
              </div>
      <button type="button" class="btn btn-warning"><h2>R$ 290,00</h2></button>
    </div>

    <div class="card">
        <h1>Dynamic Platinum</h1>
        <div class="card text-white bg-dark mb-3" style="max-width: 24rem;">
        <h2 class="card-title">Plano Completo</h2>
        <p class="card-text"><h3>Plano completo com débito mensal recorrente direto
            no cartão de crédito com permanência mínima de 12 meses. Disponível também por boleto bancário.</h3></p>
      </div>
      <button type="button" class="btn btn-warning"><h2>R$ 349,00</h2></button>
    </div>
   </div>
  </body>

@endsection
