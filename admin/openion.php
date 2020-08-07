<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?>   

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Openion</h2>
                <div class="block">  

                                <?php 
                if (isset($_GET['delid3'])) {
                  $did3 = $_GET['delid3'];
                  $query = "DELETE FROM  tbl_openion WHERE id='$did3'";
                   $db-> delete($query);
                }
               
           ?> 


                      
<center><h2>Expert Openion</h2></center>
<!--Publish table Start From Here-->

 <?php 
                if (isset($_GET['id'])) {
                  $id = $_GET['id'];
                  }
        




?>

                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                              <div class="row">

                        <?php
                        $query = "select * from tbl_openion where ico_id ='$id'";
                       $post2 = $db->select($query);
                          if ($post2) {
                          while ($result2= $post2 -> fetch_assoc()) {

                          $user = $result2['uni_id'];
                         $comment_id = $result2['id'];


                    ?>

                        
                                  <div class="col-lg-12 col-md-12 col-sm-12" style="border: 2px solid #000f0e;   margin-top: 14px;   padding: 6px;  box-shadow: 3px -5px 4px 0px black;
">
                                  <div class="row">


                                    
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12" >
                                      <?php
                                            $query3 = "select * from users_crypto where uni_id ='$user'";
                                            $post3 = $db->select($query3);
                                            if ($post3) {
                                              if ($result3= $post3 -> fetch_assoc()) {

                                            

                                              ?>
                                      <img class="img img-responsive MPF3img" src="../upload/<?php echo $result3['img'];?> " onerror="this.src='images/alt.png'" stype="height:50px; width:50px; border-radius:150px">
                                      <h2 style="margin-top: 10px; margin-left: 90px; color: olive; font-style: bold"><?php echo $result3['f_name']; ?></h2>

                                      <h3 style="margin-top: 10px; margin-left: 90px; color: blue; font-style: bold; text-align: justify;"><?php echo $result2['comment']; ?></h3>
                                    <a class="btn" onclick="return confirm('Are you sure to Delete!');" 

                         href="?delid3=<?php echo $result2['id']; ?>&id=<?php echo $id ?>">Delete</a>
                                        <?php }}
                                      ?>
                                    </div>


                                     <!--reply -->

                                   <div style="margin-left: 200px; border: 1px solid black;"> 
                                           
                                             <?php
                                            $query4 = "select * from tbl_reply where com_id ='$comment_id'";
                                            $post4 = $db->select($query4);
                                            if ($post4) {
                                              while ($result4= $post4 -> fetch_assoc()) {

                                            $user2 = $result4['uni_id'];

                                                $query5 = "select * from users_crypto where uni_id ='$user2'";
                                            $post5 = $db->select($query5);
                                            if ($post5) {
                                              if ($result5= $post5 -> fetch_assoc()) {

                                              ?>

                                          <div class="col-lg-12 col-md-12 col-sm-12" >
                                                    
                                            <img class="img img-responsive MPF3img" src="../upload/<?php echo $result5['img'];?> " onerror="this.src='images/alt.png'" stype="height:40px; width:40px; border-radius:150px">
                                            <h2 style="margin-top: 10px; margin-left: 90px; color: olive; font-style: bold; font-size: 15px"><?php echo $result5['f_name']; ?></h2>

                                            <h3 style="margin-top: 10px; margin-left: 90px; color: blue; font-style: bold; text-align: justify; font-size: 13px"><?php echo $result4['reply']; ?></h3>
                                            </div>
                                              <?php }}}}
                                            ?>
                                          
                                          
                                    
                                      <div style="margin-top: 20px; margin-left: 100px; " class="col-lg-6 col-md-6 col-sm-6" >
                
                
                                          <form action="dbconnect_reply.php?id=<?php echo $id ?>&com_id=<?php echo $comment_id ?>" method="post">
                                            <center><textarea cols="40" name="text2" placeholder="Write Your Reply..."></textarea></center><br>
                                            <center><button class="com_but" type="submit">Leave Your Reply</button></center>
                                          </form>
                                
                                      </div>
                                      </div>
                                    <!-- reply  -->
                                   
                                    </div>
                                     
               
                                  

                                
                              </div>


                        <?php  }} ?>

                   <div style="margin-top: 50px;" class="col-lg-12 col-md-12 col-sm-12">
                                
                                
                                  <form action="dbconnect_opinion.php?id=<?php echo $id ?>" method="post">
                                    <center><textarea cols="80" name="text" placeholder="Write Your Opinions..."></textarea></center><br>
                                    <center><button class="com_but" type="submit">Leave Your Opinions</button></center>
                                  </form>

                                   
                         
                                
                              </div>


                             </div>
                            
                           </div>
                          </div>


    
             
        </div>
      
    </div>
   </div>
    <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
            setSidebarHeight();
        });
    </script>
    <div id="site_info">
      <p>
         &copy; Copyright <a href="#">Back Banchers</a>. All Rights Reserved.
        </p>
    </div>
       
</body>
</html>
