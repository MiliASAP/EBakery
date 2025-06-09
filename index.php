<?php

require 'Routing.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = trim($path, '/');


Routing::get('homePage', 'DefaultController@homePage');
Routing::get('login', 'DefaultController@login');
Routing::post('login', 'SecurityController@login');
Routing::post('register', 'SecurityController@register');
Routing::get('cart', 'DefaultController@cart');
Routing::get('more/{id}', 'DefaultController@more');
Routing::post('cart/add', 'CartController@add');
Routing::delete('cart/delete', 'CartController@delete');
Routing::get('cart/summary', 'CartController@summary');
Routing::get('account', 'DefaultController@account');
Routing::post('logout', 'SecurityController@logout');


Routing::run($path);

