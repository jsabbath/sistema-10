<!DOCTYPE html>
    <html>
        <head>
            <title>Tienda</title>
            {{HTML::style('css/bootstrap.min.css')}}
            {{HTML::style('css/jumbotron-narrow.css')}}
        </head>
    <body>

    <div class="container">
        <div class="header">

            <ul class="nav nav-pills pull-right">
                <li>{{HTML::link('/', 'Inicio')}}</li>
                <li>{{HTML::link('vendedor', 'Vendedores')}}</li>
                <li>{{HTML::link('producto', 'Productos')}}</li>
            </ul>

            <h3 class="text-muted">Tienda</h3>
        </div>

        @yield('contenido')

        <div class="footer">
            <p>&copy; Codehero 2014. Todos los derechos reservados</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>}
    {{HTML::script('js/bootstrap.min.js')}}
    </body>
    </html>