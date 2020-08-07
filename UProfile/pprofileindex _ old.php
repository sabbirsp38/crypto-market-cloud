
<?php include 'inc/hader3.php'; ?>
   
<!--- End Navigation ---->
<div style="min-height: 100px;"></div>






<div class="container-fluid">
  <div class="container ">
    <div class="row">
    
    <?php
                            $query = "select * from users_crypto WHERE uni_id='$uni_id' ";
                            $post = $db->select($query);
                            $result= $post -> fetch_assoc();
                        ?>

      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="profile_card">
          <div class="img_person">
            <center ><img id="imageProfile" onerror="this.src='images/profile.jpg';" class="img-responsive" src="../upload/<?php echo $result['img']; ?>"></center>
          </div>
        </div>
      <br>
        <center><h3 id="nameProfile"><?php echo $result['f_name']; ?> <?php echo $result['l_name']; ?></h3></center>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
         
      
        <center><a style="float: right;" class="login_but"  href="Edit profile.php? $id=<?php echo $result['id']; ?>">Edit Profile</a></center>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
         
      
        <center><a style="float: right;" class="login_but" href="?action=logout">Sing Out</a></center>
      </div>




      
       </div>
   </div>

    </div>
</div>
<div class="postdiv container">
<center><h1>My Post</h1></center>

              <div class="dashboard-content-wrapper container">
                <div class="manage-job-container">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Post Title</th>
                        <th>Type</th>
                        <th>View</th>
                        
                        <th class="action">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                              if (isset($_GET['delid'])) {
                                $did = $_GET['delid'];
                                $query = "DELETE FROM tbl_ico WHERE id='$did'";
                                 $db-> delete($query);
                              }
               
                          ?>
                    	<?php 
                       $sql = $con->query("SELECT id FROM tbl_ico WHERE profile_uid='$uni_id'");
                         for ($i=0; $i < $sql->num_rows ; $i++) { 
                           $data = $sql->fetch_array();
                            }  
                            $query = "select * from tbl_ico WHERE profile_uid='$uni_id' order by id desc";
                            $post = $db->select($query);
                            if ($post) {
                              while ($result= $post -> fetch_assoc()) {
                        ?>
                      <tr class="job-items">
                        <td class="title">
                          <h3><?php echo $result['name']; ?></h3>
                          
                        </td>
                        <td class="deadline"><?php echo $result['ico_type']; ?></td>
                        <td class="deadline"><a class="tab_but" target="blank" href="../memberprofile.php?id=<?php echo $result['id']; ?>">View</a></td>
                        <td class="application"><a class="tab_but" href="edit post.php? $id=<?php echo $result['id']; ?>">Edit</a> || <a class="tab_but" href="?delid=<?php echo $result['id']; ?> ?>">Delete</a></td>
                      </tr>


  <?php }}?>


                    </tbody>
                  </table>

                </div>
              </div>
              </div>
      </div>
    </div>
  </div>
</div>












<div style="height: 150px;"></div>
    
















<div style="min-height: 100px;"></div>

<?php include 'inc/foter.php'; ?>