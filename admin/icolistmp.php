<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?>   

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Top Banner</h2>
                <div class="block">  

                
                <!--Publish table Start From Here-->
        <?php 
                if (isset($_GET['delid2'])) {
                  $did = $_GET['delid2'];
                  $query = "DELETE FROM tbl_publish_mp WHERE id='$did'";
                   $db-> delete($query);
                }
               
           ?> 
<center><h2>LIVE POST</h2></center>
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="15%">No</th>
                            <th width="20%">Company Name</th>
                            <th width="20%">Web Address</th>
                            <th width="20%">Business Tagline</th>
                            <th width="15%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

            $query = "select * from  tbl_publish_mp order by id desc";
            $contact = $db->select($query);
              if ($contact) {
                $i=0;
            while ($result= $contact -> fetch_assoc()) {
              $i++;


          ?>

                         
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['ico_name']; ?></td>
                            <td><?php echo $result['website_link']; ?></td>
                            <td><?php echo $result['company_tagline']; ?></td>
                            
            <td> <a class="btn" onclick="return confirm('Are you sure to DELETE!');" 

                         href="?delid2=<?php echo $result['id']; ?> ?>  ">Delete</a></td>
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
