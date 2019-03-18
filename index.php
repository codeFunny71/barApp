<?php
ob_start();
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
require_once('model/validation.php');
print_r($_SESSION);

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



//Define Default route
$f3->route('GET|POST /', function($f3) {
    global $dbh;

    if (!empty($_POST))
    {
        if (empty($_POST['email']) || empty($_POST['password']))
        {
            "<p>Must enter both email and password. Please try again.</p>";
            return;
        }

        //1. define the query
        $sql = "SELECT * FROM customers WHERE emailAddress=:emailAddress AND password=:password";
        //2. prepare the statement
        $statement = $dbh->prepare($sql);
        //3. bind parameters
        $statement->bindParam(':emailAddress', $_POST['email'], PDO::PARAM_STR);
        $statement->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
        //4. execute the statement
        $statement->execute();
        //5. return the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);




        if (!empty($result))
        {
            //pull customer info
            $currentCustomer = Database::getCustomerID($_POST['email']);
            $_SESSION['customerID'] = $currentCustomer['customerID'];
            //reroute
            $f3 -> reroute('/home');
        }

        else
        {
//            "<p>Email or password are incorrect. Please try again.</p>";
//            $f3 -> reroute('/');
        }
    }

    //load a template
    $template = new Template();
    echo $template->render('views/home.html');
});

//Define route
$f3->route('GET|POST /home', function() {
    //load a template
    echo $_SESSION['customerID'];
    $template = new Template();
    echo $template->render('views/loggedInHP.html');
});

$f3->route('GET|POST /account', function() {
    //load a template
    $template = new Template();
    echo $template->render('views/accountInfo.html');
});

$f3->route('GET|POST /payTab', function() {
    //load a template
    $template = new Template();
    echo $template->render('views/payTab.html');
});

$f3->route('GET|POST /viewTab', function() {
    //load a template
    $template = new Template();
    echo $template->render('views/viewTab.html');
});

//Define route
$f3->route('GET|POST /adminLogin', function($f3) {
    global $dbh;

    if (!empty($_POST))
    {
        //1. define the query
        $sql = "SELECT * FROM customers WHERE emailAddress=:emailAddress AND password=:password";
        //2. prepare the statement
        $statement = $dbh->prepare($sql);
        //3. bind parameters
        $statement->bindParam(':emailAddress', $_POST['email'], PDO::PARAM_STR);
        $statement->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
        //4. execute the statement
        $statement->execute();
        //5. return the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        if (true)
        {
            //reroute
            $f3 -> reroute('/AdminView');
        }
    }

    //load a template
    $template = new Template();
    echo $template->render('views/adminLogin.html');
});

//sign up route
$f3->route('GET|POST /signup',
    function($f3) {

        if(isset($_POST['submit'])) {

            $isValid = true;

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $zip = $_POST['zip'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];

            if(validName($fname, $lname))
            {
                $_SESSION['fname'] = $fname;
                $_SESSION['lname'] = $lname;
            }
            else
            {
                $f3->set("errors['name']", "Name is not entered correctly. Please try again.");
                $isValid = false;
            }

            if(validAddress($address))
            {
                $_SESSION['address'] = $address;
            }
            else
            {
                $f3->set("errors['address']", "Address is not entered correctly. Please try again.");
                $isValid = false;
            }

            if(validCity($city))
            {
                $_SESSION['city'] = $city;
            }
            else
            {
                $f3->set("errors['city']", "City is not entered correctly. Please try again.");
                $isValid = false;
            }

            if(validState($state))
            {
                $_SESSION['state'] = $state;
            }
            else
            {
                $f3->set("errors['state']", "State is not entered correctly. Please try again.");
                $isValid = false;
            }

            if(validZip($zip))
            {
                $_SESSION['zip'] = $zip;
            }
            else
            {
                $f3->set("errors['zip']", "Zip is not entered correctly. Please try again.");
                $isValid = false;
            }

            if(validPhone($phone))
            {
                $_SESSION['phone'] = $phone;
            }
            else
            {
                $f3->set("errors['phone']", "Phone is not entered correctly. Please try again.");
                $isValid = false;
            }

            if(validEmail($email))
            {
                $_SESSION['email'] = $email;
            }
            else
            {
                $f3->set("errors['email']", "Email is not entered correctly. Please try again.");
                $isValid = false;
            }

            if ($isValid)
            {
                $newCustomer = new Customer($fname, $lname, $address, $city, $state, $zip, $phone, $email, $password);

                Database::insertCustomer($newCustomer);
                $customerID = Database::getCustomerID($email);
                $_SESSION['customerID'] = $customerID;
                $_SESSION['newCustomer'] = $newCustomer;
                $f3->reroute('/drinkOrder');
            }
        }
        $view = new Template;
        echo $view->render('views/signUp.html');
    }
);

$f3->route('GET|POST /drinkOrder',
    function($f3) {
        $total = 0;
        $itemNames = [];
        //pulling emailAddress

        $customerInfo = $_SESSION['newCustomer'];
        $menuItems = Database::getMenuItems();
        $f3->set('menuItems', $menuItems);
        $f3->set('total', $total);
        $f3->set('orderItems',$_SESSION['orderItems'] );
        print_r($_POST);

        if(isset($_POST['submit']) ) {
            $itemID = $_POST['submit'];
            $orderItems = $_SESSION['orderItems'];
            array_push($orderItems,$itemID);
            $_SESSION['orderItems'] = $orderItems;
            $f3->set('orderItems',$orderItems );

            foreach ($menuItems as $item){
                foreach ($orderItems as $drinkID){
                    if($item['itemID'] == $drinkID){
                        $total += $item['itemPrice'];
                    }
                }
            }
            $f3->set('total',$total );

        }

        if(isset($_POST['enter'])) {
            $queueItem = "";
            $total = $_POST['total'];
            $orderItems = $_SESSION['orderItems'];
            //$lineItems = implode(",",$orderItems);

            foreach ($menuItems as $item){
                foreach ($orderItems as $drinkID){
                    if($item['itemID'] == $drinkID){
                        $queueItem .= $item['itemName'].", ";
                    }
                }
            }
            $customerID = $_SESSION['customerID'];
            $newOrder = new Orders((int)$customerID, 1, $queueItem, $total);
            Database::insertOrder($newOrder);
            $orderItems = [];
            $_SESSION['orderItems'] = $orderItems;

            $f3->set('total',0);
            $f3->set('orderItems',$_SESSION['orderItems'] );
            $f3->reroute('/home');
        }

        $template = new Template();

        echo $template->render('views/drinkOrder.html');
    });

//Display admin view
$f3->route('GET|POST /AdminView',
    function($f3) {
        if(isset($_POST['submit'])) {
            $orderID = $_POST['submit'];
            Database::updateOrders($orderID);
        }
        $orders = Database::getOrders();
        $menuItems = Database::getMenuItems();

        $f3->set('orders', $orders);
        $f3->set('menuItems',$menuItems);

        $template = new Template();
        echo $template->render('views/AdminView.html');
    }
);

$f3->run();
ob_flush();