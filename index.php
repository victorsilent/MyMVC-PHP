<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require 'vendor/autoload.php';
require 'core/bootstrap.php';

Router::load()
    ->direct(Request::uri(), Request::method());



