<?php
/*
 * Jennifer Zaldivar
 * 5/9/23
 * 328/week6/index.php
 * Controller for week6 project: Templating
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create a F3 (Fat-Free Framework) object
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function ($f3) {
    //echo '<h1>Welcome to week6!</h1>';

    //Add data to f3 "hive"
    $f3->set('color', 'green');
    $f3->set('food', 'ramen');
    $f3->set('title', 'Welcome to Week 6: Templating');
    $f3->set('temp', 67);
    //Add radius variable
    $f3->set('radius', 10);
    //Add array of fruits to the controller
    $fruits = array('banana', 'apple', 'kiwi');
    $f3->set('fruits', $fruits);
    //Add array of vegetables
    $veggies = array('carrot', 'spinach', 'lettuce');
    $f3->set('veggies', $veggies);
    //Define an associative array of cupcake flavors
    $cupcakes = array('choc-mocha'=>'Chocolate Mocha',
                        'straw-cheese'=>'Strawberry Cheesecake',
                        'blue-lemon'=>'Blueberry Lemon');
    $f3->set('cupcakes', $cupcakes);


    //Display a view page
    $view = new Template();
    echo $view->render('views/info.html');
});


//Run Fat-Free
$f3->run();

?>