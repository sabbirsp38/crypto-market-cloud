        <div id="footer" class="footer">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-4 col-md-4">
                      <form form action="dbconncetsubcriber.php" method="post">

                      <input type="email" name="semail" placeholder="Subscribe For Updates"><button class="btn btn-success">Subscribe</button>

                      </form>
                         
                     </div>
                     <div class="col-lg-4 col-md-4">
                         
                         Make a Contribution: <br><p class="lasttext" style="font-size: 13px;  font-weight: bold;">BNB 0x9BAb91e00106df26a2E35B82738E2D76735C2F76<br> ETH 0x9BAb91e00106df26a2E35B82738E2D76735C2F76</p><br>
                         <a href="disclamier"><i class="fa fa-square-o" aria-hidden="true"></i>Terms and Condition</a><br>
                         <a href="aboutus"><i class="fa fa-square-o" aria-hidden="true"></i> About Us and What We Do</a>
                         
                     </div>
                     <?php
      $query = "select * from tbl_social order by id desc";
      $post = $db->select($query);
      if ($post) {
        while ($result= $post -> fetch_assoc()) {

      

        ?>
                     <div class="col-lg-4 col-md-4">
                         <h4>Stay in touch</h4>
                         <a href="<?php echo $result['fb_link']; ?>" class="social fa fa-facebook" aria-hidden="true"></a>

                         <a href="<?php echo $result['twitter_link']; ?>" class="social fa fa-twitter" aria-hidden="true"></a>

                        <a href="<?php echo $result['linkedin_link']; ?>" class="social fa fa-linkedin" aria-hidden="true"></a>

                        <a href="<?php echo $result['midiam_link']; ?>" class="social fa fa-medium" aria-hidden="true"></a>

                        <a href="<?php echo $result['youtube_link']; ?>" class="social fa fa-youtube" aria-hidden="true"></a>

                        <a href="<?php echo $result['telegram_link']; ?>" class="social fa fa-location-arrow" aria-hidden="true"></a>

                        <a href="<?php echo $result['instragram_link']; ?>"class="social fa fa-instagram" aria-hidden="true"></a><br>
                     

   <?php }}?>
                        info@cryptomarketcloud.com<br>
                        support@cryptomarketcloud.com<br>
                        business@cryptomarketcloud.com<br>

</div>
                 </div>
             </div>
         </div>
     </div>

     <div class="container-fluid lastone001">
  <strong><p id="lastone" class="container">  All rights reserved &copy; Crypto Market Cloud  <?php  print(date("Y")) ?>  

  </p></strong>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/wow.min.js"></script>
      <script>
         $(document).ready(function(){
           $("#testimonial-slider").owlCarousel({
             items:2,
             itemsDesktop:[1000,2],
             itemsDesktopSmall:[979,2],
             itemsTablet:[768,1],
             pagination:false,
             navigation:true,
             navigationText:["",""],
             autoPlay:true
           })
         }) 
      </script>





    <script>
    new WOW().init();

    </script>

    <script>
   $(document).ready(function(){
       $("#testimonial-slider").owlCarousel({
           items:2,
           itemsDesktop:[1000,2],
           itemsDesktopSmall:[979,2],
           itemsTablet:[768,1],
           pagination:false,
           navigation:true,
           navigationText:["",""],
           autoPlay:true
       })
   })   
</script>


    
    <script src="js/bootstrap.min.js"></script>
  </body>
    <script src="js/calculator.js"></script>
</html>