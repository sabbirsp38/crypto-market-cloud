<?php
include '../lib/Connection.php';
    
       

if (!isset($_GET['$id']) || $_GET['$id']==NULL  ) {
  header("Location: 404.php") ;
   $id= $_GET['$id'];
}else{
   $id= $_GET['$id'];
}


 
 
  $sql = "UPDATE users_crypto set  profile_approve ='1'  where id=$id" ;

    

  if ($conn->query($sql) === TRUE) 
  {    
      
     header("location: Pandding account.php");
  }
  
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
      
  }
  $conn->close();  
?>

