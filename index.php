<?php 
    require_once "./includes/header.php" 
?>

<!-- Welcome Section -->
            <section class="welcome">
                <h3>
                    Welcome, 
                    <?php 
                        //Session variable is checked here
                        if (isset($_SESSION['username'])) {
                            echo $_SESSION['username'];
                        }
                     ?>
                </h3>
            </section>

            <!-- About Section -->
            <section class="abt-container">
                <div class="abt-enc">
                    <div class= "abt-desc">
                        
                        <h1>
                            About Life <span>Stream</span>
                        </h1>
                        <!-- Main Paragraph -->
                        <p>
                            <b>
                            "A drop of blood can save a life! Don't waste it and donate blood."
                            </b> <br>
                            Life stream aims to collect blood for donations. Blood donation is a voluntary procedure that can help save the lives of others.
                            You don't always have to be a doctor to SAVE someone's LIFE!
                            Donating just a pint (almost 470 ml) of blood will not make much of a difference in your life but that one pint can save up to three lives!
                            Most of this is used to help people with medical conditions that require blood or blood products regularly.Like
                            Medical researchers also need donated blood in order to develop and test new treatments for many medical conditions – such as blood clots, heart attack, stroke and cancer. 

                            <br><br>
                            <b>
                            Who can donate blood?
                            </b>
                            
                            <br><br>
                            Healthy adults (18-75 years) who meet donation eligibility criteria can donate blood. The procedure is safe.

                            During a regular donation, you will give around 470ml of whole blood. This is about 8% of the average adult’s blood volume.

                            The body replaces this volume within 24 to 48 hours, and replenishes red blood cells in 10 to 12 weeks.
                        </p>
                    </div>
                    <!-- About Section Images -->
                    <div class="abt-img">
                        <img 
                        src="https://cdni.iconscout.com/illustration/premium/thumb/blood-donation-3142071-2621400.png" alt="blood-pic">
                    </div>
                </div>
            </section>

            <!-- Gallery Section -->

            <section class="gallery-container-section">
                <div>
                    <div class="gallery-header-contianer">
                        <h1>
                            Checkout Our 
                            <div>
                                Gallery
                            </div> 
                        </h1>
                    </div>
                    <div class="gallery-figure-container">
                        <figure class="gallery-figure">
                            <img 
                            src="https://www.storypick.com/wp-content/uploads/2016/07/BLOOD-10.jpg" 
                            alt=""
                            >

                            <img 
                            src="https://cdn.dnaindia.com/sites/default/files/styles/full/public/2018/03/07/658312-blood-donation-camp.jpg" 
                            alt=""
                            >

                            <img 
                            src="https://e3.365dm.com/20/09/768x432/skynews-blood-plasma_5108594.jpg?20200925191941" 
                            alt=""
                            >

                            <img 
                            src="http://data1.ibtimes.co.in/en/full/548486/blood-donation.jpg" 
                            alt=""
                            >

                            <img 
                            src="http://www.hindustantimes.com/rf/image_size_800x600/HT/p1/2011/09/25/Incoming/Pictures/750016_Wallpaper2.jpg" 
                            alt=""
                            >

                            <img 
                            src="https://indiancc.mygov.in/wp-content/uploads/2021/07/mygov-10000000001443582530-scaled.jpg" 
                            alt=""
                            >

                        </figure>
                    </div>
                </div>
            </section>

            <!-- Donation Process Definitions -->

            <section class="donation-process-section">
                <div class="donation-process-container">
                    <div class="donation-process-para-header">
                        <div class="donation-header">
                            <h1>Donation Process</h1>
                        </div>
        
                        <div class="donation-para">
                            <p>
                                This section will guide you with the Registration Process.
                            </p>
                        </div>
                    </div>

                    <div class="reg-method">
                            <div class="donation-process-method-container">
                                <div class="dn-pr-image-container">
                                <img src="./Dependencies/icons/registration.png" alt="registraion-icon">
                                </div>
                            
                                <article>
                                    <h4>Register</h4>
                                    <p>
                                    "To be the part of this noble cause you need to first register yourself."
                                    </p>
                                </article>
                            </div>

                            <div class="donation-process-method-container">
                                <div class="dn-pr-image-container">
                                    <img src="./Dependencies/icons/checkup.png" alt="checkup-icon">
                                </div>
                                
                                <article>
                                    <h4>Login & Book for Checkup</h4>
                                    <p>
                                    "So roll up your sleeves and contribute proactively in this noble cause."
                                    </p>
                                </article>
                            </div>

                                <div class="donation-process-method-container">
                                    <div class="dn-pr-image-container">
                                        <img src="./Dependencies/icons/blood-donation.png" alt="blood-donation-icon">
                                    </div>
                                    
                                    <article>
                                        <h4>Donate</h4>
                                        <p>
                                        "Donation of blood has benefits for your emotional and physcial health, it burns calories, reduce stress and weight loss."
                                        </p>
                                    </article>
                                </div>

                                <div class="donation-process-method-container">
                                    <div class="dn-pr-image-container">
                                        <img src="./Dependencies/icons/save-life.png" alt="save-life-icon">
                                    </div>
                                    
                                    <article>
                                        <h4>Save Life</h4>
                                        <p>
                                        "Your litte effort can give others second chance to live life."
                                        </p>
                                    </article>
                                </div>
                            </div>
                        <div>

                    </div>
                </div>
                
            </section>

            <section class="blog-container">

            </section>

<?php require_once "./includes/footer.php" ?>

        