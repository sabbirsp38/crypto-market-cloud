<?php

if (!isset($_GET['id']) || $_GET['id']==NULL  ) {
 // header("Location: 404.php") ;
  
}else{
   $id= $_GET['id'];
}

include 'lib/Connection.php';
include 'lib/Session.php';
 Session::init();
 if(isset($_SESSION['uni_id'])){

 $uni_id = $_SESSION['uni_id'];

    $from_data1 = $conn->real_escape_string ($_POST['text']);
    $from_data2 = $uni_id;
    $from_data3 = $id;

$sql = "INSERT INTO  tbl_openion(uni_id, ico_id, comment) VALUES ('$from_data2','$from_data3', '$from_data1')";


if ($conn->query($sql) === TRUE) 
  {    
      
      header("location: memberprofile.php?id=$id");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close(); 
}
 else
  header("Location:UProfile/index.php?ref=$id");

?>