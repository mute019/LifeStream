<?php 
    require_once "./includes/header.php"

?>

<!-- User Dashboard forms -->
            <div class="about_d1">
                <h1>User Dashboard</h1>
                <br>
                <!-- Fullname is modified here -->
                <p class="about_p"><b>Full Name</b></p>
                <br>
                <form action="./includes/profileEdit.php" method="POST" class="profile-class">
                    <input type="text" name="usrfullname" id="usrfullname" class="about_p"  readonly>
                    <button type="button" class="editname" onclick = "nameEdit()">Edit</button>
                    <button type="submit" name="submit" id ="submit" class="applyname" onclick="nameApply();" disabled>Apply</button>
                </form>
                <!-- Any related errors are caught here and displayed when triggered -->
                <?php 
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == 'invalidName') {
                            echo "<br><p class=\"err-handler\" style=\" color:red; margin-left:30px; \">Enter a valid name!</p><br>";
                        }
                    }

                    if (isset($_GET['status'])) {
                        if ($_GET['status'] == 'nameUpdated') {
                            echo "<br><p class=\"err-handler\" style=\" color:green; margin-left:30px;\">Name Updated!</p><br>";
                        }
                    }
                ?>

                <hr class="about_hr">

                <!-- Email is modified here -->
                
                <p class="about_p"><b>Email</b></p>
                
                <br>

                <form action="./includes/profileEdit.php" method="POST" class="profile-class">
                    <input type="text" name="usremail" id="usremail" class="about_p"  readonly>
                    <button type="button" class="editmail" onclick = "emailEdit()">Edit</button>
                    <button type="submit" name="submit" id ="submit" class="applyemail" onclick="emailApply();" disabled>Apply</button>
                </form>

                <!-- Any related errors are caught here and displayed when triggered -->

                <?php 
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == 'invalidEmail') {
                            echo "<br><p class=\"err-handler\" style=\" color:red; margin-left:30px; \">Enter a valid email!</p><br>";
                        }
                    }

                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == 'usedMail') {
                            echo "<br><p class=\"err-handler\" style=\" color:red; margin-left:30px; \">Account with the given mail exists!</p><br>";
                        }
                    }

                    if (isset($_GET['status'])) {
                        if ($_GET['status'] == 'emailUpdated') {
                            echo "<br><p class=\"err-handler\" style=\" color:green; margin-left:30px;\">Email Updated!</p><br>";
                        }
                    }
                ?>

                <hr class="about_hr">

                <!-- Phone is modified here -->
                
                <p class="about_p"><b>Phone</b></p>

                <form action="./includes/profileEdit.php" method="POST" class="profile-class">
                    <input type="text" name="ph_number" id="ph_number" class="about_p"  readonly>
                    <button type="button" class="editph" onclick = "phEdit()">Edit</button>
                    <button type="submit" name="submit" id ="submit" class="applyph" onclick="phApply();" disabled>Apply</button>
                </form>

                <!-- Any related errors are caught here and displayed when triggered -->

                <?php 
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == 'invalidph') {
                            echo "<br><p class=\"err-handler\" style=\" color:red; margin-left:30px; \">Enter a valid Mobile Number!</p><br>";
                        }
                    }

                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == 'usedNumber') {
                            echo "<br><p class=\"err-handler\" style=\" color:red; margin-left:30px; \">Number is registered with another account!</p><br>";
                        }
                    }

                    if (isset($_GET['status'])) {
                        if ($_GET['status'] == 'numberUpdated') {
                            echo "<br><p class=\"err-handler\" style=\" color:green; margin-left:30px;\">Mobile Number Updated!</p><br>";
                        }
                    }
                ?>
                
                <hr class="about_hr">

                <!-- Address is modified here -->
                
                <p class="about_p"><b>Address</b></p>

                <form action="./includes/profileEdit.php" method="POST" class="profile-class">
                    <input type="text" name="usraddress" id="usraddress" class="about_p"  readonly>
                    <button type="button" class="editaddress" onclick = "addEdit()">Edit</button>
                    <button type="submit" name="submit" id ="submit" class="applyaddress" onclick="addApply();" disabled>Apply</button>
                </form>

                <!-- Any related errors are caught here and displayed when triggered -->

                <?php 
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == 'invalidAdd') {
                            echo "<br><p class=\"err-handler\" style=\" color:red; margin-left:30px; \">Enter a valid Address!</p><br>";
                        }
                    }

                    if (isset($_GET['status'])) {
                        if ($_GET['status'] == 'addUpdated') {
                            echo "<br><p class=\"err-handler\" style=\" color:green; margin-left:30px;\">Address Updated!</p><br>";
                        }
                    }
                ?>

                <hr class="about_hr">
                
                <!-- Age is modified here -->
                            
                <p class="about_p"><b>Age</b></p>

                <form action="./includes/profileEdit.php" method="POST" class="profile-class">
                    <input type="text" name="usr_age" id="usr_age" class="about_p"  readonly>
                    <button type="button" class="editage" onclick = "ageEdit()">Edit</button>
                    <button type="submit" name="submit" id ="submit" class="applyage" onclick="ageApply();" disabled>Apply</button>
                </form>

                <!-- Any related errors are caught here and displayed when triggered -->

                <?php 
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == 'invalidAge') {
                            echo "<br><p class=\"err-handler\" style=\" color:red; margin-left:30px; \">Enter a valid Age!</p><br>";
                        }
                    }

                    if (isset($_GET['status'])) {
                        if ($_GET['status'] == 'ageUpdated') {
                            echo "<br><p class=\"err-handler\" style=\" color:green; margin-left:30px;\">Age Updated!</p><br>";
                        }
                    }
                ?>

                <hr class="about_hr">

                <!-- Password is modified here -->

                <p class="about_p"><b>Change Password</b></p>

                <form action="./includes/profileEdit.php" method="POST" class="profile-class">
                    <input type="password" name="usr_pass" id="usr_pass" class="about_p"  readonly>
                    <button type="button" class="editpass" onclick = "passEdit()">Edit</button>
                    <button type="submit" name="submit" id ="submit" class="applypass" onclick="passApply();" disabled>Apply</button>
                </form>

                <!-- Any related errors are caught here and displayed when triggered -->

                <?php 
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == 'oldPass') {
                            echo "<br><p class=\"err-handler\" style=\" color:red; margin-left:30px; \">Old Password not allowed!</p><br>";
                        }
                    }

                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == 'invalidPass') {
                            echo "<br><p class=\"err-handler\" style=\" color:red; margin-left:30px; \">Empty Password field!</p><br>";
                        }
                    }

                    if (isset($_GET['status'])) {
                        if ($_GET['status'] == 'passUpdated') {
                            echo "<br><p class=\"err-handler\" style=\" color:green; margin-left:30px;\">Password Updated!</p><br>";
                        }
                    }
                ?>
            </div>

        <!-- Booking Details are here -->
		
        <section class="table-sec">
            <div>
                <h1>Booking Details</h1>
            </div>
            <table>
                <thead>
                    <th> Donor's Name </th>
                    <th> Gender </th>
                    <th> Date </th>
                    <th> Adhaar_ID </th>
                    <th> Blood Group </th>
                    <th> Delete Record </th>
                </thead>
                <tbody>

                    <!-- Data is fetched from here -->

                    <?php 
                        require_once './includes/db.php';

                        $sql = "SELECT * from book where email = '".$_SESSION['email']."';";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                    ?>
                                <!-- Fetched data is enclosed here -->
                                <td><?php echo $row['donor_name'];?></td>
                                <td><?php echo $row['gender'];?></td>
                                <td><?php echo $row['book_date'];?></td>
                                <td><?php echo $row['adhaar_id'];?></td>
                                <td><?php echo $row['blood_group'];?></td>
                                <td><a href="./includes/del_entry.php?q=<?php echo $row['adhaar_id']; ?>">Delete</a></td>
                    
                    <?php 
                                echo "</tr>";
                            }
                        }
                    ?>

                </tbody>
            </table>
        </section>

<?php
     require_once "./includes/footer.php"
 ?>