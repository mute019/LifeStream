<?php
//destruction of session variable is done 
session_start();
session_unset();
session_destroy();

header("location: ../login.php?status=logged-out");
exit();