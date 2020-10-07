<?php

$users = $app['database']->selectAll('Users');

require 'views/index.view.php'; 