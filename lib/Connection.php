<?php

  // $servername = "localhost";
  //  $username = "cryptomarket";
  //  $password = "123456";
  //  $dbname = "cryptomarketcloud";


   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "cryptomarketcloud";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection    
  if ($conn->connect_error) 
  {
      die("Connection went wrong: " . $conn->connect_error); 
  } 

  ?>