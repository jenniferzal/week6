<?php
/*
 * Jennifer Zaldivar
 * 5/9/23
 * 328/week6/index.php
 * Controller for week6 project
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create a F3 (Fat-Free Framework) object
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function () {
    //echo '<h1>Welcome to week6!</h1>';

    //Display a view page
    $view = new Template();
    echo $view->render('views/info.html');
});


//Run Fat-Free
$f3->run();

?>