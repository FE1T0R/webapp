@extends('layouts.template')
@section('title','Passt - Sign Up')
@section('content')
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">

                            <div class="col-lg-12">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="{{asset('multimedia/icon.png')}}"
                                             style="width: 80px;" alt="logo">
                                        <h4 class="mt-1 mb-1 pb-1">Passt</h4>
                                        <hr>
                                        <h1 class="mt-1 mb-1 pb-1">Sign Up</h1>
                                        <hr>
                                    </div>

                                    <form class="row align-items-center text-center mt-80" action="{{route('auth.sign_up')}}" method="POST">
                                        @csrf
                                        <div class="col-lg-2 text-center form-outline mb-4"></div>
                                        <div class="col-lg-8 text-center form-outline mb-4">

                                            <div class="input-group mb-1">
                                                <span class="input-group-text">Full name:</span>
                                                <input type="text" aria-label="First name" name="name" class="form-control" placeholder="Insert your Name" value="{{old('name')}}">
                                                <input type="text" aria-label="Last name" name="lastname" class="form-control" placeholder="Insert your Lastname" value="{{old('lastname')}}">
                                            </div>
                                            <br>
                                            <div class="input-group mb-1">
                                                <span class="input-group-text" id="email">E-mail</span>
                                                <input type="text" class="form-control" name="email" placeholder="Insert your E-mail" aria-label="email" aria-describedby="basic-addon1" value="{{old('email')}}">
                                            </div>
                                            <br>
                                            <div class="input-group mb-1">
                                                <span class="input-group-text" id="username">Username</span>
                                                <input type="text" class="form-control" name="username" placeholder="Insert a Username" aria-label="Username" aria-describedby="basic-addon1" value="{{old('username')}}">
                                            </div>
                                            <br>
                                            <div class="input-group mb-1">
                                                <span class="input-group-text" id="phone">Phone</span>
                                                <input type="phone" class="form-control" name="phone" placeholder="Insert your number phone" aria-label="phone" aria-describedby="basic-addon1">
                                            </div>

                                            <h3 class="form-label mb-1">Security questions</h3>
                                            <br>
                                            <select class="form-outline mb-1" aria-label="Large select example" name="question1">
                                                <option selected value="1">What city were you born in?</option>
                                                <option value="2">In what city or town did your parents meet?</option>
                                            </select>
                                            <input type="text" id="answer1" name="answer1" class="form-control mb-3"
                                                   placeholder="Insert your answer number 1" value="{{old('answer1')}}"/>

                                            <select class="form-outline mb-1" aria-label="Large select example" name="question2">
                                                <option selected value="4">What was/were your grandma's lastname?</option>
                                                <option value="5">What is the name of your first girl/boyfriend ?</option>
                                            </select>

                                            <input type="text" id="answer2" name="answer2" class="form-control mb-3"
                                                   placeholder="Insert your answer number 2" value="{{old('answer2')}}"/>
                                            <input type="text" id="question3" name="question3" class="form-control mb-3"
                                                   placeholder="Make your own question" value="{{old('question3')}}"/>
                                            <input type="text" id="answer3" name="answer3" class="form-control mb-3"
                                                   placeholder="Insert your answer number 3" value="{{old('answer3')}}"/>



                                            <div class="text-center pt-1 mb-3 pb-1">
                                                <button class="btn btn-outline-warning ali" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                    Define your MasterKey
                                                </button>                                                
                                            </div>
        
                                                
                                            <div class="collapse" id="collapseExample">
                                                <div class="card card-body mb-3 form-control">
                                                    <div class="card-body">
                                                        <div class="content">
                                                            <h5>Here you must define your MasterKey</h5>
                                                            <p>Remember that you can't forget it. All your "Information" is here !!</p>
    
                                                        </div>
                                                        <div class="content">
                                                            <input type="password" id="password" name="password" class="form-control"/>
                                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                                    type="Submit">Sing up
                                                            </button>
    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-2 text-center form-outline mb-4"></div>

                                        <x-alert_form_comp>
                                            <x-slot name="type">warning</x-slot>
                                        </x-alert_form_comp>

                                        


                                        

    
                                    </form>
                                    <form action="{{route('auth.form.sign_in')}}" method="GET" class="mb-10">
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
