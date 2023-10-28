@extends('layouts.template')
@section('title','Sitios')
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
{{--        <?php --}}
{{--            if(){?>--}}
{{--                <button type="button" class="btn-close" aria-label="Close"></button>--}}
{{--            }--}}
{{--        --}}


        <div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Site</th>
            <th>Username</th>
            <th>E-mail</th>
            <th>Password</th>
            <th>Manage</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sites as $site)
            <tr>
                <td class="table-light">{{$site->name_s}}</td>
                <td class="table-light">{{$site->username_s}}</td>
                <td class="table-light">{{$site->email_s}}</td>
                <td class="table-light">{{$site->password_s}}</td>
                <td class="table-light">

                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Manage
                    </button>

                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Last update: {{$site->updated_at}}</h5>

                                </div>
                                <div class="modal-body">
                                    <div class="content">
                                        <table class="table table-bordered table-hover">
                                        <tbody>
                                            <tr><td>Names' Site</td><td>{{$site->name_s}}</td></tr>
                                            <tr><td>Usernames' Site</td><td>{{$site->username_s}}</td></tr>
                                            <tr><td>Emails' Site</td><td>{{$site->email_s}}</td></tr>
                                            <tr><td>Passwords' Site</td><td>{{$site->password_s    }}</td></tr>
                                        </tbody>
                                        </table>
                                        <hr>
                                    </div>
                                    <div class="content">
                                        <a href="{{route('sites.edit',$site)}}"><input type="submit" name="editar" value="Edit" class="link-dark d-grid gap-2 col-6 mx-auto btn btn-outline-warning"></a>
                                        <form action="{{route('sites.destroy',$site)}}" method="POST">

                                            @csrf
                                            @method('DELETE')
                                            <a href=""><input type="submit" name="delete" value="Delete" class="link-dark d-grid gap-2 col-6 mx-auto btn btn-outline-danger"></a>
{{--                                            <button type="button" class="btn btn-outline-danger" >Delete</button>--}}
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        </div>
{{--    {{$sites->links()}}--}}
    </div>
@endsection
