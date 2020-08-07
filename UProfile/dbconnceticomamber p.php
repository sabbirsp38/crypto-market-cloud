<?php include 'inc/hader db.php'; ?>
<?php 


/*Logo Image start here*/
            $permited  = array('jpg', 'JPG', 'jpeg','JPEG', 'png', 'PNG', 'png','gif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];
            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "../upload/".$unique_image;

            if ($file_size >2048567) {
                 echo "<span class='error'>Image Size should be less then 2MB!
                 </span>";
                } elseif (in_array($file_ext, $permited) === false) {

                         echo "<span class='error'>You can upload only:-"
                         .implode(', ', $permited)."</span>";
                        } else{

                        move_uploaded_file($file_temp, $uploaded_image);
                        $sql = "INSERT INTO tbl_ico_inisial() VALUES ('')";
               } 
/*Logo Image End here*/
/*teme img 1 srat */
 $permitedone = array('jpg', 'JPG', 'jpeg','JPEG', 'png', 'PNG', 'png','gif');
            $file_nameone = $_FILES['ico_members-0-image']['name'];
            $file_sizeone = $_FILES['ico_members-0-image']['size'];
            $file_tempone = $_FILES['ico_members-0-image']['tmp_name'];
            $divone = explode('.', $file_nameone);
            $file_extone = strtolower(end($divone));
            $unique_imageone = substr(md5(time()), 0, 9).'.'.$file_extone;
            $uploaded_imageone = "../upload/".$unique_imageone;

            if ($file_sizeone >2048567) {
                 echo "<span class='error'>Image Size should be less then 2MB!
                 </span>";
                } elseif (in_array($file_extone, $permitedone) === false) {

                         echo "<span class='error'>You can upload only:-"
                         .implode(', ', $permitedone)."</span>";
                        } else{

                        move_uploaded_file($file_tempone, $uploaded_imageone);
                        $sql = "INSERT INTO tbl_ico_inisial() VALUES ('')";
               } 
/*teme img 1 end*/
/*teme img 2 srat */
 $permitedt  = array('jpg', 'JPG', 'jpeg','JPEG', 'png', 'PNG', 'png','gif');
            $file_namet = $_FILES['ico_members_tow_image']['name'];
            $file_sizet = $_FILES['ico_members_tow_image']['size'];
            $file_tempt = $_FILES['ico_members_tow_image']['tmp_name'];
            $divt = explode('.', $file_namet);
            $file_extt = strtolower(end($divt));
            $unique_imaget = substr(md5(time()), 0, 8).'.'.$file_extt;
            $uploaded_imaget = "../upload/".$unique_imaget;

            if ($file_sizet >2048567) {
                 echo "<span class='error'>Image Size should be less then 2MB!
                 </span>";
                } elseif (in_array($file_extt, $permitedt) === false) {

                         echo "<span class='error'>You can upload only:-"
                         .implode(', ', $permitedt)."</span>";
                        } else{

                        move_uploaded_file($file_tempt, $uploaded_imaget);
                        $sql = "INSERT INTO tbl_ico_inisial() VALUES ('')";
               } 
/*teme img 2 end*/
/*teme img 3 srat */
 $permitedthree  = array('jpg', 'JPG', 'jpeg','JPEG', 'png', 'PNG', 'png','gif');
            $file_namethree = $_FILES['ico_members_three_image']['name'];
            $file_sizethree = $_FILES['ico_members_three_image']['size'];
            $file_tempthree = $_FILES['ico_members_three_image']['tmp_name'];
            $divthree = explode('.', $file_namethree);
            $file_extthree = strtolower(end($divthree));
            $unique_imagethree = substr(md5(time()), 0, 7).'.'.$file_extthree;
            $uploaded_imagethree = "../upload/".$unique_imagethree;

            if ($file_sizethree >2048567) {
                 echo "<span class='error'>Image Size should be less then 2MB!
                 </span>";
                } elseif (in_array($file_extthree, $permitedthree) === false) {

                         echo "<span class='error'>You can upload only:-"
                         .implode(', ', $permitedthree)."</span>";
                        } else{

                        move_uploaded_file($file_tempthree, $uploaded_imagethree);
                        $sql = "INSERT INTO tbl_ico_inisial() VALUES ('')";
               } 
/*teme img 3 end*/
     
    
    $from_data1 = $conn->real_escape_string ($_POST['title']);
    $from_data2 = $conn->real_escape_string ($_POST['email']);
    $from_data3 = $conn->real_escape_string ($_POST['country']);
    $from_data4 = $conn->real_escape_string ($_POST['chain']);
    $from_data5 = $conn->real_escape_string ($_POST['symbol']);
    $from_data6 = $conn->real_escape_string ($_POST['address']);
    $from_data7 = $conn->real_escape_string ($_POST['pre_ico_start']);
    $from_data8 = $conn->real_escape_string ($_POST['pre_ico_end']);
    $from_data9 = $conn->real_escape_string ($_POST['ico_start']);
    $from_data10 = $conn->real_escape_string ($_POST['ico_end']);
    $from_data11 = $conn->real_escape_string ($_POST['description']);
    $from_data12 = $conn->real_escape_string ($_POST['ico_links-0-website']);
    $from_data13 = $conn->real_escape_string ($_POST['ico_links-0-whitepaper']);
    $from_data14 = $conn->real_escape_string ($_POST['ico_links-0-telegram']);
    $from_data15 = $conn->real_escape_string ($_POST['ico_links-0-twitter']);
    $from_data16 = $conn->real_escape_string ($_POST['ico_links-0-bitcointalk']);
    $from_data17 = $conn->real_escape_string ($_POST['ico_links-0-github']);
    $from_data18 = $conn->real_escape_string ($_POST['ico_links-0-linkedin']);
    $from_data19 = $conn->real_escape_string ($_POST['ico_links-0-facebook']);
    $from_data20 = $conn->real_escape_string ($_POST['ico_links-0-bounty']);
    $from_data21 = $conn->real_escape_string ($_POST['ico_links-0-youtube']);
    $from_data22 = $conn->real_escape_string ($_POST['icofinance-0-token_supply']);
    $from_data23 = $conn->real_escape_string ($_POST['icofinance-0-token_for_sale']);
    $from_data24 = $conn->real_escape_string ($_POST['icofinance-0-token_total_soft_cap']);
    $from_data25 = $conn->real_escape_string ($_POST['icofinance-0-token_total_soft_cap_currency']);
    $from_data26 = $conn->real_escape_string ($_POST['icofinance-0-token_total_hard_cap']);
    $from_data27 = $conn->real_escape_string ($_POST['icofinance-0-token_total_hard_cap_currency']);
    $from_data28 = $conn->real_escape_string ($_POST['icofinance-0-token_price']);
    $from_data29 = $conn->real_escape_string ($_POST['icofinance-0-token_price_currency']);
    $from_data30 = $conn->real_escape_string ($_POST['icofinance-0-is_whitelist_required']);
    $from_data31 = $conn->real_escape_string ($_POST['icofinance-0-is_kyc_required']);
    $from_data32 = $conn->real_escape_string ($_POST['icofinance-0-accepted_currencies']);
    $from_data33 = $conn->real_escape_string ($_POST['icofinance-0-restricted_countries']);
    $from_data34 = $conn->real_escape_string ($_POST['icofinance-0-bonus']);
    $from_data35 = $conn->real_escape_string ($_POST['bounty-0-start']);
    $from_data36 = $conn->real_escape_string ($_POST['bounty-0-end']);
    $from_data37 = $conn->real_escape_string ($_POST['bounty-0-types']);
    $from_data38 = $conn->real_escape_string ($_POST['bounty-0-total_tokens']);
    $from_data39 = $conn->real_escape_string ($_POST['review_note']);
    $from_data40 = $conn->real_escape_string ($_POST['status']);
    $from_data41 = $conn->real_escape_string ($_POST['image']);
    $from_data42 = $conn->real_escape_string ($_POST['ico_real_links_telegram']);
    $from_data43 = $conn->real_escape_string ($_POST['ico_members-0-name']);
    $from_data44 = $conn->real_escape_string ($_POST['ico_members-0-role']);
    $from_data45 = $conn->real_escape_string ($_POST['ico_members-0-image']);
    $from_data46 = $conn->real_escape_string ($_POST['ico_members-0-linkedin_url']);
    $from_data47 = $conn->real_escape_string ($_POST['ico_members-0-twitter_url']);
    $from_data48 = $conn->real_escape_string ($_POST['ico_whitepaper_new']);



    $from_data49 = $conn->real_escape_string ($_POST['ico_members_tow_image']);




    $from_data50 = $conn->real_escape_string ($_POST['ico_members_tow_name']);
    $from_data51 = $conn->real_escape_string ($_POST['ico_members_tow_role']);
    $from_data52 = $conn->real_escape_string ($_POST['ico_members_tow_linkedin_url']);
    $from_data53 = $conn->real_escape_string ($_POST['ico_members_tow_twitter_url']);
    $from_data54 = $conn->real_escape_string ($_POST['ico_members_three_image']);
    $from_data55 = $conn->real_escape_string ($_POST['ico_members_three_name']);
    $from_data56 = $conn->real_escape_string ($_POST['ico_members_three_role']);
    $from_data57 = $conn->real_escape_string ($_POST['ico_members_three_linkedin_url']);
    $from_data58 = $conn->real_escape_string ($_POST['ico_members_three_twitter_url']);
    $from_data59 = $conn->real_escape_string ($_POST['milestones_first_name']);
    $from_data60 = $conn->real_escape_string ($_POST['milestones_first_description']);
    $from_data61 = $conn->real_escape_string ($_POST['milestones_tow_name']);
    $from_data62 = $conn->real_escape_string ($_POST['milestones_tow_description']);
    $from_data63 = $conn->real_escape_string ($_POST['milestones_three_name']);
    $from_data64 = $conn->real_escape_string ($_POST['milestones_three_description']);
    $from_data65 = $conn->real_escape_string ($_POST['ico_type']);





  $sql = "INSERT INTO  tbl_ico_inisial (profile_uid,name, email, stutas, image, country, chain, symbol, address, pre_ico_start, pre_ico_end, ico_start, ico_end, description, ico_links_website, ico_links_whitepaper, ico_links_telegram, ico_links_twitter, ico_links_bitcointalk, ico_links_github, ico_links_linkedin, ico_links_facebook, ico_links_bounty, ico_links_youtube, icofinance_token_supply, icofinance_token_for_sale, icofinance_token_total_soft_cap, icofinance_token_total_soft_cap_currency, icofinance_token_total_hard_cap, icofinance_token_total_hard_cap_currency, icofinance_token_price, icofinance_token_price_currency, icofinance_is_whitelist_required, icofinance_is_kyc_required, icofinance_accepted_currencies, icofinance_restricted_countries, icofinance_bonus, bounty_start, bounty_end, bounty_types, bounty_total_tokens, review_note, ico_real_links_telegram, ico_members_name,  ico_members_role, ico_members_linkedin_url, ico_members_twitter_url, ico_members_tow_name, ico_members_tow_role, ico_members_tow_linkedin_url, ico_members_tow_twitter_url, ico_members_three_name, ico_members_three_role, ico_members_three_linkedin_url, ico_members_three_twitter_url, milestones_first_name, milestones_first_description, milestones_tow_name, milestones_tow_description,  milestones_three_name, milestones_three_description, ico_members_tow_image,ico_members_image,ico_members_three_image, ico_whitepaper_new, ico_type) VALUES ('$uni_id','$from_data1', '$from_data2',  '$from_data40', '$unique_image',  '$from_data3','$from_data4','$from_data5', '$from_data6', '$from_data7', '$from_data8', '$from_data9', '$from_data10', '$from_data11', '$from_data12','$from_data13', '$from_data14', '$from_data15','$from_data16', '$from_data17', '$from_data18', '$from_data19','$from_data20', '$from_data21', '$from_data22','$from_data23', '$from_data24', '$from_data25', '$from_data26','$from_data27', '$from_data28', '$from_data29','$from_data30', '$from_data31', '$from_data32', '$from_data33','$from_data34', '$from_data35', '$from_data36','$from_data37', '$from_data38', '$from_data39','$from_data42','$from_data43','$from_data44','$from_data46','$from_data47','$from_data50','$from_data51','$from_data52','$from_data53','$from_data55','$from_data56','$from_data57','$from_data58','$from_data59','$from_data60','$from_data61','$from_data62','$from_data63','$from_data64', '$unique_imaget', '$unique_imageone', '$unique_imagethree','$from_data48','$from_data65')";
  if ($conn->query($sql) === TRUE) 
  {    
      
      header("location: index.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

