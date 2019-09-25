<?php
session_start();  
include("./library/core_class.php"); 

  if(isset($_POST['type'])&& $_POST['type']=="logout"){
       $response=$coreClass->logout();
       echo json_encode($response);
   }


 ?>