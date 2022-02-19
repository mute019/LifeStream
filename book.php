<?php require_once "./includes/header.php"; ?>
<div class="book-enclosure">
    <div class="Booking-section">
        <article>
            <h1> Book a Slot Now</h1>
                <p>
                    Fill up the given form carefully  
                </p>
        </article>
        <form action="./includes/bookingForm.php" method="POST">
            <label for="relation">Relation</label>
            <select name="relation" id="relation" onchange = "rel(this.value);">
                <option value="Self">Self</option>
                <option value="Family">Family</option>
            </select> 
            <label for="date-picker">Pick a Date</label>
            <input type="date" name="date-picker" required>
            <label for="gender">Pick Your Gender</label>
            <select name="gender" id="gender">
                <option value="">Select Gender</option>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                <option value="Others">Others</option>
            </select> 
            
            <input type="text" name="name" id="donor" readonly>

            <input type="text" name="id-type" id="" placeholder="Adhaar Number">
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
                <input type="submit" name="submit" value="Book">
        </form>
        <div class="err-handler-container">
            <?php
                if (isset($_GET["error"])){
                    if($_GET["error"] == "invldInput") {
                        echo "<p class=\"err-handler\">Empty Fields Not Allowed</p>";
                    }

                    if($_GET["error"] == "invldgen") {
                        echo "<p class=\"err-handler\">Select Gender</p>";
                    }

                    if($_GET["error"] == "invldName") {
                        echo "<p class=\"err-handler\">Enter a Valid Name</p>";
                    }

                    if($_GET["error"] == "invlduid") {
                        echo "<p class=\"err-handler\">Enter a valid Adhaar Number</p>";
                    }

                    if($_GET["error"] == "invldEmail") {
                        echo "<p class=\"err-handler\">Enter a valid Email</p>";
                    }

                    if($_GET["error"] == "exists") {
                        echo "<p class=\"err-handler\">Already Booked</p>";
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
    

<?php require_once "./includes/footer.php"; ?>