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
$email = $_POST['email'];

$sql = "INSERT INTO users (username,password,email) VALUES ('$user', '$password' , '$email')";

if($sql){
  $to = $email;

         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:jegancs0215@gmail.com \r\n";
         
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
     mail ($to,$subject,$message,$header);
        //  header('location:mail.php');
        
         
}else{
  echo "error";
}
      
        if ($conn->query($sql) === TRUE) { 
          echo "record inserted successfully"; 
             } else { 
          echo "Error: " . $sql . "<br>" . $conn->error; 
        }


?>