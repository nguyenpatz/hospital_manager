<?php 

include '../connectDB.php';

session_start();


session_unset();

session_destroy();

header("location: ../login/login_form.php");

?>