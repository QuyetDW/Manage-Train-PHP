 <!--Server side code to handle passenger sign up-->
 <?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['Create_Profile']))
		{
            $pass_id = $_GET['pass_id'];            
			$pass_fname=$_POST['pass_fname'];
			#$mname=$_POST['mname'];
			$pass_lname=$_POST['pass_lname'];
			$pass_phone=$_POST['pass_phone'];
			$pass_addr=$_POST['pass_addr'];
			$pass_uname=$_POST['pass_uname'];
			$pass_email=$_POST['pass_email'];
			//$pass_pwd=sha1(md5($_POST['pass_pwd']));
            //sql to insert captured values
			$query="update orrs_passenger  set  pass_fname=?, pass_lname=?, pass_phone=?, pass_addr=?, pass_uname=?, pass_email=? where pass_id = ?";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('ssssssi',$pass_fname, $pass_lname, $pass_phone, $pass_addr, $pass_uname, $pass_email, $pass_id);
			$stmt->execute();
			/*
			*Use Sweet Alerts Instead Of This Fucked Up Javascript Alerts
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/ 
			//declare a varible which will be passed to alert function
			if($stmt)
			{
				$success = "Thông tin cá nhân đã được cập nhập!";
			}
			else {
				$err = "Có lỗi. Vui lòng thử lại";
			}
			
			
		}
?>
<!--End Server Side-->

<!DOCTYPE html>
<html lang="en">
<!--Head-->
<?php include('assets/inc/head.php');?>
<!--End Head-->
  <body>
    <div class="be-wrapper be-fixed-sidebar ">
    <!--Navigation Bar-->
      <?php include('assets/inc/navbar.php');?>
      <!--End Navigation Bar-->

      <!--Sidebar-->
      <?php include('assets/inc/sidebar.php');?>
      <!--End Sidebar-->
      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">Cập nhập khách hàng</h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item"><a href="pass-dashboard.php">Trang chủ</a></li>
              <li class="breadcrumb-item"><a href="#">Hành khách</a></li>
              <li class="breadcrumb-item active">Quản lý</li>
            </ol>
          </nav>
        </div>
            <?php if(isset($success)) {?>
                                <!--This code for injecting an alert-->
                <script>
                            setTimeout(function () 
                            { 
                                swal("Success!","<?php echo $succ;?>!","success");
                            },
                                100);
                </script>

        <?php } ?>
        <?php if(isset($err)) {?>
        <!--This code for injecting an alert-->
                <script>
                            setTimeout(function () 
                            { 
                                swal("Failed!","<?php echo $err;?>!","Failed");
                            },
                                100);
                </script>

        <?php } ?>
        <div class="main-content container-fluid">
       
       <!--passenger-->
       <?php
            $aid=$_GET['pass_id'];
            $ret="select * from orrs_passenger where pass_id=?";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('i',$aid);
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
            //$cnt=1;
            while($row=$res->fetch_object())
        {
        ?>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-success">
                <div class="card-header card-header-divider">Cập nhập thông tin khách<span class="card-subtitle">Hãy điền đầy đủ thông tin</span></div>
                <div class="card-body">
                  <form method ="POST">
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3"> Họ</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="pass_fname" value = "<?php echo $row->pass_lname;?>"  id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Tên</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="pass_lname"  value = "<?php  echo $row->pass_lname;?>" id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Số điện thoại</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="pass_phone" value ="<?php echo $row->pass_phone;?>"  id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Địa chỉ</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="pass_addr" value ="<?php echo$row->pass_addr;?>"  id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Email</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="pass_email" value = "<?php echo $row->pass_email;?>"  id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Tên đăng nhập</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="pass_uname" value = "<?php echo $row->pass_uname;?>"  id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-right">
                          <input class="btn btn-space btn-success" value ="Cập nhập " name = "Create_Profile" type="submit">
                          <button class="btn btn-space btn-danger">Hủy</button>
                        </p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
       
        <?php }?>
        
        </div>
        <!--footer-->
        <?php include('assets/inc/footer.php');?>
        <!--EndFooter-->
      </div>

    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
    <script src="assets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
    <script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap-slider/bootstrap-slider.min.js" type="text/javascript"></script>
    <script src="assets/lib/bs-custom-file-input/bs-custom-file-input.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.formElements();
      });
    </script>
  </body>

</html>