<?php
require_once './dbconnec.php';
require_once './entry_func.php';

session_start();
echo "<script>console.log(\"inside of EditForm\");</script>";

if (isset($_POST['usrfullname'])){
    echo "<script>console.log(\"inside of isset\");</script>";
    if (invalidName($_POST['usrfullname'])) {
        $conn->close();
        header("location: ../profile.php?error=invalidName");
        exit();
    }

    
    slotnameUpdate($conn, $_POST['usrfullname'], $_SESSION['email']);
    nameUpdate($conn, $_POST['usrfullname'], $_SESSION['email']);
    $_SESSION['username'] = $_POST['usrfullname'];
    $conn->close();
    header("location: ../profile.php?status=nameUpdated");
    exit();
}


if (isset($_POST['usremail'])){
    echo "<script>console.log(\"inside of isset\");</script>";
    if (invalidEmail($_POST['usremail'])) {
        $conn->close();
        header("location: ../profile.php?error=invalidEmail");
        exit();
    }

    if (usrExists($conn, $_POST['usremail'])){
        $conn->close();
        header("location: ../profile.php?error=usedMail");
        exit();
    }

    if (donorEmailExists($conn, $_POST['usremail'])) {
        slotmailUpdate($conn, $_POST['usremail'], $_SESSION['email']);
    }
    mailUpdate($conn, $_POST['usremail'], $_SESSION['email']);
    $_SESSION['email'] = $_POST['usremail'];
    $conn->close();
    header("location: ../profile.php?status=emailUpdated");
    exit();
}

if (isset($_POST['ph_number'])){
    echo "<script>console.log(\"inside of isset\");</script>";

    if(!preg_match('/^[98765]{1}[0-9]{9}$/i', $_POST['ph_number'])) {
        $conn->close();
        header("location: ../profile.php?error=invalidph");
        exit();
    }

    if (usrExists($conn, $_POST['ph_number'])){
        $conn->close();
        header("location: ../profile.php?error=usedNumber");
        exit();
    }
    numberUpdate($conn, $_POST['ph_number'], $_SESSION['email']);
    $_SESSION['contact_number'] = $_POST['ph_number'];
    $conn->close();
    header("location: ../profile.php?status=numberUpdated");
    exit();
}

if (isset($_POST['ph_number'])){
    echo "<script>console.log(\"inside of isset\");</script>";

    if(!preg_match('/^[98765]{1}[0-9]{9}$/i', $_POST['ph_number'])) {
        $conn->close();
        header("location: ../profile.php?error=invalidph");
        exit();
    }

    if (usrExists($conn, $_POST['ph_number'])){
        $conn->close();
        header("location: ../profile.php?error=usedNumber");
        exit();
    }
    numberUpdate($conn, $_POST['ph_number'], $_SESSION['email']);
    $_SESSION['contact_number'] = $_POST['ph_number'];
    $conn->close();
    header("location: ../profile.php?status=numberUpdated");
    exit();
}

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

if (isset($_POST['usr_age'])){
    echo "<script>console.log(\"inside of isset\");</script>";

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

if (isset($_POST['usr_age'])){
    echo "<script>console.log(\"inside of isset\");</script>";

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

if (isset($_POST['usr_pass'])){
    echo "<script>console.log(\"inside of isset\");</script>";

    if(empty($_POST['usr_pass'])) {
        $conn->close();
        header("location: ../profile.php?error=invalidPass");
        exit();
    }

    if (sha1($_POST['usr_pass']) == $_SESSION['password']){
        $conn->close();
        header("location: ../profile.php?error=oldPass");
        exit();
    }

    passUpdate($conn, sha1($_POST['usr_pass']), $_SESSION['email']);
    $_SESSION['password'] = sha1($_POST['usr_pass']);
    $conn->close();
    header("location: ../profile.php?status=passUpdated");
    exit();
}