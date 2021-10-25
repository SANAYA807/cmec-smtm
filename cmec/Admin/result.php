<?php include 'header.php'; 
include '../db.php';
$result = mysqli_query($con, "SELECT * FROM results");
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
                                            <header>Result</header>
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
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="adhaar-number" placeholder="Roll Number">
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="status" class="form-control">
                                                        <option value="Pass">Pass</option>
                                                        <option value="Fail">Fail</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="type" class="form-control">
                                                        <option value="Certificate">Certificate</option>
                                                        <option value="First Year">First Year</option>
                                                        <option value="Secondd Year">Second Year</option>
                                                        <option value="Thirdd Year">Third Year</option>
                                                        <option value="Fourth Year">Fourth Year</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="file" class="form-control" name="result">
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-success" name="create-result-btn">Create Result</button>
                                                </div>
                                            </div>
                                            </form>
                                           <div class="table-scrollable">
                                                <table
                                                    class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                    id="example4">
                                                    <thead>
                                                        <tr>
                                                            <th> Result ID </th>
                                                            <th> Roll Number </th>
                                                            <th> Status</th>
                                                            <th> Result</th>
                                                            <th> Date </th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        while($row=mysqli_fetch_array($result))
                                                        { ?>
                                                        <tr class="odd gradeX">
                                                            <td class="left"><?php echo "#".$row['id'] ?></td>
                                                            <td class="left"><?php echo $row['adhaar_number']; ?></td>
                                                            <td class="left"><?php echo $row['status']; ?></td>
                                                            <td class="left"><a href="result-image/<?php echo $row['image']; ?>" download>Download Result</a></td>
                                                            <td class="left"><?php echo date_format(date_create($row['created_date']),"d-m-Y")  ?></td>
                                                            <td><a class="btn btn-danger" href="delete-result.php?id=<?php echo $row['id'];  ?>">Delete</a></td>
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

if(isset($_POST['create-result-btn']))
{
    include '../db.php';
    $adhaar_number = $_POST['adhaar-number'];
    $status = $_POST['status'];
    $result_type = $_POST['type'];
    $filename = $_FILES["result"]["name"]; 
    $tempname = $_FILES["result"]["tmp_name"];     
    $folder = "result-image/".$filename;
    $image_added = move_uploaded_file($tempname, $folder);
    if($image_added)
    {
        $sql = "INSERT INTO results (adhaar_number, status, image, result_type) VALUES ('$adhaar_number', '$status', '$filename', '$result_type')"; 
        $run = mysqli_query($con, $sql); 
        if($run)
        {
            echo "<script>alert('Result Created !');</script>";
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