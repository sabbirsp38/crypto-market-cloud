<?php
include '../lib/Connection.php';
    
       

if (!isset($_GET['$id']) || $_GET['$id']==NULL  ) {
  header("Location: 404.php") ;
   $id= $_GET['$id'];
}else{
   $id= $_GET['$id'];
}



 
  $sql = "INSERT INTO tbl_ico_paid (name, email, stutas, image, country, chain, symbol, address, pre_ico_start, pre_ico_end, ico_start, ico_end, description, ico_links_website, ico_links_whitepaper, ico_links_telegram, ico_links_twitter, ico_links_bitcointalk, ico_links_github, ico_links_linkedin, ico_links_facebook, ico_links_bounty, ico_links_youtube, icofinance_token_supply, icofinance_token_for_sale, icofinance_token_total_soft_cap, icofinance_token_total_soft_cap_currency, icofinance_token_total_hard_cap, icofinance_token_total_hard_cap_currency, icofinance_token_price, icofinance_token_price_currency, icofinance_is_whitelist_required, icofinance_is_kyc_required, icofinance_accepted_currencies, icofinance_restricted_countries, icofinance_bonus, bounty_start, bounty_end, bounty_types, bounty_total_tokens, review_note, ico_real_links_telegram, ico_members_name,  ico_members_role, ico_members_linkedin_url, ico_members_twitter_url, ico_members_tow_name, ico_members_tow_role, ico_members_tow_linkedin_url, ico_members_tow_twitter_url, ico_members_three_name, ico_members_three_role, ico_members_three_linkedin_url, ico_members_three_twitter_url, milestones_first_name, milestones_first_description, milestones_tow_name, milestones_tow_description,  milestones_three_name, milestones_three_description, ico_members_tow_image,ico_members_image,ico_members_three_image, ico_whitepaper_new, ico_type,profile_uid) SELECT name, email, stutas, image, country, chain, symbol, address, pre_ico_start, pre_ico_end, ico_start, ico_end, description, ico_links_website, ico_links_whitepaper, ico_links_telegram, ico_links_twitter, ico_links_bitcointalk, ico_links_github, ico_links_linkedin, ico_links_facebook, ico_links_bounty, ico_links_youtube, icofinance_token_supply, icofinance_token_for_sale, icofinance_token_total_soft_cap, icofinance_token_total_soft_cap_currency, icofinance_token_total_hard_cap, icofinance_token_total_hard_cap_currency, icofinance_token_price, icofinance_token_price_currency, icofinance_is_whitelist_required, icofinance_is_kyc_required, icofinance_accepted_currencies, icofinance_restricted_countries, icofinance_bonus, bounty_start, bounty_end, bounty_types, bounty_total_tokens, review_note, ico_real_links_telegram, ico_members_name,  ico_members_role, ico_members_linkedin_url, ico_members_twitter_url, ico_members_tow_name, ico_members_tow_role, ico_members_tow_linkedin_url, ico_members_tow_twitter_url, ico_members_three_name, ico_members_three_role, ico_members_three_linkedin_url, ico_members_three_twitter_url, milestones_first_name, milestones_first_description, milestones_tow_name, milestones_tow_description,  milestones_three_name, milestones_three_description, ico_members_tow_image,ico_members_image,ico_members_three_image,ico_whitepaper_new,  ico_type,profile_uid FROM  tbl_ico_inisial where id=$id" ;

    $sql2= "DELETE FROM tbl_ico_inisial where id=$id" ;

  if ($conn->query($sql) === TRUE) 
  {    
      
     // header("location: icolistmp.php");
  }
  if ($conn->query($sql2) === TRUE) 
  {    
      
      header("location: icolist.php");
  }

  
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
      
  }
  $conn->close();  
?>

