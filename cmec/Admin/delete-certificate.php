<?php 
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    include '../db.php';
   $result =  mysqli_query($con, "DELETE FROM certificat WHERE id='$id'");
   if($result)
   {
        echo "<script>alert('Result Deleted !');</script>";
       header("location:add_certificat.php");
   }
   else
   {
        echo "<script>alert('Failed !');</script>";
       header("location:add_certificate.php");
   }
}
?>




