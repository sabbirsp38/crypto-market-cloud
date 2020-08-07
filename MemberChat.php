<!DOCTYPE html>
<html lang="en" ng-app="chatApp">
<head>
    <meta charset="UTF-8">
     <title>Chat Room </title>
     <link rel="icon" href="images/logo.png">
	 <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

            <!-- Bootstrap -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/foterpost.css">
            <link rel="stylesheet" href="css/animate.min.css">
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
			
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>  
	  
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.0/angular.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.4.2/firebase.js"></script>
	<script src="https://cdn.firebase.com/libs/angularfire/2.2.0/angularfire.min.js"></script>
  
    <script>
    // This will be generated in the firebase console
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
    
   <script src="js/MemberChat.js"></script> 
    
	
	<style>
	#pic22{
		
		height:60px;
		width:60px;
		border-radius: 150px;
		margin-top: 10px;
		}
		.sign_out{
		   background-color: #211a1a;
		   color: #FFFFFF;
		}
	
	</style>
	
		
	
</head>
<body onload="initApp()" ng-controller="ChatController"  style="padding-top: 30px;">

  <nav class="navbar navbar-inverse CoustomMargin" style="margin-bottom: -10px; ">
      <div class="container-fluid ">
        <div class="container NavCoustom">
            <div class="navbar-header">
             <a class="navbar-brand" href="index"><img class="img CoustomLogoIMG " src="images/logo.png"></a>
            </div>
            <ul class="nav navbar-nav  ">
              <li><a style="color: white; margin-top:24px;" href="Member">ICO</a>
                  <ul>
                  <li><a href="Member">ICO List</a></li>
                  <li><a href="icotype">Add ICO</a></li>
                </ul>

                </li>
                <li><a style="color: white; margin-top:24px;" href="DirectoryList.php">Directory List</a></li>

              <li><a href="marketCap" style="color: white; margin-top: 24px;">Market Cap</a>
                
              </li>
              <li><a style="color: white; margin-top:24px;" href="login">Chat Room</a>
                </li>
                <li><a style="color: white; margin-top:24px;" href="BusinessPlan.php">Business Plan</a></li>
               
                <li><a style="color: white; margin-top:24px;" href="Advertisement">Advertisement</a>

                </li>
                <li><a style="color: white; margin-top:24px;" href="Contact">Contact US</a>
                </li>

              </ul>

                
                 
                  
              <div class="navbar-right  ">
                  
                    <div class="row NAVLOGIN">
                      <div class="col-lg-6 col-md-6 NAVLOGINimg ">
                        <div class="data"><img id="pic22" class="pic2" class="img-circle"  /></div> 
                        
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div style="float:right;"><p id="email" class="" > </p>  
                    <button onclick="signOut()" class="sign_out" id="sign_out">SignOut </button> </div>
                     
                        
                      </div>
                    </div>           
                    
                  </div>
                


                
            
            
            </div>
      </div>
    </nav>







    <br>
    <div class="container" >
        <div class="panel panel-primary" style="height:530px; ">
           
            <div class="panel-body" style="height:100%; text-align:start">
			    <div style="height:400px; overflow: auto; ">
               <div ng-repeat="m in messages" style="border:1px solid gray; margin: 3px;padding-right: 50px; ">
			  
			   <span id="email" style="margin-left:10px; color: blue; text-style:bold" >{{m.name}}</span><span style="color:#800000; float:right;"> {{m.date | date:'medium'}}</span>
			   <p style="margin-left: 30px; margin-top:10px; text-align: center;">{{m.message}} </p> 
			   </div>
			   <span id="textField"></span>
			  </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Message here..." ng-model="messageText" id="text22">
					<button type="submit" class="btn btn-success btn-default" ng-click="send()" onclick="ClearText()" >Send</button>
                </div>
                
				
            </div>
			
        </div>
		
    </div>
	
	
	
	
	
	<?php include 'inc/foter.php'; ?> 