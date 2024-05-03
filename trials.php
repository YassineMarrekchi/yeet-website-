<?php 
  $conn = mysqli_connect("localhost", "root", "", "projectcs");
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
    ?>

<button id="login-btn" onclick="logInOut()">Login</button>
<?php 
    session_start();
    if(isset($_SESSION['User_Name']) && $_SESSION['User_Name'] == true) {
        echo '<script>var isLoggedIn = true;</script>';
    }
    else {
        echo '<script>var isLoggedIn = false;</script>';
    }
?>


<script>
    function logInOut() {
        if(isLoggedIn) {
            document.getElementById("login-btn").innerHTML = "Logout";
        }
        else {
            document.getElementById("login-btn").innerHTML = "Login";
        }
    }
</script>
<?php 
                        $conn = mysqli_connect("localhost", "root", "", "projectcs");
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        $query = "SELECT * FROM user";
                        $result = mysqli_query($conn, $query);
                        ?>
                        <?php
                        if (isset($_SESSION['User_Name'])) { ?>
                        <a class="nav-link" href="loginform.php"><i class="fa-sharp fa-solid fa-arrow-right-to-bracket"></i> Login </a>
                      <?php } else { ?>
                        <a class="nav-link" href="#">Profile</a>
                        <?php } ?>

                </li>
                <li class="nav-item">
                <?php 
                        $conn = mysqli_connect("localhost", "root", "", "projectcs");
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        $query = "SELECT * FROM user";
                        $result = mysqli_query($conn, $query);
                        ?>
                        <?php
                        if (isset($_SESSION['User_Name'])) { ?>
                    <a class="nav-link" href="http://localhost/csproject/registrationform.php"><i class="fa-sharp fa-solid fa-plus"></i> Register</a>
                    <?php } else { ?>
                        <a class="nav-link" href="logout.php">Logout</a>
                        <?php } ?>
