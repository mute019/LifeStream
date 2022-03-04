<?php

include_once (__DIR__."/dbconnec.php");
include_once (__DIR__."/entry_func.php");
//checking whether submit button is pressed/set.

if (isset($_POST['submit'])){
    //Initiating Session
    session_start();
    //Fetching data from POST method
    $relation = $_POST['relation'];
    $date = $_POST['date-picker'];
    $gender = $_POST['gender'];
    $donor_name = $_POST['name'];
    $identity = $_POST['id-type'];
    $blood_group = $_POST['bloodgroup'];
    $email = $_SESSION['email'];

    //debugging here

    echo "<script>console.log(\"Email: .$email.\")</script>";

    //checking inputs and their sanitation

    if(invalidField($donor_name, $gender, $identity)) {
        $conn->close();
        header("location: ../book.php?error=invldInput");
        exit();
    }

    if(invalidGender($gender)){
        echo "<script> console.log(\"Empty\") </script>";
        $conn->close();
        header("location: ../book.php?error=invldgen");
        exit();
    }

    if(invalidName($donor_name)){
        $conn->close();
        header("location: ../book.php?error=invldName");
        exit();
    }

    if(invalidIden($identity)){
        $conn->close();
        header("location: ../book.php?error=invlduid");
        exit();
    }

    if(invalidEmail($email)){
        header("location: ../book.php?error=invldEmail");
        exit();
    }

    if(donorExists($conn, $identity)) {
        $conn->close();
        header("location: ../index.php?error=exists");
        exit();
    }

    //if everything goes well and input is sanitised then entry is created

    createDonor($conn, $relation, $date, $gender, $donor_name, $identity, $blood_group, $email);
    //db connection is closed here
    $conn->close();
    //redirected to the booking page
    header("location: ../book.php?status=success");
    
}