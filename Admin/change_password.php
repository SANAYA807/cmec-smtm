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
                                            <header>Change Password</header>
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
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" name="username" placeholder="User Name">
                                                </div>
                                                
                                               <div class="col-md-12">
                                                    <input type="text" class="form-control" name="password" placeholder="Password">
                                                </div>
												
												
                                               
                                                <div class="col-md-4">
                                                    <button class="btn btn-success" name="create-result-btn">Save</button>
                                                </div>
                                            </div>
                                            </form>
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
    $username = $_POST['username'];
    $password = md5($_POST['password']);
   

    if($username!="" and $password!="")
    {
        
		
		$sql = "UPDATE admin SET username='$username',password='$password' WHERE id=1";
		
        $run = mysqli_query($con, $sql); 
        if($run)
        {
            echo "<script>alert('Change Successfully!');</script>";
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