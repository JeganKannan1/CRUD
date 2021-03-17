<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "login_form";

 $conn = new mysqli($servername, $username, $password,$dbname);

 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }

$user = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username,password) VALUES ('$user', '$password')";
      
        if ($conn->query($sql) === TRUE) { 
          echo "record inserted successfully"; 
             } else { 
          echo "Error: " . $sql . "<br>" . $conn->error; 
        }


?>