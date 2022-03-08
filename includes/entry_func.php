<?php
    //making entry to the registration table 'regis'
    function createEntry($conn, $full_name, $age, $email, $address, $pass, $usr_cont) {
        $sql = "Insert into regis (full_name, age, email, address, passwd, contact_number) value(?, ?, ?, ?, ?, ?);";
        $stmt = $conn->stmt_init();
        $stmt->prepare($sql);
        $stmt->bind_param('ssssss', $full_name, $age, $email, $address, $pass, $usr_cont);
        $stmt->execute();
    }

    // checking whether the donor exists or not

    function donorExists($conn, $identity){
        $sql = "SELECT * from book where adhaar_id = ?;";
        $stmt = $conn->stmt_init();
        $stmt->prepare($sql);
        $stmt->bind_param('s', $identity);
        $stmt->execute();
        $result = $stmt->fetch();
    
        if($result > 0) {
            return true;
        }
        return false;
    }

    //checking for existing 'email' entry 

    function donorEmailExists($conn, $identity){
        $sql = "SELECT * from book where email = ?;";
        $stmt = $conn->stmt_init();
        $stmt->prepare($sql);
        $stmt->bind_param('s', $identity);
        $stmt->execute();
        $result = $stmt->fetch();
    
        if($result > 0) {
            return true;
        }
        return false;
    }

    // making entry to the 'book' table

    function createDonor($conn, $relation, $date, $gender, $donor_name, $identity, $blood_group, $email, $camp_location, $book_time) {
        $sql = "Insert into book(relation, book_date, gender, donor_name, adhaar_id, blood_group, email, location, book_time) values(?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = $conn->stmt_init();
        $stmt->prepare($sql);
        $stmt->bind_param('sssssssss', $relation, $date, $gender, $donor_name, $identity, $blood_group, $email, $camp_location, $book_time);
        $stmt->execute();
    }

    // checking whether the user is already registerd

    function usrExists($conn, $email){
        $sql = "SELECT * from regis where email = ?;";
        $stmt = $conn->stmt_init();
        $stmt->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->fetch();
    
        if($result > 0) {
            return true;
        }
        return false;
    }

    // fetching data from 'regis' table

    function datafetch($conn, $email) {
        $sql="select * from regis where email = '$email';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            return $result->fetch_assoc();
        }
    }

    //all the sanition and error function definitions

    function invalidField($donor_name, $gender, $identity) {
        if(empty($donor_name) && empty($gender) && empty($identity)) {
            return true;
        }
    }

    function invalidGender($gender) {
        if (empty($gender)) {
            return true;
        }
    }

    function invalidName($donor_name){
        if (!preg_match('/^([a-z]+[,.]?[ ]?|[a-z]+[\'-]?)+$/i', $donor_name) || empty($donor_name)){
            return true;
        }
    }

    function invalidIden($identity) {
        $pattern = "/^[2-9][0-9]{11}/i";
        if (!preg_match($pattern, $identity) || empty($identity)) {
            return true;
        }
    }

    function invalidEmail($email) {
        $pattern = "/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i"; 
        if (!preg_match($pattern, $email) || empty($email)) {
            return true;
        }
    }

    // this check when 'self''s fullname is updated 

    function nameCheck($conn, $data, $key) {
        $sql = "SELECT * from book where email = ? and relation = 'Self';";
        $stmt = $conn->stmt_init();
        $stmt->prepare($sql);
        $stmt->bind_param('s', $data);
        $stmt->execute();
        $result = $stmt->fetch();
    
        if($result > 0) {
            return true;
        }
        return false;
    }

    // All the updation functions of the user dashboard exist here

    function nameUpdate($conn, $data, $key) {
        $sql = "
        UPDATE regis
        SET full_name = ?
        WHERE email = ?;
        ";
        $stmt = $conn->stmt_init();
        $stmt->prepare($sql);
        $stmt->bind_param('ss', $data, $key);
        $stmt->execute();
    }

    function mailUpdate($conn, $data, $key) {
        $sql = "
        UPDATE regis
        SET email = ?
        WHERE email = ?;
        ";
        $stmt = $conn->stmt_init();
        $stmt->prepare($sql);
        $stmt->bind_param('ss', $data, $key);
        $stmt->execute();
    }

    function slotmailUpdate($conn, $data, $key) {
        $sql = "
        UPDATE book
        SET email = ?
        WHERE email = ?;
        ";
        $stmt = $conn->stmt_init();
        $stmt->prepare($sql);
        $stmt->bind_param('ss', $data, $key);
        $stmt->execute();
    }


    function slotnameUpdate($conn, $data, $key) {
        $sql = "
        UPDATE book
        SET donor_name = ?
        WHERE relation = \"Self\" and email = ?;
        ";
        $stmt = $conn->stmt_init();
        $stmt->prepare($sql);
        $stmt->bind_param('ss', $data, $key);
        $stmt->execute();
    }


    function numberUpdate($conn, $data, $key) {
        $sql = "
        UPDATE regis
        SET contact_number = ?
        WHERE email = ?;
        ";
        $stmt = $conn->stmt_init();
        $stmt->prepare($sql);
        $stmt->bind_param('ss', $data, $key);
        $stmt->execute();
    }

    function addressUpdate($conn, $data, $key) {
        $sql = "
        UPDATE regis
        SET address = ?
        WHERE email = ?;
        ";
        $stmt = $conn->stmt_init();
        $stmt->prepare($sql);
        $stmt->bind_param('ss', $data, $key);
        $stmt->execute();
    }

    function addAge($conn, $data, $key) {
        $sql = "
        UPDATE regis
        SET age = ?
        WHERE email = ?;
        ";
        $stmt = $conn->stmt_init();
        $stmt->prepare($sql);
        $stmt->bind_param('ss', $data, $key);
        $stmt->execute();
    }

    function passUpdate($conn, $data, $key) {
        $sql = "
        UPDATE regis
        SET passwd = ?
        WHERE email = ?;
        ";
        $stmt = $conn->stmt_init();
        $stmt->prepare($sql);
        $stmt->bind_param('ss', $data, $key);
        $stmt->execute();
    }



