<?php

class PagesController {

public function home(){

// Recieve the request 

// Delegate

// return a response

        $users = App::get('database')
                    ->selectAll('Users');

        require 'views/index.view.php'; 

}

public function about(){


require 'views/about.view.php';

}

public function contact(){


require 'views/contact.view.php';
    

}
public function add_name()
{

//$sql='insert into Users name values ({$_POST["name"]})';

 $users = App::get('database')->insert('Users',$_POST);

   echo 'data added';
}
    




}