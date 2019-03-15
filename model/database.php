<?php


class Database
{
    public function connect()
    {
        try {
            require_once '/home/mabsherg/config.php';
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
     * @return array
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
        //print_r($result);
//        if ($result[premium] == 1){
//            $admin = new PremiumMember($result[],$result[],$result[],$result[],$result[],);
//        }else{
//            $admin = new Member($result[],$result[],$result[],$result[],$result[],$result[]);
//        }

        return $result;
    }

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
        return $result;
    }

    /**
     * @return array
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
     * @return array
     */
    public static function getOrders()
    {
        global $dbh;
        //1. define the query
        $sql = "SELECT * FROM Orders ORDER BY orderID";
        //2. prepare the statement
        $statement = $dbh->prepare($sql);
        //3. bind parameters

        //4. execute the statement
        $statement->execute();
        //5. return the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

}