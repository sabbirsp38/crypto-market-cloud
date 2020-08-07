
<?php 
 include '../lib/Session.php';
 Session::checkSession();
$uni_id = $_SESSION['uni_id'];
//$con = new mysqli('localhost', 'cryptomarket', '123456', 'cryptomarketcloud');


 // Create connection
$con = new mysqli('localhost', 'root', '', 'cryptomarketcloud');
?>
<?php
   // $servername = "localhost";
   // $username = "cryptomarket";
   // $password = "123456";
   // $dbname = "cryptomarketcloud";



 // Create connection
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "cryptomarketcloud";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection    
  if ($conn->connect_error) 
  {
      die("Connection went wrong: " . $conn->connect_error); 
  }

