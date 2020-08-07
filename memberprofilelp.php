<?php
session_start(); 

if (!isset($_GET['id']) || $_GET['id']==NULL  ) {
 // header("Location: 404.php") ;
  
}else{
   $id= $_GET['id'];
}
 
$_SESSION["id"]= $id;


?>

<?php include 'inc/hader4.php'; ?>
      <!--AD Space-->
  


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




  
   <!--AD Space--> 


   

  <div class="Brack1 container-fluid ">
        <div class="container ForBackground2  ForBackgroundscace">
          <?php

if (!isset($_GET['id']) || $_GET['id']==NULL  ) {
  header("Location: 404.php") ;
   $id= $_GET['id'];
}else{
   $id= $_GET['id'];
}

  ?>
 
        

           <div class="row">
            <?php 

        $query = "select * from tbl_ico_publish_lp where id=$id";
        $post = $db->select($query);
          if ($post) {
        while ($result= $post -> fetch_assoc()) {


        ?>
             <div class="col-xs-6 col-sm-6 col-md-8 col-lg-8">

               <div class="MPF1">
                 <div class="MPF3">

                     <img onerror="this.src='images/alt.png';" class="img img-responsive MPF3img" src="upload/<?php echo $result['image']; ?> "> 
                        <p><span class="TextStrongNeed3"><?php echo $result['name']; ?></span> 
                        </p>

                      
                  </div>
                      <div class="Brack1"></div>
                      <div class="Blackline"></div>
                      <div class="Brack1"></div>

                  <div class="MPF4">

                    <p class="MPF4a">
                        <?php echo $result['description']; ?> 
                      </p>
                         <div class="embed-responsive embed-responsive-16by9 MPFvideo">
                            <?php echo $result['ico_links_youtube']; ?>
                          </div>                             
                  </div>
                 <div class="Brack1"></div> 


                   <div class="panel-group" id="accordion">
             <div class="panel panel-default">
                          <div class="panel-heading panel-Coustom">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" id="collapse1Hader" data-parent="#accordion" href="#collapse1"><i class="fa fa-group FAFAcoustom" aria-hidden="true"></i>Team</a>
                            </h4>
                          </div>
                          <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body MPFcollapse3">

                          <div class="row">
                             <div class="col-lg-4 col-md-4 wow fadeInLeft " >
                              <div class="CollapseMember">
                                  <center><img src="upload/<?php echo $result['ico_members_image']; ?>" class="img-circle CollapseMemberPic " alt=""></center>
                                  <center><h4><?php echo $result['ico_members_name']; ?></h4></center>
                                  <center><b><?php echo $result['ico_members_role']; ?></b></center>
                                  <center><a href="<?php echo $result['ico_members_twitter_url']; ?>"><i class="social fa fa-twitter" aria-hidden="true"></i></a>
                                  <a href="<?php echo $result['ico_members_linkedin_url']; ?>"><i class="social fa fa-linkedin" aria-hidden="true"></i></a></center>
                              </div>

                            </div>
                            <div class="col-lg-4 col-md-4 wow fadeInLeft " >
                              <div class="CollapseMember">
                                  <center><img src="upload/<?php echo $result['ico_members_tow_image']; ?>" class="img-circle CollapseMemberPic " alt=""></center>
                                  <center><h4><?php echo $result['ico_members_tow_name']; ?></h4></center>
                                  <center><b><?php echo $result['ico_members_tow_role']; ?></b></center>
                                  <center><a href="<?php echo $result['ico_members_tow_twitter_url']; ?>"><i class="social fa fa-twitter" aria-hidden="true"></i></a>
                                  <a href="<?php echo $result['ico_members_tow_linkedin_url']; ?>"><i class="social fa fa-linkedin" aria-hidden="true"></i></a></center>
                              </div>

                            </div>
                            <div class="col-lg-4 col-md-4 wow fadeInLeft " >
                              <div class="CollapseMember">
                                  <center><img src="upload/<?php echo $result['ico_members_three_image']; ?>" class="img-circle CollapseMemberPic " alt=""></center>
                                  <center><h4><?php echo $result['ico_members_three_name']; ?></h4></center>
                                  <center><b><?php echo $result['ico_members_three_role']; ?></b></center>
                                  <center><a href="<?php echo $result['ico_members_three_twitter_url']; ?>"><i class="social fa fa-twitter" aria-hidden="true"></i></a>
                                  <a href="<?php echo $result['ico_members_three_linkedin_url']; ?>"><i class="social fa fa-linkedin" aria-hidden="true"></i></a></center>
                              </div>

                            </div>
                          </div>
                              

                            
                           </div>




                            
                            </div>
                          </div>
                        <div class="panel panel-default">
                          <div class="panel-heading panel-Coustom">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" id="collapse1Hader" data-parent="#accordion" href="#collapse2"><i class="fa fa-dollar FAFAcoustom" aria-hidden="true"></i>Financial</a>
                            </h4>
                          </div>
                          <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                              <div class="row">


                                <div class="col-lg-6 col-md-6 col-sm-6">
                                  
                     <table class="table table-striped MPFTD">
                      <thead>
                          <tr>                       
                              <th><span style="font-size: 16px;">ICO Financial information</span></th>                     
                         </tr>
                      </thead>
                      <tbody>
                        <tr>  
                          <th> TOTAL TOKEN SUPPLY </th>
                          <th><?php echo $result['icofinance_token_supply']; ?></th>
                        </tr>
                        <tr>  
                          <th> TOKENS FOR SALE </th>
                          <th><?php echo $result['icofinance_token_for_sale']; ?></th>
                        </tr>
                        <tr>  
                          <th>SOFT CAP </th>
                          <th><?php echo $result['icofinance_token_total_soft_cap']; ?></th>
                        </tr>
                        <tr>  
                          <th>SOFT CAP CURRENCY </th>
                          <th><?php echo $result['icofinance_token_total_soft_cap_currency']; ?></th>
                        </tr>
                        <tr>  
                          <th>HARD CAP </th>
                          <th><?php echo $result['icofinance_token_total_hard_cap']; ?></th>
                        </tr>
                        <tr>  
                          <th>HARD CAP CURRENCY </th>
                          <th><?php echo $result['icofinance_token_total_hard_cap_currency']; ?></th>
                        </tr>
                        <tr>  
                          <th>Token Price </th>
                          <th><?php echo $result['icofinance_token_price']; ?></th>
                        </tr>
                        <tr>  
                          <th>CURRENCY ACCEPTED </th>
                          <th><?php echo $result['icofinance_accepted_currencies']; ?></th>
                        </tr>
                        <tr>  
                          <th> WHITELIST REQUIRED  </th>
                          <th><?php echo $result['icofinance_is_whitelist_required']; ?></th>
                        </tr>
                         <tr>  
                          <th>KYC REQUIRED  </th>
                          <th><?php echo $result['icofinance_is_kyc_required']; ?> </th>
                        </tr>                                               
                        <tr>  
                          <th> TOKEN SALE BONUS  </th>
                          <th> <?php echo $result['icofinance_bonus']; ?></th>
                        </tr>
                        <tr>  
                          <th> RESTRICTED COUNTRIES  </th>
                          <th> <?php echo $result['icofinance_restricted_countries']; ?></th>
                        </tr>

                       </tbody>
                  </table>
                                   </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">

                    <table class="table table-striped MPFTD">
                              <thead>
                                  <tr>                       
                                      <th><span style="font-size: 16px;">ICO Bounty Campaign</span></th>                     
                                 </tr>
                              </thead>
                              <tbody>
                                <tr>  
                                  <th> BOUNTY CAMPAIGN START</th>
                                  <th><?php echo $result['bounty_start']; ?></th>
                                </tr>
                                <tr>  
                                  <th> BOUNTY CAMPAIGN END </th>
                                  <th><?php echo $result['bounty_end']; ?></th>
                                </tr>
                                <tr>  
                                  <th>BOUNTY TYPES</th>
                                  <th><?php echo $result['bounty_types']; ?></th>
                                </tr>
                                <tr>  
                                  <th> TOKENS FOR BOUNTY  </th>
                                  <th>  <?php echo $result['bounty_total_tokens']; ?></th>
                                </tr>
                                 
                              </tbody>
                      </table>
                                  
                                </div>
                                
                              </div>

                            
                           </div>
                          </div>
                        </div>
            
           <div class="panel panel-default">
                          <div class="panel-heading panel-Coustom">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" id="collapse1Hader" data-parent="#accordion" href="#collapse3"><i class="fa fa-heart FAFAcoustom" aria-hidden="true"></i>Rating</a>
                            </h4>
                          </div>
                          <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                              <div class="row">

              
            
              
                                <div class="col-lg-12 col-md-12 col-sm-12">
                
                
                                  
                                      <table class="table table-striped MPFTD">
                                             
                        
                        
                                              <tbody >
                                                <tr>  
                                                  <th> White paper </th>
                                                  <th></th>
                          <th>

                            <div id="first" >
                              <form class="rating" id="product1">
                                <button type="submit" class="star" data-star="1" value="1">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">1 Star</span>
                                </button><button type="submit" class="star" data-star="2" value="2">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">2 Stars</span>
                                </button><button type="submit" class="star" data-star="3" value="3">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">3 Stars</span>
                                </button><button type="submit" class="star" data-star="4" value="4">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">4 Stars</span>
                                </button><button type="submit" class="star" data-star="5" value="5">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">5 Stars</span>
                                </button>
                              
                              </form>

                              </div>  
                          </th>
                             </tr>
                                <tr>  
                                  <th> Team </th>
                               <th></th>
                            <th>
                                <div id="second">

                                  <form class="rating" id="product1">
                                <button type="submit" class="star2" data-star="1" value="1">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">1 Star</span>
                                </button><button type="submit" class="star2" data-star="2" value="2">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">2 Stars</span>
                                </button><button type="submit" class="star2" data-star="3" value="3">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">3 Stars</span>
                                </button><button type="submit" class="star2" data-star="4" value="4">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">4 Stars</span>
                                </button><button type="submit" class="star2" data-star="5" value="5">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">5 Stars</span>
                                </button>
                                
                                
                              </form>

                            </div>      
                          </th>
                                                </tr>
                                                <tr>  
                                                  <th>Road map </th>
                                                  <th></th>
                          
                           <th>
                             <div id="third">

                                  <form class="rating" id="product1">
                                <button type="submit" class="star3" data-star="1" value="1">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">1 Star</span>
                                </button><button type="submit" class="star3" data-star="2" value="2">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">2 Stars</span>
                                </button><button type="submit" class="star3" data-star="3" value="3">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">3 Stars</span>
                                </button><button type="submit" class="star3" data-star="4" value="4">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">4 Stars</span>
                                </button><button type="submit" class="star3" data-star="5" value="5">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">5 Stars</span>
                                </button>
                                
                                
                              </form>

                            </div>      
                          </th>
                                                </tr>
                                                <tr>  
                                                  <th>Token price </th>
                                                  <th></th>
                          
                           <th>
                               <div id="four">

                                  <form class="rating" id="product1">
                                <button type="submit" class="star4" data-star="1" value="1">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">1 Star</span>
                                </button><button type="submit" class="star4" data-star="2" value="2">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">2 Stars</span>
                                </button><button type="submit" class="star4" data-star="3" value="3">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">3 Stars</span>
                                </button><button type="submit" class="star4" data-star="4" value="4">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">4 Stars</span>
                                </button><button type="submit" class="star4" data-star="5" value="5">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">5 Stars</span>
                                </button>
                                
                                
                              </form>

                            </div>      

                                  
                          </th>
                                                </tr>
                                                <tr>  
                                                  <th>Circulation </th>
                                                  <th></th>
                           <th>

                                
                            <div id="five">

                                  <form class="rating" id="product1">
                                <button type="submit" class="star5" data-star="1" value="1">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">1 Star</span>
                                </button><button type="submit" class="star5" data-star="2" value="2">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">2 Stars</span>
                                </button><button type="submit" class="star5" data-star="3" value="3">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">3 Stars</span>
                                </button><button type="submit" class="star5" data-star="4" value="4">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">4 Stars</span>
                                </button><button type="submit" class="star5" data-star="5" value="5">
                                  <span aria-hidden="true">&#9733;</span>
                                  <span class="screen-reader">5 Stars</span>
                                </button>
                                
                                
                              </form>

                            </div>      

                                  
                          </th>
                                                </tr>
                                                
                                              </tbody>
                        
                        
                                      </table>
                    <center>

                    <button class="btn btn-success" id="btn2" name="btn" >Submit 
                    </button> 
                    </center>   
                                                      
                                   </div>
                   
             
                                
                              </div>

                            
                           </div>
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading panel-Coustom">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" id="collapse1Hader" data-parent="#accordion" href="#collapse4"><i class="fa fa-map-signs FAFAcoustom" aria-hidden="true"></i>Milestones</a>
                            </h4>
                          </div>
                          <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body MPFcollapse3">

                          <div class="row">


                         <div class="timeline">
                              <div class="containerM left">
                                <div class="content">
                                  <h2><?php echo $result['milestones_first_name']; ?></h2>
                                  <p><?php echo $result['milestones_first_description']; ?></p>
                                </div>
                              </div>
                              <div class="containerM right">
                                <div class="content">
                                  <h2><?php echo $result['milestones_tow_name']; ?></h2>
                                  <p><?php echo $result['milestones_tow_description']; ?></p>
                                </div>
                              </div>
                              <div class="containerM left">
                                <div class="content">
                                  <h2><?php echo $result['milestones_three_name']; ?></h2>
                                  <p><?php echo $result['milestones_three_description']; ?></p>
                                </div>
                              </div>
                              
                            </div>


                          </div>

                            
                           </div>




                            
                            </div>
                          </div>
            <div class="panel panel-default">
                          <div class="panel-heading panel-Coustom">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" id="collapse1Hader" data-parent="#accordion" href="#collapse5"><i class="fa fa-phone FAFAcoustom" aria-hidden="true"></i>Contact Information</a>
                            </h4>
                          </div>
                          <div id="collapse5" class="panel-collapse collapse">
                            <div class="panel-body MPFcollapse3">

                          <a href="<?php echo $result['ico_links_facebook']; ?>"><i  class="socialm  fa fa-facebook" aria-hidden="true"></i></a>

                          <a href="<?php echo $result['ico_links_website']; ?>"><i class="socialm fa fa-globe" aria-hidden="true"></i></a>

                          <a href="<?php echo $result['ico_links_linkedin']; ?>"><i class="socialm fa fa-linkedin" aria-hidden="true"></i></a>

                          <a href="<?php echo $result['ico_links_whitepaper']; ?>"><i class="socialm fa fa-instagram" aria-hidden="true"></i></a>
                          
                          <a href="<?php echo $result['ico_links_bitcointalk']; ?>"><i class="socialm fa fa-btc" aria-hidden="true"></i></a>

                          <a href="<?php echo $result['ico_links_telegram']; ?>"><i class="socialm fa fa-medium" aria-hidden="true"></i></a>
                          <a href="<?php echo $result['email']; ?>"><i class="socialm fa fa-envelope" aria-hidden="true"></i></a>
                          <a href="<?php echo $result['ico_links_twitter']; ?>"><i class="socialm fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="<?php echo $result['ico_links_github']; ?>"><i class="socialm fa fa-github" aria-hidden="true"></i></a>
                          <a href="<?php echo $result['ico_real_links_telegram']; ?>"><i class="socialm fa fa-location-arrow" aria-hidden="true"></i></a>
<a class="customWhitepaper" href="<?php echo $result['ico_whitepaper_new']; ?>">W</a>
                              

                            
                           </div>




                            
                            </div>
                          </div>
                        </div>
                      </div>
              </div>
          <?php
        }}
          ?>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                  <div class="MPFSR">
               <?php 

                      $query = "select value from rating where blog_index=$id";
                      $post = $db->select($query);
                        if ($post) {
                      if ($result= $post -> fetch_assoc()) {


                      ?>
                    <div>
                      <center><h1 id="MPFSR"><?php echo $result['value']; ?></h1></center>
                    </div>
                    <?php
                  }}
                    ?>
                  
                <?php 

                    $query = "select * from tbl_ico_publish_lp where id=$id";
                    $post = $db->select($query);
                      if ($post) {
                    while ($result= $post -> fetch_assoc()) {


                    ?>
                  </div>
                    <div class="MPFS0">
                      <div class="MPFS2">
                       <p class="MPFS2a"><b><?php echo $result['stutas']; ?></b></p> 
                        <table class="table table-sm">
                            <tbody>
                              <tr>
                                  <th>Pre-Sale</th>
                                   <td>
                                        <?php echo $result['pre_ico_start']; ?>
                                        - <?php echo $result['pre_ico_end']; ?>
                                   </td>
                              </tr>
                                <tr>
                                    <th>Token Sale</th>
                                    <td>
                                    <?php echo $result['ico_start']; ?>
                                    - <?php echo $result['ico_end']; ?>
                                    </td>
                              </tr>
                              <tr>
                                  <th>Country</th>
                                  <td>
                                       <?php echo $result['country']; ?>
                                  </td>
                              </tr>
                          </tbody>
                          </table>
                         
                      </div>



                      <div class="MPFS3">
                        <p class="MPFS3a"><b>Financial information</b></p>

                        <table class="table table-sm table-hover">
                            <tbody>
                              <tr>
                                <th>Platform</th>
                                <td>
                                     <?php echo $result['chain']; ?>
                                </td>
                              </tr>
                              <tr>
                                <th>KYC</th>
                                <td>
                                <?php echo $result['icofinance_is_kyc_required']; ?>
                                </td>
                              </tr>
                              <tr>
                                <th>Token price</th>
                                <td>
                                <?php echo $result['icofinance_token_price']; ?>
                                </td>
                              </tr>
                              <tr>
                                <th>Currency Accepted</th>
                                <td>
                                <?php echo $result['icofinance_token_price_currency']; ?>
                                </td>
                              </tr>
                            </tbody>
                          </table>

         <!-- Share Button -->


     <div  class="social-sharing" data-permalink="https://cryptomarketcloud.com">

   
    <a target="_blank" href="http://www.facebook.com/sharer.php?u=https://cryptomarketcloud.com/" class="share-facebook">
      <span class="icon icon-facebook" aria-hidden="true"></span>
      <span class="share-title">Share</span>
    </a>
    
     
    
   

   
    <a target="_blank" href="http://twitter.com/share?url=https://cryptomarketcloud.com&amp;text=jQuery%20social%20media%20buttons%20on%20GitHub&amp;" class="share-twitter">
      <span class="icon icon-twitter" aria-hidden="true"></span>
      <span class="share-title">Tweet</span>
    </a>

    <button onclick="myFunction()" class="btn btn-success" style= "padding: 3px; font-size: 11px; font-weight: 900">
  
    Copy Link
    </button>
     <input type="text" value="Mosaddek" id="myInput" style="display:none">
    

  </div>

<!-- Share Button End -->
                          <footer class="MPFS3b">
                                  <?php echo $result['review_note']; ?>
                          </footer>
                                                      
                      </div>

                     
                </div>
                  </div>
                  <?php } }else{header("Location: 404.php") ;

        };


          ?>


                </div>                
               </div>
            </div>
        </div>



   <?php include 'inc/foter.php'; ?> 