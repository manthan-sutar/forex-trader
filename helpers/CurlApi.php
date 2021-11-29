<?php 

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;


class CurlApi
{
    function request($url,$method,$headers, $params){        
        $opts = array(
            'http'=>array(
              'method'=>$method,
              'header'=> $headers,
              'content' => $params,
            )
          );
          $context = stream_context_create($opts);
          // Open the file using the HTTP headers set above
          $file = file_get_contents($url, false, $context);


        // $curl = curl_init($url);
        // curl_setopt($curl, CURLOPT_URL, $url);
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        // $resp = curl_exec($curl);
        // curl_close($curl);
        return $file;
    }
}