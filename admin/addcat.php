<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?>  
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock"> 

                <?php 
                 $name=$_POST ['name'];
                 if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $name = mysqli_real_escape_string($db->link, $name);
                 }

                  ?>
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="name" placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
   <?php include 'inc/foter.php'; ?>   
