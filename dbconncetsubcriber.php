<?php
include 'lib/Connection.php';
     
    $from_data1 = $conn->real_escape_string ($_POST['semail']);
    




  $sql = "INSERT INTO   tbl_subcriber (semail) VALUES ('$from_data1')";
  if ($conn->query($sql) === TRUE) 
  {    
      
      header("location: index.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

