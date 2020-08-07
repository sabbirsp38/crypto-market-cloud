<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php include 'helpers/Formet.php'; ?>

<?php 
$db = new Database();
$fm = new Formet();
 ?>
 <?php

if (!isset($_GET['ref']) || $_GET['ref']==NULL  ) {
  //header("Location: 404.php") ;
  // $ref= $_GET['ref'];
}else{
   $ref= $_GET['ref'];
}

  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>crypto market cloud-ico platform and crypto live price</title>
     <link rel="icon" href="images/logo.png">

    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

            <!-- Bootstrap -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/token.css">
            <link rel="stylesheet" href="css/fropost.css">
            <link rel="stylesheet" href="css/Addstyle.css">
            <link rel="stylesheet" href="css/foterpost.css">

            

            
            <link rel="stylesheet" href="css/animate.min.css">
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

     <script src="https://www.gstatic.com/firebasejs/5.0.1/firebase.js"></script>


   <link href='style-slider.css' rel='stylesheet'/>

<script src="touchslider.js"></script>

 <!-- THESE ARE THE REQUIRED FILES TO USE WEB PUSH NOTIFICATIONS -->

  <script src="//messaging-public.realtime.co/js/2.1.0/ortc.js"></script>

   <!-- THESE FILES ARE ONLY REQUIRED FOR THE CURRENT EXAMPLE -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  








<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/mediaelement-and-player.min.js"></script>


<!-- For Plear -->


<link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
<script src="http://vjs.zencdn.net/4.12/video.js"></script>
<style type="text/css">
  .vjs-default-skin .vjs-play-progress,
  .vjs-default-skin .vjs-volume-level { background-color: #00a5ff }
  .vjs-default-skin .vjs-control-bar { font-size: 150% }
</style>

<style>
    
        *{margin: 0; padding: 0;}
body{
  font-family: sans-serif;
}
.form-wrap {
    background: #c7c0c08c;
    padding: 40px 20px;
    box-sizing: border-box;
    text-align: center;
    border-radius: 10px;
    margin: 100px 0;
    color:#292E3C;
}
.logbutton{
  background: rgb(5, 2, 141);
    color: white;
    font-size: 20px;
    padding: 8px;
    border-radius: 11px;
    font-weight: 600;
    text-transform: uppercase;
}
h1{
  text-align: center; 
  color: #fff; 
  font-weight: normal; 
  margin-bottom: 0px;
}

.form-wrap ul li {
    list-style: none;
    display: inline-block;
    margin: 0px;
    /* border: 1px solid #fff; */
    border-radius: 3px;
    width: 49%;
}
.but_log{
    border-radius: 10px;
    background: #050754;
    border: none;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 17px;
    padding: 10px 14px;
    color: #ffff;
}
.but_reset{
    border-radius: 10px;
    background: #050754;
    border: none;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 17px;
    padding: 10px 14px;
    color: red;
}
        

        
/* Full-width input fields */
input[type=text], input[type=password],input[type="email"] {
    width: 100%;
    border-radius: 10px;
    padding: 10px 15px;
    box-sizing: border-box;
    margin-bottom: 20px;
    font-size: 16px;
    border: none;
    
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus,input[type=email]:focus {
        background:#fff ;
    outline: none;
}



canvas.particles-js-canvas-el {
    position: absolute;
}



input[type="button"]:hover{ background: #a4b15c; transition: .6s;}
        
        ::placeholder{color: #000;}
@media screen and (max-width: 700px){
.form-wrap {
          margin-top: 198px;
         }
}
    
    </style>



<link rel="stylesheet" href="css/social-buttons.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/social-buttons2.js"></script>

  
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

 <script src="WebPushManager.js"></script>

  </head>
  <body>

    <script type="text/javascript" src="js/particles.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <!--NAVIGATION-->

     <nav class="navbar navbar-inverse CoustomMargin" style="background:#292e39;">
      <div class="container-fluid ">
        <div class="NavCoustom ">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
              
            </div>
            <div class="col-md-2">
              <a class="navbar-brand" href="index"><img class="img CoustomLogoIMG " src="images/logo.png"></a>
              </div>
            <div class="navbar-collapse collapse">
            <div class="col-md-6">
            <ul class="nav navbar-nav" style="float: right;">
                   <li><a style="color: white; margin-top:24px;" href="index">Home</a></li>
                   <li><a style="color: white; margin-top:24px;" href="DirectoryList.php">Directory List</a></li>
                   <li><a style="color: white; margin-top:24px;" href="Contact">Contact US</a></li>
                </ul>
                </div>
                  <div class="col-md-2">
                  <div style="margin-top:26px;  class="navbar-right CoustomScerchButton ">
                  
                    <form method="get" class="navbar-form  " action="scarch.php">
                      <div class="input-group searchCustom">
                        <input type="text" name="scrach" style="font-size: 14px;" class="form-control " placeholder="Search">
                        <div class="input-group-btn">
                          <button name="submit" value="Search" class="btn btn-default CoustomButton" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                          </button>
                        </div>

                      </div>
            </form>
                    
                  </div>
                  </div>

<div class="col-md-2">
            <div class="TRANSLATE navbar-right"><div id="google_translate_element" ></div></div>
            </div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
            </ul>
            
            </div>
             </div>
      </div>
    </nav>
  <!--- End Navigation ---->

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
    <div class="form-wrap">

            <ul>
              <li>
                 <h1 class="logbutton" style="background-color: #075a02;"  onclick="switchLogin()" id="log" >Log In</h1>
              </li>
              <li>
                 <h1 class="logbutton"  onclick="switchSignUp()" id="sign">Sign Up</h1>
              </li>

            </ul>
        
            <form id="signup" style="display: none" method="post" action="dbconnect_newlogin.php">
            
               
                <input type="text" id="name" name="name" placeholder="Name">
                <input type="text" id="name2" placeholder="Address" style="display:none">
                <input type="text" value='<?php echo $ref ?>' name="ref" style="display:none">
                <input type="email" id="email" placeholder="Email" name="email">
                <input type="email" id="email2" placeholder="Confirm Email">
                <input type="password" id= "pass" placeholder="Password" name="pass">
                <input type="password" id= "pass2" placeholder="Confirm Password">
                <center>
                <input class="but_log" value="Sign Up" type="submit">
              </center>
            
            </form>

            <form id="login" >
            
               
                
                <input type="email" id="emailL" placeholder="Email">
               
                <input type="password" id= "passL" placeholder="Password">
               
                <center>
                <input class="but_log" type="button" value="Log In" onclick="login()">
                <input class="but_reset" type="button" value="Reset Password" onclick="passwordReset()"
            </form>
        
        </div>
        </div>
        </div>
        </div>
        <div class="card005">
 <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm--6">

             <div class="card_subcriber"> 
                <center><h3><i class="fa fa-envelope" aria-hidden="true"></i>Subscribe For Latest Update</h3></center>

               <center><form form action="dbconncetsubcriber.php" method="post">
                 <input id="fromiput" type="email" name="semail" placeholder="Subscribe For Updates">
                    <button id="frombutton" type="submit">Subscribe</button>
                </form></center> 
             </div>
                
            </div>
            <div class="col-lg-6 col-md-6 col-sm--6">
               <div class="card0006 pull-right">
                    <center><h2>Stay Connceted </h2></center>
                <div class="card05">

                      <ul>
                         <?php
      $query = "select * from tbl_social order by id desc";
      $post = $db->select($query);
      if ($post) {
        while ($result= $post -> fetch_assoc()) {

      

        ?>
                        <li><a href="<?php echo $result['fb_link']; ?>"><i class="fa fa-facebook" aria-hidden="true" ></i></a></li>
                        <li><a href="<?php echo $result['linkedin_link']; ?>"><i class="fa fa-linkedin" aria-hidden="true" ></i></a></li>
                        <li><a href="<?php echo $result['twitter_link']; ?>"><i class="fa fa-twitter" aria-hidden="true" ></i></a></li>
                        <li><a href="<?php echo $result['midiam_link']; ?>"><i class="fa fa-medium" aria-hidden="true" ></i></a></li>
                        <li><a href="<?php echo $result['youtube_link']; ?>"><i class="fa fa-youtube" aria-hidden="true" ></i></a></li>
                        <li><a href="<?php echo $result['telegram_link']; ?>"><i class="fa fa-location-arrow" aria-hidden="true" ></i></a></li>
                        <li><a href="<?php echo $result['instragram_link']; ?>"><i class="fa fa-instagram" aria-hidden="true" ></i></a></li>

                        <?php }}?>
                    </ul>                    
                </div>

                </div> 
            </div>
        </div>
</div>
</div>


   
<script>

   function switchLogin(){
   var setLogin = document.getElementById('login');
   var setSignup = document.getElementById('signup');
   var logColor = document.getElementById('log');
   var signColor = document.getElementById('sign');
  setLogin.style.display = "block";
  setSignup.style.display="none";
  logColor.style.background="#075a02";
  signColor.style.background="rgb(5, 2, 141)";

}
function switchSignUp(){
  var setSignup = document.getElementById('signup');
  var setLogin = document.getElementById('login');
   var logColor = document.getElementById('log');
   var signColor = document.getElementById('sign');

  setSignup.style.display="block";
  setLogin.style.display="none";
  signColor.style.background="#075a02";
  logColor.style.background="rgb(5, 2, 141)";

}

function login(){

  var email = document.getElementById('emailL').value;
  var password = document.getElementById('passL').value;
  var user = firebase.auth().currentUser;
 
  firebase.auth().signInWithEmailAndPassword(email, password).then(function(){
    if(user.emailVerified){
   // window.alert("Signed in");
   window.location="convertCurrency.php";
  }
    else
      window.alert("Please Verify the Email First");
  }).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  window.alert("Email or Password Incorrect");
  
});
}

function passwordReset(){
  var auth = firebase.auth();
 var emailAddress = document.getElementById('emailL').value;

auth.sendPasswordResetEmail(emailAddress).then(function() {
  alert("A Password Reset Email Send To  "+emailAddress);
}).catch(function(error) {
  var errorCode = error.code;
  var errorMessage = error.message;
  window.alert("Please Enter Your Email on Email Field");
});
}


</script>
<?php 
   
    
  
 ?>

 <?php include 'inc/foter2.php'; ?> 
  
