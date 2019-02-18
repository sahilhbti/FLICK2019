<?php 
session_start();
$sport_name = $_POST['name'];
//$x = $_SESSION["username1"];
if(!isset($_SESSION["username1"]))
{
   echo "Login First Then register";
}
else{
           if($sport_name=="Table_Tennis")
           {
              // echo "hello";
            header("Location: index.php");
           }
           else
           {
          header("Location: index.php");
           }
}
?>