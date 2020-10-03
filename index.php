<?php
//echo phpinfo();
require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri());
    