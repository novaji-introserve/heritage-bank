<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once 'vendor/autoload.php';
require_once 'helpers.php';

$app = new \Slim\App;
$dwoo = new Dwoo();
$dwoo->setCacheTime(5);
$app->get('/account/new', function (Request $request, Response $response) use($dwoo) {
    //$response->withJson(setJson('success', $result));
    $variables = array('heading' => 'Open an Account',
        'subheading' => 'Fill this form',
        'host' => HOST);
    return $dwoo->get('views/account-new.html', $variables);
});
$app->get('/', function (Request $request, Response $response) use($dwoo) {
    //$response->withJson(setJson('success', $result));
    $variables = array('heading' => 'New Account',
        'subheading' => 'Personal Information',
        'host' => HOST);
    return $dwoo->get('views/new-account.html', $variables);
});
$app->get('/paddy/new', function (Request $request, Response $response) use($dwoo) {
    //$response->withJson(setJson('success', $result));
    $variables = array('heading' => 'Paddy Setup',
        'subheading' => 'Personal Information',
        'host' => HOST);
    return $dwoo->get('views/paddy-new.html', $variables);
});
$app->get('/pib/new', function (Request $request, Response $response) use($dwoo) {
    //$response->withJson(setJson('success', $result));
    $variables = array('heading' => 'Personal Internet Banking',
        'subheading' => 'Personal Information',
        'host' => HOST);
    return $dwoo->get('views/pib-new.html', $variables);
});
$app->get('/atm/complaint', function (Request $request, Response $response) use($dwoo) {
    //$response->withJson(setJson('success', $result));
    $variables = array('heading' => 'ATM Services',
        'subheading' => 'Personal Information',
        'host' => HOST);
    return $dwoo->get('views/atm-complaint.html', $variables);
});
$app->run();
