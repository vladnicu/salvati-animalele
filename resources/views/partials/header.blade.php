<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ Vite::asset('resources/images/logo.jpg') }}" alt="Logo" alt="Logo" width="30"
                height="24" class="d-inline-block align-text-top">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/sponsor">Sponsorizează un câine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/visit">Vizitează adăpostul</a>
                <li class="nav-item">
                    <a class="nav-link" href="/adopt">Adoptă</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Cum poți ajuta
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/donate">Donează</a></li>
                        <li><a class="dropdown-item" href="/foster">Foster - găzduire temporară pentru câini</a></li>
                        <li><a class="dropdown-item" href="#">Formular 230</a></li>
                        <li><a class="dropdown-item" href="#">Proiectele noastre</a></li>
                        <li><a class="dropdown-item" href="#">Devino Voluntar</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">Despre noi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
            <form class="d-flex"">
                <a class="btn btn-danger" href="donate">Donează pentru ei </a>
            </form>
        </div>
    </div>
</nav>
