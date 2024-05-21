<?php
include_once "../app/Http/Controllers/ApImages/ApiSearchImages.php";
include_once "../app/Http/Controllers/ApImages/ApiDefaultImages.php";
?>

<div class="card list-group-item list-group-item-action">
  <img src="{{$icon}}" alt="logo" height="80px" width="80px">
  <br>
  <small class="text-muted">



            <!-- Button trigger modal -->
      <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">Change icon</button>

      <!-- OffCanvas -->
      <div class="container offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel" data-bs-backdrop="static">
        <div class="offcanvas-header">
          <h1 class="fw-light text-center text-lg-start mt-4 mb-1">Choose a new Icon</h1>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-header justify-content-center">
          <button type="button" class="btn btn-outline-dark mb-1" data-bs-dismiss="offcanvas">ok</button>
          
        </div>
        <hr class="mt-2 mb-2">
        <div class="offcanvas-body">
                <!-- Gallery -->
          <div class="container">
            <div class="row text-center text-lg-start">
                        <?php if($icon == "../public/multimedia/icon-www.png"){?>
                        <!-- img 1 -->
                        <div class="col-lg-3 col-md-4 col-6 card">
                          <img
                                src="../public/multimedia/icon-www.png"
                                class="w-100 shadow-1-strong rounded mb-4"
                                alt="Boat on Calm Water"
                                />
                                <input type="radio" id="html" name="iconSite" value="../public/multimedia/icon-www.png" checked>
                        </div>


                        <?php }else{?>

                        
                        <!-- img 3 -->
                        <div class="col-lg-3 col-md-4 col-6 card">
                          <img
                                src="{{$icon}}"
                                class="w-100 shadow-1-strong rounded mb-4"
                                alt="Boat on Calm Water"
                                />
                                <input type="radio" id="html" name="iconSite" value={{$icon}} checked>
                                
                        </div>

                        <?php
                        }
                        if(isset($apiSearchResults)){
                        foreach ($apiSearchResults->icons as $itemSearch) { ?>

                        <!-- img 4 -->
                        <div class="col-lg-3 col-md-4 col-6 card">
                          <img
                                src="{{$api.$itemSearch.".svg"}}"
                                class="w-100 shadow-1-strong rounded mb-4"
                                alt="Boat on Calm Water"
                                />
                                <input type="radio" id="html{{$itemSearch}}" name="iconSite" value="{{$api.$itemSearch.".svg"}}">
                                  
                        </div>
                  



                        <?php }}?>
                        <?php foreach ($apiDefaultResults->uncategorized as $itemDefault) { ?>
                        <!-- img 5 -->
                        <div class="col-lg-3 col-md-4 col-6 card">
                          <img
                                src="{{$api."unjs:".$itemDefault.".svg"}}"
                                class="w-100 shadow-1-strong rounded mb-4"
                                alt="Boat on Calm Water"
                                />
                                <input type="radio" id="html{{$itemDefault}}" name="iconSite" value="{{$api."unjs:".$itemDefault.".svg"}}">
                                
                        </div>
                                                  
                        <?php }?>


                      </div>
          </div>
      <!-- Gallery --> 


        </div>
      </div>
      
      
      {{-- <x-select_comp>
          <x-slot name="keyword">{{$site->name_s}}</x-slot>
          <x-slot name="icon">{{$site->icon_s}}</x-slot>
      </x-select_comp> --}}

      
  </small>
</div>







{{-- ****************** OFFCANVAS ******************--}}

