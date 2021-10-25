<?php include 'header.php'; 
include '../db.php';
$result = mysqli_query($con, "SELECT * FROM gallery");
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
                                            <header>Gallery</header>
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
                                                    <input type="text" class="form-control" name="title" placeholder="Title">
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="file" class="form-control" name="image">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                   <button type="submit" class="btn btn-primary" name="create-gallery">Add</button>
                                                </div>
                                           </div>
                                            </form>
                                           <div class="table-scrollable">
                                                <table
                                                    class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                    id="example4">
                                                    <thead>
                                                        <tr>
                                                            <th> Sr. No.</th>
                                                            <th> Title </th>
                                                            <th> Image</th>
                                                            <th> Date </th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        while($row=mysqli_fetch_array($result))
                                                        { $count =1; ?>
                                                        <tr class="odd gradeX">
                                                            <td class="left"><?php echo $count;  ?></td>
                                                            <td class="left"><?php echo $row['title'] ?></td>
                                                            <td class="patient-img">
                                                                <img src="gallery-image/<?php echo $row['image']; ?>"
                                                                    alt="">
                                                            </td>
                                                            <td class="left"><?php echo date_format(date_create($row['created_date']),"d-m-Y")  ?></td>
                                                            <td><a class="btn btn-danger" href="delete-gallery.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                                                        </tr>
                                                        <?php
                                                       $count++; }
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

if(isset($_POST['create-gallery']))
{
    include '../db.php';
    $title = $_POST['title'];
    $filename = $_FILES["image"]["name"]; 
    $tempname = $_FILES["image"]["tmp_name"];     
    $folder = "gallery-image/".$filename;
    $image_added = move_uploaded_file($tempname, $folder);
    if($image_added)
    {
        $sql = "INSERT INTO gallery (title, image) VALUES ('$title', '$filename')"; 
        $run = mysqli_query($con, $sql); 
        if($run)
        {
            echo "<script>alert('Image Added in Gallery !');</script>";
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
