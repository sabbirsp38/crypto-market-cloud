<?php
include '../lib/Connection.php';
       

if (!isset($_GET['$id']) || $_GET['$id']==NULL  ) {
  header("Location: 404.php") ;
   $id= $_GET['$id'];
}else{
   $id= $_GET['$id'];
}



 
  $sql = "INSERT INTO tbl_publish_mp (ico_name, contact_details, logo_img, website_link, company_tagline, etherscanTransaction_id) SELECT ico_name, contact_details, logo_img, website_link, company_tagline, etherscanTransaction_id  FROM   tbl_mporderprocess where id=$id" ;

    $sql2= "DELETE FROM  tbl_mporderprocess where id=$id" ;

  if ($conn->query($sql) === TRUE) 
  {    
      
      //header("location: icolistmp.php");
  }
  if ($conn->query($sql2) === TRUE) 
  {    
      
      header("location: icolistmp.php");
  }

  
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
      
  }
  $conn->close();  
?>

