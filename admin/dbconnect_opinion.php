<?php

if (!isset($_GET['id']) || $_GET['id']==NULL  ) {
 // header("Location: 404.php") ;
  
}else{
   $id= $_GET['id'];
}

include '../lib/Connection.php';
include '../lib/Session.php';




    $from_data1 = addslashes ($_POST['text']);
    $from_data2 = "admin";
    $from_data3 = $id;

$sql = "INSERT INTO  tbl_openion(uni_id, ico_id, comment) VALUES ('$from_data2','$from_data3', '$from_data1')";


if ($conn->query($sql) === TRUE) 
  {    
      
     header("location: openion.php?id=$id");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close(); 

 

?>