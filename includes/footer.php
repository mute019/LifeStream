</main>

        <footer id='foot_contact'>
            <div id='foot_container'>
                <h2>Contact Information</h2>
                <div class='foot_address_row'>
                    <div class='foot_icon'>
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class='foot_detail'>
                        <p>50, Camac St, Salt Lake,<br> West bengal, Kolkata - 700017</p>
                    </div>
                </div>

                <div class='foot_address_row'>
                    <div class="foot_icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="foot_detail">
                        <p>support@LifeStream.com</p>
                    </div>
                </div>

                <div class='foot_address_row'>
                    <div class='foot_icon'>
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="foot_detail">
                        <p>+91 22426217</p>
                    </div>
                </div>
                
                <div id="foot_copyright">
                    <hr>
                    <div id="foot_copyright_details"></div>
                        Copyright &copy;<b>LifeStream.com</b> &#124; All Rights Reserved
                    </div>
                </div>
            </div>
        </footer>
        
    </body>
    <script>
        document.querySelector('#donor').value = "<?php echo $_SESSION['username']; ?>";
    </script>
    <script>
        document.querySelector('input[name = "usrfullname"]').value = "<?php echo $_SESSION['username']; ?>";
        document.querySelector('input[name = "usremail"]').value = "<?php echo $_SESSION['email']; ?>";
        document.querySelector('input[name = "ph_number"]').value = "<?php echo $_SESSION['contact_number']; ?>";
        document.querySelector('input[name = "usraddress"]').value = "<?php echo $_SESSION['address']; ?>";
        document.querySelector('input[name = "usr_age"]').value = "<?php echo $_SESSION['age']; ?>";
          
    </script>
    <script src="./Dependencies/Scripts/menubtn.js"></script>
    <script src="./Dependencies/Scripts/navbar.js"></script>
    <script  src="./Dependencies/Scripts/script.js"></script>
    <script src="./Dependencies/Scripts/today.js"></script>
    <script src="./Dependencies/Scripts/relation.js"></script>
    <script src="./Dependencies/Scripts/editor.js"></script>

</html>