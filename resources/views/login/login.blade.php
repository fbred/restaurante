<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body>
<div class="page-wrapper flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-4">
                    <div class="card-header text-center text-uppercase h4 font-weight-light">
                        Login

                    </div>

                    <form method="post" action="../../Controler/acao_logar.php">

                        <div class="card-body py-5">
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="email" class="form-control" name="email" >
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Senha</label>
                                <input type="password" class="form-control"  name="senha">
                            </div>

                            <div><a href="/#">Não Sou Cadastrado</a></div>
                        </div>


                        <div class="card-footer">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary px-5">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-6">
                        <a href="#" class="btn btn-link">Esqueceu a senha?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/popper.js/popper.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/chart.js/chart.min.js')}}"></script>
<script src="{{asset('js/carbon.js')}}"></script>
<script src="{{asset('js/demo.js')}}"></script>
</body>
</html>
