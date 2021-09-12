<?php

use \Hcode\Model\User;

function formatPrice($vlprice)
{
    if (!$vlprice > 0) $vlprice = 0;

    return number_format($vlprice, 2, ",", ".");
}
function getUserName(){
    $user = User::getFromSession();//metodo da classe user
    return $user->getdesperson();
}

function checkLogin($inadmin =  true){
    return User::checkLogin($inadmin);
}