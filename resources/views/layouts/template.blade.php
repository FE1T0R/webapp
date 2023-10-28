<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <link rel="stylesheet" href="../../css/app.css">
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <div class="container-fluid">
        <div>
            <img src="resources/multimedia/icon.png"
                 style="width: 80px;" alt="logo">
        </div>
        <a class="navbar-brand" href="{{route('home')}}">Passt</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">

                @auth
                @if(Route::currentRouteName()=='sites.index')
                <li class="nav-item">
                    <a class="nav-link mx-2" aria-current="page" href="{{route('home')}}">Validar Link</a>
                </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link mx-2" aria-current="page" href="{{route('sites.index')}}">My sites</a>
                        </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{route('generator.index')}}">Password Generator</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle" id="navbarDropdownMenuLink"
                       role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{Auth::user()->username}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{route('sites.index')}}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{route('generator.index')}}">Master Key</a></li>
                        <li>
                            <form style="display: inline" action="{{route('auth.log_out')}}" method="post">
                                @csrf
                                    <a class="dropdown-item" href="#" onclick="this.closest('form').submit()">Log Out</a>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
{{--                    @if(route()) @endif--}}
                <li class="nav-item">
                    <a class="nav-link mx-2" aria-current="page" href="{{route('about')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{route('generator.index')}}">Password Generator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{route('auth.form.sign_in')}}">Log In</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<article>
@yield('content')
</article>

    <!--Scripts-->
    <script src="../../js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"
></script>

</body>
</html>
