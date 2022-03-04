<?php

include_once (__DIR__."/dbconnec.php");
include_once (__DIR__."/entry_func.php");
//checking whether submit is set 
if (isset($_POST['submit'])){
    //sanitation of Data is done here
    $clean_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    echo "<script>console.log(\"inside of loginForm\");</script>";
    //checking for valid mail
    if(!filter_var($clean_email, FILTER_VALIDATE_EMAIL)){
        $conn->close();
        header("location: ../login.php?status=invalidEmail");
        exit();
    }
    //checking whether user exists or not
    if (!usrExists($conn, $_POST['email'])){
        $conn->close();
        header("location: ../login.php?status=NotFound");
        exit();
    }
    //fetching data from db
    $users = datafetch($conn, $clean_email);
        echo "<script>console.log(\"inside user for loop\");</script>";
        $mail = $users["email"];
        $pass = $users["passwd"];

    //checking where both email or password matches or not

    if($mail == $clean_email && $pass == sha1($password)) {
        //session is initiated here
        session_start();
        $_SESSION['logged-in'] = true;
        $_SESSION['username'] = $users['full_name'];
        $_SESSION['contact_number'] = $users['contact_number'];
        $_SESSION['age'] = $users['age'];
        $_SESSION['address'] = $users['address'];
        $_SESSION['email'] = $users['email'];
        $_SESSION['password'] = $users['passwd'];
        $conn->close();
        header("location: ../index.php");
    }

    if ($pass != sha1($password)) {
        $conn->close();
        header("location: ../login.php?status=invalidPass");
        exit();
    }
}

?>