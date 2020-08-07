 
<?php
session_start();
 
// Echo session variables that were set on first page
include '../lib/Connection.php';

 include '../config/config.php';
 include '../lib/Database.php'; 
 include '../helpers/Formet.php';

  $db = new Database();
$fm = new Formet();



    $from_data1 = addslashes ($_POST['point']);
    $from_data2 = addslashes ($_POST['f_id']);
    $from_data3 = addslashes ($_POST['f_name']);
    $from_data4 = addslashes ($_POST['w_address']);
    $from_data5 = addslashes ($_POST['amount']);
    $new = $from_data1;
    $new2 = $from_data5;

     $in_Query = "insert into  tbl_point(name,F_id,  point, w_address,amount) VALUES (' $from_data3','$from_data2', '$from_data1','$from_data4','$from_data5')";
  
     $query = "select point from tbl_point where F_id = '$from_data2'";
    
      $post = $db->select($query);
      if ($post) {
        if($result= $post -> fetch_assoc()) {
          $old = $result['point'];
          $old2 = $result['amount'];
          $new = $from_data1+$old;  
   
   

   $update = "update tbl_point set point ='$new', w_address ='$from_data4', amount='$from_data5' where F_id = '$from_data2'";

   if($conn->query($update)===true)
    {
    
    }
else{
 echo "Error: " . $update  . "<br>" . $conn->error;
}
 
         
     }}
     else{
        if ($conn->query($in_Query) === TRUE) 
        {    
      
      //header("location: index.php");
          
     }
  else 
    {   
      echo "Error: " . $in_Query . "<br>" . $conn->error;
        
     }
     }
     $post2 = $db->select($query);
      if ($post2) {
        if($result= $post2 -> fetch_assoc()) {
          $old = $result['point'];
         // header("location: index.php");
         
     }}
     else{
        if ($conn->query($in_Query) === TRUE) 
        {    
      
      //header("location: index.php");
          
     }
     }

      $sql2= "DELETE FROM tbl_point_order  where f_id='$from_data2'" ;

    if ($conn->query($sql2) === TRUE) 
    {    
      
     // header("location: profilelist.php?");
    } 
     else 
    {   
      echo "Error: " . $sql2 . "<br>" . $conn->error;
        
     }


    $conn->close();  
  
  
?>
<script src="https://www.gstatic.com/firebasejs/5.0.1/firebase.js"></script>
	<script>
	  // Initialize Firebase
	  var config = {
		apiKey: "AIzaSyB3UUCTrBGW6uTSRyZM-bk69MJUSGIqgFY",
		
		authDomain: "earnaskin.firebaseapp.com",
		databaseURL: "https://earnaskin.firebaseio.com",
		projectId: "earnaskin",
		storageBucket: "",
		messagingSenderId: "512378220758"
	  };
	  firebase.initializeApp(config);
	  </script>
<script> 
  var id = "<?php echo $from_data2; ?>";
  var name = "<?php echo $from_data3; ?>";
  var point = "<?php echo $new; ?>";
  
   firebase.database().ref('users').child(id).set({
    Name: name,
    Point: point,
    
    
  });
     
    // window.location="profilelist.php";
</script>

<script>
  //window.location="profilelist.php";
  </script>


<h3>Process Has Been Completed.</h3>
<a href="profilelist.php">Go Back TO the User List.</a>
   


 