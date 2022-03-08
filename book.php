<?php 
    require_once "./includes/header.php"; 
?>
<!-- Main Booking Section -->
<div class="book-enclosure">
    <div class="Booking-section">
        <article>
            <h1> Book a Slot Now</h1>
                <p>
                    Fill up the given form carefully  
                </p>
        </article>
        <!-- Form starts here -->
        <form action="./includes/bookingForm.php" method="POST">

            <label for="relation">Relation</label>
            <select name="relation" id="relation" onchange = "rel(this.value);">
                <option value="Self">Self</option>
                <option value="Family">Family</option>
            </select> 

            <!-- Date Picker Here -->

            <label for="date-picker">Pick a Date</label>
            <input type="date" name="date-picker" required>
            

            <!-- Time Picker -->
            <label for="time">Pick a Time</label>
            <select name="time" id="time">
                <option value="">Select time</option>
                <option value="9 A.M - 1 P.M">9 A.M - 1 P.M</option>
                <option value="2 P.M - 5 P.M">2 P.M - 5 P.M</option>
            </select> 

            <!-- Gender Selector Here -->
            <label for="gender">Pick Your Gender</label>

            <select name="gender" id="gender">
                <option value="">Select Gender</option>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                <option value="Others">Others</option>
            </select> 
            
            <input type="text" name="name" id="donor" readonly>
            <input type="text" name="id-type" id="id-type" placeholder="Adhaar Number">

            <!-- Blood Group Selector Here -->

            <label for="bloodgroup">Blood Group</label>
            <select name="bloodgroup" id="bloodgroup">
                <option value="">Select Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>

            <!-- Location Picker -->

            <label for="location">Location</label>
            <select name="location" id="location">
                <option value="">Select a Location</option>
                <option value="L012">Jadavpur</option>
                <option value="L013">Tollygunge</option>
                <option value="L014">Garia</option>
                <option value="L015">Ballygunge</option>
                <option value="L016">Bidhannagar</option>
                <option value="L017">Barrackpore</option>
            </select>

            <!-- Submit Button -->

            <input type="submit" name="submit" value="Book">
        </form>

        <div class="err-handler-container">
            <!-- Any related errors are caught here and displayed when triggered -->

            <?php
                if (isset($_GET["error"])){
                    if($_GET["error"] == "invldInput") {
                        echo "<p class=\"err-handler\" style=\" color:red; \">Empty Fields Not Allowed</p>";
                    }

                    if($_GET["error"] == "invldgen") {
                        echo "<p class=\"err-handler\" style=\" color:red; \">Select Gender</p>";
                    }

                    if($_GET["error"] == "invldName") {
                        echo "<p class=\"err-handler\" style=\" color:red; \">Enter a Valid Name</p>";
                    }

                    if($_GET["error"] == "invlduid") {
                        echo "<p class=\"err-handler\" style=\" color:red; \">Enter a valid Adhaar Number</p>";
                    }

                    if($_GET["error"] == "invldEmail") {
                        echo "<p class=\"err-handler\" style=\" color:red; \">Enter a valid Email</p>";
                    }

                    if($_GET["error"] == "exists") {
                        echo "<p class=\"err-handler\" style=\" color:red; \">Already Booked</p>";
                    }

                    if($_GET["error"] == "selBlood") {
                        echo "<p class=\"err-handler\" style=\" color:red; \">Select a Blood Group</p>";
                    }

                    if($_GET["error"] == "pickTime") {
                        echo "<p class=\"err-handler\" style=\" color:red; \">Pick a Time</p>";
                    }

                    if($_GET["error"] == "pickLocation") {
                        echo "<p class=\"err-handler\" style=\" color:red; \">Pick a Location</p>";
                    }

                }

                if (isset($_GET["status"])){
                    if($_GET["status"] == "success") {
                        echo "<p class=\"err-handler\" style=\" color:green; \">Successfully Booked</p>";
                    }
                }

            ?>
        <div>
    </div>
</div>
    

<?php 
    require_once "./includes/footer.php"; 
?>