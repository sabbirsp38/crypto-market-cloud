<?php include 'inc/hader2.php'; ?>
      <!--AD Space-->
  


     <!--Add Start Here-->      
  <div class="container CorsollArea" >

<div class='swipe' style='margin:10px;'>
  <ul id='slider1'>
    <li style='display:block'>
    <div class="customWidth">
      <a target="blank" href="https://nexo.io/">
        <img class="imgWidth" src="images/add1.jpg">
        <p style="line-height: 14px; padding: 5px; font-weight: bold; color: #000000; margin-top: 5px;">NEXO-Get an Instant Crypto-backed Loan up to 2M </p>
      </a>
    </div>
  </li>
    <li><div class="customWidth">
      <a target="blank" href="http://bitstation.co/">
        <img class="imgWidth" src="images/add2.jpg">
        <p style="line-height: 14px; padding: 5px; font-weight: bold; color: white; margin-top: 5px;">Bitstation The most advanced AL trading </p>
      </a>
    </div>
  </li>
    <li><div class="customWidth">
      <a target="blank" href="https://urunit.io/">
        <img class="imgWidth" src="images/add3.jpg">
        <p style="line-height: 14px; padding: 5px; font-weight: bold; color: white; margin-top: 5px;">U Run it. New era in gambling industry</p>
      </a>
    </div>
  </li>
    <li><div class="customWidth">
      <a target="blank" href="https://decenturion.com">
        <img class="imgWidth" src="images/add4.jpg">
        <p style="line-height: 14px; padding: 5px; font-weight: bold; color: white; margin-top: 5px;">Decenturion the decentralised nation</p>
      </a>
    </div>
  </li>
     <li><div class="customWidth">
      <a target="blank" href="http://smtecbd.com/">
        <img class="imgWidth" src="images/add.png">
        <p style="line-height: 14px; padding: 5px; font-weight: bold; color: white; margin-top: 5px;">IF YOU CAN IMAGINE IT WE CAN BUILD IT</p>
      </a>
    </div>
  </li>
    <li><div class="customWidth">
      <a target="blank" href="http://smtecbd.com/">
        <img class="imgWidth" src="images/add.png">
        <p style="line-height: 14px; padding: 5px; font-weight: bold; color: white; margin-top: 5px;">IF YOU CAN IMAGINE IT WE CAN BUILD IT</p>
      </a>
    </div>
  </li>
     <li><div class="customWidth">
      <a target="blank" href="http://smtecbd.com/">
        <img class="imgWidth" src="images/add.png">
        <p style="line-height: 14px; padding: 5px; font-weight: bold; color: white; margin-top: 5px;">IF YOU CAN IMAGINE IT WE CAN BUILD IT</p>
      </a>
    </div>
  </li>
    <li><div class="customWidth">
      <a target="blank" href="http://smtecbd.com/">
        <img class="imgWidth" src="images/add.png">
        <p style="line-height: 14px; padding: 5px; font-weight: bold; color: white; margin-top: 5px;">IF YOU CAN IMAGINE IT WE CAN BUILD IT</p>
      </a>
    </div>
  </li>
  </ul>
</div>




<br/>
<div id="pagenavi">
</div>
</div>

<script type="text/javascript">
console=window.console || {dir:new Function(),log:new Function()};
var active=0,
  as=document.getElementById('pagenavi').getElementsByTagName('a');
for(var i=0;i<as.length;i++){
  (function(){
    var j=i;
    as[i].onclick=function(){
      t4.slide(j);
      return false;
    }
  })();
}

var t11=new TouchSlider('slider1',{duration:2000, interval:100, direction:0, autoplay:true, align:'left', mousewheel:true, mouse:true, fullsize:false});
t4.on('before',function(m,n){
    as[m].className='';
  as[n].className='active';
})
</script>

  
   
   <!--- End ADspace 2 ---->




  
   <!--AD Space--> 


   

	<div class="Brack1 container-fluid ">
      	<div class="container ForBackground2  ForBackgroundscace">
          <?php

if (!isset($_GET['$id']) || $_GET['$id']==NULL  ) {
  header("Location: 404.php") ;
   $id= $_GET['$id'];
}else{
   $id= $_GET['$id'];
}

  ?>
 
        

           <div class="row">
            <?php 

        $query = "select * from tbl_ico_mp where id=$id";
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
                          <div class="panel-heading">
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
                          <div class="panel-heading">
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
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" id="collapse1Hader" data-parent="#accordion" href="#collapse3"><i class="fa fa-heart FAFAcoustom" aria-hidden="true"></i>Rating</a>
                            </h4>
                          </div>
                          <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                              <div class="row">

							
							<?php
										  							
						                  	
							?>
							
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
									  <button class="btn btn-success" id="btn" name="btn" onClick='location.href="?"'>Submit 
									  </button> 
									  </center>   
                                  									  
                                   </div>
								   
						 
                                
                              </div>

                            
                           </div>
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading">
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
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" id="collapse1Hader" data-parent="#accordion" href="#collapse5"><i class="fa fa-phone FAFAcoustom" aria-hidden="true"></i>Contact Information</a>
                            </h4>
                          </div>
                          <div id="collapse5" class="panel-collapse collapse">
                            <div class="panel-body MPFcollapse3">

                          <a href="<?php echo $result['ico_links_facebook']; ?>"><i  class="socialm  fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="<?php echo $result['ico_links_website']; ?>"><i class="socialm fa fa-globe" aria-hidden="true"></i></a>
                          <a href="<?php echo $result['ico_links_linkedin']; ?>"><i class="socialm fa fa-linkedin" aria-hidden="true"></i></a>
                          <a href="<?php echo $result['ico_links_whitepaper']; ?>"><i class="socialm fa fa-pinterest" aria-hidden="true"></i></a>
                          <a href="<?php echo $result['ico_links_bounty']; ?>"><i class="socialm fa fa-btc" aria-hidden="true"></i></a>
                          <a href="<?php echo $result['ico_links_telegram']; ?>"><i class="socialm fa fa-medium" aria-hidden="true"></i></a>
                          <a href="<?php echo $result['email']; ?>"><i class="socialm fa fa-envelope" aria-hidden="true"></i></a>
                          <a href="<?php echo $result['ico_links_twitter']; ?>"><i class="socialm fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="<?php echo $result['ico_links_github']; ?>"><i class="socialm fa fa-github" aria-hidden="true"></i></a>
                          <a href="<?php echo $result['ico_links_github']; ?>"><i class="socialm fa fa-location-arrow" aria-hidden="true"></i></a>
                              

                            
                           </div>




                            
                            </div>
                          </div>
                        </div>
                      </div>
              </div>

      	        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                  <div class="MPFSR">

                    <div>
                      <center><h1 id="MPFSR">4.5 <?//php echo $result['rating']; ?></h1></center>
                    </div>
                    

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
                            </tbody>
                          </table>
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