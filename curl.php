<?php 

$curl=curl_init();
$string_name="php books";
//https://www.amazon.in/s?k=php+books&ref=nb_sb_noss_1
$url="https://www.facebook.com/Vines/photos/";
//set options
curl_setopt($curl, CURLOPT_URL, $url );
//for ssl url
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
//run curl (Execute http request)
curl_exec($curl);
//close curl resourse
curl_close($curl);



?>