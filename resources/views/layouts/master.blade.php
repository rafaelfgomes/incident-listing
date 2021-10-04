<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Links -->
    <ul class="navbar-nav">
        <!-- Home -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>
        <!-- incidents -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Incidentes</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('incident.create')}}">Criar Novo Incidente</a>
                <a class="dropdown-item" href="{{route('incident.list')}}">Listar de Incidentes</a>
            </div>
        </li>
        <!-- Criticidade -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Criticidade</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('criticality.create')}}">Cadastrar Criticidade</a>
                <a class="dropdown-item" href="{{route('criticality.list')}}">Listar de Criticidades</a>
            </div>
        </li>
        <!-- Tipo -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Tipo</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('type.create')}}">Cadastrar Tipo</a>
                <a class="dropdown-item" href="{{route('type.list')}}">Listar Tipos</a>
            </div>
        </li>
    </ul>
</nav>
    <div class="container-fluid">
        <br>
        @yield('content')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
