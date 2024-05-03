<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--icon1-->
  <link rel="icon" href="https://i.ibb.co/5Lm8FZz/pngkey-com-kirby-face-png-5753381-1.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d491d3d58a.js" crossorigin="anonymous"></script>
  <title>YEET</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="http://localhost/csproject/index.php">
      <!--icon2-->
      <img src="https://i.ibb.co/5Lm8FZz/pngkey-com-kirby-face-png-5753381-1.png" height="50px" width="50px" style="margin-left: 10px;"> YEET
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="http://localhost/csproject/index.php"> <i class="fa-sharp fa-solid fa-house"></i> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/csproject/games.php"><i class="fa-sharp fa-solid fa-gamepad"></i> Games</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/csproject/accessories.php"><i class="fa-sharp fa-solid fa-headphones"></i> Accessories</a>
        </li>
      </ul>
      <div>
        <img src="https://i.ibb.co/dWj2Gnx/game-hp-bar.png" width="500px" height="75px" style="padding-right: 75px; padding-left: 55px;">
      </div>
      <div class="d-flex justify-content-end">
        <form class="form-inline my-2 my-lg-0 ">
          <input class="navbar-brand" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <?php
          if (!isset($_SESSION['user_logged_in'])) {
            echo '<a class="nav-link" href="loginform.php"><i class="fa-sharp fa-solid fa-arrow-right-to-bracket"></i> Login </a>';
          } else {
            echo '<a class="nav-link" href="logout.php"><i class="fa-sharp fa-solid fa-arrow-right-to-bracket"></i> Logout </a>';
            
          }
          ?>
        </li>

        <li class="nav-item">
          <?php
          if (isset($_SESSION['user_logged_in'])) {
                if ($_SESSION['User_Type'] == "admin") {
                  //this for admin
                  echo '<a class="nav-link" href="admin_dashboard.php"><i class="fa-sharp fa-solid"></i> Admin Panel</a>';
                }else{
                  // this for normal user
                  echo '<a class="nav-link" href="profile.php"><i class="fa-sharp fa-solid"></i> Profile </a>';
                }
              }
          ?>
        </li>

        <li class="nav-item">
          <?php
          if (!isset($_SESSION['user_logged_in'])) {
            echo '<a class="nav-link" href="registrationform.php"><i class="fa-sharp fa-solid fa-plus"></i> Register</a>';
          }
         
          ?>
        </li>
      </ul>
    </div>

  </nav>
  <div class="card w-75" >
  <div class="card-body"style=" margin: auto; width: 50%; border: 3px solid; border-radius: 25% 10%; padding: 10px;">
    <h5 class="card-title"style="text-align:center">LOGIN!( ˶ˆ꒳ˆ˵ )</h5>
    <p class="card-text"><a href="registrationform.php">=> new here? ^^ click to register <=</a>
   
 
    <form method="post" action="insert2.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <br>
    <input type="submit" value="Login">
    </form>

    </div>
    </div>
</body>
        

<footer class="text-center text-lg-start bg-light text-muted">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    </section>
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              <!--icon3--> 
              <img src="https://i.ibb.co/5Lm8FZz/pngkey-com-kirby-face-png-5753381-1.png" height="20px" width="20px"> YEET
            </h6>
            <p>
              We offer products from many manufacturers around the world,
              whether it be exclusive keyboards , mice, headsets andgamepads  and have an assortment that suits everyone.
            </p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
            <a href="games.php" class="text-reset">Games</a>
          </p>
          <p>
            <a href="accessories.php" class="text-reset">Accessories</a>
          </p>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p>
            <i class="fas fa-envelope me-3"></i> yassinemarrekchi@gmail.com</a>
          </p>
          </div>
        </div>
      </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(255, 87, 51 );">

      <a class="text-reset fw-bold" href="#!">Yassine Marrekchi</a>
    </div>
  </footer>
</html>