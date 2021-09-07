<?php
use \Hcode\Page;
use Slim\Slim;


$app = new Slim();


$app->get('/', function () {
    $page = new Page([
    ]);
    $page->setTpl("index");
});


