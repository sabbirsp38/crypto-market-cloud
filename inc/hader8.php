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
   
     <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
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
            <link rel="stylesheet" href="css/foterpost.css">
            <link rel="stylesheet" href="css/animate.min.css">
            <link rel="stylesheet" type="text/css" href="Exchange/css/swiper.min.css">

            <script src="js/jquery-1.10.1.min.js"> </script>
           
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

       <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
        <script type="text/javascript" src="common/jquery.min.js"></script>
        <script type="text/javascript" src="common/jquery-ui.min.js"></script> 
        <script type="text/javascript" src="Scripts/config.js"></script>
        <script data-main="RealTimeStockChart" src="Scripts/require.js"></script>

       <link href='style-slider.css' rel='stylesheet'/>

<!-- <script src="../touchslider.js"></script> -->
            

  </head>
  <body style="background:#001026;  color: white;">



    <!--NAVIGATION-->
    
<!--     <nav class="navbar navbar-inverse CoustomMargin navbar-fixed-top">
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
                   <li><a style="color: white; margin-top:24px;" href="index.php">Home</a></li>
                    <li>
                      <a style="color: white; margin-top:24px;" href="">List Now</a>
                      <ul>
                        <li><a style="color: white; margin-top:24px;" href="">LIST ON EXCHANGE</a></li>
                        <li><a style="color: white; margin-top:24px;" href="">LIST IEO</a></li>
                      </ul>
                    </li>
                   <li><a style="color: white; margin-top:24px;" href="exchange.php">Exchange</a></li>
                   <li><a style="color: white; margin-top:24px;" href="deposite.php">Deposite</a></li>
                   <li><a style="color: white; margin-top:24px;" href="balance.php">Balance</a></li>


                   <li><a style="color: white; margin-top:24px;" href="DirectoryList.php">Directory List</a></li>
                   <li><a style="color: white; margin-top:24px;" href="Contact">Contact US</a></li>
                </ul>
                  <div style="margin-top:26px;"  class="navbar-right CoustomScerchButton ">
                  
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
                    
                  </div> -->
            <!-- 
   
            </ul>
            
            </div>
             </div>
      </div>
    </nav> -->


 















<nav class="navbar navbar-default CoustomMargin navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index"><img class="img CoustomLogoIMG " src="images/logo.png"></a>
      <p style="margin-top: 40px; font-size: 18px; font-weight: bold; margin-left: 150px;">CRYPTO CASH EXCHANGE (C-CASH) </p>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right navmarginCuston">
        <li><a style="color: white; margin-top:24px;" href="index.php">Home</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white; margin-top:24px;">List Now <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a style=" margin-top:24px;" href="listnow.php">LIST ON EXCHANGE</a></li>
            <li><a style=" margin-top:24px;" href="listnow.php#pricing">LIST IEO</a></li>
          </ul>
        </li>
        <li><a style="color: white; margin-top:24px;" href="Exchange/index.php">Exchange</a></li>
        <li><a style="color: white; margin-top:24px;" href="Uprofile/index.php">login</a></li>
        <li><a style="color: white; margin-top:24px;" href="register.php">Register</a></li>

            <div class="TRANSLATE navbar-right"><div id="google_translate_element" ></div></div>

            <script type="text/javascript">
            function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
             }
            </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
  <!--- End Navigation ---->