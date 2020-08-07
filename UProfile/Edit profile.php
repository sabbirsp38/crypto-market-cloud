<?php include 'inc/hader2.php'; ?>
 <!--Add Start Here--> 

  <?php

          if (!isset($_GET['$id']) || $_GET['$id']==NULL  ) {
            header("Location: 404.php") ;
           
          }else{
             $id= $_GET['$id'];
          }

        ?>
 <?php
                   
                      $query = "select * from users_crypto where id= $id ";
                      $post = $db->select($query);
                      $result= $post -> fetch_assoc()
                        ?>     

 
      <div class="container-fluid DIS" style="margin-top: 30px;">
  <div class="container">
    <div class="row" style="color:#fff;">
       <form action="bconncet edite profile.php? $id=<?php echo $result['id']; ?>" method="post" enctype="multipart/form-data">
      
                <div class="card">
                    <center><header class="card-header">
                <h1 class="card-title">
                <strong>Edite You Profile</strong>
                </h1>
                </header></center>
                <div class="card-body">
                      <div class="container">
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group"> 
                              <label for="id_title" class="col-form-label text-uppercase text-fader fw-500 fs-11 require">Your First Name
                              </label>
                              <div class="regst">
                              <input type="text" name="firstname" maxlength="256" value="<?php echo $result['f_name']; ?>" class="textinput textInput form-control" required style="width:100%;"/> 
                              </div>
                              </div>
                              </div>
                              <div class="col-md-6">
                        <div class="form-group"> 
                              <label for="id_title" class="col-form-label text-uppercase text-fader fw-500 fs-11 require">Your Last Name
                              </label>
                              <div class="regst">
                              <input type="text" name="lastname" maxlength="256" value="<?php echo $result['l_name']; ?>" class="textinput textInput form-control" required style="width:100%;"/> 
                              </div>
                              </div>
                              </div>
                            
                              <div class="col-md-6">
                              <div class="form-group"> 
                              <label for="id_title" class="col-form-label text-uppercase text-fader fw-500 fs-11 require">Date Of Birth
                              </label>
                              <div class="regst">
                              <input type="date" name="dob" maxlength="256" class="textinput textInput form-control" value="<?php echo $result['birthday']; ?>" required style="width:100%;"/> 
                              </div>
                              </div>
                              </div>
                             
                              <div class="col-md-6">
                              <div class="form-group"> 
                              <label for="id_title" class="col-form-label text-uppercase text-fader fw-500 fs-11 require">Country
                              </label>
                              <div class="regst">
                              <input type="text" name="Country" maxlength="256" value="<?php echo $result['country']; ?>" class="textinput textInput form-control" required style="width:100%;"/> 
                              </div>
                              </div>
                              </div>
                              <div class="col-md-6">
                        <div class="form-group"> 
                              <label for="id_title" class="col-form-label text-uppercase text-fader fw-500 fs-11 require">What Member title are you applying for?<br />
                              </label>
                              <div class="regst">
                              
                              <select name="Member" class="select form-control select2-hidden-accessible" id="id_country" tabindex="-1" aria-hidden="true" type="text" required>

                                <option value="<?php echo $result['role']; ?>"><?php echo $result['role']; ?></option>
                                <option value="Expert">Expert</option>
                                <option value="Entrepreneur">Entrepreneur</option>
                                <option value="Investor">Investor</option>
                              </select> 
                                        
                              </div>
                              </div>
                              </div>
                              <div class="col-md-6">
                        <div class="form-group"> 
                              <label for="id_title" class="col-form-label text-uppercase text-fader fw-500 fs-11 require">Add Picture
                              </label>
                              <div class="regst">
                              <input type="file" value="<?php echo $result['img']; ?>" name="myFile" class="textinput textInput form-control" required style="width:100%;"/> 
                              </div>
                              </div>
                              </div>
                              <div class="col-md-6">
                        <div class="form-group"> 
                              <label for="id_title" class="col-form-label text-uppercase text-fader fw-500 fs-11 require">If there was a project you liked, what would be the min-max amount you'd be prepared to invest (USD)
                              </label>
                              <div class="regst">
                              <input type="text" name="amount" maxlength="256" placeholder="Enter Amount" class="textinput textInput form-control" required style="width:100%;" value="<?php echo $result['inv_amount']; ?>"/> 
                              </div>
                              </div>
                              </div>
                              <div class="col-md-6">
                        <div class="form-group"> 
                              <label for="id_title" class="col-form-label text-uppercase text-fader fw-500 fs-11 require">Please Name the last 3 projects you invested in
                              </label>
                              <div class="regst">
                              <input type="text" name="projects" maxlength="256" placeholder="Enter Projects" class="textinput textInput form-control" required style="width:100%;" value="<?php echo $result['inv_project']; ?>"/> 
                              </div>
                              </div>
                              </div>
                              <div class="col-md-6">
                        <div class="form-group"> 
                              <label for="id_title" class="col-form-label text-uppercase text-fader fw-500 fs-11 require">Please Describe your blockchain Expertise and Professional experience
                              </label>
                              <div class="regst">
                              <input type="text" name="description" maxlength="256" value="<?php echo $result['experience']; ?>" class="textinput textInput form-control" required style="width:100%;"/> 
                              </div>
                              </div>
                              </div>
                              <div class="col-md-6">
                              </div>
                          </div>
                           <div class="col-md-4 col-md-offset-4">
                        <div class="form-group"> 
                              
                              <div class="regst">
                              <input type="submit" name="submit" value="Submit" class="textinput textInput form-control"  style="width:100%; background:#2196F3; border:0px;"/>
                              </div>
                              <br>
                              <center><p>
      Already a member? <a href="UProfile/index.php">Sign in</a>
    </p></center>
                              </div>
                              </div>

                    </div>
                </div>
                                    </div>
                              </form>        
                            </div>
                            </div>
                        </div>
                    </div>









<?php include 'inc/foter.php'; ?> 