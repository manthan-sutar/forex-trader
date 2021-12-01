<?php

require_once (__DIR__.'/../helpers/MetaTraderApi.php');
require_once (__DIR__.'/../helpers/MetaProvisioning.php');
require_once (__DIR__.'/../helpers/endpoints.php');

$app->get('/account', 'account');
$app->get('/server-account', 'serverAccount');
$app->get('/orders', 'orders');
$app->get('/positions', 'positions');
$app->get('/trade', 'trade');
$app->get('/webhook', 'webhook');

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
    $metaProvision = new MetaProvisioning();
    return $metaProvision->deploy();

}

function serverAccount(){
    $metaProvision = new MetaProvisioning();
    return $metaProvision->account();
}

