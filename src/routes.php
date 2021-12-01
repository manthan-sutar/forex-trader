<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once (__DIR__.'/../helpers/MetaTraderApi.php');
require_once (__DIR__.'/../helpers/MetaProvisioning.php');
require_once (__DIR__.'/../helpers/endpoints.php');

$app->get('/account', 'account');
$app->post('/server-account', 'serverAccount');
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

function serverAccount($request, $response, $args){
    $json = $_POST->email;
    return $json;
    // $metaProvision = new MetaProvisioning();
    // return $metaProvision->deploy();
    // $account = json_decode($reponse);
    // $accountState = $account->state;
    // if($accountState == "UNDEPLOYED"){
    //     $metaProvision->deploy();
    //     return "Account Depplying";
    // }else{
    //     return true;
    // }
}



$app->post('/post/{asd}', function (Request $request) use ($app){
    $body = $app->request->getBody();
    $data = json_decode($body, true);
    print_r($data);
});

