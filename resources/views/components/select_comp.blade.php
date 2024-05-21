<?php
include_once "../app/Http/Controllers/ApImages/ApiSearchImages.php";
include_once "../app/Http/Controllers/ApImages/ApiDefaultImages.php";
?>
<select name="iconSite1">
    
    <?php if($icon == "../public/multimedia/icon-www.png"){?>
    <option class=" bg-dots-darker" value="{{"../public/multimedia/icon-www.png"}}" selected>
    Default 
    </option>
    <?php }else{?>
    <option class=" bg-dots-darker" value="{{"../public/multimedia/icon-www.png"}}">
    Default 
    </option>
    <option class=" bg-dots-darker" value="{{$icon}}" selected>
    {{$icon}}   
    </option>
    <?php
    }
    if(isset($apiSearchResults)){
    foreach ($apiSearchResults->icons as $itemSearch) { ?>
    <option class=" bg-dots-darker" value="{{$api.$itemSearch.".svg"}}">
    {{$api.$itemSearch}} 
    </option>
    <?php }}?>
    
    <?php foreach ($apiDefaultResults->uncategorized as $itemDefault) { ?>
    <option class=" bg-dots-darker" value="{{$api."unjs:".$itemDefault.".svg"}}">
    {{$api.$itemDefault}}
    </option>
    <?php }?>

</select>




