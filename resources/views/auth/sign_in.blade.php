@extends('layouts.template')
@section('title','Passt - Sign In')
@section('content')
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    
                    
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="{{asset('multimedia/icon.png')}}"

                                             style="width: 80px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Passt</h4>
                                    </div>

                                    <form action="{{route('auth.sign_in')}}" method="POST">
                                        @csrf

                                        <x-alert_form_comp>
                                            <x-slot name="type">warning</x-slot>
                                        </x-alert_form_comp>
                                        {{-- @error('email'|'password')
                                            <x-alert_form_comp>
                                                <x-slot name="type">warning</x-slot>
                                                <x-slot name="message">{{$message}}</x-slot>
                                            </x-alert_form_comp>
                                        @enderror --}}
                                        
                                        <div class="form-outline mb-4">
                                            
                                            <input type="email" id="email" name="email" class="form-control"
                                                   placeholder="Email address"/>
                                                   <label class="form-label" for="email" autocomplete="off">E-mail</label> 
                                                </div>
                                        <div class="form-outline mb-4">
                                            
                                            <input type="password" id="password" name="password" class="form-control"/>
                                            <label class="form-label" for="password">Masterkey</label>
                                            
                                        </div>

                                        <div class="row mb-4 justify-content-center">
                                            <div class="col d-flex justify-content-center">
                                                <!-- Checkbox -->
                                                {{-- <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                                    <label class="form-check-label" for="form1Example3">
                                                        Remember me
                                                    </label>
                                                </div> --}}
                                                
                                            </div>
                                            <a class="w-auto justify-start" id="forgot1" href="{{route('auth.form.recover_pass')}}">Forgot your MasterKey?</a>
                                            <div class="col text-center">
                                                <!-- Simple link -->
                                                
                                            </div>
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                    type="submit">Log in
                                            </button>
                                        </div>
                                    </form>
                                    <form action="{{route('auth.form.sign_up')}}" method="GET">

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <button type="submit" class="btn btn-outline-danger">Create new</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than a simple app, we are your alies</h4>
                                    <p class="small mb-0">When you have your information save then you are safe. Passt it´s your perfect partner </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
