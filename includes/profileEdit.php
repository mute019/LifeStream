<?php
require_once './dbconnec.php';
require_once './entry_func.php';

session_start();
echo "<script>console.log(\"inside of EditForm\");</script>";

//User Dashboard Updation is done here

//Username updation
if (isset($_POST['usrfullname'])){
    echo "<script>console.log(\"inside of isset\");</script>";
    //Checking for appriate name
    if (invalidName($_POST['usrfullname'])) {
        $conn->close();
        header("location: ../profile.php?error=invalidName");
        exit();
    }

    //updating the name in the 'book' table
    slotnameUpdate($conn, $_POST['usrfullname'], $_SESSION['email']);
    //udating the name in 'regis' table
    nameUpdate($conn, $_POST['usrfullname'], $_SESSION['email']);
    $_SESSION['username'] = $_POST['usrfullname'];
    $conn->close();
    header("location: ../profile.php?status=nameUpdated");
    exit();
}

// user mail is updated here

if (isset($_POST['usremail'])){
    echo "<script>console.log(\"inside of isset\");</script>";
    if (invalidEmail($_POST['usremail'])) {
        $conn->close();
        header("location: ../profile.php?error=invalidEmail");
        exit();
    }

    //checking whether user with email exists or not

    if (usrExists($conn, $_POST['usremail'])){
        $conn->close();
        header("location: ../profile.php?error=usedMail");
        exit();
    }
    //updated if booked for a slot
    if (donorEmailExists($conn, $_POST['usremail'])) {
        slotmailUpdate($conn, $_POST['usremail'], $_SESSION['email']);
    }

    //after passing all the check email is updated
    mailUpdate($conn, $_POST['usremail'], $_SESSION['email']);
    $_SESSION['email'] = $_POST['usremail'];
    $conn->close();
    header("location: ../profile.php?status=emailUpdated");
    exit();
}

if (isset($_POST['ph_number'])){
    echo "<script>console.log(\"inside of isset\");</script>";

    //checking for appropriate phone number

    if(!preg_match('/^[98765]{1}[0-9]{9}$/i', $_POST['ph_number'])) {
        $conn->close();
        header("location: ../profile.php?error=invalidph");
        exit();
    }

    //checking whether with such phone number exists for not

    if (usrExists($conn, $_POST['ph_number'])){
        $conn->close();
        header("location: ../profile.php?error=usedNumber");
        exit();
    }

    //number is updated here
    numberUpdate($conn, $_POST['ph_number'], $_SESSION['email']);
    $_SESSION['contact_number'] = $_POST['ph_number'];
    $conn->close();
    header("location: ../profile.php?status=numberUpdated");
    exit();
}

// if (isset($_POST['ph_number'])){
//     echo "<script>console.log(\"inside of isset\");</script>";

//     if(!preg_match('/^[98765]{1}[0-9]{9}$/i', $_POST['ph_number'])) {
//         $conn->close();
//         header("location: ../profile.php?error=invalidph");
//         exit();
//     }

//     if (usrExists($conn, $_POST['ph_number'])){
//         $conn->close();
//         header("location: ../profile.php?error=usedNumber");
//         exit();
//     }
//     numberUpdate($conn, $_POST['ph_number'], $_SESSION['email']);
//     $_SESSION['contact_number'] = $_POST['ph_number'];
//     $conn->close();
//     header("location: ../profile.php?status=numberUpdated");
//     exit();
// }

if (isset($_POST['usraddress'])){
    echo "<script>console.log(\"inside of isset\");</script>";

    if(empty($_POST['usraddress'])) {
        $conn->close();
        header("location: ../profile.php?error=invalidAdd");
        exit();
    }

    addressUpdate($conn, $_POST['usraddress'], $_SESSION['email']);
    $_SESSION['address'] = $_POST['usraddress'];
    $conn->close();
    header("location: ../profile.php?status=addUpdated");
    exit();
}

// if (isset($_POST['usraddress'])){
//     echo "<script>console.log(\"inside of isset\");</script>";

//     if(empty($_POST['usraddress'])) {
//         $conn->close();
//         header("location: ../profile.php?error=invalidAdd");
//         exit();
//     }

//     addressUpdate($conn, $_POST['usraddress'], $_SESSION['email']);
//     $_SESSION['address'] = $_POST['usraddress'];
//     $conn->close();
//     header("location: ../profile.php?status=addUpdated");
//     exit();
// }

//checking whether user age is set

if (isset($_POST['usr_age'])){
    echo "<script>console.log(\"inside of isset\");</script>";

    //checking age range

    if(empty($_POST['usr_age']) || $_POST['usr_age'] <= 18 || $_POST['usr_age'] >= 70) {
        $conn->close();
        header("location: ../profile.php?error=invalidAge");
        exit();
    }

    addAge($conn, $_POST['usr_age'], $_SESSION['email']);
    $_SESSION['age'] = $_POST['usr_age'];
    $conn->close();
    header("location: ../profile.php?status=ageUpdated");
    exit();
}

// if (isset($_POST['usr_age'])){
//     echo "<script>console.log(\"inside of isset\");</script>";

//     if(empty($_POST['usr_age']) || $_POST['usr_age'] <= 18 || $_POST['usr_age'] >= 70) {
//         $conn->close();
//         header("location: ../profile.php?error=invalidAge");
//         exit();
//     }

//     addAge($conn, $_POST['usr_age'], $_SESSION['email']);
//     $_SESSION['age'] = $_POST['usr_age'];
//     $conn->close();
//     header("location: ../profile.php?status=ageUpdated");
//     exit();
// }

//checking where user password is set
if (isset($_POST['usr_pass'])){
    echo "<script>console.log(\"inside of isset\");</script>";
    //checking whether the input is empty
    if(empty($_POST['usr_pass'])) {
        $conn->close();
        header("location: ../profile.php?error=invalidPass");
        exit();
    }

    //checking the password matches the old password

    if (sha1($_POST['usr_pass']) == $_SESSION['password']){
        $conn->close();
        header("location: ../profile.php?error=oldPass");
        exit();
    }

    //finally it is updated here
    passUpdate($conn, sha1($_POST['usr_pass']), $_SESSION['email']);
    $_SESSION['password'] = sha1($_POST['usr_pass']);
    $conn->close();
    header("location: ../profile.php?status=passUpdated");
    exit();
}