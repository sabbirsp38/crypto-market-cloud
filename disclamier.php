
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

            <!-- Bootstrap -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/animate.min.css">
            <link rel="stylesheet" href="css/foterpost.css">
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  </head>
  <body>
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

               
                  <div style="margin-top:26px;  class="navbar-right CoustomScerchButton ">
                  
                    <form method="get" class="navbar-form  " action="scarch.php">
                      <div class="input-group searchCustom">
                        <input type="text" name="scrach" style="font-size: 12px;" class="form-control " placeholder="Search">
                        <div class="input-group-btn">
                          <button name="submit" value="Search" class="btn btn-default CoustomButton" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                          </button>
                        </div>

                      </div>
            </form>
                    
                  </div>
   
            </ul>
            
            </div>
             </div>
      </div>
    </nav>
  <!--- End Navigation ---->
			<div class="container-fluid DIS" style="margin-top: 90px;">
				      <div class="container   ">

			      	<div class="DIS0 DIS1">
			      		<h1>Crypto Market Cloud </h1>
			      		
			      	</div>

			      	<div class="DIS0 DIS2">
			      		Cryptomarketcloud.com is a hosting and informative platform, we are not giving financial advice and we do not encourage or instruct anyone to invested in any of the companies and icos advertised on our website, we strictly discourage anyone from investing, taking part in or otherwise engage in any icos, companies or news blasted in our news blast section. <br><br>

                All of the content posted, listed or blasted on our platform is strictly and only for information purposes, which meant to be used, and must be used for information purposes only. <br><br>

                Same applies right across the board for all our social media channels, any investment payment, trading or holding crypto currencies from any companies advertised on our platforms is the users responsibility, the users is responsible for any loss of money.<br><br>

                There is very high risk that you may lose some or all of your money or and investment, if you purchase, invest, trade or hold any of these coins, tokens or crypto currency.<br><br>

                The market cap and any coin, token, or currency displayed on our page is not accurate and the information may lack some or all data from the coin, token or currency providers, should you want or need more accurate information, get in touch with your particular coin, token or currency provider, the companies are responsible for providing us with accurate data

                By entering our site Cryptomarketcloud.com you immediately accept and agree to our terms and conditions
			      	</div>
			      	
			      </div>
				
			</div>




   <?php include 'inc/foter.php'; ?>