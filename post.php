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
    <?php

if (!isset($_GET['$id']) || $_GET['$id']==NULL  ) {
  header("Location: 404.php") ;
}else{
   $id= $_GET['$id'];
}

  ?>

    
 <?php
                      $query = "select * from tbl_post where id=$id";
                      $post = $db->select($query);
                      $result= $post -> fetch_assoc()
                        ?>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $result['title']; ?>">
     <meta name="twitter:site" content="@SabbirMahmud01">
   <meta name="twitter:creator" content="@SabbirMahmud01">
    <meta name="twitter:description" content="<?php echo $result['body']; ?>">
   <meta property="og:image" content="upload/<?php echo $result['pimg']; ?>"> 
   <meta name="twitter:image" content="https://www.cryptomarketcloud.com/upload/<?php echo $result['pimg']; ?>">
   <meta name="twitter:domain" content="http://www.cryptomarketcloud.com">

 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   

    <title><?php echo $result['title']; ?></title>
    <link rel="icon" onerror="this.src='images/alt.png';" href="upload/<?php echo $result['pimg']; ?> ">



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

      <link href='style-slider.css' rel='stylesheet'/>

<script src="touchslider.js"></script>

<link rel="stylesheet" href="css/social-buttons.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/social-buttons.js"></script>

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
                        <input type="text" name="scrach" style="font-size: 12px;" class="form-control " placeholder="Search">
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
      <!--AD Space-->
  <div class=" CorsollArea" >

<div class='swipe' style='margin:10px;'>
  <ul id='slider1'>

    <?php
      $query = "select * from tbl_publish_mp order by id desc";
      $post = $db->select($query);
      if ($post) {
        while ($result= $post -> fetch_assoc()) {

      

        ?>


    <li style='display:block'>
      <a target="blank" href="<?php echo $result['website_link']; ?>">
    <div class="customWidth">
      
      <span class="buttoncoursol"><spam class="starSize">&#9733;</spam>  PREMIUM</span>
      

        <img class="imgWidth" src="upload/<?php echo $result['logo_img']; ?>">
        <p style="line-height: 14px; padding: 5px; font-weight: bold; color: white; margin-top: 5px;"><?php echo $fm-> textshortentn ($result['company_tagline']); ?></p>
     
    </div>
    </a>
  </li>
   
       <?php }}?>
    <!--End of whoil lope-->

    
  </ul>
</div>

</div>

<script type="text/javascript">


var t11=new TouchSlider('slider1',{duration:1500, interval:6000, direction:0, autoplay:true, align:'left', mousewheel:true, mouse:true, fullsize:false, mouseTouch: false});

</script>

  
   <!--- End ADspace 2 ---->
    
   </div>



  
   <!--AD Space--> 
  <div class="contentsection contemplete clear">
    <div class="maincontent clear">


   <?php

if (!isset($_GET['$id']) || $_GET['$id']==NULL  ) {
  header("Location: 404.php") ;
}else{
   $id= $_GET['$id'];
}

  ?>
  <div class="container-fluid">
    <div class="container">
      <div class="about">
        <?php 

        $query = "select * from tbl_post where id=$id";
        $post = $db->select($query);
          if ($post) {
        while ($result= $post -> fetch_assoc()) {


        ?>
        <h2><?php echo $result['title']; ?></h2>
        <img class="img-responsive Fullpostimg1" onerror="this.src='images/alt.png';" src="upload/<?php echo $result['pimg']; ?> ">
        <div class="bodypart">
        <?php echo $result['body']; ?>
        </div>



        <?php } }else{header("Location: 404.php") ;

        };


          ?>
        
        
        </div>
      </div>
    </div>
  </div>

<!-- Share Button -->


                                 <div style="margin-top:5px; float:right" class="social-sharing" data-permalink="https://cryptomarketcloud.com">

   
    <a target="_blank" href="http://www.facebook.com/sharer.php?u=https://cryptomarketcloud.com/" class="share-facebook">
      <span class="icon icon-facebook" aria-hidden="true"></span>
      <span class="share-title">Share</span>
    </a>
    
     
    
   

   
    <a target="_blank" href="http://twitter.com/share?url=https://cryptomarketcloud.com&amp;text=jQuery%20social%20media%20buttons%20on%20GitHub&amp;" class="share-twitter">
      <span class="icon icon-twitter" aria-hidden="true"></span>
      <span class="share-title">Tweet</span>
    </a>

    <button onclick="myFunction()" class="btn btn-success" style= "padding: 2px">
  
    Copy Link
    </button>
     <input type="text" value="Mosaddek" id="myInput" style="display:none">
    

  </div>

<!-- Share Button End -->


</div>





  </div>

  </div>
































   <?php include 'inc/foter.php'; ?> 