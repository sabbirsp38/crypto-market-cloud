<?php include 'inc/hader2.php'; ?>



     <!--Add Start Here-->      
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
        <p style="line-height: 14px; padding: 5px; font-weight: bold; color: #000000; margin-top: 5px;"><?php echo $fm-> textshortentn ($result['company_tagline']); ?></p>
     
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


   <!----- Pricing ------>

<div id="pricing" class="pricing">
    <div class="container">

    	<center><h1>Chose Your Pakage</h1></center>
    	


        <div class="row"> 
            <div class="col-lg-4 col-md-4 col-sm-12 wow flipInY" data-wow-delay="0.8s">
                <div class="packages">
                   <center> <h4>Basic</h4>
                    <h1>Free</h1>
                    <b>1 Month</b>
                     <hr>
                        <li>Visible only ICO page</li>
                        <li> No Fixed Position</li>
                        <li>Regular Customer Support </li>   
                    
                    
                    <a  href="addico.php"><button class=" packagesa btn btn-success ">Get Started</button></a></center>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 wow flipInY" data-wow-delay="1.2s">
                <div class="packages">
                    <center>
                     <h4>Top Banner </h4>
                     <b> 65 BNB</b><br>
                     <b>Or</b><br>
                    <b>3 ETH </b><br>
                    <b>Monthly</b>
                    <hr>
                    <li>Fixed Position</li>
                    <li>Visible top of every page</li>
                    <li>5000 News letter</li>
                    <li>Online Support</li>
                    <a href="mporderprocess.php"><button class=" packagesb btn btn-success">ORDER NOW</button></a></center>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 wow flipInY" data-wow-delay="1.6s">
                <div class="packages">
                  <center>  <h4>Project of the week </h4>
                    <b> 155 BNB</b><br>
                     <b>Or<b><br>
                    <b>7 ETH </b><br>
                    <b>Monthly</b>
                    <hr>
                    <li>Fixed Position</li>
                    <li>Visible On Index page</li>
                    <li>Unlimited news letter </li>
                    <li>Online Support</li>
                    
                    <a href="lporderprocess.php"><button class=" packagesc btn btn-success">ORDER NOW</button></a></center>
                </div>
            </div>
            
        </div>
    </div>
</div>
 
 <!--- End Pricing ---->





<?php include 'inc/foter.php'; ?> 