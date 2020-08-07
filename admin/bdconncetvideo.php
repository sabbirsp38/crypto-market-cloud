<?php
include '../lib/Connection.php';


  $permited  = array('mp4', 'MP4');
            $file_name = $_FILES['video']['name'];
            $file_size = $_FILES['video']['size'];
            $file_temp = $_FILES['video']['tmp_name'];
            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
           
            $uploaded_image = "../Video/".$unique_image;

            if ($file_size >50000000048567) {
                 echo "<span class='error'>Image Size should be less then 50MB!
                 </span>";
                } elseif (in_array($file_ext, $permited) === false) {

                         echo "<span class='error'>You can upload only:-"
                         .implode(', ', $permited)."</span>";
                        } else{

                        move_uploaded_file($file_temp, $uploaded_image);
                        $sql = "INSERT INTO tbl_video() VALUES ('')";
               } 




  $sql = "INSERT INTO  tbl_video (video) VALUES ('$unique_image')";
  if ($conn->query($sql) === TRUE) 
  {    
      echo "Message show";
      header("location: videolist.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

