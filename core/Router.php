<?php

namespace App\Core;

use Exception;

//use App\Controllers\PagesController;

class Router
{
    protected $routes = [
                'GET'=>[],
                'POST'=>[]
    ];

   
    public static function load($file)
        {
              // create instance 
            $router = new static;

            //get router.php
            require $file;
        
            return $router;
        }

   

       
       
     public function get($uri,$controller)
            {
                /*initialisation of $routes[] 
                    exemple $routes=[
                        'GET'=>['about'=> 'PagesController@about']
                    ]
                */
                    $this->routes['GET'][$uri]=$controller;
            }


     public function post($uri,$controller)
            {
                $this->routes['POST'][$uri]=$controller;
        
            }


    public function direct($uri,$requestType)
        {
            if (array_key_exists($uri, $this->routes[$requestType])) 
            {

                return $this->callAction(
                                            //PagesController,about
                                        ...explode('@',$this->routes[$requestType][$uri])
                );

            }

            throw new Exception('No route defined for this URI.');
        }


    protected function callAction($controller,$action)
        {
            $controller="App\\Controllers\\{$controller}";
        
            if(! method_exists($controller,$action))
            {
            
                throw new Exception("{$controller} does not respond to the {$action} action", 1);
                
            }
            /* $controller = name of class ;
            
               $action = name of method which redirect to view

                new PagesController ()->about();
            */
          

            return(new $controller)->$action();   
        }




}