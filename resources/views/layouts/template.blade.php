<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
{{--     <link rel="stylesheet" href="../../css/app.css">--}}
{{--    <link rel="shortcut icon" href="../../multimedia/icon.png" type="image/x-icon">--}}
    <script src="../../js/app.js"></script>
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
{{--    --}}
{{--    --}}
{{--        <div class="container">--}}

{{--            <?php--}}
{{--            if (isset($_POST['cer   rarsesion'])) {--}}
{{--                session_destroy();--}}
{{--                header("Location: sitio.php");--}}
{{--            }--}}

{{--            session_start();--}}
{{--            if(isset($_SESSION['id_usuario'])){--}}
{{--                ?>--}}
{{--            --}}
{{--            <a href="{{route('sites.inicio')}}" class="navbar-brand">MIS SITIOS</a>--}}
{{--            <form action="{{route('inicio')}}" method="POST"><a href="{{route('inicio')}}" name="cerrarsesion" class="navbar-brand">CERRAR SESIÓN</a></form><?php }else{                                                                                                                               ?><a href="{{route('inicio')}}" class="navbar-brand">PASST</a>--}}
{{--            <a href="{{route('sites.inicio')}}" class="navbar-brand">INICIAR SESIÓN</a><?php--}}
{{--                                                                                        }--}}
{{--                                                                                        ?>--}}

{{--        </div>--}}



{{--    --}}
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">Passt</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                <?php $validator=1;
//                if (isset($_SESSION['id_usuario'])){
                    if ($validator==1){
                ?>
                <li class="nav-item">
                    <a class="nav-link mx-2" aria-current="page" href="{{route('sites.index')}}">My sites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="">Password Generator</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle" href="" id="navbarDropdownMenuLink"
                       role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        NameUser
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="">Profile</a></li>
                        <li><a class="dropdown-item" href="">Master Key</a></li>
                        <li><a class="dropdown-item" href="">Log Out</a></li>
                    </ul>
                </li>
                <?php
                }else{?>
                <li class="nav-item">
                    <a class="nav-link mx-2" aria-current="page" href="">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="">Password Generator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="">Log In</a>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</nav>

<article>
@yield('content')
</article>

    <!--Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>


</body>
</html>








{{--{{route('sites.index')}}--}}
{{--{{route('sites.index')}} x4--}}
{{--{{route('about')}}--}}
{{--{{route('generator.index')}}--}}
{{--{{route('auth.sign_in')}}--}}






