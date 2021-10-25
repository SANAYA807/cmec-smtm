<?php include 'header.php'; 
include '../db.php';
$result = mysqli_query($con, "SELECT * FROM notifications");
?>	
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row" style="margin-top:2%">
            <div class="col-md-12">
                <div class="tabbable-line">
                    <div class="tab-content">
                        <div class="tab-pane active fontawesome-demo" id="tab1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-box">
                                        <div class="card-head">
                                            <header>News and Notification</header>
                                            <div class="tools">
                                                <a class="fa fa-repeat btn-color box-refresh"
                                                    href="javascript:;"></a>
                                                <a class="t-collapse btn-color fa fa-chevron-down"
                                                    href="javascript:;"></a>
                                                <a class="t-close btn-color fa fa-times"
                                                    href="javascript:;"></a>
                                            </div>
                                        </div>
                                        <div class="card-body ">
                                            <form method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="title" placeholder="Notification Title">
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="file" class="form-control" name="image">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea class="form-control" rows="4" name="description">

                                                    </textarea>
                                                </div>
                                                <div class="col-md-12">
                                                   <button type="submit" class="btn btn-primary" name="create-notification">Create News</button>
                                                </div>
                                           </div>
                                            </form>
                                           <div class="table-scrollable">
                                                <table
                                                    class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                    id="example4">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th> Notification ID </th>
                                                            <th> Title </th>
                                                            <th> Desciption</th>
                                                            <th> Date </th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        while($row=mysqli_fetch_array($result))
                                                        { ?>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="notification-image/<?php echo $row['image']; ?>"
                                                                    alt="">
                                                            </td>
                                                            <td class="left"><?php echo "#".$row['id'] ?></td>
                                                            <td class="left"><?php echo $row['title']; ?></td>
                                                            <td class="left"><?php echo $row['descriptions'] ?></td>
                                                            <td class="left"><?php echo date_format(date_create($row['created_date']),"d-m-Y")  ?></td>
                                                            <td><a class="btn btn-danger" href="delete-notification.php?id=<?php echo $row['id'];  ?>">Delete</a></td>
                                                        </tr>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	<script src="../asset/plugins/jquery/jquery.min.js"></script>
	<script src="../asset/plugins/popper/popper.js"></script>
	<script src="../asset/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../asset/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="../asset/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../asset/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<script src="../asset/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="../asset/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
	<script src="../asset/js/pages/table/table_data.js"></script>
	<script src="../asset/js/app.js"></script>
	<script src="../asset/js/layout.js"></script>
	<script src="../asset/js/theme-color.js"></script>
	<script src="../asset/plugins/material/material.min.js"></script>
</body>
</html>

<?php 

if(isset($_POST['create-notification']))
{
    include '../db.php';
    $title = $_POST['title'];
    $descriptions = $_POST['description'];
    $filename = $_FILES["image"]["name"]; 
    $tempname = $_FILES["image"]["tmp_name"];     
    $folder = "notification-image/".$filename;
    $image_added = move_uploaded_file($tempname, $folder);
    if($image_added)
    {
        $sql = "INSERT INTO notifications (title, descriptions, image) VALUES ('$title', '$descriptions', '$filename')"; 
        $run = mysqli_query($con, $sql); 
        if($run)
        {
            echo "<script>alert('Notification Created !');</script>";
            echo "<meta http-equiv='refresh' content='0'>";
        }
        else
        {
            echo "<script>alert('Failed !');</script>";
        }
    }
    else
    {
        echo "<script>alert('Failed !');<script>";
    }

}

?>