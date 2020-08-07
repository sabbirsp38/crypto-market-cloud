<?php include 'inc/hader.php'; ?>

    
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
   <div class="content OneLineCoustom">

       <center id="headText" style="font-style:bold"> Top 100 Cryptocurrencies By Market Capitalization </center> <br>

    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10  ">
               <div class="ListAboveBodyFull">
                    <div class="ListAboveBodyLeft ">
                       
                    </div>

                    <div class="ListAboveBodyRight">
                       <!-- <ul>
                            <li><a href="#"> <button type="button" class="btn btn-default">View All</button> </a></li>
                            <li><a href="#"> <button type="button" class="btn btn-default">Next 100</button> </a></li>
                            <li><a href="#"> <button type="button" class="btn btn-default">USD</button> </a></li>
                        </ul>-->
                    </div>
                </div>
 


                <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Market Cap</th>
                                <th>Price</th>
                                <th>Volume (24h)</th>
                                <th>Circulating Supply</th>
                                <th> Change (24h)</th>
                                <th>Price Graph (7d) </th>                     
                           </tr>
                        </thead>
                        <tbody id="tbody">
                          
                        </tbody>
                </table>
            </div>
            
            <!-- Personal Add. -->
            
      
            
              <!-- Personal Add. end -->
            
        </div>
    </div>


        <div class="container-fluid">
          <div class="container"> 
              <div class="BodyTimeSec"> 
               <center>
                <strong class="TextStrongNeed" id="lastUpdate"> Total Market Cap: </strong><br>
                 <p id="time2">Last updated: </p>
                 </center> 
              </div>
          </div>
        </div>
<?php include 'inc/foter.php'; ?> 



