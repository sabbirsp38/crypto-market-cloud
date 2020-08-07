<?php

if (!isset($_GET['id']) || $_GET['id']==NULL  ) {
 // header("Location: 404.php") ;
  
}else{
   $id= $_GET['id'];
   $com_id = $_GET['com_id'];
}

include 'lib/Connection.php';
include 'lib/Session.php';
 Session::init();
 if(isset($_SESSION['uni_id'])){

 $uni_id = $_SESSION['uni_id'];

    $from_data1 = addslashes ($_POST['text2']);
    $from_data2 = $uni_id;
    $from_data3 = $id;

$sql = "INSERT INTO  tbl_reply(uni_id, ico_id, reply, com_id) VALUES ('$from_data2','$from_data3', '$from_data1','$com_id')";


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