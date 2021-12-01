<?php 

use Symfony\Component\HttpClient\HttpClient;

class CallApi
{
    function requestMetaTrader($endpoint,$method,$params = []){  
        $api_url = META_API_URL."users/current/accounts/".ACCOUNT_ID."/".$endpoint."?api_key=".AUTH_TOKEN;
        $headers = array(
            "Accept: application/json",
            "auth-token:".AUTH_TOKEN,
        ); 
        $client = HttpClient::create();
        $response = $client->request($method,$api_url, [
            'headers' => $headers,
            'json' => $params
        ]);

        $res['statusCode'] = 

        $content = $response->getContent();
        return $content;
    }

    function requestMetaProvision($endpoint = "",$method, $params = []){
        $api_url = META_PROVISION_API_URL."users/current/accounts/".ACCOUNT_ID."/deploy";

        $headers = array(
            "Accept: application/json",
            "auth-token:".AUTH_TOKEN,
        ); 

        $client = HttpClient::create();
        $response = $client->request($method,$api_url, [
            'headers' => $headers,
            'json' => $params
        ]);
        $content = $response->getContent();
        return $content;
    }
}