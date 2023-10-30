@extends('layouts.template')
@section('title','Passt - Home')
@section('content')
    <div class='container p-4'>
        <div class='row'>
            <div class='col-md-12 mx-auto'>
                <div class='card card-body'>
                    <h1>Bienvenido a Passt !</h1>
                    <h2>tu Gestor de Contraseñas</h2>
                    <img src="{{asset('multimedia/animation.gif')}}" alt="" height="120px" width="800´x">
                    <p>Passt es un herramienta que te permitirá hacer un correcta aplicación y administracion de tus
                        contraseñas y demás datos sensibles requeridos para hacer un inicio de sesión en cualquier
                        sistema de información en el cual requieras identificarte.</p><br>


                </div>
            </div>
        </div>
    </div>

@endsection
