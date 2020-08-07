<?php include 'inc/hader7.php'; ?>

<style type="text/css">
.paginetation {
    text-align:  center;
    font-size: 20px;
    display:  block;
    margin-bottom: 20px;
    padding: 3px;
    margin-left: -20px;

}
.paginetation a{
      color: #252f3c;
}
.bodypart{
  margin-top: 50px;
}
.paginetation a:hover{
  text-decroation:none;
  color:aqua;
  disply:inline-block;
  background:#cfc5b6
}

  
</style>

   <!--AD Space--> 

      <div class="Brack1 container-fluid " style="">
        <div class="container ForBackground  ">
          <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                   <div>
                      <strong class="TextStrongNeed2">Crypto Market Cloud   </strong>
                     <p class="TSN2" style="text-transform: uppercase; font-size: 16px;">GLOBAL CROWDFUNDING SOLUTION IN CRYPTO & FIAT</p>
                  </div>
                     
                </div>
            </div>
        </div>
      </div>

     






      <div class="container  MamberProfiledemo" style="margin:0px auto;">
          <div class="row">

            <?php 
                  $per_page = 12;
                  if (isset($_GET["page"])) {
                    $page= $_GET["page"];
                  }else{
                    $page =1;
                  }
                  $start_from = ($page-1) * $per_page;

                  ?>
                  
                  <?php
                  $current = date("Y/m/d");
                  $today_time = strtotime($current);
                  $status = "UNDEFINED";
                  $query = "select * from tbl_ico order by id desc limit $start_from, $per_page";
                  $post = $db->select($query);
                  if ($post) {
                    while ($result= $post -> fetch_assoc()) {

                  $pre_ico_start = $result['pre_ico_start'];
                  $pre_ico_end = $result['pre_ico_end'];
                  $ico_start = $result['ico_start'];
                  $ico_end = $result['ico_end'];

                  $pre_ico_start_time = strtotime($pre_ico_start);
                  $pre_ico_end_time = strtotime($pre_ico_end);
                  $ico_start_time = strtotime($ico_start);
                  $ico_end_time = strtotime($ico_end);

                  if($pre_ico_start_time>$today_time)
                  {
                    $status = "UPCOMMING";
                  }
                  else if($pre_ico_start_time<=$today_time && $pre_ico_end_time>=$today_time)
                  {
                    $status = "PRE-SELL";
                  }
                   else if($ico_start_time<=$today_time && $ico_end_time>=$today_time)
                  {
                    $status = "SELL START";
                  }
                    else if($ico_end_time<$today_time)
                  {
                    $status = "CLOSED";
                  }

                ?>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 MPD0 ">
          <a class="MPDL" href="memberprofile.php?id=<?php echo $result['id']; ?>&status=<?php echo $status ?>" >
                               <div class="MPD1 ">
                                <div class="MPD2">
                                  
                                  
                                  <div style="float: right;">
                                    
                                  </div>
                                </div>
                                <div class="MPD3">
                                  <center>
                                  <img onerror="this.src='images/alt.png';" class="img img-responsive MPD3img" src="upload/<?php echo $result['image']; ?> ">
                                </center>
                                </div>

                                <div class="MPD4">
                                  <center><?php echo $result['name']; ?></center>
                                </div>

                                <div class="MPD5">
                          <?php echo $fm-> textshortentn ($result['description']); ?>
                                </div>

                                

                                <div class="MPD6" style="float: left;">

                                  <div class="MPD6A">
                                    <center>
                                    <i class="fa fa-clock-o MPD7Aa "></i>
                                    <spam id="MPD6Aab" ><strong><?php echo $result['ico_type']; ?></strong></spam>
                                  
                                    </center>
                                  
                                  </div>

                                </div>



                             
                                <div class="MPD7" style="float: right;">

                                  <div class="MPD7A">
                                    <center>
                                    <i class="fa fa-clock-o MPD7Aa "></i>
                                    <spam id="MPD7Aab" ><strong><?php echo $status; ?></strong></spam>
                                  
                                    </center>
                                  
                                  </div>

                                </div>
                             
                                
                             </div>
                             </a>
                       </div>



              <?php }?><!--End of whoil lope-->
                </div>
              </div>
    <!--paginetation-->
    <?php
    $query = "select * from tbl_ico"; 
    $result = $db->select($query);
    $total_rows = mysqli_num_rows($result);
    $total_page = ceil ($total_rows/$per_page);

    echo " <span class=paginetation > <a href='Member?page=1 '>First Page</a>";

    for ($i=1; $i<= $total_page; $i++) { 
     echo "<a href='Member?page=".$i." '>".$i. ">></a>";
     } 


     echo "<a href='Member?page=$total_page '>Last Page</a></span>"?>
    <!--paginetation-->
    <?php } ?>



  <?php include 'inc/foter2.php'; ?> 