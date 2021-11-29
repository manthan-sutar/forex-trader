<?php

require_once (__DIR__.'/../helpers/MetaApi.php');
require_once (__DIR__.'/../helpers/endpoints.php');

$app->get('/account', 'account');
$app->get('/orders', 'orders');
$app->get('/positions', 'positions');
$app->get('/trade', 'trade');

function account(){
    $metaApi = new MetaApi();
    return $metaApi->request("accountInformation");
}

function orders(){
    $metaApi = new MetaApi();
    return $metaApi->request("orders");
}


function positions(){
    $metaApi = new MetaApi();
    return $metaApi->request("positions");
}


function trade(){
    $metaApi = new MetaApi();
    $postdata = http_build_query(
        array(
            'actionType' => 'ORDER_TYPE_SELL',
            'symbol' => 'EURUSD',
            'volume' => 0.01,
            'takeProfit' => 1.01
        )
    );
   return $metaApi->request('trade', $postdata, "POST");
}

