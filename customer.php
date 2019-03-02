<?php
  $hostname = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'fitness1';

  //Opening a connection
  $conn = new mysqli($hostname, $username, $password, $database);
  if ($conn->connect_error){
    die($conn->connect_error);
  }

  echo "<h1>Ok</h1>";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $comments = $_POST['comments'];



  $query = "insert into customer(name,email,comments) values('$name','$email','$comments')";

  $results = $conn->query($query);
  if (!$results) {
    echo "Insert failed";
  } else {
    echo "<h1>Successfully<h1>";
  }

  $query = "select * from customer";
  $results = $conn->query($query);

  if (!$results) echo "Select error";

  while ($row = mysqli_fetch_array($results)) {

  }









?>
