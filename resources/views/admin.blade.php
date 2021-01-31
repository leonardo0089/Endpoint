<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/front-css/inicial.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard</title>
</head>
<body>
    <div class="container-conteudo-admin">
        <div class="side-navs">
            <div class="header-da-nav">
                <h5>Treinamento</h5>
            </div>
            <div class="body-da-nav">
                <div class="links-das-nav">
                    <ul>
                        <li><a href="{{route('admin.list.products')}}"><i class="fa fa-list-alt"></i> Listar Itens</a></li>
                        <li><a href=""><i class="fa fa-id-badge"></i> Listar Usuarios</a></li>
                        <li><a href=""><i class="fa fa-database"></i> Mudar Dados</a></li>
                        <li><a href=""><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="conteudos">
            @yield('contents')
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="{{asset('js/functions.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>
