<?php

include_once (__DIR__."/dbconnec.php");
include_once (__DIR__."/entry_func.php");

// flag variables

echo "<script>console.log(\"Outside of isset\");</script>";

$name_OK = TRUE;
$age_OK = TRUE;
$address_OK = TRUE;
$email_OK = TRUE;
$pass_OK = TRUE;
$contact_OK = TRUE;

// sanitize data

if(isset($_POST["submit"])){
    if (empty($_POST['flname']) && empty($_POST['age']) 
        && empty($_POST['email']) && empty($_POST['address'])
        && empty($_POST['passwrd']) 
        && empty($_POST['repasswrd']) && empty($_POST['cont_number'])) {
            $conn->close();
            header("location: ../pages/form.php?error=empty");
            exit();
    }
    $clean_full_name = filter_var($_POST['flname'], FILTER_SANITIZE_STRING);
    $clean_age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
    $clean_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $clean_address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    
    $pass = $_POST['passwrd'];
    $repass= $_POST['repasswrd'];
    $usr_cont = $_POST['cont_number'];

    // validate data
    if($clean_full_name){
        $pattern = array("options"=>array("regexp"=>"/[a-zA-Z]+[\s][a-zA-Z]+/"));
        $full_name = filter_var($clean_full_name, FILTER_VALIDATE_REGEXP, $pattern);
    } else {
        $name_OK = FALSE;
        $conn->close();
        header("location: ../pages/form.php?error=invalid_name");
        exit();
    }

    if($clean_age && $clean_age > 0){
        if($clean_age > 18 && $clean_age < 70){
            $age = filter_var($clean_age, FILTER_VALIDATE_INT);
        } else {
            $conn->close();
            header("location: ../pages/form.php?error=notProper_age");
            exit();
        }
    } else {
        $age_OK = FALSE;
    }

    if($clean_address){
        $pattern = array("options"=>array("regexp"=>"/[a-zA-Z0-9\s,.]+/"));
        $address = filter_var($clean_address, FILTER_VALIDATE_REGEXP, $pattern);
    } else {
        $address_OK = FALSE;
        $conn->close();
        header("location: ../pages/form.php?error=invalid_address");
        exit();
    }

    if (sha1($pass) != sha1($repass)){
        $conn->close();
        header("location: ../pages/form.php?error=invalid_match");
        exit();
    }
// Checking for correct match of the contact number
    if(!preg_match('/^[98765]{1}[0-9]{9}$/i', $usr_cont)) {
        $conn->close();
        header("location : ../pages/form.php?error=invalid_cont");
        exit();
    }

    if($clean_email){
        $email = filter_var($clean_email, FILTER_VALIDATE_EMAIL);
    } else {
        $email_OK = FALSE;
        $conn->close();
        header("location: ../pages/form.php?error=invalid_email");
        exit();
    }

    if (usrExists($conn, $email)) {
        $conn->close();
        header("location: ../pages/form.php?error=user_exists");
        exit();
    }

    //if all the tests are passed then entry is made here

    if($name_OK == TRUE && $age_OK == TRUE && $address_OK == TRUE && $email_OK == TRUE && $pass_OK == TRUE && $contact_OK == TRUE){
        // echo "<h1>$full_name have successfully created your account</h1><br>";
        // $href = sprintf('href="%s"', "./login.php"); // here give the file path of "index.html" of the website
        // $text = "Go to home page";
        // $target = sprintf('target="%s"', "_self");
        // echo "<a $href $target>$text</a>";
        echo "<script>Outside of isset create</script>";
        createEntry($conn, $full_name, $age, $email, $address, sha1($pass), $usr_cont);
        $conn->close();
        header("location: ../login.php?status=success");
        exit();
    }
}
