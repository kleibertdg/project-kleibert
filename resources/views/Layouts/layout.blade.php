<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>Inicio - MaaS</title>
            <link rel="stylesheet" href= "/resources/css/app.css" />

        </head>
        <body>
        <header>
            <a href="">
                <h2 class="name-company">InformaticsGuards SpA</h2>
            </a>
            <nav>
                <a href="" class="nav.link">Inicia sesión</a>
                <a href="" class="nav.link">Regístrate</a>
            </nav>
        </header>

         @yield('content') → @section('content')
                @endsection;


        <footer>
            <div class="footer-content">
                <h4>Síguenos</h4>
                <p>Propiedad de: <br> InformaticsGuards SpA</p>
            </div>
        </footer>

        </body>

    </html>
