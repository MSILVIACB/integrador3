@extends ('layouts.main')

@section ('content')
<header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-4 px-lg-5">
          <a class="navbar-brand" href="#!">
            <img src="/img/logo/Dynamic01.png" alt="Logotipo" class="w-25 rounded-2">
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
<br>
       <div class="container-fluid text-center">
        <img src="/img/banners/banner6.jpg" class="img-fluid d-block w-100" alt="Banner">
      <p><h1>WORK YOUR BODY</h1></p>
    </div>
    <br>

  <div class="container-fluid">
    <select class="form-select form-select-lg mb-3" aria-label=" ">
        <option selected>Selecione as modalidades</option>
        <option value="1">Musculação Feminina & Masculina</option>
        <option value="2">Zumba</option>
        <option value="3">Dynamic Combat</option>
        <option value="4">Pilates</option>
        <option value="5">Dynamic Jump</option>
        <option value="6">Yoga</option>
        <option value="7">Ritmos</option>
        <option value="8">Dynamic Boxe</option>
        <option value="9">Ballet</option>
     </select>
  </div>


  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">

        <div class="card-body text-white bg-dark " style="max-width: 26rem;">
        <h2 class="card-title">Plano Estudantil</h2>
        <p class="card-text"><h4>Plano para estudantes com débito mensal recorrente direto no cartão de crédito com
            permanência mínima de 12 meses. Disponível também por boleto bancário.</h4></p>
        <button type="button" class="btn btn-warning"><h2>R$ 149,00</h2></button>
        </div></div>

        <div class="col mb-5">
        <div class="card-body text-white bg-dark" style="max-width: 26rem;">
        <h2 class="card-title">Plano Recorrente</h2>
        <p class="card-text"><h4>Plano fidelidade com débito mensal recorrente direto no cartão de crédito com permanência
             mínima de 12 meses. Disponível também por boleto bancário.</h4></p>
        <button type="button" class="btn btn-warning "><h2>R$ 289,00</h2></button>
        </div></div>

        <div class="col mb-5">
        <div class="card-body text-white bg-dark " style="max-width: 26rem;">
        <h2 class="card-title">Plano Completo</h2>
        <p class="card-text"><h4>Plano completo com débito mensal recorrente direto no cartão de crédito com permanência
             mínima de 12 meses. Disponível também por boleto bancário.</h4></p>
        <button type="button" class="btn btn-warning"><h2>R$ 349,00</h2></button>
        </div>
    </div>
  </div>
</div>

</section>
</header>
@endsection
