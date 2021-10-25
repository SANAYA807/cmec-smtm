<?php include 'header.php'; 
include '../db.php';
$result = mysqli_query($con, "SELECT * FROM applicants");

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
                                            <header>All Applicants List</header>
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
                                            <div class="table-scrollable">
                                                <table
                                                    class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                    id="example4">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>Application no.</th>
                                                            <th> Name </th>
                                                            <th> Contact </th>
                                                            <th> Gender </th>
                                                            <th> Course </th>
                                                            <th> Category </th>
                                                            <th> Date </th>
                                                            <th width="10%"> Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        while($row=mysqli_fetch_array($result))
                                                        { $count =1; ?>
                                                        <tr class="odd gradeX">
                                                            <td class="left"><?php echo $count; ?></td>
                                                            <td class="left"><?php echo "#".$row['id'] ?></td>
                                                            <td class="left"><?php echo $row['fname']." ".$row['mid_name']." ".$row['lname']; ?></td>
                                                            <td class="left"><?php echo $row['mobilenumber'] ?></td>
                                                            <td class="left"><?php echo $row['gender'] ?></td>
                                                            <td class="left"><?php echo $row['course'] ?></td>
                                                            <td class="left"><?php echo $row['category'] ?></td>
                                                            <td class="left"><?php echo date_format(date_create($row['created_date']),"d-m-Y")  ?></td>
                                                            <td>
                                                                <a href="application-details.php?id=<?php echo $row['id'] ?>"
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="delete-application.php?id=<?php echo $row['id'] ?>"><button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button></a>
                                                            </td>
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
