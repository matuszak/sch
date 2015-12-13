<html>
    <head>
        <title>Library | Sys </title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        @section('sidebar')
        <ul class="nav nav-pills nav-justified">
            <li role="presentation" class="active">{!! HTML::link('biblioteca', 'HOME') !!}</li>
            <li role="presentation">{!! HTML::link('biblioteca/generos', 'GÊNEROS') !!}</li>
            <li role="presentation">{!! HTML::link('biblioteca/series', 'SÉRIES E COLEÇÕES') !!}</li>
            <li role="presentation">{!! HTML::link('biblioteca/editoras', 'EDITORAS') !!}</li>
            <li role="presentation">{!! HTML::link('biblioteca/funcionarios', 'FUNCIONÁRIOS') !!}</li>
 
        </ul>
        @show

        <div class="container">
        @section('content')
        @show
        </div>

        @section('footer')
        @show
    </body>
</html>