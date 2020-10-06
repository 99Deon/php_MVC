<?php 

//connexion 
$task=$app['database']->insert('Users',[

    'name'=>$_POST['name']
]);

header('Location: /');