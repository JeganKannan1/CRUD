<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "copy_form";

 $conn = new mysqli($servername, $username, $password,$dbname);

 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }

$user = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO customers(username,password,email) VALUES ('$user', '$password' , '$email')";
      
        if ($conn->query($sql) === TRUE) { 
          echo "record inserted successfully....."  ."<br>";
             } else { 
          echo "Error: " . $sql . "<br>" . $conn->error; 
        }

        $to = $email;
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:jegancs0215@gmail.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "MAIL sent successfully...";
         }else {
            echo "MAIL could not be sent...";
         }


?>