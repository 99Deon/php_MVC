<?php

namespace App\Core;


class Request
{
    public static function uri()
    {
        return 
        
          trim(parse_url($_SERVER['REQUEST_URI'])['path'],'/');
          
        
    }

        public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
                 
        
    }
}