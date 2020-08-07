<?php
 include '../lib/Connection.php';


     
            $from_data1 = addslashes ($_POST['fb_link']);
            $from_data2 = addslashes ($_POST['twitter_link']);
            $from_data3 = addslashes ($_POST['linkedin_link']);
            $from_data4 = addslashes ($_POST['midiam_link']);
            $from_data5 = addslashes ($_POST['youtube_link']);
            $from_data6 = addslashes ($_POST['telegram_link']);
            $from_data7 = addslashes ($_POST['instragram_link']);
    




  $sql = "INSERT INTO   tbl_social (fb_link, twitter_link, linkedin_link,midiam_link, youtube_link,telegram_link, instragram_link) VALUES ('$from_data1','$from_data2','$from_data3','$from_data4','$from_data5','$from_data6','$from_data7')";
  if ($conn->query($sql) === TRUE) 
  {    
      
     header("location: sociallist.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

