<?php 
  $conn = mysqli_connect("localhost", "root", "", "projectcs");
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $accessname = $_POST['name'];
  $Console = $_POST['console'];
  $price= $_POST['price'];
  $Description= $_POST['description'];
  $img= $_POST['img'];

  $insert = "INSERT INTO Accessories (Access_name , Console , Access_price , Description ,Access_img)
  VALUES ('$accessname', '$Console','$price','$Description','$img')";

  if ($conn->query($insert) === TRUE) {
      echo "New accessory added successfully";
  } else {
      echo "Error: " . $insert . "<br>" . $conn->error;
  }

  $conn->close();
?>