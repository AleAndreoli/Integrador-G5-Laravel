<header>
<nav class="navbar navbar-expand-lg navbar-light navbar-top py-0">
  <div class="container-fluid">
      <a class="navbar-brand" href="/index">
       <img src="/img/logotipos/GreenValleyDer.png" alt="">
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/index">Home</a>
            </li>
            @if(Auth::id())
              <li class="nav-item">
                <a class="nav-link" href="user-account.php">Cuenta<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                  Cerrar Sesion</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
              </li>
            @else
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Iniciar Sesion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/register">Registrarse</a>
              </li>
            @endif

              <li class="nav-item"> {{-- Agregar ruta FAQ  --}}
                <a class="nav-link" href="/faq  ">Preguntas Frecuentes</a>
              </li>
          </ul>
        </div>
      </div>
  </nav>
</header>
