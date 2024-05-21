@extends('layouts.template')
@section('title','Passt - Edit Site')
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
                                        <form action="{{route('sites.update',$site)}}" method="POST"  class="text-center">
                                            @php
                                                use App\Http\Controllers\GeneratorController;
                                            @endphp
                                            @csrf
                                            @method('PUT')
                                            <div class="list-group mb-2">
                                                <?php $icon = ($site->icon_s == "../public/multimedia/icon-www.png") ? "../../../public/multimedia/icon-www.png" : $site->icon_s ?>
                                                <x-icons_comp>
                                                    <x-slot name="keyword">{{$site->name_s}}</x-slot>
                                                    <x-slot name="icon">{{$icon}}</x-slot>
                                                </x-icons_comp>
                                            </div>
                                            
                                            <div class="form-outline mb-3">

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="nameSite">Name's site</span>
                                                    <input type="text" class="form-control" name="nameSite" placeholder="Insert the name's site" value="{{$site->name_s}}"
                                                           aria-label="lnameSite">
                                                           <a class="text-size-3sd" href="https://www.google.com/search?q={{$site->name_s}}" target="_blank"><button type="button" class="btn btn-outline-warning ali">Go to website</button></a>
                                                    @error('nameSite')<br>{{$message}}@enderror
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">Password</span>
                                                    <input type="text" class="form-control collapse collapse-horizontal" id="pswSite" name="pswSite" value="{{GeneratorController::tokendecrypt($site->password_s)}}"
                                                    {{-- <input type="text" class="form-control collapse collapse-horizontal" id="pswSite1" name="pswSite1" value="{{$site->password_s}}"        --}}
                                                            aria-label="lpwsSite" aria-describedby="basic-addon1"><br>
                                                    <a href="#pswSite" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-outline-warning d-flex">See</a>
                                                    <a type="button" class="btn btn-outline-warning d-flex" onclick="myFunction('pswSite','labelError')">Copy</a>
                                                    {{-- <a href="{{route('generator.show',$site)}}" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-outline-warning ali d-flex">See</a> --}}
                                                    {{-- <a href="{{route('generator.editPass',$site)}}"><button type="button" class="btn btn-outline-warning ali">New PSW</button></a> --}}
                                                    @error('pswSite')<span>{{$message}}</span>@enderror
                                                </div>
                                                
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="usernameSite">Username's site</span>
                                                    <input type="text" class="form-control" name="usernameSite" placeholder="Insert the username's site" value="{{$site->username_s}}"
                                                           aria-label="lusernameSite" aria-describedby="basic-addon1">
                                                </div>
                                                
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="emailSite">E-mail</span>
                                                    <input type="email" class="form-control" name="emailSite" placeholder="Insert the e-mail's site" value="{{$site->email_s}}"
                                                           aria-label="lemailSite" aria-describedby="basic-addon1"><br>
                                                    @error('emailSite')<span>*{{$message}}</span>@enderror
                                                </div>
                                                
                                                
                                                
                                                <button type="submit" class="btn btn-outline-warning ali">Update Site</button>
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



















{{--    <form action="{{route('sites.update',$site)}}" method="POST"  class="text-center">--}}
{{--        @csrf--}}
{{--        @method('PUT')--}}
{{--        <div class="row-mb-12">--}}
{{--            <div>--}}
{{--                <label class="fluid">Name's Site--}}
{{--                    <input type="text" name="nameSite" class="form-control -fluid" value="{{$site->name_s}}"--}}
{{--                           autofocus>--}}
{{--                    @error('nameSite')<br>{{$message}}@enderror--}}
{{--                </label><br>--}}
{{--            </div>--}}
{{--            <br>--}}
{{--            <div >--}}
{{--                <label class="fluid">Username's Site--}}
{{--                    <input type="text" name="usernameSite" class="form-control -fluid" value="{{$site->username_s}}"--}}
{{--                           autofocus>--}}
{{--                </label><br>--}}
{{--            </div>--}}
{{--            <br>--}}
{{--            <div class="form-group">--}}
{{--                <label>Email's Site--}}
{{--                    <input type="text" name="emailSite" class="form-control" value="{{$site->email_s}}"--}}

{{--                    @error('emailSite')<span>*{{$message}}</span>@enderror--}}
{{--                </label><br>--}}
{{--            </div>--}}
{{--            <br>--}}
{{--            <div class="form-group">--}}
{{--                <label>Password's Site--}}
{{--                    <input type="password" name="pswSite" class="form-control" value="{{$site->password_s}}" autofocus>--}}
{{--                    @error('pswSite')<span>{{$message}}</span>@enderror--}}
{{--                </label><br>--}}
{{--            </div>--}}
{{--            <br>--}}
{{--            <button type="submit" class="btn btn-success btn-block">Update Site</button>--}}
{{--        </div>--}}
{{--    </form>--}}










@endsection
