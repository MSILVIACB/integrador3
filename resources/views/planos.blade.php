@extends ('layouts.main')

@section ('content')
<body>

  <div class="container-fluid">
    <img src="/img/lets2.jpg" class="img-fluid d-block w-100" alt="Banner">
    <h1>WORK YOUR BODY</h1>
  </div>
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
  <div class="card-group">
    <div class="card">
        <h1>Dynamic Student</h1>
        <div class="card text-white bg-dark mb-3" style="max-width: 24rem;">
        <h2 class="card-title">Plano Estudantil</h2>
        <p class="card-text"><h3>Plano para estudantes com débito mensal recorrente direto no cartão de crédito com permanência mínima de 12 meses. Disponível também por boleto bancário.</h3></p>
      </div>
      <button type="button" class="btn btn-warning"><h2>R$ 149,00</h2></button>
    </div>
    <div class="card">
      <h1>Dynamic Fidelidade </h1>
      <div class="card text-white bg-dark  mb-3" style="max-width: 24rem;">
        <h2 class="card-title">Plano Recorrente</h2>
        <p class="card-text"><h3>Plano fidelidade com débito mensal recorrente direto no cartão de crédito com permanência mínima de 12 meses. Disponível também por boleto bancário.</h3></p>
      </div>
      <button type="button" class="btn btn-warning"><h2>R$ 290,00</h2></button>
    </div>
    <div class="card">
      <h1>Dynamic Platinum</h1>
      <div class="card text-white bg-dark mb-3" style="max-width: 24rem;">
        <h2 class="card-title">Plano Completo</h2>
        <p class="card-text"><h3>Plano completo com débito mensal recorrente direto no cartão de crédito com permanência mínima de 12 meses. Disponível também por boleto bancário.</h3></p>
      </div>
      <button type="button" class="btn btn-warning"><h2>R$ 349,00</h2></button>
    </div>
  </div>
</body>

@endsection
