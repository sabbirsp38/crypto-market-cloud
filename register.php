
<?php

   
	$msg = "";
	use PHPMailer\PHPMailer\PHPMailer;
    
	if (isset($_POST['submit'])) {
		$con = new mysqli('localhost', 'root', '', 'cryptomarketcloud');

		
		$email = $con->real_escape_string($_POST['email']);
		$password = $con->real_escape_string($_POST['password']);
		$cPassword = $con->real_escape_string($_POST['cPassword']);
	  	$from_data1 =$con->real_escape_string ($_POST['firstname']);
	    $from_data2 =$con->real_escape_string($_POST['lastname']);
	    $from_data4 =$con->real_escape_string ($_POST['dob']);
	    $from_data5 =$con->real_escape_string ($_POST['Country']);
	    $from_data6 =$con->real_escape_string ($_POST['Member']);
	    $from_data8 =$con->real_escape_string ($_POST['amount']);
	    $from_data9 =$con->real_escape_string ($_POST['projects']);
	    $from_data10 =$con->real_escape_string  ($_POST['description']);
	    

	    
	    $permited  = array('jpg', 'JPG', 'jpeg','JEPG', 'png', 'PNG', 'png','gif');
            $file_name = $_FILES['myFile']['name'];
            $file_size = $_FILES['myFile']['size'];
            $file_temp = $_FILES['myFile']['tmp_name'];
            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "upload/".$unique_image;

            if ($file_size >2048567) {
                 echo "<span class='error'>Image Size should be less then 10MB!
                 </span>";
                } elseif (in_array($file_ext, $permited) === false) {

                         echo "";
                         //.implode(', ', $permited)."</span>";
                        } else{

                        move_uploaded_file($file_temp, $uploaded_image);
                        $sql = "INSERT INTO users_crypto() VALUES ('')";
               }
        
        
		if ( $email == "" || $password != $cPassword)
			$msg = "Please check your inputs!";
		else {
			$sql = $con->query("SELECT id FROM users_crypto WHERE email='$email'");
			if ($sql->num_rows > 0) {
				$msg = "Email already used!";
			} else {
				$token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789!$/()*';
				$token = str_shuffle($token);
				$token = substr($token, 0, 10);
				$uni_id = substr(md5(time()), 0, 38);
                  
				$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
                
				$con->query("INSERT INTO users_crypto (email, password, isEmailConfirmed, token, uni_id,  f_name,   l_name,  country, img, inv_project, birthday, role, inv_amount, experience, profile_approve,p_type )
					VALUES ('$email', '$hashedPassword', '0', '$token', '$uni_id','$from_data1', '$from_data2', '$from_data5', '$unique_image', '$from_data9','$from_data4', '$from_data6', '$from_data8', '$from_data10', '0','0')");

                // include_once "PHPMailer/PHPMailer.php";

                // $mail = new PHPMailer();
                // $mail->setFrom('cryptomarketcloud@gmail.com');
                // $mail->addAddress($email, $from_data1);
                // $mail->Subject = "Please verify email!";
                // $mail->isHTML(true);
                // $mail->Body = "
                //     Thanks for Joining Crypto Market Cloud.Please Click on the link below to confirm your email address:<br><br>
                    
                //     <a style='color: #fff; background-color: #010826; borde-color: #000000; border-radius: 5px; font-size: 27px; margin-left: 8px; min-width: 259px; min-height: 52px; text-decoration: none; padding: 10px 25px;' href='https://cryptomarketcloud.com/confirm.php?email=$email&token=$token'>Click Here</a>
                    
                //     <br><br> Once confirmed Your Email Your Profile will Be Under Review.<br><br>Best Wishes<br> Crypto Market Cloud
                // ";
                

                // if ($mail->send())
                //     $msg = "You have been registered! Please verify your email!";
                // else
                //     $msg = "Something wrong happened! Please try again!";
			}
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>crypto market cloud-ico platform and crypto live price</title>
      <link rel="icon" href="images/logo.png">

    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

            <!-- Bootstrap -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/token.css">
            <link rel="stylesheet" href="css/foterpost.css">
            <link rel="stylesheet" href="css/Contactus.css">
            <link rel="stylesheet" href="css/animate.min.css">

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    
      

  </head>
  <body>

   <!--NAVIGATION-->
    <script type="text/javascript" src="js/particles.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    
    <nav class="navbar navbar-inverse CoustomMargin" style="background: #292e39;position:relative;">
      <div class="container-fluid ">
        <div class="NavCoustom ">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
              
            </div>
            <div class="col-md-2">
              <a class="navbar-brand" href="index"><img class="img CoustomLogoIMG " src="images/logo.png"></a>
              </div>
            <div class="navbar-collapse collapse">
            <div class="col-md-6">
            <ul class="nav navbar-nav" style="float: right;">
                   <li><a style="color: white; margin-top:24px;" href="index">Home</a></li>
                   <li><a style="color: white; margin-top:24px;" href="DirectoryList.php">Directory List</a></li>
                   <li><a style="color: white; margin-top:24px;" href="Contact">Contact US</a></li>
                </ul>
                </div>
                  <div class="col-md-2">
                  <div style="margin-top:26px;  class="navbar-right CoustomScerchButton ">
                  
                    <form method="get" class="navbar-form  " action="scarch.php">
                      <div class="input-group searchCustom">
                        <input type="text" name="scrach" style="font-size: 14px;" class="form-control " placeholder="Search">
                        <div class="input-group-btn">
                          <button name="submit" value="Search" class="btn btn-default CoustomButton" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                          </button>
                        </div>

                      </div>
            </form>
                    
                  </div>
                  </div>

<div class="col-md-2">
            <div class="TRANSLATE navbar-right"><div id="google_translate_element" ></div></div>
            </div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
            </ul>
            
            </div>
             </div>
      </div>
    </nav>
  <!--- End Navigation ---->


			<div class="container-fluid DIS" style="margin-top: 30px;">
  <div class="container">
    <div class="row" style="color:#fff;">
       <form action="register.php" method="post" enctype="multipart/form-data">
       	<?php include('errors.php'); ?>
                <div class="card">
                    <center><header class="card-header">
                <h1 class="card-title">
                <strong>Registration Form</strong>

                </h1>
                <h1 class="card-title" style="color: red;">
                
                <?php if ($msg != "") echo $msg . "<br><br>" ?>
                </h1>
                </header></center>
                <div class="card-body">
                      <div class="container">
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group"> 
                              <label for="id_title" class="col-form-label text-uppercase text-fader fw-500 fs-11 require">First Name
                              </label>
                              <div class="regst">
                              <input type="text" name="firstname" maxlength="256" placeholder="Enter first name" class="textinput textInput form-control" required style="width:100%;"/> 
                              </div>
                              </div>
                              </div>
                              <div class="col-md-6">
                        <div class="form-group"> 
                              <label for="id_title" class="col-form-label text-uppercase text-fader fw-500 fs-11 require">Last Name
                              </label>
                              <div class="regst">
                              <input type="text" name="lastname" maxlength="256" placeholder="Enter Last name" class="textinput textInput form-control" required style="width:100%;"/> 
                              </div>
                              </div>
                              </div>
                              <div class="col-md-6">
                        <div class="form-group"> 
                              <label for="id_title" class="col-form-label text-uppercase text-fader fw-500 fs-11 require">Email Address
                              </label>
                              <div class="regst">
                              <input type="email" name="email" maxlength="256" placeholder="Enter Email Address" class="textinput textInput form-control" required style="width:100%;"/> 
                              </div>
                              </div>
                              </div>
                              
                              <div class="col-md-6">
                              <div class="form-group"> 
                              <label for="id_title" class="col-form-label text-uppercase text-fader fw-500 fs-11 require">Password
                              </label>
                              <div class="regst">
                              <input type="password" name="password" maxlength="256" placeholder="Enter password" class="textinput textInput form-control" required style="width:100%;"/> 
                              </div>
                              </div>
                              </div>
                              <div class="col-md-6">
                              <div class="form-group"> 
                              <label for="id_title" class="col-form-label text-uppercase text-fader fw-500 fs-11 require">Confirm password
                              </label>
                              <div class="regst">
                              <input type="password" name="cPassword" maxlength="256" placeholder="Confirm password" class="textinput textInput form-control" required style="width:100%;"/> 
                              </div>
                              </div>
                              </div>
                              <div class="col-md-6">
                              <div class="form-group"> 
                              <label for="id_title" class="col-form-label text-uppercase text-fader fw-500 fs-11 require">Country
                              </label>
                              <div class="regst">
                              <input type="text" name="Country" maxlength="256" placeholder="Enter Country Name" class="textinput textInput form-control" required style="width:100%;"/> 
                              </div>
                              </div>
                              </div>
                              
                              
                                                            
                              
                              
                          </div>
                           <div class="col-md-4 col-md-offset-4">
                        <div class="form-group"> 
                              
                              <div class="regst">
                              <input type="submit" name="submit" value="Submit" class="textinput textInput form-control"  style="width:100%; background:#2196F3; border:0px;"/>
                              </div>
                              <br>
                              <center><p>
			Already a member? <a href="UProfile/index.php">Sign in</a>
		</p></center>
                              </div>
                              </div>

                    </div>
                </div>
                                    </div>
                              </form>        
                            </div>
                            </div>
                        </div>
                    </div>
<div class="card005">
 <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm--6">

             <div class="card_subcriber"> 
                <center><h3><i class="fa fa-envelope" aria-hidden="true"></i>Subscribe For Latest Update</h3></center>

               <center><form form action="dbconncetsubcriber.php" method="post">
                 <input id="fromiput" type="email" name="semail" placeholder="Subscribe For Updates">
                    <button id="frombutton" type="submit">Subscribe</button>
                </form></center> 
             </div>
                
            </div>
            <div class="col-lg-6 col-md-6 col-sm--6">
               <div class="card0006 pull-right">
                    <center><h2>Stay Connceted </h2></center>
                <div class="card05">

                      <ul>
                         <?php
      $query = "select * from tbl_social order by id desc";
      $post = $db->select($query);
      if ($post) {
        while ($result= $post -> fetch_assoc()) {

      

        ?>
                        <li><a href="<?php echo $result['fb_link']; ?>"><i class="fa fa-facebook" aria-hidden="true" ></i></a></li>
                        <li><a href="<?php echo $result['linkedin_link']; ?>"><i class="fa fa-linkedin" aria-hidden="true" ></i></a></li>
                        <li><a href="<?php echo $result['twitter_link']; ?>"><i class="fa fa-twitter" aria-hidden="true" ></i></a></li>
                        <li><a href="<?php echo $result['midiam_link']; ?>"><i class="fa fa-medium" aria-hidden="true" ></i></a></li>
                        <li><a href="<?php echo $result['youtube_link']; ?>"><i class="fa fa-youtube" aria-hidden="true" ></i></a></li>
                        <li><a href="<?php echo $result['telegram_link']; ?>"><i class="fa fa-location-arrow" aria-hidden="true" ></i></a></li>
                        <li><a href="<?php echo $result['instragram_link']; ?>"><i class="fa fa-instagram" aria-hidden="true" ></i></a></li>

                        <?php }}?>
                    </ul>                    
                </div>

                </div> 
            </div>
        </div>
</div>
</div>

			      	</div>
			      	
			      </div>
				
			</div>




       <?php include 'inc/foter2.php'; ?> 