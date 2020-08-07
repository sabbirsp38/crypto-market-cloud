<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?>   

        <div class="grid_10">
            <div class="box round first grid">
                <h2>PROJECT OF THE WEEK</h2>
                <div class="block">  

                <?php 
                if (isset($_GET['delid'])) {
                  $did = $_GET['delid'];
                  $query = "DELETE FROM tbl_lporderprocess WHERE id='$did'";
                   $db-> delete($query);
                }
               
           ?> <center><h2>Transaction Details</h2></center>

                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="10%">No</th>
                            <th width="20%">ICO NAME</th>
                            <th width="20%">Etherscan Transaction ID</th>
                            <th width="20%">Contact Details</th>
                            <th width="10%">Date</th>
                            <th width="10%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

            $query = "select * from  tbl_lporderprocess order by id desc";
            $contact = $db->select($query);
              if ($contact) {
                $i=0;
            while ($result= $contact -> fetch_assoc()) {
              $i++;


          ?>

                         
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['ico_name']; ?></td>
                            <td><?php echo $result['etherscanTransaction_id']; ?></td>
                            <td><?php echo $result['contact_details']; ?></td>
                            <td><?php echo $result['time']; ?></td>
            <td> <a class="btn" onclick="return confirm('Are you sure to DELETE!');" 

                         href="?delid=<?php echo $result['id']; ?> ?>  ">Delete</a></td>
            </tr>
            <?php  }} ?>

                    </tbody>
                </table>
                <!--ICO table Start From Here-->
                <?php 
                if (isset($_GET['delid'])) {
                  $did = $_GET['delid'];
                  $query = "DELETE FROM  tbl_ico_lp WHERE id='$did'";
                   $db-> delete($query);
                }
               
           ?> 
<center><h2>Panding ICO</h2></center>
<table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="10%">no</th>
                            <th width="20%">ICO Name</th>
                            <th width="20%">Email</th>
                            <th width="20%">Website</th>
                            <th width="15%">Publish This ICO</th>
                            <th width="15%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

            $query = "select * from  tbl_ico_lp order by id desc";
            $contact = $db->select($query);
              if ($contact) {
                $i=0;
            while ($result= $contact -> fetch_assoc()) {
              $i++;


          ?>

                         
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['email']; ?></td>
                            <td><?php echo $result['ico_links_website']; ?></td>
            <td> <a href="dbconnceticopublishlp.php?$id=<?php echo $result['id']; ?> " class="btn btn-green CoustRead01 ">Publish</a></td>
 
            <td> <a class="btn" onclick="return confirm('Are you sure to DELETE!');" href="?delid=<?php echo $result['id']; ?>   ">Delete</a></td>
            </tr>
            <?php  }} ?>

                    </tbody>
                </table>

                <!--Published ICO LIST-->
                                <!--ICO table Start From Here-->
                <?php 
                if (isset($_GET['delid'])) {
                  $did = $_GET['delid'];
                  $query = "DELETE FROM  tbl_ico_publish_lp WHERE id='$did'";
                   $db-> delete($query);
                }
               
           ?> 
<center><h2>Live ICO</h2></center>
<table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="20%">no</th>
                            <th width="20%">ICO Name</th>
                            <th width="20%">Email</th>
                            <th width="20%">Website</th>
                            <th width="20%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

            $query = "select * from  tbl_ico_publish_lp order by id desc";
            $contact = $db->select($query);
              if ($contact) {
                $i=0;
            while ($result= $contact -> fetch_assoc()) {
              $i++;


          ?>

                         
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['email']; ?></td>
                            <td><?php echo $result['ico_links_website']; ?></td>
            
 
            <td> <a class="btn" onclick="return confirm('Are you sure to DELETE!');" href="?delid=<?php echo $result['id']; ?> ?>  ">Delete</a></td>
            </tr>
            <?php  }} ?>

                    </tbody>
                </table>
    
    
    
               </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
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
