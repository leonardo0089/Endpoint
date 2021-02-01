<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/front-css/inicial.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">

    <title>Treinamento</title>
</head>
<body>
    <div class="container-inicial">
        @if (session('sucesso'))
        <div class="avisos">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('sucesso')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif
        @if ($errors->all())
            @foreach ($errors->all() as $e)
                <div class="avisos">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{$e}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endforeach
        @endif
        <div class="box-form-login">
            <div class="header-login">
                <div class="titulo-header">
                    <h3>Login</h3>
                </div>
                
            </div>
            <div class="body-login">
                <form class="needs-validation" novalidate method="POST" action="{{route('admin')}}" >
                    {!! csrf_field () !!}
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">E-mail: </label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Digite seu E-mail" required name="email">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Senha: </label>
                            <input type="password" class="form-control" id="validationCustom02" placeholder="Digite sua senha" required name="senha">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="espaco-btns">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                    <div class="links-assoc">
                        <h6>Não e cadastrado <a href="#" data-toggle="modal" data-target="#exampleModal" id="mod">Cadastre-se</a> GRATIS!</h6>
                    </div>
                </form>
            </div>
            <div class="footer-login">
                <!--Area Final-->
            </div>
        </div>
    </div>

    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastrar novo Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" novalidate action="{{route('inicio.cadastro')}}" method="POST">
                        {!! csrf_field () !!}
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Nome: </label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Digite seu nome" required name="nome">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">E-mail: </label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Digite seu e-mail" required name="email">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom02">Senha: </label>
                                <input type="password" class="form-control" id="validationCustom02" placeholder="Digite sua senha" required name="senha">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/functions.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>



</body>
</html>
