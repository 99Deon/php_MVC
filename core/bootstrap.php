<?php
  
 use App\Core\App;
// $app = [];

// $app['config'] = require 'config.php';

//when add composer we do not need these things
//           ⎷
// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/Connection.php';
// require 'core/database/QueryBuilder.php';
 
App::bind('config',require 'config.php');

//die(var_dump(App::get('get'))); 

App::bind('database',new QueryBuilder(
    Connection::make(App::get('config')['database'])
));


 function view($name,$data=[]){

    extract($data);

    return  require ("App/views/{$name}.view.php");

}

function redirect($path)
{
    return  header("Location:{$path}");
}