<?php 
  $conn = mysqli_connect("localhost", "root", "", "projectcs");
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $accessid = $_POST['accessid'];
  $sql = "DELETE FROM accessories WHERE Access_ID = $accessid";
     if ($conn->query($sql) === TRUE) {
    echo "Accessory deleted successfully";
  } else {
    echo "Error deleting Accessory: " . $conn->error;
  }
  
  $conn->close();
  ?>

  