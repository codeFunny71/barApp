<?php

/**
 * Marcus Absher
 * Date: 3-1-19
 * http://mabsher.greenriverdev.com/328/barApp/
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload
require_once('vendor/autoload.php');
session_start();
require_once('model/database.php');


$valid = false;
//create an instance of the Base class
$f3 = Base::instance();

//Turn on fat free error reporting
$f3->set('DEBUG', 3);

$data = new Database();
$dbh = $data->connect();

if(!$_SESSION['orderItems']) {
    $_SESSION['orderItems'] = [];
}



//Define route
$f3->route('GET|POST /',
    function($f3) {

        if(isset($_POST['submit'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $zip = $_POST['zip'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];

            $newCustomer = new Customer($fname, $lname, $address, $city, $state, $zip, $phone, $email, $password);
            //$data = new Database();
            Database::insertCustomer($newCustomer);

            $_SESSION['newCustomer'] = $newCustomer;
            $f3->reroute('/drinkOrder');

        }
        //echo '<h1>My Dating Website</h1>';
        $view = new View;
        echo $view->render('views/signUp.html');
    }
);

$f3->route('GET|POST /drinkOrder',
    function($f3) {
        $total = 0;
        $customerInfo = $_SESSION['newCustomer'];
        $menuItems = Database::getMenuItems();
        $f3->set('menuItems', $menuItems);
        $f3->set('total', $total);
        $f3->set('orderItems',$_SESSION['orderItems'] );
        //print_r($_POST);

        if(isset($_POST['submit'])) {
            $itemID = $_POST['submit'];
            $orderItems = $_SESSION['orderItems'];
            array_push($orderItems,$itemID);
            $_SESSION['orderItems'] = $orderItems;
            $f3->set('orderItems',$orderItems );
        }

        $template = new Template();

        echo $template->render('views/drinkOrder.html');
    });



$f3->run();