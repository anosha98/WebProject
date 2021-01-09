<?php

include('conection.php');
   $row_id=$_GET['id'];
   $delete_query="DELETE FROM products where productID ='".$row_id."'";
  
   if($db->query($delete_query))
   {
   
   header('Location: details.php?message="deleted successfully"');
    
   }
   else
   {

     
   header('Location: details.php?message="Some thing went wrong"');
   }
 ?>