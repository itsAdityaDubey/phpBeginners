<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feddback";

if (isset($_POST['email'])) {
  $name = trim(stripslashes(htmlspecialchars($_POST['name'])));
  $email = trim(stripslashes(htmlspecialchars($_POST['email'])));
  $feedback = trim(stripslashes(htmlspecialchars($_POST['feedback'])));

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `feedback`(`name`, `email`, `feedback`) VALUES ('".$name."', '".$email."', '".$feedback."')";

    if ($conn->query($sql) === TRUE) {
      echo "Feedback Submited";
      header("Location: ./index.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
?>