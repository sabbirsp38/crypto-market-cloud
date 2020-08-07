<?php
include '../lib/Connection.php';

 
/*teme img 3 srat */
 $permited  = array('jpg', 'JPG', 'jpeg','JEPG', 'png', 'PNG', 'png','gif');
            $file_name = $_FILES['logo_img']['name'];
            $file_size = $_FILES['logo_img']['size'];
            $file_temp = $_FILES['logo_img']['tmp_name'];
            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
           
            $uploaded_image = "upload/".$unique_image;

            if ($file_size>2048567) {
                 echo "<span class='error'>Image Size should be less then 2MB!
                 </span>";
                } elseif (in_array($file_ext, $permited) === false) {

                         echo "<span class='error'>You can upload only:-"
                         .implode(', ', $permited)."</span>";
                        } else{

                        move_uploaded_file($file_temp, $uploaded_image);
                        $sql = "INSERT INTO tbl_mporderprocess() VALUES ('')";
               } 
/*teme img 3 end*/
     
    $from_data1 = addslashes ($_POST['ico_name']);
    $from_data4 = addslashes ($_POST['website_link']);
    $from_data5 = addslashes ($_POST['company_tagline']);
   
    
    




  $sql = "INSERT INTO tbl_publish_mp (ico_name,  logo_img, website_link, company_tagline) VALUES ('$from_data1',  '$unique_image','$from_data4','$from_data5')";
  if ($conn->query($sql) === TRUE) 
  {    
      
      header("location: icolistmp.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

