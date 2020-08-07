<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?>   

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Post List</h2> 
                <div class="block">
              <?php 
                if (isset($_GET['delid'])) {
                  $did = $_GET['delid'];
                  $query = "DELETE FROM tbl_point_order WHERE id='$did'";
                   $db-> delete($query);
                }
               

             
                    ?>  

                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="5%">no</th>
                            <th width="18%">Account Holder Name</th>
                            <th width="26%">WALLET ADDRESS</th>
                            <th width="26%">TRNASCTION ID</th>
                            <th width="9%">Amount</th>
                            <th width="8%">Process</th>
                            <th width="8%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php 

						$query = "select * from tbl_point_order order by id desc";
						$contact = $db->select($query);
					    if ($contact) {
					    	$i=0;
					 	while ($result= $contact -> fetch_assoc()) {
					 		$i++;


					?>

                 

                         
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['W_address']; ?></td>
                            <td><?php echo $result['T_id']; ?></td>
                            <td><?php echo $result['amount']; ?></td>
			   <td> <a href="addpoint.php?$id=<?php echo $result['id']; ?>">Process</a>
                           </td>
						
                          <td> <a onclick="return confirm('Are you sure to DELETE!');" 
                               href="?delid=<?php echo $result['id']; ?>  ">Delete</a>
                            </td>
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
