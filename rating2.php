 
<?php
session_start();
 
// Echo session variables that were set on first page
$id_index= $_SESSION["id"];
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
  include 'config/config.php';
   include 'lib/Database.php'; 
 include 'helpers/Formet.php'; 
  $db = new Database();
$fm = new Formet();

$total = $_GET["v"];

     $in_Query = "insert into rating(blog_index,value) values($id_index,$total)";
  
      $query = "select value from rating where blog_index = $id_index";
      



      $post = $db->select($query);
      if ($post) {
        if($result= $post -> fetch_assoc()) {
          $old = $result['value'];
         // header("location: index.php");
         
     }}
     else{
        if ($conn->query($in_Query) === TRUE) 
        {    
      
      //header("location: index.php");
        	
     }
     }



  $post2 = $db->select($query);
      if ($post2) {
        if($result= $post2 -> fetch_assoc()) {
          $old = $result['value'];
         // header("location: index.php");
         
     }}
     else{
        if ($conn->query($in_Query) === TRUE) 
        {    
      
      //header("location: index.php");
          
     }
     }


    $new = $total+$old;  
    $final = $new/2;
 
    if(strlen($final) > 3) {
		 $final2 = substr($final, 0, 3)."";
		} else {
		 $final2 = $final;
		}

   $update = "update rating set value = $final2 where blog_index=$id_index";

   if($conn->query($update)===true)
    {
    	header("location: memberprofilelp.php?id=$id_index");
    }
 
  $conn->close();  
  session_destroy(); 
?>