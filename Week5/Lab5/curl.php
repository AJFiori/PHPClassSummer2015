<?php
$curl = curl_init(); 
// sets url 
                curl_setopt($curl, CURLOPT_URL, $site); 
//returns the transfer as a string 
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
// $output contains the output string 
                $output = curl_exec($curl); 
// closes curl  
                curl_close($curl);