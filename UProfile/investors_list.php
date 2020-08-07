<?php include 'inc/hader3.php'; ?>
  <!--- End Navigation ---->
  <div style="background:#f5f8fb;">
  <div class="container">
<center><h3 id="intro">Investors List</h3>
            </center>
    <div class="row" style="margin-top:40px;">
 <?php
      $query = "SELECT * from users_crypto WHERE profile_approve != 0 and   isEmailConfirmed != 0 and   p_type = 0 order by id desc";
      $post = $db->select($query);
      if ($post) {
        while ($result= $post -> fetch_assoc()) {

     ?>
        <div class="col-md-6 col-lg-6 col-sm-6">
           <div class="thumbnail card-view">
            <div class="avatar-block">
                <img class="img-circle" onerror="this.src='images/profile.jpg';" src="../upload/<?php echo $result['img']; ?> ">
                <br />
                
            </div>
            <div class="caption">
                <p class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <?php echo $result['country']; ?> </p>
                <ul class="inv_details">
                    <li><span class="quest">Name  </span>:&nbsp; &nbsp;<span style="padding-right:5px;"><?php echo $result['f_name']; ?></span><span><?php echo $result['l_name']; ?></span></li>
                    <li><span class="quest">Email </span>:&nbsp; &nbsp;<span style="padding-right:5px;"><?php echo $result['email']; ?></span></li>
                    <li><span class="quest">Date Of Birth</span>:&nbsp; &nbsp;<span style="padding-right:5px;"><?php echo $result['birthday']; ?></span></li>
                    <li><span class="quest">Member </span>:&nbsp; &nbsp;<span style="padding-right:5px;"><?php echo $result['role']; ?></span></li>
                    <li><span class="quest">Projects participated in </span>:&nbsp; &nbsp;<span style="padding-right:5px;"><?php echo $result['inv_project']; ?></span></li>
                    <li><span class="quest">Min-Max ready to invest</span>:&nbsp; &nbsp;<span style="padding-right:5px;"><?php echo $result['inv_amount']; ?></span></li>
                    <li><span class="quest">Description</span>:&nbsp; &nbsp;<span style="padding-right:5px;"><?php echo $result['experience']; ?></span></li>
                </ul>
            </div>
        </div> 
        </div>
                   <?php }}?>
    <!--End of whoil lope-->


    
    </div>
    </div>
    </div>





    

    

 


			      	</div>
			      	
			      </div>
				
			</div>




       <?php include 'inc/foter.php'; ?> 