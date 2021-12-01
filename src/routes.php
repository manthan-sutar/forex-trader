<?php

require_once (__DIR__.'/../helpers/MetaApi.php');
require_once (__DIR__.'/../helpers/endpoints.php');

$app->get('/account', 'account');
$app->get('/orders', 'orders');
$app->get('/positions', 'positions');
$app->get('/trade', 'trade');
$app->get('/webhooook', 'webhooook');

function account(){
    $metaApi = new MetaApi();
    return $metaApi->account();
}

function orders(){
    $metaApi = new MetaApi();
    return $metaApi->orders();
}

function positions(){
    $metaApi = new MetaApi();
    return $metaApi->positions();
}

function webhook(){
    return "asdasd";
}

