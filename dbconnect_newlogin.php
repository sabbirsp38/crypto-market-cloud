<?php
include 'lib/Connection.php';
    
    $from_data1 = $conn->real_escape_string ($_POST['name']);
    $from_data2 = $conn->real_escape_string ($_POST['email']);
    $from_data3 = $conn->real_escape_string ($_POST['ref']);
    $from_data4 = $conn->real_escape_string ($_POST['pass']);
  



   


  $sql = "INSERT INTO  tbl_ref(ref_id,name,email) VALUES ('$from_data3','$from_data1','$from_data2')";
  if ($conn->query($sql) === TRUE) 
  {    
      
    //  header("location: index.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
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
 var email = "<?php echo $from_data2; ?>";
  var password = "<?php echo $from_data4; ?>";
  
  firebase.auth().createUserWithEmailAndPassword(email, password).then(function(){
  sendVarificationEmail();

}).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // ...
 alert("Email Already Use Please Login");
  window.location.href = "NewLogin.php";
});

function sendVarificationEmail(){
  var user = firebase.auth().currentUser;

user.sendEmailVerification().then(function() {
 window.alert("A Varificaton Email Send to "+user.email + "  Please Check Your Inbox");
   addToDatabase();
  // Email sent.
}).catch(function(error) {
  // An error happened.

  var errorMessage = error.message;
  window.alert(errorMessage);

  
});
}
function addToDatabase(){
  var user = firebase.auth().currentUser;
  var email = user.email;
  var userId = user.uid;
  var name = "<?php echo $from_data1; ?>";
  var address = "00";
  
  firebase.database().ref('users').child(userId).set({
    Name: name,
    Point: address,
    
    
  });
  alert("Go back to LogIn");
  window.location.href = "NewLogin.php";
}

</script>
