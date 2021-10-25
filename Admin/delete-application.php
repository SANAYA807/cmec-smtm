<?php

    if(isset($_GET['id']))
    {
        include '../db.php';
        $id = $_GET['id'];
        $run = mysqli_query($con, "DELETE FROM `applicants` WHERE id='$id'");
        if($run)
        {
            echo "<script>alert('Application Deleted !');</script>";
            header("location:application.php");
        }
        else
        {
                echo "<script>alert('Failed !');</script>";
                header("location:application.php");
        }
    }
?>