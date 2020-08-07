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
                        $sql = "INSERT INTO tbl_announcement() VALUES ('')";
               } 

















     
    $from_data1 = addslashes ($_POST['title']);
   
    $from_data3 = addslashes ($_POST['body']);
    




  $sql = "INSERT INTO  tbl_announcement (title, img, text_body) VALUES ('$from_data1', '$unique_image', '$from_data3')";
  if ($conn->query($sql) === TRUE) 
  {    
     
     // header("location: Announcement_list.php");
  } 
  else 
  {   
     // echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

 
<link rel="manifest" href="/manifest.json">  
  <script src="//messaging-public.realtime.co/js/2.1.0/ortc.js"></script>

  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  

<script src="https://www.gstatic.com/firebasejs/5.5.7/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.7/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.7/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.7/firebase-messaging.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.7/firebase-functions.js"></script>
<script src="/dex.js"></script>

 
  <script src="https://www.gstatic.com/firebasejs/3.5.1/firebase.js"></script>
  <script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBQT4ykCO54Ygslw74AJIAND__ZR0vUxkM",
    authDomain: "web-push-demo-cf974.firebaseapp.com",
    databaseURL: "https://web-push-demo-cf974.firebaseio.com",
    storageBucket: "web-push-demo-cf974.appspot.com",
    messagingSenderId: "915139563807"
  };
  firebase.initializeApp(config);
  </script>

 <script src="/WebPushManager.js"></script>
<script>
         var name = "<?php echo $from_data1; ?>";
          setTimeout(function(){send(name);
              document.getElementById('ss').style.display="block";
              document.getElementById('sss').style.display="none";
        }, 3000);
       

</script>
<h3 id="sss">Please wait...</h3>
<h3 id="ss" style="display:none">Process Has Been Completed.</h3>

<a href="Announcement_list.php">Go Back TO the User List.</a>

