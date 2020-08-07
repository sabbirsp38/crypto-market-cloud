<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?>   

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php 

						$query = "select * from catagori order by id desc";
						$catagori = $db->select($query);
					    if ($catagori) {
					    	$i=0;
					 	while ($result= $catagori -> fetch_assoc()) {
					 		$i++;


					?>


						<tr class="odd gradeX">
							<td><?php echo $i;  ?></td>
							<td><?php echo $result['name']; ?></td>
							<td><a href="EditCat.php? $catid=<?php echo $result['id']; ?>  ">Edit</a> || <a onclick="return confirm('Are you sure to DELETE!');" href="delcat.php? $delcat=<?php echo $result['id']; ?>  ">Delete</a></td>
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
<?php include 'inc/foter.php'; ?> 
 

 <script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();

            $('.datatable').dataTable();
			setSidebarHeight();


        });
    </script>