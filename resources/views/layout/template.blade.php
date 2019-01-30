<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carbon - Admin Template</title>
    <link rel="stylesheet" href="{{asset('vendor/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/fontawesome-all.min.css')}}">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body class="sidebar-fixed header-fixed">
<div class="page-wrapper">
    <nav class="navbar page-header">
        <a href="#" class="btn btn-link sidebar-mobile-toggle d-md-none mr-auto">
            <i class="fa fa-bars"></i>
        </a>

        <a class="navbar-brand" href="#">
            <img src="{{asset('imgs/logo.png')}}" alt="logo">
        </a>

        <a href="#" class="btn btn-link sidebar-toggle d-md-down-none">
            <i class="fa fa-bars"></i>
        </a>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item d-md-down-none">
                <a href="#">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-danger">5</span>
                </a>
            </li>

            <li class="nav-item d-md-down-none">
                <a href="#">
                    <i class="fa fa-envelope-open"></i>
                    <span class="badge badge-pill badge-danger">5</span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="./imgs/avatar-1.png" class="avatar avatar-sm" alt="logo">
                    <span class="small ml-1 d-md-down-none">John Smith</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header">Account</div>

                    <a href="#" class="dropdown-item">
                        <i class="fa fa-user"></i> Profile
                    </a>

                    <a href="#" class="dropdown-item">
                        <i class="fa fa-envelope"></i> Messages
                    </a>

                    <div class="dropdown-header">Settings</div>

                    <a href="#" class="dropdown-item">
                        <i class="fa fa-bell"></i> Notifications
                    </a>

                    <a href="#" class="dropdown-item">
                        <i class="fa fa-wrench"></i> Settings
                    </a>

                    <a href="{{ route('logout') }}" class="dropdown-item"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-lock"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>

    <div class="main-container">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-title">Navegação</li>

                    <li class="nav-item">
                        <a href="{{route('home')}}" class="nav-link">
                            <i class="icon icon-speedometer"></i> Home
                        </a>
                    </li>
                    <!--  ############## MESAS ##########-->
                    <li class="nav-item nav-dropdown">
                        <a href="#" class="nav-link nav-dropdown-toggle">
                            <i class="icon icon-target"></i> Messas <i class="fa fa-caret-left"></i>
                        </a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{route('home')}}" class="nav-link">
                                    <i class="icon icon-arrow-right"></i> Mesas
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--  ############## CLIENTES ##########-->
                    <li class="nav-item nav-dropdown">
                        <a href="#" class="nav-link nav-dropdown-toggle">
                            <i class="icon icon-energy"></i> Clientes <i class="fa fa-caret-left"></i>
                        </a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="/clientes/cadastro" class="nav-link">
                                    <i class="icon icon-energy"></i> Cadastro
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/clientes" class="nav-link">
                                    <i class="icon icon-energy"></i> Lista
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--  ############## PRODUTOS ##########-->
                    <li class="nav-item nav-dropdown">
                        <a href="#" class="nav-link nav-dropdown-toggle">
                            <i class="icon icon-graph"></i> Produtos <i class="fa fa-caret-left"></i>
                        </a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="/produtos/cadastro" class="nav-link">
                                    <i class="icon icon-graph"></i> Cadastro Produtos
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/produtos" class="nav-link">
                                    <i class="icon icon-graph"></i> Lista de Produtos
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!--  ##############  PEDIDOS ##########-->
                    <li class="nav-item nav-dropdown">
                        <a href="#" class="nav-link nav-dropdown-toggle">
                            <i class="icon icon-graph"></i> Pedidos<i class="fa fa-caret-left"></i>
                        </a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="chartjs.html" class="nav-link">
                                    <i class="icon icon-graph"></i> Realizar Pedido
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="chartjs.html" class="nav-link">
                                    <i class="icon icon-graph"></i> Pedidos Em Aberto
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="chartjs.html" class="nav-link">
                                    <i class="icon icon-graph"></i> Pedidos Fechados
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!--  ############## FINANCEIRO#########-->
                    <li class="nav-title">Financeiro</li>

                    <li class="nav-item nav-dropdown">
                        <a href="#" class="nav-link nav-dropdown-toggle">
                            <i class="icon icon-umbrella"></i>Caixa <i class="fa fa-caret-left"></i>
                        </a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="blank.html" class="nav-link">
                                    <i class="icon icon-umbrella"></i> Fechamento de Pedido
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="blank.html" class="nav-link">
                                    <i class="icon icon-umbrella"></i> Fechamento de Caixa
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="blank.html" class="nav-link">
                                    <i class="icon icon-umbrella"></i> Compras
                                </a>
                            </li>

                        </ul>
                    </li>
                    <!--  ############## GERENCIAMENTO#########-->
                    <li class="nav-title">Configurações</li>
                    <li class="nav-item nav-dropdown">
                        <a href="#" class="nav-link nav-dropdown-toggle">
                            <i class="icon icon-arrow-right-circle"></i>Usuários <i class="fa fa-caret-left"></i>
                        </a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="blank.html" class="nav-link">
                                    <i class="icon icon-vector"></i> Cadastar Usuário
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="blank.html" class="nav-link">
                                    <i class="icon icon-action-redo"></i> Gerenciar Usuários
                                </a>
                            </li>

                        </ul>
                    </li>



                </ul>
            </nav>
        </div>

        <div class="content">
            <div class="container-fluid">
                @yield('content')
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
