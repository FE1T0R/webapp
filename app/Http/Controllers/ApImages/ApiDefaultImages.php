<?php
$ct = curl_init();
curl_setopt($ct, CURLOPT_URL, $api."collection?prefix=unjs&pretty=1"); 
curl_setopt($ct, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ct, CURLOPT_HEADER, FALSE);
curl_setopt($ct, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$responserest = curl_exec($ct);
curl_close($ct);
$apiDefaultResults = json_decode($responserest);

?>
