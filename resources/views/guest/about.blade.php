@extends('layouts.template')
@section('title','Passt - About Us')
@section('content')
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-400">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-4 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-0 py-4 p-md-5 mx-md-0 text-center">
                                    <h4 class="mb-4">With Passt you will keep all your passwords in a unique site</h4>
                                    <img src="{{asset('multimedia/icon.png')}}" alt="logo" width="150" height="150">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class='card card-body text-center'>
                                        <h1>Welcome to Passt !</h1><br>
                                        <h2>Your password assistant</h2><br>
                                        <img src="{{asset('multimedia/animation.gif')}}" class="container-fluid"><br>
                                        <h6>Passt is a tool that will help you to implement a correct manage with an effective application of security
                                            protocols in order to keep your
                                            passwords and other sensitive data required to log in to any information system where you are registered.<br>
                                        </h6>
                                        <br>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">

                            <div class="col-lg-8">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class='card card-body text-center'>
                                        <img src="{{asset('multimedia/animation.gif')}}" class="container-fluid"><br>
                                        <h1>Johan Steven Nuñez Gonzalez</h1><br><br>
                                        <h4>Developer, employee and project leader</h4><br>

                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 d-flex align-items-center gradient-custom-2">


                                    <img class="container-fluid" src="{{asset('multimedia/developer.jpg')}}" alt="logo" width="75%" height="85%">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
