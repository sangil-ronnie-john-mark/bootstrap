<?php
SESSION_START();
include 'dbcon.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = '$username' && password = '$password' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // if the username and password is correct redirect to homepage
  if (strpos($username, '@admin')){
    $_SESSION['token'] = 1;
    Header('Location: ../admin.php');
  } else if (strpos($username, '@student')) {
    $_SESSION['token'] = 2;
    Header('Location: ../student.php');
  }
    
} else {
    $_SESSION['error'] = "Invalid Username or Password";
    Header('Location: ../index.php');

}
$conn->close();
?>