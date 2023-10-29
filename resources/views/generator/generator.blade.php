@extends('layouts.template')
@section('title','Passt - Generator')
@section('content')
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-4 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">

                                    <h2 class="mb-4">En este espacio colocamos todo el contenido que enseña como definir apropiadamente una contraseña</h2>
                                    <h4 class="mb-4">We are more than a simple app, we are your alies</h4>
                                    <p class="small mb-0">When you have your information save then you are safe. Passt it´s your perfect partner </p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="{{asset('multimedia/icon.png')}}"

                                             style="width: 80px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Passt</h4>
                                    </div>
                                    @if($passlength >= 12)
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <label>Your password was created with {{$passlength}} characters</label>
                                            <input class="form-control text-center" type="text" value="{{$createdPass}}" aria-label="Disabled input example" disabled readonly>
                                        </div>
                                    @endif

                                    <form action="{{route('generator.create')}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="input-group mb-3">
                                            <div class="input-group-text">
                                                <input class="form-check-input" type="checkbox" role="switch" name="lower" id="flexSwitchCheckChecked" checked>
                                            </div>
                                                <input class="form-control" type="text" value="Lowercase letters" aria-label="Disabled input example" disabled readonly>
                                                <input class="form-control" type="text" value="a-b-c-d-e-f-g-h-i-j" aria-label="Disabled input example" disabled readonly>
                                            <div class="input-group-text">
                                                <input class="form-control" type="number" id="quantity" value="3" name="qlower" min="3" max="6">
                                            </div>
                                        </div>


                                        <div class="input-group mb-3">
                                            <div class="input-group-text">
                                                <input class="form-check-input" type="checkbox" role="switch" name="capital" id="flexSwitchCheckChecked" checked>
                                            </div>
                                                <input class="form-control" type="text" value="Capital letters" aria-label="Disabled input example" disabled readonly>
                                                <input class="form-control" type="text" value="A-B-C-D-E-F-G-H-I" aria-label="Disabled input example" disabled readonly>
                                            <div class="input-group-text">
                                                <input class="form-control" type="number" id="quantity" value="3" name="qcapital" min="3" max="6">
                                            </div>
                                        </div>


                                        <div class="input-group mb-3">
                                            <div class="input-group-text">
                                                <input class="form-check-input" type="checkbox" role="switch" name="number" id="flexSwitchCheckChecked" checked>
                                            </div>
                                                <input class="form-control" type="text" value="Numbers" aria-label="Disabled input example" disabled readonly>
                                                <input class="form-control" type="text" value="1-2-3-4-5-6-7-8-9-0" aria-label="Disabled input example" disabled readonly>
                                            <div class="input-group-text">
                                                <input class="form-control" type="number" id="quantity" value="3" name="qnumber" min="3" max="6">
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-text">
                                                <input class="form-check-input" type="checkbox" role="switch" name="character" id="flexSwitchCheckChecked" checked>
                                            </div>
                                                <input class="form-control" type="text" value="Special Characters" aria-label="Disabled input example" disabled readonly>
                                                <input class="form-control" type="text" value='!-"-$-%-&-/-(-)-=?' aria-label="Disabled input example" disabled readonly>
                                            <div class="input-group-text">
                                                <input class="form-control" type="number" id="quantity" value="3" name="qcharacter" min="3" max="6">
                                            </div>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                    type="submit">Create Safe Password
                                            </button>
                                        </div>

                                    </form>

                                    <form action="{{route('auth.form.sign_up')}}" method="GET">

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <button type="submit" class="btn btn-outline-danger">Create new</button>
                                        </div>
                                    </form>
                                    <form action="{{route('auth.form.sign_in')}}" method="GET">
                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Have already registered?</p>
                                            <button type="submit" class="btn btn-outline-danger">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
