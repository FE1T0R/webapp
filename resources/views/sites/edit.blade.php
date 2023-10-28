@extends('layouts.template')
@section('title','Edit Site')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='card card-body text-center'>
                    <form action="{{route('sites.update',$site)}}" method="POST"  class="text-center">
                        @csrf
                        @method('PUT')
                        <div class="row-mb-12">
                        <div>
                            <label class="fluid">Name's Site
                                <input type="text" name="nameSite" class="form-control -fluid" value="{{$site->name_s}}"
                                        autofocus>
                                @error('nameSite')<br>{{$message}}@enderror
                            </label><br>
                        </div>
                        <br>
                            <div >
                                <label class="fluid">Username's Site
                                    <input type="text" name="usernameSite" class="form-control -fluid" value="{{$site->username_s}}"
                                           autofocus>
                                </label><br>
                            </div>
                        <br>
                        <div class="form-group">
                            <label>Email's Site
                                <input type="text" name="emailSite" class="form-control" value="{{$site->email_s}}"

                                @error('emailSite')<span>*{{$message}}</span>@enderror
                            </label><br>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Password's Site
                                <input type="password" name="pswSite" class="form-control" value="{{$site->password_s}}" autofocus>
                                @error('pswSite')<span>{{$message}}</span>@enderror
                            </label><br>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success btn-block">Update Site</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
