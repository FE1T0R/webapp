@extends('layouts.template')
@section('title','Passt - Verify Email')
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

                                    <p class="mb-4 me-2 justify-self-center">mensaje de notificacion de Email enviado</p>
                                    


                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2 ">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                             
                                    
                                    <h1 class="small mb-10">Check your inbox e-mail and validate your e-mail through the link we've sent you</h1>
                                    <form class="mb-10" action="{{route('verification.send')}}" method="POST">
                                            @csrf
                                        {{-- <div class="input-group mb-3">
                                            <span class="input-group-text" id="email">E-mail</span>
                                            <input type="text" class="form-control" name="email" placeholder="Insert your E-mail" aria-label="email" aria-describedby="basic-addon1" value="{{old('email')}}">
                                        </div> --}}

                                        {{-- <div class="mb-10 d-flex align-items-center justify-content-center pb-4">
                                            <button type="button" class="btn btn-outline-danger w-50" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Restablish</button>
                                            
                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4>Instructions send !!</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="content">
                                                                <p>Check your inbox e-mail with the instruction to recover yout MasterKey</p>
                                                            </div> 
                                                        </div>
                                                        <div class="modal-footer justify-center">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <a type="Submit" class="btn btn-light" href="{{route('auth.form.sign_in')}}" role="button">OK !</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <button class="btn">Send again</button>
                                    </form>
                                    {{-- <a class="btn small mb-10" href="{{route('auth.form.sign_in')}}" role="button">Sing Up</a> --}}
                                    {{-- <a class="btn small mb-10" href="{{route('auth.form.sign_in')}}" role="button">Sing In</a> --}}
                                    
                                </div>
                                
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
