<?php
    require_once('includes/db.php');
   
    if(!isset($_GET['id'])){
        header("Location: index.php");
    }
   
   $id = $_GET['id'];
   $query = "DELETE FROM notes WHERE id = '". $id . "' LIMIT 1";
    
   if(mysqli_query($conn,$query)){
    header("Location: index.php");
   }
?>