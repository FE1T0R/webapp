@php
    if (Route::currentRouteName() == 'sites.search'){
        $route="../";
    }else{
        $route="../public/";
    }
@endphp

<div class="container d-flex mt-2 p-2"> 
    <div class="card mb-3 col-md-12"> 
        <div class="row g-0 col-md-12" > 
            <div class="col-md-2 d-flex justify-content-center"> 
                <img src="{{$iconSite}}" 
                    class="img-fluid rounded-start"> 
            </div> 
            <div class="col-md-6"> 
                <div class="card-body m-2"> 
                    <h5 class="card-title"> 
                        {{$nameSite}} 
                    </h5> 
                    <p class="card-text"> 
                        {{$emailSite}}   
                    </p>
                    <p class="card-text"> 
                        {{$usernameSite}}   
                    </p>
                    <p class="card-text"> 
                        <small class="text-muted"> 
                            Update at: {{$updateAtSite}}
                        </small> 
                    </p> 
                </div> 
            </div>
            <div class="col-md-4 card-body align-content-center justify-content-center"> 
                <div class="col">

                    <div class="d-flex align-content-center justify-content-center bg-gray-600 h-max">
                        
                        <input type="text" class="p-2 card col align-middle mb-0 collapse" disabled id="{{$idSite}}psw" value="{{$passwordSite}}">
                        <button class=" fa-lg gradient-custom-2 mb-3 collapse" id="{{$idSite}}psw" onclick="myFunction('{{$idSite}}psw','{{$idSite}}label')">Copy</button>
                        
                    </div> 

                                       
                    <div class="d-flex mt-2">
                        <a href="#{{$idSite}}psw" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample" class="d-flex">
                            <img src="{{$route}}multimedia/icon-watch.svg" class="img-fluid rounded-start" width="60">
                        </a>
                        <a href="{{route('sites.edit',$idSite)}}" class="d-flex">
                            <img src="{{$route}}multimedia/icon-edit.svg" class="img-fluid rounded-start" width="60">
                        </a>
                        <form action="{{route('sites.destroy',$idSite)}}" method="POST">

                            @csrf
                            @method('DELETE')
                            <button class="btn" type="submit">
                                <img src="{{$route}}multimedia/icon-trash.svg" class="img-fluid rounded-start" width="60"></a>
                            </button> 
                        
                        </form>


                        <a href="#" class="d-flex">
                            <img src="{{$route}}multimedia/icon-favorite-star.svg" class="img-fluid rounded-start" width="60">
                        </a>
                    </div>
                </div>
           </div> 
        </div> 
    </div> 
</div>