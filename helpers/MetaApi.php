<?php 

require 'constants.php';
require_once 'CurlApi.php';


class MetaApi{
    function openTrade($params){
        $curl = new CurlApi();
        return $curl->request('trade',"POST", $params);
    }

    function positions(){
        $curl = new CurlApi();
        return $curl->request('positions',"GET");
    }

    function orders(){
        $curl = new CurlApi();
        return $curl->request('orders',"GET");
    }

    function account(){
        $curl = new CurlApi();
        return $curl->request('account',"GET");
    }

    function closePosition($positionId){
        $curl = new CurlApi();
        $params['actionType'] = "POSITION_CLOSE_ID";
        $params['positionId'] = $positionId;
        return $curl->request('trade',"POST");
    }
}