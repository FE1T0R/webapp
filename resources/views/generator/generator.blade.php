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
                                <div class="text-white px-0 py-4 p-md-5 mx-md-0">

                                    <h4 class="mb-4">Here you will discover the correct protocol to define a safe password</h4>
                                    <h6 class="mb-4">►Your psw must have (min):</h6>
                                    <p class="small mb-0">
                                        <ul>
                                            <li>1. Special character</li>
                                            <li>2. Digit</li>
                                            <li>3. Capital letter</li>
                                            <li>4. Lowercase letter</li>
                                        </ul>
                                    <h6 class="mb-4">►Remember! You psw must have at least 12 characters to be safe</h6>
                                    <h6 class="mb-4">►Change your password frequently</h6>
                                    <h6 class="mb-4">►Don't share your personal passwords with anybody</h6>

                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="input-group m-0">
                                        <img src="{{asset('multimedia/icon.png')}}" width="30px" alt="logo" height="30px">
                                        <h4 class="mt-1 mb-5 pb-1">&nbsp;Passt - Generator</h4>
                                    </div>
                                    @if($passlength >= 12)
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <label for="textcopied">Your password was created with {{$passlength}} characters</label>
{{--                                            {{$createdPass}}--}}
                                            <input class="form-control text-center" type="text" value="{{$createdPass}}" id="textcopied" aria-label="Disabled input example" disabled readonly>
                                            <label id="labelPss" for="copy"></label><br>
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" id="copy" onclick="myFunction('textcopied')">Copy to clipboard & reload</button>
                                            @auth()<label id="label2" for="copy2"></label><br>
                                            <a href="{{route('sites.index')}}"><button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" id="copy2" onclick="myFunction('textcopied')">Assign to site</button></a>@endauth
                                            </div>
                                    @endif

                                    <form action="{{route('generator.create')}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="input-group mb-3">
                                            <div class="input-group-text">
                                                <input class="form-check-input" type="checkbox" role="switch" name="lower" id="lowercheck"  checked disabled>
                                            </div>
                                                <input class="form-control" type="text" name="Lowercase letters" value="Lowercase letters" aria-label="Disabled input example" disabled readonly>
                                                <input class="form-control" type="text" name="examlow" value="a-b-c-d-e-f-g-h-i-j" aria-label="Disabled input example" disabled readonly>
                                            <div class="input-group-text">
                                                <input class="form-control" type="number" id="quantitylower" value="3" name="qlower" min="3" max="6">
                                            </div>
                                        </div>


                                        <div class="input-group mb-3">
                                            <div class="input-group-text">
                                                <input class="form-check-input" type="checkbox" role="switch" name="capital" id="capitalcheck" checked disabled>
                                            </div>
                                                <input class="form-control" type="text" name="Capital letters" value="Capital letters" aria-label="Disabled input example" disabled readonly>
                                                <input class="form-control" type="text" name="examcap" value="A-B-C-D-E-F-G-H-I" aria-label="Disabled input example" disabled readonly>
                                            <div class="input-group-text">
                                                <input class="form-control" type="number" id="quantitycapital" value="3" name="qcapital" min="3" max="6">
                                            </div>
                                        </div>


                                        <div class="input-group mb-3">
                                            <div class="input-group-text">
                                                <input class="form-check-input" type="checkbox" role="switch" name="number" id="numbercheck" checked disabled>
                                            </div>
                                                <input class="form-control" type="text" name="Numbers" value="Numbers" aria-label="Disabled input example" disabled readonly>
                                                <input class="form-control" type="text" name="examnum" value="1-2-3-4-5-6-7-8-9-0" aria-label="Disabled input example" disabled readonly>
                                            <div class="input-group-text">
                                                <input class="form-control" type="number" id="quantitynumber" value="3" name="qnumber" min="3" max="6">
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-text">
                                                <input class="form-check-input" type="checkbox" role="switch" name="character" id="charactercheck" checked disabled>
                                            </div>
                                                <input class="form-control" type="text" name="Special Characters" value="Special Characters" aria-label="Disabled input example" disabled readonly>
                                                <input class="form-control" type="text" name="examchar" value='!-"-$-%-&-/-(-)-=?' aria-label="Disabled input example" disabled readonly>
                                            <div class="input-group-text">
                                                <input class="form-control" type="number" id="quantitycharacter" value="3" name="qcharacter" min="3" max="6">
                                            </div>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                    type="submit">Create Safe Password
                                            </button>
                                        </div>

                                    </form>
                                    @guest()
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
                                    @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
