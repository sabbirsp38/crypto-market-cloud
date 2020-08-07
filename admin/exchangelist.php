<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?>   

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Post List</h2> 
                <div class="block"> 
                <?php 
                if (isset($_GET['delid'])) {
                  $did = $_GET['delid'];
                  $query = "DELETE FROM tbl_exchange_order WHERE id='$did'";
                   $db-> delete($query);
                }
               

             
                    ?> 
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="5%">no</th>
                            <th width="15%">NAME</th>
                            <th width="20%">EMAIL ADDRESS</th>
                            <th width="10%">DATE OF BIRTH</th>
                            <th width="20%"> WALLET ADDRESS</th>
                            <th width="10%"> PHOTO OF YOUR ID</th>
                            <th width="10%"> AMOUNT</th>
                            <th width="10%">Delete </th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php 

                        $query = "SELECT * from tbl_exchange_order  order by id desc";
                        $contact = $db->select($query);
                        if ($contact) {
                            $i=0;
                        while ($result= $contact -> fetch_assoc()) {
                            $i++;


                    ?>





<!--  -->


                         
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['name']; ?> </td>
                            <td><?php echo $result['email']; ?></td>
                            <td> <?php echo $result['birth']; ?></td>
                            <td> <?php echo $result['w_address']; ?></td>
                            <td><a  href="../upload/<?php echo $result['photo_id']; ?>" download="PHOTO ID OF <?php echo $result['name']; ?>"> <img style="max-width: 50px; padding: 10px;" src="../upload/<?php echo $result['photo_id']; ?>"></td>
                            <td> <?php echo $result['amount']; ?></td>
                            <td> <a class="btn btn-red CoustRead01" onclick="return confirm('Are you sure to DELETE!');" 
                href="?delid=<?php echo $result['id']; ?>  ">Delete</a></td>
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
