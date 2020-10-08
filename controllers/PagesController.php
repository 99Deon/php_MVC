<?php

class PagesController {

public function home(){

// Recieve the request 

// Delegate

// return a response

        $users = App::get('database')->selectAll('Users');

        require 'views/index.view.php'; 

}

public function about(){


require 'views/about.view.php';

}

public function contact(){


require 'views/contact.view.php';
    

}
    




}