<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?>   

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Post List</h2> 
                <div class="block"> 
                <?php 
                if (isset($_GET['delid'])) {
                  $did = $_GET['delid'];
                  $query = "DELETE FROM tbl_directory WHERE id='$did'";
                   $db-> delete($query);
                }
               

             
                    ?> 
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="10%">no</th>
                            <th width="20%">Companey Name</th>
                            <th width="50%">Description</th>
                            <th width="10%">Web Address</th>
                            <th width="10%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php 

						$query = "select * from tbl_directory order by id desc";
						$contact = $db->select($query);
					    if ($contact) {
					    	$i=0;
					 	while ($result= $contact -> fetch_assoc()) {
					 		$i++;


					?>

                 

                         
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['company_name']; ?></td>
                            <td><?php echo $result['company_discription']; ?></td>
                            <td><?php echo $result['company_weblink']; ?></td>
							<td> <a onclick="return confirm('Are you sure to DELETE!');" 
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
