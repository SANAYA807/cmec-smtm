<?php

    if(isset($_GET['id']))
    {
        include '../db.php';
        $id = $_GET['id'];
        $run = mysqli_query($con, "DELETE FROM `gallery` WHERE id='$id'");
        if($run)
        {
            echo "<script>alert('Image Deleted !');</script>";
            header("location:gallery.php");
        }
        else
        {
            echo "<script>alert('Failed !');</script>";
            header("location:gallery.php");
        }
    }
?>