<?php 
  $conn = mysqli_connect("localhost", "root", "", "projectcs");
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password= $_POST['password'];

  $insert = "INSERT INTO user (User_name, email,password)
  VALUES ('$name', '$email','$password')";

  if ($conn->query($insert) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $insert . "<br>" . $conn->error;
  }

  $conn->close();
?>
