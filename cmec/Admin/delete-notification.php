<?php 
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    include '../db.php';
   $result =  mysqli_query($con, "DELETE FROM notifications WHERE id='$id'");
   if($result)
   {
        echo "<script>alert('Notification Deleted !');</script>";
       header("location:news-notification.php");
   }
   else
   {
        echo "<script>alert('Failed !');</script>";
        header("location:news-notification.php");
   }
}
?>