<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?>   

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Post List</h2>
                <div class="block">  

                    <?php 
                if (isset($_GET['delid3'])) {
                  $did3 = $_GET['delid3'];
                  $query = "DELETE FROM tbl_mporderprocess WHERE id='$did3'";
                   $db-> delete($query);
                }
               
           ?> 

                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="15%">ICO NAME</th>
                            <th width="20%">Pakage</th>
                            <th width="20%">Etherscan Transaction ID</th>
                            <th width="15%">Date</th>
                            <th width="15%">Complete</th>
                            <th width="10%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

            $query = "select * from  tbl_mporderprocess order by id desc";
            $contact = $db->select($query);
              if ($contact) {
                $i=0;
            while ($result= $contact -> fetch_assoc()) {
              $i++;


          ?>

                         
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['ico_name']; ?></td>
                            <td><?php echo $result['pakage']; ?></td>
                            <td><?php echo $result['etherscanTransaction_id']; ?></td>
                            <td><?php echo $result['time']; ?></td>
                            <td> <a class="btn" onclick="return confirm('Are you sure to Complete!');" 

                         href="?delid3=<?php echo $result['id']; ?> ?>  ">Complete</a></td>
            <td> <a class="btn" onclick="return confirm('Are you sure to Delete!');" 

                         href="?delid3=<?php echo $result['id']; ?> ?>  ">Delete</a></td>
            </tr>
            <?php  }} ?>

                    </tbody>
                </table>



                <center><h2>Pandding Post</h2></center>

                <?php 
                if (isset($_GET['delid'])) {
                  $did = $_GET['delid'];
                  $query = "DELETE FROM tbl_ico_inisial WHERE id='$did'";
                   $db-> delete($query);
                }
               
           ?> 

                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="10%">no</th>
                            <th width="20%">ICO Name</th>
                            <th width="15%">Type</th>
                            <th width="15%">Make It Top</th>
                            <th width="10%">Publish</th>
                            <th width="20%">Make It Top & Publish</th>
                            <th width="10%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

						$query = "select * from tbl_ico_inisial order by id desc";
						$contact = $db->select($query);
					    if ($contact) {
					    	$i=0;
					 	while ($result= $contact -> fetch_assoc()) {
					 		$i++;


					?>

                         
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['ico_type']; ?></td>
                            <td><a href="bd conncet ico publish top.php?$id=<?php echo $result['id']; ?> " class="btn btn-green CoustRead01 ">Make It Top</a></td>
    						<td> <a href="bdconnceticopublish.php?$id=<?php echo $result['id']; ?> " class="btn btn-green CoustRead01 ">Publish</a>
                             </td>
                             <td> <a href="bd conncet ico publish top & publish.php?$id=<?php echo $result['id']; ?> " class="btn btn-green CoustRead01 ">Make It Top & Publish</a>
                             </td>
                             <td> <a onclick="return confirm('Are you sure to DELETE!');" href="?delid=<?php echo $result['id']; ?> ?>  "class="btn btn-green CoustRead01 ">Delete</a>
                             </td>
						</tr>
						<?php  }} ?>

                    </tbody>
                </table>

<center><h2>Index Page IEO Post</h2></center>
<!--Publish table Start From Here-->

 <?php 
                if (isset($_GET['delid2'])) {
                  $did2 = $_GET['delid2'];
                  $query = "DELETE FROM tbl_ico_paid WHERE id='$did2'";
                   $db-> delete($query);
                }
               
           ?> 



                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="15%">no</th>
                            <th width="20%">Post Title</th>
                            <th width="20%">Type</th>
                            <th width="20%">tag</th>
                            <th width="15%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

                        $query = "select * from tbl_ico_paid order by id desc";
                        $contact = $db->select($query);
                        if ($contact) {
                            $i=0;
                        while ($result= $contact -> fetch_assoc()) {
                            $i++;


                    ?>

                         
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['ico_type']; ?></td>
                            <td><?php echo $result['email']; ?></td>
                        <td> <a onclick="return confirm('Are you sure to DELETE!');" 

                         href="?delid2=<?php echo $result['id']; ?> ?>  ">Delete</a></td>
                        </tr>
                        <?php  }} ?>

                    </tbody>
                </table>
<center><h2>Live ICO Page Post</h2></center>
<!--Publish table Start From Here-->

 <?php 
                if (isset($_GET['delid5'])) {
                  $did5 = $_GET['delid5'];
                  $query = "DELETE FROM tbl_ico WHERE id='$did5'";
                   $db-> delete($query);
                }
               
           ?> 



                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="10%">no</th>
                            <th width="30%">Post Title</th>
                            <th width="10%">Type</th>
                            <th width="20%">tag</th>
                            <th width="15%">Openion</th>
                            <th width="15%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

                        $query = "select * from tbl_ico order by id desc";
                        $contact = $db->select($query);
                        if ($contact) {
                            $i=0;
                        while ($result= $contact -> fetch_assoc()) {
                            $i++;


                    ?>

                         
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['ico_type']; ?></td>
                            <td><?php echo $result['email']; ?></td>
                             <td> <a href="openion.php?id=<?php echo $result['id']; ?>">Openion</a></td>
                        

                        <td> <a onclick="return confirm('Are you sure to DELETE!');" 

                         href="?delid5=<?php echo $result['id']; ?> ?>  ">Delete</a></td>
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
