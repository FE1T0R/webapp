@extends('layouts.template')
@section('title','Sign Up')
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
                                        <img src="../../multimedia/icon.png"
                                             style="width: 80px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Passt</h4>
                                    </div>

                                    <form action="{{route('auth.sign_up')}}" method="POST">
                                        @csrf
                                        <div class="form-outline mb-4">

                                            <div class="form-outline mb-3">
                                                <input type="text" id="name" name="name" class="form-control"
                                                       placeholder="Insert your Name"/>
                                                <label class="form-label" for="email">Name</label>
                                            </div>
                                            <div class="form-outline mb-3">
                                                <input type="text" id="lastname" name="lastname" class="form-control"
                                                       placeholder="Insert your Lastname"/>
                                                <label class="form-label" for="lastname">Lastname</label>
                                            </div>
                                            <div class="form-outline mb-3">
                                                <input type="email" id="email" name="email" class="form-control"
                                                       placeholder="Insert your E-mail address"/>
                                                <label class="form-label" for="email">E-mail</label>
                                            </div>
                                            <div class="form-outline mb-3">
                                                <input type="email" id="username" name="username" class="form-control"
                                                       placeholder="Insert your Username"/>
                                                <label class="form-label" for="username">Username</label>
                                            </div>
                                            <div class="form-outline mb-3">
                                                <input type="number" id="phone" name="phone" class="form-control"
                                                       placeholder="Insert your phone number"/>
                                                <label class="form-label" for="phone">Phone Number</label>
                                            </div>

                                            <h3 class="form-label">Security questions</h3>
                                            <br>
                                            <select class="form-outline mb-2" aria-label="Large select example" name="question1">
                                                <option selected value="1">1. What city were you born in?</option>
                                                <option value="2">2. In what city or town did your parents meet?</option>
                                                <option value="3"></option>
                                            </select>
                                            <input type="text" id="answer1" name="answer1" class="form-control mb-3"
                                                   placeholder="Insert your answer number 1"/>
                                            <select class="form-outline mb-2" aria-label="Large select example">
                                                <option selected value="4">1. Choose the first security question </option>
                                                <option value="5">One</option>
                                                <option value="6">Two</option>
                                            </select>
                                            <input type="text" id="answer2" name="answer2" class="form-control mb-3"
                                                   placeholder="Insert your answer number 2"/>
                                            <input type="text" id="email" name="q" class="form-control mb-3"
                                                   placeholder="Make your own question"/>
                                            <input type="email" id="answer3" name="answer3" class="form-control"
                                                   placeholder="Insert your answer number 3"/>
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                    type="submit">Sing up
                                            </button>
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
