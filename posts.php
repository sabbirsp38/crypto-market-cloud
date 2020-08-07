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
    <title>Details</title>

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
            <link rel="stylesheet" href="css/fropost.css">

            
            <link rel="stylesheet" href="css/animate.min.css">
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  </head>
  <body>
    <!--NAVIGATION-->

    <nav class="navbar navbar-inverse CoustomMargin navbar-fixed-top">
      <div class="container-fluid ">
        <div class="container NavCoustom">
            <div class="navbar-header">
              <a class="navbar-brand" href="index"><img class="img CoustomLogoIMG " src="images/logo.png"></a>
            </div>
        <ul class="nav navbar-nav  ">
                   <li><a style="color: white; margin-top:24px;" href="NewsBlast.php">News Blast</a></li>
                   <li><a style="color: white; margin-top:24px;" href="Member">ICO's</a></li>
                   <li><a style="color: white; margin-top:24px;" href="icotype">Add ICO</a></li>
                   <li><a style="color: white; margin-top:24px;" href="DirectoryList.php">Directory List</a></li>
                   <li><a href="marketCap" style="color: white; margin-top: 24px;">Market Cap</a></li>
                   <li><a style="color: white; margin-top:24px;" href="Contact">Contact US</a></li>
                   <li><a style="color: white; margin-top:24px;" href="https://cryptomarketcloud.herokuapp.com/">POC</a></li>
                </ul>
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
            <div class="TRANSLATE navbar-right"><div id="google_translate_element" ></div></div>

            <script type="text/javascript">
            function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
             }
            </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   
            </ul>
            
            </div>
      </div>
    </nav>
  <!--- End Navigation ---->
      <!--AD Space-->
   <div class="AddSpace">


    <div class="container CorsollArea >
       <div class="row">
         <div class="col-lg-3 col-md-3"  ">
                <a href="http://smtecbd.com/" target="_blank"><img class="img CorsollAreain " src="images/add.jpg"></a>
           
         </div>
        <div class="col-lg-3 col-md-3" ">
                <a href="http://smtecbd.com/" target="_blank" ><img class="img CorsollAreain " src="images/add.jpg"></a>
         </div>
         <div class="col-lg-3 col-md-3" >
                <a href="http://smtecbd.com/" target="_blank"><img class="img CorsollAreain " src="images/add.jpg"></a>
           
         </div>
          <div class="col-lg-3 col-md-3" >
                <a href="http://smtecbd.com/" target="_blank"><img class="img CorsollAreain " src="images/add.jpg"></a>
         </div>
       </div>
   </div>
    
   </div>



  
   <!--AD Space--> 
  <div class="contentsection contemplete clear">
    <div class="maincontent clear">

<?php

if (!isset($_GET['$catagori']) || $_GET['$catagori']==NULL  ) {
	header("Location: 404.php") ;
}else{
	 $id= $_GET['$catagori'];
}

  ?>

<?php
			$query = "select * from post where cat=$id";
			$post = $db->select($query);
			if ($post) {
			 	while ($result= $post -> fetch_assoc()) {

			

			  ?>
<div class="container">

				<h2><a href="post.php? id=<?php echo $result['id']; ?> "><?php echo $result['title']; ?></a></h2>
				<?php echo $fm-> textshortent ($result['body']); ?>
					<a href="post.php? $id=<?php echo $result['id']; ?>  ">Read More</a>
				</div>
			</div>
</div>
<?php } } ?>

</div>			
	</div>




    <div id="footer" class="footer">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-4 col-md-4">
                      <form form action="dbconncetsubcriber.php" method="post">

                      <input type="email" name="semail" placeholder="Subscribe For Updates"><button class="btn btn-success">Subscribe</button>

                      </form>
                         
                     </div>
                     <div class="col-lg-4 col-md-4">
                         
                         <a href="about.php"><i class="fa fa-square-o" aria-hidden="true"></i> About Us</a><br>
                         <a href="disclamier.php"><i class="fa fa-square-o" aria-hidden="true"></i> Privacy</a><br>
                         <a href="Contact.php"><i class="fa fa-square-o" aria-hidden="true"></i> Contact Us</a>
                     </div>
                     <div class="col-lg-4 col-md-4">
                         <h4>Stay in touch</h4>
                         <a href="#" class="social fa fa-facebook" aria-hidden="true"></a>
                         <a href="#" class="social fa fa-twitter" aria-hidden="true"></a>
                        <a href="#" class="social fa fa-linkedin" aria-hidden="true"></a>
                        <a href="#" class="social fa fa-medium" aria-hidden="true"></a>
                        <a href="#" class="social fa fa-youtube" aria-hidden="true"></a>
                        <a href="#" class="social  fa fa-pinterest" aria-hidden="true"></a><br>
                     </div>



                 </div>
             </div>
         </div>
     

     <div class="container-fluid lastone001">
  <strong><p id="lastone" class="container">  All rights reserved. 
    <?php  print(date("Y")) ?>  

  </p></strong>
</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();

    </script>


    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
		
