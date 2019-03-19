<?php

/**
 * Class Database
 * This class creates a Database object for connecting to the db
 */
class Database
{
    /**
     * This function connects to the database
     * @return PDO|void
     */
    public function connect()
    {
        try {
            if ($_SERVER['USER'] == 'mabsherg')
            {
                require_once '/home/mabsherg/config.php';
            }

            else if ($_SERVER['USER'] == 'mprelesn')
            {
                require_once '/home/mprelesn/config.php';
            }
            //Instantiate a database object
            $dbh = new PDO(DB_DSN, DB_USERNAME,
                DB_PASSWORD);
            //echo "Connected to database!!!";
            return $dbh;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return;
        }
    }

    /**
     * This function inserts a customer into the database
     * @param $newMem the new member to be added
     * @return bool true if the insertion was successful, false if not
     */
    public static function insertCustomer($newMem)
    {
        $newAdd = $newMem;

        global $dbh;
        //1. define the query
        $sql = "INSERT INTO customers (emailAddress, password, firstName, lastName, address, city, state, zipCode, phone, account)
            VALUES (:emailAddress, :password, :firstName, :lastName, :address, :city, :state, :zipCode, :phone, :account)";
        /* $sql = "INSERT INTO Members (fname, lname, age, gender, phone, email, state, seeking, bio, interests, premium)
             VALUES (:fname, :lname, :age, :gender, :phone, :email, :state, :seeking, :bio, :interests, :premium)";*/
        //2. prepare the statement

        $statement = $dbh->prepare($sql);
        //3. bind parameters
        $statement->bindParam(':firstName', $newAdd->getFirstName(), PDO::PARAM_STR);
        $statement->bindParam(':lastName', $newAdd->getLastName(), PDO::PARAM_STR);
        $statement->bindParam(':address', $newAdd->getAddress(), PDO::PARAM_STR);
        $statement->bindParam(':city', $newAdd->getCity(), PDO::PARAM_STR);
        $statement->bindParam(':state', $newAdd->getState(), PDO::PARAM_STR);
        $statement->bindParam(':zipCode', $newAdd->getZipCode(), PDO::PARAM_STR);
        $statement->bindParam(':phone', $newAdd->getPhone(), PDO::PARAM_STR);
        $statement->bindParam(':emailAddress', $newAdd->getEmail(), PDO::PARAM_STR);
        $statement->bindParam(':password', $newAdd->getPassword(), PDO::PARAM_STR);
        $statement->bindParam(':account', $newAdd->getAccount(), PDO::PARAM_INT);


        //4. execute the statement
        $success = $statement->execute();
        //5. return the result
        return $success;
    }

    /**
     * This function returns all the customers in the database
     * @return array the customers
     */
    public static function getCustomers()
    {
        global $dbh;
        //1. define the query
        $sql = "SELECT * FROM customers ORDER BY lastName";
        //2. prepare the statement
        $statement = $dbh->prepare($sql);
        //3. bind parameters

        //4. execute the statement
        $statement->execute();
        //5. return the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    /**
     * This function gets the customer object
     * @param $emailAddress the email address of the customer to return
     * @return array the array of the object's elements
     */
    public static function getCustomerID($emailAddress)
    {

        global $dbh;
        //1. define the query
        $sql = "SELECT * FROM customers WHERE emailAddress=:emailAddress";
        //2. prepare the statement
        $statement = $dbh->prepare($sql);
        //3. bind parameters
        $statement->bindParam(':emailAddress', $emailAddress, PDO::PARAM_STR);
        //4. execute the statement
        $statement->execute();
        //5. return the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        //print_r($result);
        return $result[0];
    }

    /**
     * This function updates a customer's data
     * @param $update the customer to update
     * @return array the row matching the customer to update
     */
    public static function updateCustomer($update)
    {

        global $dbh;
        //1. define the query
        $sql = "UPDATE customers SET emailAddress = :emailAddress, password = :password, firstName = :firstName, lastName = :lastName, address = :address, city = :city, state = :state, zipCode = :zipCode, phone = :phone, account = :account";
        //2. prepare the statement
        $statement = $dbh->prepare($sql);
        //3. bind parameters
        $statement->bindParam(':firstName', $update->getFirstName(), PDO::PARAM_STR);
        $statement->bindParam(':lastName', $update->getLastName(), PDO::PARAM_STR);
        $statement->bindParam(':address', $update->getAddress(), PDO::PARAM_STR);
        $statement->bindParam(':city', $update->getCity(), PDO::PARAM_STR);
        $statement->bindParam(':state', $update->getState(), PDO::PARAM_STR);
        $statement->bindParam(':zipCode', $update->getZipCode(), PDO::PARAM_STR);
        $statement->bindParam(':phone', $update->getPhone(), PDO::PARAM_STR);
        $statement->bindParam(':emailAddress', $update->getEmail(), PDO::PARAM_STR);
        $statement->bindParam(':password', $update->getPassword(), PDO::PARAM_STR);
        $statement->bindParam(':account', $update->getAccount(), PDO::PARAM_INT);
        //4. execute the statement
        $statement->execute();
        //5. return the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    /**
     * This function gets the menu items from the bar
     * @return array the menu items
     */
    public static function getMenuItems()
    {

        global $dbh;
        //1. define the query
        $sql = "SELECT * FROM menuItem ORDER BY categoryID";
        //2. prepare the statement
        $statement = $dbh->prepare($sql);
        //3. bind parameters

        //4. execute the statement
        $statement->execute();
        //5. return the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    /**
     * This function gets the menu items by id
     * @param $id the id to search
     * @return array the array of items
     */
    public static function getMenuItemByID($id)
    {

        global $dbh;
        //1. define the query
        $sql = "SELECT * FROM menuItem WHERE itemID=:id";
        //2. prepare the statement
        $statement = $dbh->prepare($sql);
        //3. bind parameters
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        //4. execute the statement
        $statement->execute();
        //5. return the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        //print_r($result);
        return $result;
    }

    /**
     * This function inserts an order
     * @param $newOrder the order to insert
     * @return bool return true if successful, false if not
     */
    public static function insertOrder($newOrder)
    {
        global $dbh;
        //1. define the query
        $sql = "INSERT INTO orders (orderDate, customerID, barID, itemsOrdered, tip, tax, total, status)
            VALUES (CURDATE(), :customerID, :barID, :itemsOrdered, :tip, :tax, :total, :status)";

        $statement = $dbh->prepare($sql);
        //3. bind parameters
        $statement->bindParam(':customerID', $newOrder->getCustomerID(), PDO::PARAM_STR);
        $statement->bindParam(':barID', $newOrder->getBarID(), PDO::PARAM_STR);
        $statement->bindParam(':itemsOrdered', $newOrder->getItemsOrdered(), PDO::PARAM_STR);
        $statement->bindParam(':tip', $newOrder->getTip(), PDO::PARAM_STR);
        $statement->bindParam(':tax', $newOrder->getTax(), PDO::PARAM_STR);
        $statement->bindParam(':total', $newOrder->getTotal(), PDO::PARAM_STR);
        $statement->bindParam(':status', $newOrder->getStatus(), PDO::PARAM_STR);

        //4. execute the statement
        $success = $statement->execute();
        //5. return the result
        return $success;

    }

    /**
     * This function gets the current orders
     * @return array the orders to be filled
     */
    public static function getOrders()
    {
        global $dbh;
        //1. define the query
        $sql = "SELECT * FROM orders ORDER BY orderID";
        //2. prepare the statement
        $statement = $dbh->prepare($sql);
        //3. bind parameters

        //4. execute the statement
        $statement->execute();
        //5. return the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }


    /**
     * This function updates the current orders
     * @param $orderID the id of the order
     * @return array the array of orders
     */
    public static function updateOrders($orderID)
    {
        global $dbh;
        //1. define the query
        $sql = "UPDATE orders SET status = 1 WHERE orderID = :orderID";
        //2. prepare the statement
        $statement = $dbh->prepare($sql);
        //3. bind parameters
        $statement->bindParam(':orderID', $orderID, PDO::PARAM_STR);
        //4. execute the statement
        $statement->execute();
        //5. return the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

}