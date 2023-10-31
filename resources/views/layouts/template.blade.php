<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="shortcut icon" sizes="192x192" type="image/png" href="{{asset('favicon.ico') }}">
    <title>@yield('title')</title>
</head>
<body style="background-color: #eee">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <div class="container-fluid">
        <div>
            <a href="{{route('home')}}"><img src="{{asset('multimedia/icon.png')}}" alt="logo" width="35" height="35"></a>
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
                    <a class="nav-link mx-2" aria-current="page" href="{{route('about')}}">About us</a>
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
{{--                        <li><a class="dropdown-item" href="{{route('sites.index')}}">Profile</a></li>--}}
{{--                        <li><a class="dropdown-item" href="{{route('generator.index')}}">Master Key</a></li>--}}
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
    <script src="{{asset('js/scripts.js')}}"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>
