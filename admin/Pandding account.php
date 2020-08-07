

<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?>   

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Free Profile List</h2> 
                <div class="block"> 
                <?php 
                if (isset($_GET['delid'])) {
                  $did = $_GET['delid'];
                  $query = "DELETE FROM users_crypto WHERE id='$did'";
                   $db-> delete($query);
                }
                ?>

                
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="5%">no</th>
                            <th width="20%">Name</th>
                              <th width="30%">Email</th>
                            <th width="15%">Profile Type</th>
                            <th width="15%">Approve Profile</th>

                            <th width="10%">Delete User</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php 

                        $query = "SELECT * from users_crypto WHERE profile_approve = 0 and   isEmailConfirmed != 0 order by id desc";
                        $contact = $db->select($query);
                        if ($contact) {
                            $i=0;
                        while ($result= $contact -> fetch_assoc()) {
                            $i++;


                    ?>

                 

                         
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['f_name']; ?> <?php echo $result['l_name']; ?></td>
                               <td><?php echo $result['email']; ?></td>
                            <td> Free</td>
                             <td> <a class="btn btn-green CoustRead01" href="dbconncet approve.php? $id=<?php echo $result['id']; ?>">Approve Profile</a></td>
                            <td> <a class="btn btn-red CoustRead01" onclick="return confirm('Are you sure to DELETE!');" 
                href="?delid=<?php echo $result['id']; ?>  ">Delete</a></td>
                        </tr>
                        <?php  }} ?>

                    </tbody>
                </table>
    
               </div>
            </div>




            <div class="box round first grid">
                <h2>Paid Profile List</h2> 
                <div class="block"> 
                <?php 
                if (isset($_GET['delid2'])) {
                  $did2 = $_GET['delid2'];
                  $query = "DELETE FROM tbl_paccount WHERE id='$did2'";
                   $db-> delete($query);
                }
                ?>

                
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="5%">no</th>
                            <th width="15%">Name</th>
                            <th width="15%">Email</th>
                            <th width="25%">Transaction ID</th>
                            <th width="10%">Profile Type</th>
                            <th width="15%">Approve Profile</th>

                            <th width="10%">Delete User</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php 

                        $query = "SELECT * from tbl_paccount order by id desc";
                        $contact = $db->select($query);
                        if ($contact) {
                            $i=0;
                        while ($result= $contact -> fetch_assoc()) {
                            $i++;


                    ?>

                 

                         
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['f_name']; ?> <?php echo $result['l_name']; ?></td>
                               <td><?php echo $result['email']; ?></td>
                               <td><?php echo $result['etherscanTransaction_id']; ?></td>
                            <td> Paid</td>
                             <td> <a class="btn btn-green CoustRead01" href="dbconncet_paid_approve.php? $id=<?php echo $result['id']; ?>">Approve Profile</a></td>
                            <td> <a class="btn btn-red CoustRead01" onclick="return confirm('Are you sure to DELETE!');" 
                href="?delid2=<?php echo $result['id']; ?>  ">Delete</a></td>
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
