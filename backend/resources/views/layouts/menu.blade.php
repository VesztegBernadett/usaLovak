<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">Menü</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        @if(request()->routeIs('home'))
        <li class="nav-item">
          <a class="nav-link active" href="{{route('home')}}">Főoldal</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}">Főoldal</a>
        </li>
        @endif

        @if(request()->routeIs('horse.list'))
        <li class="nav-item">
          <a class="nav-link active" href="{{route('horse.list')}}">Felsorolás</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('horse.list')}}">Felsorolás</a>
        </li>
        @endif

        @if(request()->routeIs('horse.table'))
        <li class="nav-item">
          <a class="nav-link active" href="{{route('horse.table')}}">Táblázat</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('horse.table')}}">Táblázat</a>
        </li>
        @endif

        @if(request()->routeIs('horse.grid'))
        <li class="nav-item">
          <a class="nav-link active" href="{{route('horse.grid')}}">Bootstrap GRID</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('horse.grid')}}">Bootstrap GRID</a>
        </li>
        @endif
    
      </ul>
    </div>
  </div>
</nav>