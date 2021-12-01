<?php 

require_once 'CallApi.php';


class MetaApi{
    function openTrade($params){
        $curl = new CallApi();
        return $curl->requestMetaTrader('trade',"POST", $params);
    }

    function positions(){
        $curl = new CallApi();
        return $curl->requestMetaTrader('positions',"GET");
    }

    function orders(){
        $curl = new CallApi();
        return $curl->requestMetaTrader('orders',"GET");
    }

    function account(){
        $curl = new CallApi();
        return $curl->requestMetaTrader('accountInformation',"GET");
    }

    function closePosition($positionId){
        $curl = new CallApi();
        $params['actionType'] = "POSITION_CLOSE_ID";
        $params['positionId'] = $positionId;
        return $curl->requestMetaTrader('trade',"POST");
    }
    
}