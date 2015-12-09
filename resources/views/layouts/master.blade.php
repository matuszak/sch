<html>
    <head>
        <title>Library - sch00lsys</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        @section('sidebar')
        <ul class="nav nav-pills nav-justified">
            <li role="presentation" class="active"><a href="">Home</a></li>
            <li role="presentation">{!! HTML::link('biblioteca/generos', 'GÊNEROS') !!}</li>
            <li role="presentation">{!! HTML::link('biblioteca/series', 'SÉRIES E COLEÇÕES') !!}</li>
            <li role="presentation">{!! HTML::link('biblioteca/editoras', 'EDITORAS') !!}</li>
            <li role="presentation"><a href="#"></a></li>
            <li role="presentation"><a href="#"></a></li>
        </ul>
        @show

        <div class="container">
            @yield('content')
        </div>

        @section('footer')
        @show
    </body>
</html>