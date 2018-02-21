<header class="blog-header py-3">
  <div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4 pt-1">
      <a class="text-muted" href="{{route('register')}}">S'inscrire</a>
    </div>
    <div class="col-4 text-center">
      <a class="blog-header-logo text-dark" href="{{ route('index') }}">Schoda</a>
    </div>
    <div class="col-4 d-flex justify-content-end align-items-center">
      <a class="btn btn-sm btn-outline-secondary" href="{{route('login')}}"> Se connecter</a>
    </div>
  </div>
</header>

<div class="nav-scroller py-1 mb-2" id="myMenu">
  <nav class="nav d-flex justify-content-between">
    <a class="p-2 text-muted" href="{{ route('index') }}">Acceuil</a>
    <a class="p-2 text-muted" href="#">A propos</a>
    <a class="p-2 text-muted" href="#">Gallerie</a>
    <a class="p-2 text-muted" href="#">Archives</a>
    <a class="p-2 text-muted" href="#">Contactez-nous</a>
    <a class="p-2 text-muted" href="#">Supportez-nous</a>
  </nav>
</div>
