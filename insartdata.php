<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php include 'helpers/Formet.php'; ?>


                  <?php

                  if(isset($_POST['insert']))
                    {
                        $data = getPosts();
                        $insert_Query = "INSERT INTO `tbl_contact`(`firstname`, `lastname`,`email`,`body``) VALUES ('$firstname','$lastname','$email','$body')";
                        try{
                            $insert_Result = mysqli_query($connect, $insert_Query);
                            
                            if($insert_Result)
                            {
                                if(mysqli_affected_rows($connect) > 0)
                                {
                                    echo 'Data Inserted';
                                }else{
                                    echo 'Data Not Inserted';
                                }
                            }
                        } catch (Exception $ex) {
                            echo 'Error Insert '.$ex->getMessage();
                        }
                    }





                    ?>