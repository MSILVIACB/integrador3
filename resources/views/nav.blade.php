@extends ('layouts.main')

@section ('title', 'Dynamic Fit')

@section ('content')



<nav class='navbar navbar-expand-lg navbar-light'>
    <div class="collapse navbar-collapse" id="navbar">
    <a href="/" class="navbar-brand">
        <img src="/img/logo/Dynamic01.png" alt="Dynamic">
    </a>
    <ul class= 'navbar-nav'>
        <li class="nav-item">
            <a href="/"class="nav-link">Modalidades</a>
        </li>
        <ul class= 'navbar-nav'>
            <li class="nav-item">
                <a href="/"class="nav-link">Planos</a>
            </li>
            <ul class= 'navbar-nav'>
                <li class="nav-item">
                    <a href="/"class="nav-link">Contato</a>
                </li>
                <ul class= 'navbar-nav'>
                    <li class="nav-item">
                        <a href="/"class="nav-link">Login</a>
                    </li>
                </ul>
        </div>
</nav>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/banners/banner1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/img/banners/banner6.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/img/banners/banner7.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div>
@endsection