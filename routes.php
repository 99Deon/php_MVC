<?php

$router->get('','PagesController@home');

$router->get( 'about','PagesController@about');

$router->get('contact','PagesController@contact');

$router->post('names','PagesController@add_name');

//var_dump($router->routes);