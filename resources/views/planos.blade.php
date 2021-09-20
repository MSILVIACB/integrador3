@extends ('layouts.main')

@section ('content')
<body>
    <div class="container-fluid text-center">
      <img src="/img/banners/banner7.jpg" class="img-fluid d-block w-100" alt="Banner">
      <h1>WORK YOUR BODY</h1>
    </div>
    
    <div class="bg-dark py-3">
        <div class="container px-4 px-lg-5 my-5">
          <div class="text-center text-white">
            <h2 class="display-4 fw-bolder">"Dica Dynamic"</h2>
            <p class="lead fw-normal text-white-50 mb-0"><h3>'Com o auxílio de um professor para acompanhar sua evolução, em 45 dias já se alcança resultados satisfatórios.'</h3></p>
          </div>
        </div>
    </div>

  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center d-flex align-items-strech flex-wrap">
        <div class="col mb-5">
          <div class="card-body text-white bg-dark d-flex align-items-strech flex-wrap" style="max-width: 26rem;">
            <h2 class="card-title">Plano Estudantil</h2>
            <p class="card-text">Plano para estudantes com débito mensal recorrente direto no cartão de crédito com permanência mínima de 12 meses. Disponível também por boleto bancário.</p>
            <h2>R$ 149,00</h2>
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent"><br>
                  <div class="text-left"><a class="btn btn-outline-warning mt-auto" href="#">Adicione</a></div>
              </div>
            </div>
          </div>

          <div class="col mb-5 d-flex align-items-strech flex-wrap">
            <div class="card-body text-white bg-dark d-flex align-items-strech flex-wrap" style="max-width: 26rem;">
              <h2 class="card-title">Plano Recorrente</h2>
              <p class="card-text">Plano fidelidade com débito mensal recorrente direto no cartão de crédito com permanência mínima de 12 meses. Disponível também por boleto bancário.</p>
              <h2>R$ 289,00</h2>
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent"><br>
                  <div class="text-left"><a class="btn btn-outline-warning mt-auto" href="#">Adicione</a></div>
              </div>
            </div>
          </div>

          <div class="col mb-5 d-flex align-items-strech flex-wrap">
            <div class="card-body text-white bg-dark d-flex align-items-strech flex-wrap" style="max-width: 26rem;">
              <h2 class="card-title">Plano Completo</h2>
              <p class="card-text">Plano completo com débito mensal recorrente direto no cartão de crédito com permanência mínima de 12 meses. Disponível também por boleto bancário.</p>
              <h2>R$ 349,00</h2>
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent"><br>
                  <div class="text-left"><a class="btn btn-outline-warning mt-auto" href="#">Adicione</a></div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="container-fluid">
      <select class="form-select form-select-lg mb-3" aria-label="">
          <option selected>Lista das modalidades</option>
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
  </section>
</body>
@endsection
