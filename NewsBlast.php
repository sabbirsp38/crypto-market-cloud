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

            

            
            <link rel="stylesheet" href="css/animate.min.css">
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>




   <link href='style-slider.css' rel='stylesheet'/>

<script src="touchslider.js"></script>






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



<link rel="stylesheet" href="css/social-buttons.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/social-buttons2.js"></script>



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



<div class="VideoFUll"> 
  <span><center><h1 id="VideoTitele">Announcement</h1></center></span>
  <center>



<div class="container">
                <div class="row">
                  <?php
                      $query = "select * from  tbl_announcement order by id desc";
                      $post = $db->select($query);
                      $result= $post -> fetch_assoc()
                        ?>
                      <div class="Card_anounsment">
                        <div class="col-sm-6 col-lg-6 col-sm-6">
                          <div class="card_img">
                          <center><img style="max-width: 400px !important;max-height: 225px !important;min-width: 442px !important;" src="upload/<?php echo $result['img']; ?>"></center>
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <center><h3><?php echo $result['title']; ?></h3></center>
                        <div class="card_text">
                           <p><?php echo $result['text_body']; ?></p>
                          
                        </div>
                        </div>
                      </div>
                  </div> 
                  </div>
                </div>
              </div>
  </center>
</div>


</div>







<div style="min-height: 50px;"></div>
   
<div class="container">
  <div style="margin-top: 50px;">
    <div class="icotitel"><center><h1 id="VideoTitele">NEWS BLAST</h1></center></div>
  <div class="row">

    <?php 
      $per_page = 9;
      if (isset($_GET["page"])) {
        $page= $_GET["page"];
      }else{
        $page =1;
      }
      $start_from = ($page-1) * $per_page;

      ?>
      
      <?php
      $query = "select * from tbl_post order by id desc limit $start_from, $per_page";
      $post = $db->select($query);
      if ($post) {
        while ($result= $post -> fetch_assoc()) {

      

        ?>




   <div class="col-sm-6 col-md-4 col-lg-4 clear ">
      <div class="row FullpostIN">
        <a href="post.php?$id=<?php echo $result['id']; ?> "></a>
        <div class="col-12" >
          <center> <img   onerror="this.src='images/alt2.png';" alt="Blog Picture" class="img-responsive FullpostINimg" src="upload/<?php echo $result['pimg']; ?> "></center>
        </div>
        <div class="col-12 Fullposttitel">
          <p><?php echo $fm-> textlimittiti ($result['title']); ?></p>
        </div>
        <div class="col-12 Fullpostbody">


          <div class="social-sharing" data-permalink="https://cryptomarketcloud.com">

        <a href="http://www.facebook.com/sharer.php?u=https://cryptomarketcloud.com/post.php?$id=<?php echo $result['id']; ?> " class="social fa fa-facebook share-facebook" aria-hidden="true"></a>


 
                         <a target="_blank" href="http://twitter.com/share?url=https://cryptomarketcloud.com/post.php?$id=<?php echo $result['id']; ?>  " class="social fa fa-twitter share-facebook" aria-hidden="true"></a>
                          </div>
        <center>

          <a href="post.php?$id=<?php echo $result['id']; ?>  " class="btn btn-success BCHANGCOLOR CoustRead ">Read More</a></center>
       
      </div>
     
        
      </div>

    </div>



     <?php }?>
    <!--End of whoil lope-->
   
</div>

</div>
</div>

<div class="paginetationFull clear">
    <!--paginetation-->
    <?php
    $query = "select * from tbl_post"; 
    $result = $db->select($query);
    $total_rows = mysqli_num_rows($result);
    $total_page = ceil ($total_rows/$per_page);

    echo " <span class=paginetation > <a href='index.php?page=1 '>First Page</a>";

    for ($i=1; $i<= $total_page; $i++) { 
     echo "<a href='index.php?page=".$i." '>".$i. "</a>";
     } 


     echo "<a href='index.php?page=$total_page '>Last Page</a></span>"?>
    
    <?php } ?>
<!--END paginetation-->
</div>
<div class="">
  <center id="partnerTitel"><h2>Partners and Media</h2></center>
</div>
    <!--Start Partner Area -->
    <div class=" " >

<div class='swipe' style='margin:10px;'>
  <ul id='slider2'>

    <?php
      $query = "select * from tbl_partner order by id desc";
      $post = $db->select($query);
      if ($post) {
        while ($result= $post -> fetch_assoc()) {

      

        ?>

<a  href="<?php echo $result['web_link']; ?>" target="blank" >
    <li style='display:block'>

    <div class="customWidth2">
      
      
      

        <img class="imgWidth" src="upload/<?php echo $result['img']; ?>">
        
    </div>
  </li>
   </a>
       <?php }}?>
    <!--End of whoil lope-->

    
  </ul>
</div>




<br/>
<div id="pagenavi2">
</div>
</div>

<script type="text/javascript">
console=window.console || {dir:new Function(),log:new Function()};
var active=0,
  as=document.getElementById('pagenavi2').getElementsByTagName('a');
for(var i=0;i<as.length;i++){
  (function(){
    var j=i;
    as[i].onclick=function(){
      t4.slide(j);
      return false;
    }
  })();
}

var t11=new TouchSlider('slider2',{duration:1500, interval:6000, direction:0, autoplay:true, align:'left', mousewheel:true, mouse:true, fullsize:false});
t4.on('before',function(m,n){
    as[m].className='';
  as[n].className='active';
})


</script>

  
   
 

   <!--- End Partner Area ---->
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
                  <div style="text-align: center; width: 100%; height: 100%">
                      <form form action="dbconncetsubcriber.php" method="post">
                      <h4>Subscribe for Updates</h4><br>
                      <input type="email" name="semail" placeholder="Email Here..." style=" width: 100%; height: 30px; margin-bottom:10px;"><br>
					  <button class="btn btn-success">Subscribe</button>

                      </form>
                         
                     </div>
  </div>

</div>

<script>

var modal = document.getElementById('myModal');

var span = document.getElementsByClassName("close")[0];


window.onload= function() {
   
   setTimeout(function() {
			console.log('first 10 secs');
			// loadCars();
		  
		//	 modal.style.display = "block";

		}, 1000);
   
}

span.onclick = function() {

		
		
    modal.style.display = "none";
}


</script>
























 










   <?php include 'inc/foter.php'; ?> 

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
   $(document).ready(function(){
     $("#blogCarousel").carousel({
       items:1,
       itemsDesktop:[1000,1],
       itemsDesktopSmall:[979,1],
       itemsTablet:[768,1],
       pagination:false,
       navigation:true,
       autoPlay:true
     })
   })

   
</script>