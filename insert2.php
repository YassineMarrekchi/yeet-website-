<?php
include 'config.php';
$conn = OpenCon();

session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE User_name = '$username' AND password = '$password'";
$result = mysqli_query( $conn, $sql );
$arr = mysqli_fetch_array( $result );

if ( mysqli_num_rows( $result ) > 0 ) {
    $_SESSION['User_Type'] = $arr[ 'Type' ];
    $_SESSION['username'] = $username;
    $_SESSION['user_logged_in'] = true;
    //redirect to protected page
    header( 'location:index.php' );
} else {
    echo 'Invalid username or password';
}
?>
