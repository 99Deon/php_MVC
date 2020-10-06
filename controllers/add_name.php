<?php 

//connexion 
$task=$app['database']->insert('users',[

    'name'=>$_POST['name']
]);
