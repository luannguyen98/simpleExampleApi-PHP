<?php
 
 $ch = curl_init();

 $url = "https://reqres.in/api/users?page=1 ";

 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch , CURLOPT_RETURNTRANSFER, true);

 $resp = curl_exec($ch);

 if($e = curl_error($ch)){
     echo $e;
 }
 else{
     $decoded = json_decode($resp,true);
     $data = $decoded['data'];
     foreach($data as $key => $value){
        
         echo $value['email']."\n";
     }
 }

 curl_close($ch);