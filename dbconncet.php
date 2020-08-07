<?php
include 'lib/Connection.php';
     
    $from_data1 = $conn->real_escape_string ($_POST['firstname']);
    $from_data2 = $conn->real_escape_string ($_POST['lastname']);
    $from_data3 = $conn->real_escape_string ($_POST['email']);
    $from_data4 = $conn->real_escape_string ($_POST['body']);




  $sql = "INSERT INTO tbl_contact (firstname, lastname, email, body) VALUES ('$from_data1', '$from_data2', '$from_data3', '$from_data4')";
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

