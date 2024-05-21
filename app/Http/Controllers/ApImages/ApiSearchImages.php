<?php
$api = "https://api.iconify.design/";
$ct = curl_init();


curl_setopt($ct, CURLOPT_URL, $api."search?query=".trim($keyword));
//curl_setopt($ct, CURLOPT_URL, "https://localhost/webapp/public/api/user");
//curl_setopt($ct, CURLOPT_URL, "file:///C:/xampp/htdocs/rest-read-json-v2-main/file.json");
//curl_setopt($ct, CURLOPT_URL, "file:///C:/Users/johan/Desktop/user.json");
//curl_setopt($ct, CURLOPT_URL, "file:///C:/Users/johan/Desktop/search.json");
curl_setopt($ct, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ct, CURLOPT_HEADER, FALSE);
curl_setopt($ct, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$responserest = curl_exec($ct);
curl_close($ct);
$apiSearchResults = json_decode($responserest);
?>
