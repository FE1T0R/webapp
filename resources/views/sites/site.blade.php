@extends('layouts.template')
@section('title','Passt - My Sites')
@section('content')
    <div class="container-xl">
        <form action="{{route('sites.search')}}" method="POST">
            @csrf
            @method('PUT')
            <br>
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="Search by site"
                       aria-label="search Site" aria-describedby="button-addon2">
                <button type="submit" value="search" class="btn btn-success btn-block start">Search</button>
                <button type="submit" value="clear" class="btn btn-danger btn-block reset">Clear</button>
            </div>
        </form>
        <form action="{{route('sites.create')}}">
            <br>
            <div class="input-group mb-3">
                <button type="submit" class="btn btn-danger btn-block reset">New Site</button>
                
            </div>
        </form>

        @php
            use App\Http\Controllers\GeneratorController;
        @endphp
            @if(session('alerts'))
                <x-alert_comp>
                    <x-slot name="alerts">{{session('alerts')}}</x-slot>
                </x-alert_comp>
            @endif
        
        <div class="table">
            
            @if(sizeof($sites) > 0)
            
            @foreach($sites as $site)
                <x-onesite_comp>
                    <x-slot name="idSite">{{$site->id}}</x-slot>
                    <x-slot name="iconSite">{{$site->icon_s}}</x-slot>
                    <x-slot name="nameSite">{{$site->name_s}}</x-slot>
                    <x-slot name="usernameSite">{{$site->username_s}}</x-slot>
                    <x-slot name="emailSite">{{$site->email_s}}</x-slot>
                    <x-slot name="passwordSite">{{GeneratorController::tokendecrypt($site->password_s)}}</x-slot>
                    <x-slot name="updateAtSite">{{$site->updated_at}}</x-slot>
                </x-onesite_comp>
            @endforeach
            @else
                <h2>There is any site to show, Would you like creating one?</h2>
            @endif
        </div>
    </div>
@endsection
