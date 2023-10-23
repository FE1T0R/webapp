@extends('layouts.template')
@section('title','Nuevo Site')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='card card-body text-center'>
                    <form action="{{route('sites.save')}}" method="POST"  class="text-center">
                        @csrf
                        @method('PUT')
                        <div class="row-mb-12">
                            <div >
                                <label class="fluid">Name's Site
                                    <input type="text" name="nameSite" class="form-control -fluid" value="{{old('nameSite')}}"
                                           autofocus>
                                    @error('nameSite')<br>{{$message}}@enderror
                                </label><br>
                            </div>
                            <br>
                            <div >
                                <label class="fluid">Username's Site
                                    <input type="text" name="usernameSite" class="form-control -fluid" value="{{old('nameSite')}}"
                                           autofocus>
                                </label><br>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Email's Site
                                    <input type="text" name="emailSite" class="form-control" value="{{old('nameSite')}}"

                                    @error('emailSite')<span>*{{$message}}</span>@enderror
                                </label><br>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Password's Site
                                    <input type="password" name="pswSite" class="form-control" value="" autofocus>
                                    @error('pswSite')<span>{{$message}}</span>@enderror
                                </label><br>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success btn-block">Create Site</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


