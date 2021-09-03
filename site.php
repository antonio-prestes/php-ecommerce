<?php
use \Hcode\Page;
use \Slim\Slim;


$app->get('/', function () {
    $page = new Page([
    ]);
    $page->setTpl("index");
});


