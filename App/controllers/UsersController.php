<?php

namespace App\Controllers;

use App\Core\App;


class UsersController{


public function index()
{
 //  if($_SERVER['REQUEST_METHOD']=='GET')
       
     $users = App::get('database')
                    ->selectAll('Users');
                    
    return view('users',compact('users'));


}

public function store()
{
     /*
                for insert in database
                        1-   // APP::get('database'); return array of login database info;
                             **              **
                        2- //insert(); make connexion and exec
            */

          App::get('database')->insert('Users',$_POST);

           return redirect('/');
}



}

