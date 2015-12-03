<html>
    <head>
        <title>SCHOOLSys @yield('SCHOOLSys')</title>
    </head>
    <body>
        @section('sidebar')
            Aplicação School system...
        @show

        <div class="container">
            @yield('content')
        </div>

        @section('footer')
            Developed by - Lailson Matuszak
        @show
    </body>
</html>