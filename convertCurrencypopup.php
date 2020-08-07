<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php include 'helpers/Formet.php'; ?>

<?php 
$db = new Database();
$fm = new Formet();
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
            <link rel="stylesheet" href="css/fropost.css">
            <link rel="stylesheet" href="css/Addstyle.css">
            <link rel="stylesheet" href="css/foterpost.css">
            <link rel="stylesheet" href="css/profile.css">

            

            
            <link rel="stylesheet" href="css/animate.min.css">
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

     <script src="https://www.gstatic.com/firebasejs/5.0.1/firebase.js"></script>


   <link href='style-slider.css' rel='stylesheet'/>

<script src="touchslider.js"></script>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>






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



  </head>
  <body onload="initApp()">
    <!--NAVIGATION-->

    <nav class="navbar navbar-inverse CoustomMargin navbar-fixed-top">
      <div class="container-fluid ">
        <div class="container NavCoustom ">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
              <a class="navbar-brand" href="index"><img class="img CoustomLogoIMG " src="images/logo.png"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav  ">
                   <li><a style="color: white; margin-top:24px;" href="NewsBlast.php">News Blast</a></li>
                   <li><a style="color: white; margin-top:24px;" href="Member">ICO's</a></li>
                   <li><a style="color: white; margin-top:24px;" href="icotype">Add ICO</a></li>
                   <li><a style="color: white; margin-top:24px;" href="DirectoryList.php">Directory List</a></li>
                   <li><a href="marketCap" style="color: white; margin-top: 24px;">Market Cap</a></li>
                   <li><a style="color: white; margin-top:24px;" href="Contact">Contact US</a></li>
                </ul>
               
                   <div style="margin-top:26px;  class="navbar-right CoustomScerchButton ">
                  
              <!--     <form method="get" class="navbar-form  " action="scarch.php">
                      <div class="input-group searchCustom">
                        <input type="text" name="scrach" style="font-size: 8px;" class="form-control " placeholder="Search">
                        <div class="input-group-btn">
                          <button name="submit" value="Search" class="btn btn-default CoustomButton" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                          </button>
                        </div>

                      </div>   
                    

            </form> -->

              <button class="Btn_logout" onclick="signOut()">Logout</button>  
                    
                  </div>   
   
          </div>
            
            </div>
             </div>
      </div>
    </nav>
  <!--- End Navigation ---->

<div style="height: 100px;"></div>






<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="profile_card">
          <div class="img_person">
            <center ><img id="imageProfile" src="images/team/team-1.jpg"></center>
            <center><h3 id="nameProfile">User Name</h3></center>
          </div>
          <hr>
          <div class="card_balance">
            <center>
              <h4>Your Current Balance</h4>

              
              
              <br>
             
             
              
            </center>

          </div>
        </div>
        <div class="converte_card">
          <center><p><b>Our Current Conversion Rate is:</b></p></center>  <?php
                      $query = "select * from tbl_index_contant order by id desc ";
                      $post = $db->select($query);
                      $result= $post -> fetch_assoc()
                        ?>
            <h4>1 eth = <span id="eth_coin"><?php echo ($result['eht']); ?></span> CMC</h4>
            <h4>1 BTC = <span id="btc_coin"><?php echo ($result['btc']); ?></span> CMC</h4>
            <h4>1 BNB = <span id="bnb_coin"><?php echo ($result['bnb']); ?></span> CMC</h4>
            <h4>1 LTC = <span id="ltc_coin"><?php echo ($result['ltc']); ?></span> CMC</h4>
          
          <div class="covater">
            <center><h3>Calculator</h3></center>
           <input type="" name="" id="inputValue"> 
            <select id="currencyList">
             <option>ETH</option>
             <option>BTC</option>
             <option>BNB</option>
             <option>LTC</option>
           </select>

           <br>

           <center><button class="covare_buton" onclick="convert()">Convert</button></center>

           <br>
           <center><h3 id="covater_result">00 CMC</h3></center>




            
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="card_from">
          <div class="accountDetails">
            <center><h3>Please Choose Your PAyment Method </h3></center>

          
              <h4>BNB 0x9BAb91e00106df26a2E35B82738E2D76735C2F76<br><br>
            <h4>ETH 0x9BAb91e00106df26a2E35B82738E2D76735C2F76 <br><br></h4>
            <h4>Btc 18dwX7PrbDyZ2NgwQYsg8DrrvRMcezuozj<br><br></h4>
              <h4>Ltc LhS3KKyPDhSUKAMVtWARuQwJ3pC7DZ88rs</h4>
          </div>
          <form method="post" class="navbar-form  " action="dbconnect_point_oder.php">
            <input name="account_holder" style="display: none;" class="from_account" id="nameData" type="text">
            <input name="f_id" style="display: none;" class="from_account" id="keyData" type="text" >
            <label class="from_account_lavel">Your wallet Address</label>
            <input class="from_account" type="text" name="wallet_Address">
            <label class="from_account_lavel">trnasction ID</label>
            <input class="from_account" type="text" name="t_id">
            <center><button class="button_confirm" name="submit" value="Search" type="submit">Confirm Your Order Now</button></center>
           </form>
          
        </div>
        
      </div>
    </div>
  </div>
</div>












<div style="height: 150px;"></div>


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
                  <div style="text-align: center; width: 100%; height: 100%">
                      <form action="convertCurrency.php" method="POST">
                      <label style="color:black;">Thank you, your account will be updated within 12 hours</label><br><br>
                      
            <button class="btn btn-success">OK</button>

                      </form>
                         
                     </div>
  </div>

</div>
   


<script>
  
  function initApp(){

    var modal = document.getElementById('myModal');

var span = document.getElementsByClassName("close")[0];

modal.style.display = "block"; 


    firebase.auth().onAuthStateChanged(function(user) {
 if(user){
      var userId = user.uid;
       var pic = user.photoURL;
     firebase.database().ref('/users/').child(userId).once('value').then(function(snapshot) {
   var username = snapshot.val().Name;
   var name = document.getElementById('nameProfile').innerHTML=username;
  var name2 = document.getElementById('nameData').value=username;
   var name3 = document.getElementById('keyData').value=userId;
 
  // ...
      });
   }
    else
     window.location = "index.php";

});
      
    
  }
  
  function signOut(){
    firebase.auth().signOut();
  window.location = "NewLogin.php";
     }

  function convert(){

     var x = document.getElementById("currencyList");
     var currencySelect = x.options[x.selectedIndex].text;
 
     var value = document.getElementById('inputValue').value;
     var ethValue = document.getElementById('eth_coin').innerHTML;
     var btcValue = document.getElementById('btc_coin').innerHTML;
     var bnbValue = document.getElementById('bnb_coin').innerHTML;
     var ltcValue = document.getElementById('ltc_coin').innerHTML;

     if(currencySelect=="ETH")
     {
         var mul = value*ethValue;
     }
     else if(currencySelect=="BTC")
     {
         var mul = value*btcValue;
     }
      else if(currencySelect=="BNB")
     {
         var mul = value*bnbValue;
     }
      else if(currencySelect=="LTC")
     {
         var mul = value*ltcValue;
     }



    var result = document.getElementById('covater_result').innerHTML= mul + " CMC";

  }


</script>


   <?php include 'inc/foter.php'; ?> 
