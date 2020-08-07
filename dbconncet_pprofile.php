<?php 

include 'lib/Connection.php';



     
    $from_data1 = $conn->real_escape_string ($_POST['f_name']);
    $from_data2 = $conn->real_escape_string ($_POST['l_name']);
    $from_data3 = $conn->real_escape_string ($_POST['email']);
    $from_data4 = $conn->real_escape_string ($_POST['Password']);
    $from_data5 = $conn->real_escape_string ($_POST['etherscanTransaction_id']);
   
   
    $hashedPassword = password_hash($from_data4, PASSWORD_BCRYPT);
    $uni_id = substr(md5(time()), 0, 38);




  $sql = "INSERT INTO tbl_paccount (f_name, l_name, email, Password, etherscanTransaction_id, isEmailConfirmed, uni_id, profile_approve, p_type) VALUES ('$from_data1', '$from_data2', '$from_data3','$hashedPassword','$from_data5','1','$uni_id','1','1')";
  if ($conn->query($sql) === TRUE) 
  {    
      
      header("location:thankyou.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

