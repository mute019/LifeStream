<!DOCTYPE html>
<html lang = 'en-us'>

    <!-- Registration Form -->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../styles/form.css">
    </head>
    
    <body id="form_body">
        <h1>Complete Your Registration</h1>
        <!--<form action="/form_process.php" id="form_details" method="POST"> -->
        <form action="../includes/form_process.php" method="POST" id="form_details" >
            <fieldset>
                <legend>:Donor Details:</legend>
                <label for="flname">FULL NAME:</label><br>
                <input type="text" id="flname" name="flname" placeholder="Enter your full name" required><br><br>

                <label for="age"></label>AGE:<br>
                <input type="text" id="age" name="age" placeholder="Enter your age" required><br><br>

                <label for="email">EMAIL:</label><br>
                <input type="email" id="email" name="email" placeholder="Enter your email" required><br><br>

                <label for="address">ADRRESS:</label><br>
                <input type="text" id="address" name="address" placeholder="Enter your address" required><br><br>

                <label for="address">CONTACT NUMBER:</label><br>
                <input type="text" id="cont_number" name="cont_number" placeholder="Enter your number" required><br><br>

                <label for="address">PASSWORD:</label><br>
                <input type="password" id="passwrd" name="passwrd" placeholder="Enter your password" required><br><br>

                <label for="address">RE-ENTER PASSWORD:</label><br>
                <input type="password" id="repasswrd" name="repasswrd" placeholder="Re-enter your password" required>
                <br><br>

                <input type="submit" name="submit" value="Submit">
                <br><br>
                
                <!-- Any related errors are caught here and displayed when triggered -->

                <?php
                        if (isset($_GET["error"])){
                            if($_GET["error"] == "empty") {
                                echo "<p class=\"err-handler\">Empty Fields</p>";
                            }

                            if($_GET["error"] == "invalid_name") {
                                echo "<p class=\"err-handler\">Invalid Name</p>";
                            }

                            if($_GET["error"] == "notProper_age") {
                                echo "<p class=\"err-handler\">Appropriate age group of 18-70 is need.</p>";
                            }

                            if($_GET["error"] == "invalid_email") {
                                echo "<p class=\"err-handler\">Invalid Email</p>";
                            }

                            if($_GET["error"] == "invalid_address") {
                                echo "<p class=\"err-handler\">Address is not Valid</p>";
                            }

                            if($_GET["error"] == "invalid_cont") {
                                echo "<p class=\"err-handler\">Enter a valid Number</p>";
                            }

                            if($_GET["error"] == "invalid_match") {
                                echo "<p class=\"err-handler\">Passwords didn't match</p>";
                            }

                            if($_GET["error"] == "user_exists") {
                                echo "<p class=\"err-handler\">User is already registered</p>";
                            }

                        }

                ?>
                <br><br>    

            </fieldset>
        </form>
    </body>
</html>