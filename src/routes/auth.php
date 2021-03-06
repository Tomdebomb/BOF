<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__.'/../classes/Auth.php';

$app->get('/login', function (Request $request, Response $response, array $args) {
    return $this->view->render($response, 'login.html');
})->setName('login');

$app->post('/authenticate', 'ICCM\BOF\Auth:authenticate')->setName('authenticate');

$app->get('/logout', 'ICCM\BOF\Auth:logout')->setName('logout');

?>
