<?php include 'inc/hader db.php'; ?>

    <?php

          if (!isset($_GET['$id']) || $_GET['$id']==NULL  ) {
            header("Location: 404.php") ;
           
          }else{
             $id= $_GET['$id'];
          }

        ?>

<?php 

/*Logo Image start here*/
            $permited  = array('jpg', 'JPG', 'jpeg','JPEG', 'png', 'PNG', 'png','gif');
            $file_name = $_FILES['myFile']['name'];
            $file_size = $_FILES['myFile']['size'];
            $file_temp = $_FILES['myFile']['tmp_name'];
            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "../upload/".$unique_image;

            if ($file_size >2048567) {
                 echo "<span class='error'>Image Size should be less then 2MB!
                 </span>";
                } elseif (in_array($file_ext, $permited) === false) {

                         echo "<span class='error'>You can upload only:-"
                         .implode(', ', $permited)."</span>";
                        } else{

                        move_uploaded_file($file_temp, $uploaded_image);
                        $sql = "INSERT INTO users_crypto() VALUES ('')";
               } 



              $from_data1 =$con->real_escape_string ($_POST['firstname']);
              $from_data2 =$con->real_escape_string($_POST['lastname']);
              $from_data4 =$con->real_escape_string ($_POST['dob']);
              $from_data5 =$con->real_escape_string ($_POST['Country']);
              $from_data6 =$con->real_escape_string ($_POST['Member']);
              $from_data8 =$con->real_escape_string ($_POST['amount']);
              $from_data9 =$con->real_escape_string ($_POST['projects']);
              $from_data10 =$con->real_escape_string  ($_POST['description']);

  $sql = "UPDATE  users_crypto set    f_name ='$from_data1',    l_name ='$from_data2',  country ='$from_data5',  img ='$unique_image',   inv_project ='$from_data9',   birthday ='$from_data4', role ='$from_data6', inv_amount ='$from_data8', experience ='$from_data10' where id=$id ";
  if ($conn->query($sql) === TRUE) 
  {    
      
      header("location: profileindex.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

