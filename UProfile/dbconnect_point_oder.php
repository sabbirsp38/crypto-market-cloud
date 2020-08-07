<?php

 include 'inc/hader db.php'; ?>

<?php 

 $permited  = array('jpg', 'JPG', 'jpeg','JEPG', 'png', 'png','gif');
            $file_name = $_FILES['pimg']['name'];
            $file_size = $_FILES['pimg']['size'];
            $file_temp = $_FILES['pimg']['tmp_name'];
            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "../upload/".$unique_image;

            if ($file_size >5048567) {
                 echo "<span class='error'>Image Size should be less then 5MB!
                 </span>";
                } elseif (in_array($file_ext, $permited) === false) {

                         echo "<span class='error'>You can upload only:-"
                         .implode(', ', $permited)."</span>";
                        } else{

                        move_uploaded_file($file_temp, $uploaded_image);
                        $sql = "INSERT INTO tbl_exchange_order() VALUES ('')";
               }  



    
    $from_data1 = $conn->real_escape_string ($_POST['name']);
    $from_data2 = $conn->real_escape_string ($_POST['email']);
    $from_data3 = $conn->real_escape_string ($_POST['bithday']);
    $from_data4 = $conn->real_escape_string ($_POST['amount']);
    $from_data5 = $conn->real_escape_string ($_POST['wallet_Address']);
   
        





  $sql = "INSERT INTO  tbl_exchange_order (name,email, birth,  amount, w_address, photo_id) VALUES ( '$from_data1','$from_data2','$from_data3','$from_data4','$from_data5','$unique_image')";
  if ($conn->query($sql) === TRUE) 
  {    
      
      header("location: ../index.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

