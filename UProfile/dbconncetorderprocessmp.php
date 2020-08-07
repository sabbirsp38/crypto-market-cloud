<?php include 'inc/hader db.php'; 



     
    $from_data1 = $conn->real_escape_string ($_POST['ico_name']);
    $from_data2 = $conn->real_escape_string ($_POST['etherscanTransaction_id']);
    $from_data3 = $conn->real_escape_string ($_POST['contact_details']);
    $from_data4 = $conn->real_escape_string ($_POST['pakage']);
   
   
    
    




  $sql = "INSERT INTO tbl_mporderprocess (ico_name, etherscanTransaction_id, contact_details, pakage) VALUES ('$from_data1', '$from_data2', '$from_data3','$from_data4')";
  if ($conn->query($sql) === TRUE) 
  {    
      
      header("location:addico p.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

