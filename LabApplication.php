<?php

$fname = $_POST['fName'];
$email = $_POST['mail'];
$gender = $_POST['gender'];

//connecting database
$db = mysqli_connect('localhost', 'root', '', 'labapplication');
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

// Checking if the form submitted
if (isset($_POST['submit'])) {
// Get the form data
  $full_name = $_POST['fname'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];


//validate
  if (empty($fname) || empty($email) || empty($gender)) {
    echo "Please fill in all fields";
  } else {
    // Insert the data into the database
    $sql = "INSERT INTO students(fname, email, gender) VALUES ('$fname', '$email', '$gender'";

    if (mysqli_query($db, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
  }
}
?>

