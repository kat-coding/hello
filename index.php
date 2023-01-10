<?php
//THIS IS THE CONTROLLER FOR HELLO PROJECT

//Turn on error recording
init_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload file
require_once("vendor/autoload.php");

//Create an instance of the base class
$f3 = Base::instance();
//instantiating base class and assiging to $f3 variable

//define default route "home page"
$f3->route('GET /', function (){
    echo '<h1>Hello, Fat Free</h1>';
});


//Run fat-free
$f3->run();
//run method of $f3 object  -> is same as . in java

