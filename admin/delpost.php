<?php
  $servername = "localhost";
  $username = "cryptomarket";
  $password = "123456";
  $dbname = "cryptomarketcloud";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection    
  if ($conn->connect_error) 
  {
      die("Connection went wrong: " . $conn->connect_error); 
  } 
     
     $user_id= $_GET ['delid'];
    $sql="DELETE FROM tbl_post WHERE id = '$user_id'";
    

  if ($conn->query($sql) === TRUE) 
  {    
      
      header("location: postlist.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

