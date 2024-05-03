<?php 
  $conn = mysqli_connect("localhost", "root", "", "projectcs");
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
    ?>

<?php
    session_start();
    // unset all session variables
    $_SESSION = array();
    // destroy the session
    session_destroy();
    // redirect the user to the login page
    header('Location: loginform.php');
    exit;
?>
