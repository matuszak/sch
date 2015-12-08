<html>
    <head>
        <title>Library - sch00lsys</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        @section('sidebar')
        @show

        <div class="container">
            @yield('content')
        </div>

        @section('footer')
        @show
    </body>
</html>