<?php 

require 'constants.php';
require_once 'CurlApi.php';

class MetaApi{
    function request($endpoint, $params = null, $method = "GET"){
        $curl = new CurlApi();
        $api_url = META_API_URL."users/current/accounts/".ACCOUNT_ID."/".$endpoint."?api_key=".AUTH_TOKEN;
        $headers = array(
            "Accept: application/json",
            "auth-token:".AUTH_TOKEN,
        );
        return $curl->request($api_url,$method,$headers,$params);
    }   
}