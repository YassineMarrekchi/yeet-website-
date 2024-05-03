<?php 
  $conn = mysqli_connect("localhost", "root", "", "projectcs");
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $gameid = $_POST['gameid'];
  $sql = "DELETE FROM games WHERE Game_ID = $gameid";
     if ($conn->query($sql) === TRUE) {
    echo "Game deleted successfully";
  } else {
    echo "Error deleting Game: " . $conn->error;
  }
  
  $conn->close();
  ?>

  