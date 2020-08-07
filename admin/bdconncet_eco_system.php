<?php
include '../lib/Connection.php';


  $permited  = array('jpg', 'JPG', 'jpeg','JEPG', 'png', 'png','gif');
            $file_name = $_FILES['img']['name'];
            $file_size = $_FILES['img']['size'];
            $file_temp = $_FILES['img']['tmp_name'];
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
                        $sql = "INSERT INTO tbl_eco_system() VALUES ('')";
               } 

















     
    $from_data1 = addslashes ($_POST['title']);
    $from_data2 = addslashes ($_POST['pimg']);
    $from_data3 = addslashes ($_POST['body']);
    




  $sql = "INSERT INTO  tbl_eco_system(title, img, text_body) VALUES ('$from_data1', '$unique_image', '$from_data3')";
  if ($conn->query($sql) === TRUE) 
  {    
     
      header("location: eco_system_list.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

