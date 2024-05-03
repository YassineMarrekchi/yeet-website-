<?php 
  $conn = mysqli_connect("localhost", "root", "", "projectcs");
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $gamename = $_POST['name'];
  $Console = $_POST['console'];
  $Publisher= $_POST['publisher'];
  $Description= $_POST['description'];
  $releaseDate= $_POST['releasedate'];
  $price= $_POST['price'];
  $trailer= $_POST['trailer'];
  $img= $_POST['img'];

  $insert = "INSERT INTO games (Game_name, Console , Publisher,Game_Description,release_Date,Game_price,Game_trailer,Game_img)
  VALUES ('$gamename', '$Console','$Publisher','$Description',$releaseDate,'$price','$trailer','$img')";

  if ($conn->query($insert) === TRUE) {
      echo "New game added successfully";
  } else {
      echo "Error: " . $insert . "<br>" . $conn->error;
  }

  $conn->close();
?>