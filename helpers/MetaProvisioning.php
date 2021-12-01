<?php

require_once 'CallApi.php';


class MetaProvisioning{
    function account(){
        $callApi = new CallApi();
        return $callApi->requestMetaProvision(ACCOUNT_ID,"GET");   
    }
    
    function deploy(){
        $callApi = new CallApi();
        return $callApi->requestMetaProvision(ACCOUNT_ID.'/deploy?executeForAllReplicas=true','POST');
    }
}