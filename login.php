<?php require_once "./includes/header.php" ?>

<div class="enclosure">
  <div class="login-form">
    <form action="./includes/loginForm.php" method="POST" >
      <h1>Login</h1>
      <div class="content">
        <div class="input-field">
          <input type="email" name="email" placeholder="Email" autocomplete="nope" required>
        </div>
        <div class="input-field">
          <input type="password" name="password" placeholder="Password" autocomplete="new-password" required>
        </div>
        <a href="#" class="link">Forgot Password?</a>
      </div>
      <div class="action">
        <button onclick="location.href='./pages/form.php';">Register</button>
        <button type="submit" name="submit">Sign in</button>
      </div>
      <div class="status">
          <?php 
              if (isset($_GET["status"])){
                  if($_GET["status"] == "success") {
                      echo "<p class=\"err-handler\" style=\" color:green; \">Successfully Registered <br> You Can Login Now</p>";
                  }
              }

              if (isset($_GET["status"])){
                if($_GET["status"] == "invalidEmail") {
                    echo "<p class=\"err-handler\" style=\" color:red; \">Enter a valid mail</p>";
                }
              }

              if (isset($_GET["status"])){
                if($_GET["status"] == "invalidPass") {
                    echo "<p class=\"err-handler\" style=\" color:red; \">Wrong Password</p>";
                }
              }

              if (isset($_GET["status"])){
                if($_GET["status"] == "NotFound") {
                    echo "<p class=\"err-handler\" style=\" color:red; \">User Does Not Exist</p>";
                }
              }

              if (isset($_GET["status"])){
                if($_GET["status"] == "logged-out") {
                    echo "<p class=\"err-handler\" style=\" color:red; \">Logged Out</p>";
                }
              }
          ?>
      </div>
    </form>
  </div>
</div>

<?php require_once "./includes/footer.php" ?>

