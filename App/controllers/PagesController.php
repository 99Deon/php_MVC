<?php

namespace App\Controllers;

use App\Core\App;


class PagesController {

public function home(){

// Recieve the request 

// Delegate

// return a response

        $users = App::get('database')
                    ->selectAll('Users');

        return view('index',['users'=>$users]); 


}

public function about(){

        $compny="Orroros";

     return view('about',['compney'=>$compny]);

}

public function contact(){


return view('contact');
    

}
public function add_name()
{

//$sql='insert into Users name values ({$_POST["name"]})';

 $users = App::get('database')->insert('Users',$_POST);

   echo 'data added';
}
    




}