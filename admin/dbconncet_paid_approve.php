<?php
include '../lib/Connection.php';
    
 //use ../PHPMailer\PHPMailer\PHPMailer;      

if (!isset($_GET['$id']) || $_GET['$id']==NULL  ) {
  header("Location: 404.php") ;
   $id= $_GET['$id'];
}else{
   $id= $_GET['$id'];
}



 
  $sql = "INSERT INTO users_crypto (f_name, l_name, email, Password, isEmailConfirmed, uni_id, profile_approve, p_type) SELECT f_name, l_name, email, Password, isEmailConfirmed, uni_id, profile_approve, p_type FROM  tbl_paccount where id=$id " ;
  $sql2= "DELETE FROM tbl_paccount where id=$id" ;

//   include_once "PHPMailer/PHPMailer.php";

//                 $mail = new PHPMailer();
//                 $mail->setFrom('cryptomarketcloud@gmail.com');
//                 $mail->addAddress($email, $from_data1);
//                 $mail->Subject = "Payment Confirmation";
//                 $mail->isHTML(true);
//                 $mail->Body = "
//                     Thanks for Joining Crypto Market Cloud.We received your payment. Now you can log in Using the Link Below:<br><br>
                    
//                     <a style='color: #fff; background-color: #010826; borde-color: #000000; border-radius: 5px; font-size: 27px; margin-left: 8px; min-width: 259px; min-height: 52px; text-decoration: none; padding: 10px 25px;' href='https://cryptomarketcloud.com/UProfile/index.php'>Click Here</a>
                    
//                     <br><br>Best Wishes<br> Crypto Market Cloud
//                 ";
                

               

//   if ($mail->send()) 
//   {    
      
      
//   }
  if ($conn->query($sql) === TRUE) 
  {    
      
      
  }
  if ($conn->query($sql2) === TRUE) 
   {    
      
      header("location: Pandding account.php");
   }
  
  else 
  {   
     // echo "Error: " . $sql . "<br>" . $conn->error;
      echo "Something wrong happened! Please try again!";
  }
  $conn->close();  
?>

