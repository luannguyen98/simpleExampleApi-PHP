<?php

 $url = "https://reqres.in/api/users/2";

$data_array = array(
    'name' => 'John Doe',
    'job'  => 'Web developer',
);

$data = http_build_query($data_array);
$header = array(
    'Authorization : luan',
);

$ch = curl_init();

 curl_setopt($ch ,CURLOPT_URL, $url);
 curl_setopt($ch ,CURLOPT_CUSTOMREQUEST,'PUT');
 curl_setopt($ch ,CURLOPT_POSTFIELDS,$data);
 curl_setopt($ch , CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch , CURLOPT_HTTPHEADER, $header);


 $resp = curl_exec($ch);

 if($e = curl_error($ch)){
     echo $e;
 }
 else{
     $decoded = json_decode($resp,true);
     var_dump($resp);
     var_dump($decoded);
     $encoded = json_encode($decoded);
     var_dump($encoded);
 }

 curl_close($ch);