<?php
  session_start();
  $data = $_POST['token'];
   
   $_SESSION["user"]['info']=$data; 
    
 ?>