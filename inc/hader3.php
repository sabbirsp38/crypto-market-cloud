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
    <title>GLOBAL CROWDFUNDING SOLUTION IN CRYPTO & FIAT IEO STO ITO ICO EXCHANGE BTC</title>

    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

            <!-- Bootstrap -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
            <link rel="stylesheet" href="*/css/style.css">
            <link rel="stylesheet" href="*/css/foterpost.css">
            <link rel="stylesheet" href="*/css/fropost.css">

            
            <link rel="stylesheet" href="css/animate.min.css">
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

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
              <a class="navbar-brand" href="index.php"><img class="img CoustomLogoIMG " src="images/logo.png"></a>
            </div>
            <div class="navbar-collapse collapse">
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
      </div>
    </nav>
  <!--- End Navigation ---->