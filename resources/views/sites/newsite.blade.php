@extends('layouts.template')
@section('title','Passt - New Site')
@section('content')
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-8 text-center">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0 row align-items-center text-center">
                            <div class="col-lg-2 text-center"></div>
                            <div class="col-lg-8 text-center">
                                <div class="card-body p-md-5 mx-md-8 text-center">

                                    <div class="text-center flex-column">
                                        <img src="{{asset('multimedia/icon.png')}}" width="30px" alt="logo" height="30px">
                                        <h4 class="mt-1 mb-5 pb-1">Passt</h4>
                                    </div>
                                    <form action="{{route('sites.store')}}" method="POST"  class="text-center">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-outline mb-2">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="pswSite">Password</span>
                                                <input type="text" class="form-control" name="pswSite" placeholder="Insert the password's site" value="{{$createdPass}}"
{{--                                                       {{$site->password_s}}--}}
                                                       aria-label="lpwsSite" aria-describedby="basic-addon1"><br>
                                                    
                                                    {{-- <x-modal_comp></x-modal_comp> --}}
                                                <a href="{{route('generator.createPass')}}"><button type="button" class="btn btn-outline-warning ali">New PSW</button></a>
                                                @error('pswSite')<span>{{$message}}</span>@enderror
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="nameSite">Name's site</span>
                                                <input type="text" class="form-control" name="nameSite" placeholder="Insert the name's site" value="{{old('nameSite')}}"
                                                       aria-label="lnameSite">
                                                @error('nameSite')<br>{{$message}}@enderror
                                            </div>
                                            
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="usernameSite">Username's site</span>
                                                <input type="text" class="form-control" name="usernameSite" placeholder="Insert the username's site" value="{{old('usernameSite')}}"
                                                       aria-label="lusernameSite" aria-describedby="basic-addon1">
                                            </div>
                                            
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="emailSite">E-mail</span>
                                                <input type="email" class="form-control" name="emailSite" placeholder="Insert the e-mail's site" value="{{old('emailSite')}}"
                                                       aria-label="lemailSite" aria-describedby="basic-addon1"><br>
                                                @error('emailSite')<span>*{{$message}}</span>@enderror
                                            </div>

                                            <div class="list-group mb-2">
                                                <small class="text-muted">
                                                    
                                                    
                                                    {{-- <x-select_comp>
                                                        <x-slot name="keyword">{{$site->name_s}}</x-slot>
                                                        <x-slot name="icon">{{$site->icon_s}}</x-slot>
                                                    </x-select_comp> --}}

                                                    <x-icons_comp>
                                                        <x-slot name="keyword">Chrome</x-slot>
                                                        <x-slot name="icon">https://api.iconify.design/logos:chrome.svg</x-slot>
                                                    </x-icons_comp>
                                                </small>
                                            </div>

                                            


                                            <br>
                                            <div class="input-group mb-3">
                                                <div class="card">
                                                    {{-- <x-modal_comp>Mundo</x-modal_comp> --}}


                                                </div>
                                            </div>

                                            
                                            <button type="submit" class="btn btn-outline-warning ali">Create Site</button>
                                            <a href="{{route('sites.index')}}" type="submit" class="btn btn-outline-warning ali">Cancel</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection














{{--<div class='container'>--}}
{{--    <div class='row'>--}}
{{--        <div class='col-md-12'>--}}
{{--            <div class='card card-body text-center'>--}}
{{--                <form action="{{route('sites.store')}}" method="POST"  class="text-center">--}}
{{--                    @csrf--}}
{{--                    @method('PUT')--}}
{{--                    <div class="row-mb-12">--}}
{{--                        <div >--}}
{{--                            <label class="fluid">Name's Site--}}
{{--                                <input type="text" name="nameSite" class="form-control -fluid" value="{{old('nameSite')}}"--}}
{{--                                       autofocus>--}}
{{--                                @error('nameSite')<br>{{$message}}@enderror--}}
{{--                            </label><br>--}}
{{--                        </div>--}}
{{--                        <br>--}}
{{--                        <div >--}}
{{--                            <label class="fluid">Username's Site--}}
{{--                                <input type="text" name="usernameSite" class="form-control -fluid" value="{{old('nameSite')}}"--}}
{{--                                       autofocus>--}}
{{--                            </label><br>--}}
{{--                        </div>--}}
{{--                        <br>--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Email's Site--}}
{{--                                <input type="text" name="emailSite" class="form-control" value="{{old('nameSite')}}"--}}

{{--                                @error('emailSite')<span>*{{$message}}</span>@enderror--}}
{{--                            </label><br>--}}
{{--                        </div>--}}
{{--                        <br>--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Password's Site--}}
{{--                                <input type="password" name="pswSite" class="form-control" value="" autofocus>--}}
{{--                                @error('pswSite')<span>{{$message}}</span>@enderror--}}
{{--                            </label><br>--}}
{{--                        </div>--}}
{{--                        <br>--}}
{{--                        <button type="submit" class="btn btn-success btn-block">Create Site</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
