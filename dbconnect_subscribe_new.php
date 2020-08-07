<?php
  
  if($_POST['g-recaptcha-response']!="")
   {
       $secret = '6LfnmHYUAAAAAEZJjYI9onMPcpv2ygwm-YBmxJLF';
       $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
       $responseData = json_decode($verifyResponse);
       //if($responseData->success)
      // {
           
          $from_data1 = $conn->real_escape_string ($_POST['fName']);
          $from_data2 = $conn->real_escape_string ($_POST['email']);
          $from_data3 = $conn->real_escape_string ($_POST['password']);

       
      
     
      }else{
            echo "Error22: " ; 
      }

   

?>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAyM9-HKRu4t2Nbte2BPykF-RH_XDBM0RA",
    authDomain: "crypto-market-cloud.firebaseapp.com",
    databaseURL: "https://crypto-market-cloud.firebaseio.com",
    projectId: "crypto-market-cloud",
    storageBucket: "crypto-market-cloud.appspot.com",
    messagingSenderId: "235443285802"
  };
  firebase.initializeApp(config);
</script>
<script>

  var email = "<?php echo $from_data2; ?>";
  var password = "<?php echo $from_data3; ?>";
   
firebase.auth().createUserWithEmailAndPassword(email, password).then(function(){
  sendVarificationEmail();

}).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // ...
  
  
});

function sendVarificationEmail(){
  var user = firebase.auth().currentUser;

user.sendEmailVerification().then(function() {
   addToDatabase();
 window.alert("A Varificaton Email Send to "+user.email + "  Please Check Your Inbox");
  
  // Email sent.
}).catch(function(error) {
  // An error happened.

  var errorMessage = error.message;
  window.alert(errorMessage);

  
});
}
function addToDatabase(){
  var user = firebase.auth().currentUser;
 
  var userId = user.uid;
  var name = "<?php echo $from_data1; ?>";
  var address = "00";
  
  firebase.database().ref('users').child(userId).set({
    Name: name,
    Point: address,
    
    
  });
  window.location="NewLogin.php";
}




</script>


