<?php
  include '../lib/Connection.php';


     
        $from_data1 = addslashes ($_POST['name']);
        $from_data2 = addslashes ($_POST['price']);
        $from_data3 = addslashes ($_POST['dec']);
        $from_data4 = addslashes ($_POST['type']);
        

  $sql = "INSERT INTO   tbl_index_contant (name, price, dics, type) VALUES ('$from_data1','$from_data2','$from_data3','$from_data4')";
  if ($conn->query($sql) === TRUE) 
  {    
      
     header("location: Pakage List.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

