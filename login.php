<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="Width=device-width">
    <meta name="description" content="Cheapest Earning Website">
    <meta name="keywords" content="Cheap, CSGO, PUBG, Paypal, Free money, Fortnite free vbucks">
    <meta name="author" content="Eraser or Hasan">
    <title>Member | Login</title>
	
	
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
  var provider = new firebase.auth.GoogleAuthProvider();
  function googleSignIn(){
  
  firebase.auth().signInWithPopup(provider).then(function(result){
   var token = result.credential.accessToken;
   var user = result.user;
   window.location="MemberChat.php";
   
  }).catch(function(error){
  alert(error);
  var errorCode = error.code;
  var errorMessage = error.message;
  });
  
  }
  
  
    var provider2 = new firebase.auth.FacebookAuthProvider();
		  
		  function facebookSignIn(){
		  
		  
		  firebase.auth().signInWithPopup(provider2).then(function(result) {
			  // This gives you a Facebook Access Token. You can use it to access the Facebook API.
			  var token = result.credential.accessToken;
			  // The signed-in user info.
			  var user = result.user;
			window.location="MemberChat.php";
			   //window.location="MemberChat.php";
			   
			  // ...
			}).catch(function(error) {
			  // Handle Errors here.
			  var errorCode = error.code;
			  var errorMessage = error.message;
			  // The email of the user's account used.
			  var email = error.email;
			  // The firebase.auth.AuthCredential type that was used.
			  var credential = error.credential;
			  // ...
			});
		  }
		  
		  
		function initApp(){
		 
		 // var user = firebase.auth().currentUser;
		firebase.auth().onAuthStateChanged(function(user){
		if (user) {
		  window.location="MemberChat.php";
		 		
		} else {
		  
		}
		});
		}

	</script>
	 
  </head>
  <body onload="initApp()">
  


  
<section id="signIn">
     
        <center>
		<h2 style="margin-top: 100px;">Please Select One of the Account to Sign In</h2>
		  <div style="border: 2px solid red; height: 200px; width: 400px;  text-align:center; padding:50px; margin-top: 20px;">
		     
		    <a onclick="googleSignIn()">
          <img src="images/google.png" style="height:70px; width:92%">   </a> <br>
		   <a onclick="facebookSignIn()" >
          <img src="images/facebook.png" style="height:125px; width:100%">   </a>
         </div>
        </center>
		
</section>
  </body>
</html>
