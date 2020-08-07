<?php
include '../lib/Connection.php';


  $permited  = array('jpg', 'JPG', 'jpeg','JEPG', 'png', 'png','gif');
            $file_name = $_FILES['company_image']['name'];
            $file_size = $_FILES['company_image']['size'];
            $file_temp = $_FILES['company_image']['tmp_name'];
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
                    $sql = "INSERT INTO tbl_directory() VALUES ('')";
           } 

















     
    $from_data1 = addslashes ($_POST['company_name']);
  
    $from_data3 = addslashes ($_POST['company_discription']);
    $from_data4 = addslashes ($_POST['company_weblink']);




  $sql = "INSERT INTO  tbl_directory (company_name, company_image, company_discription, company_weblink) VALUES ('$from_data1', '$unique_image', '$from_data3', '$from_data4')";
  if ($conn->query($sql) === TRUE) 
  {    
     
      header("location: derectorylist.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

