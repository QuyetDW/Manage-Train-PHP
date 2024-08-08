<?php
    session_start();
    include('assets/inc/config.php');
    //date_default_timezone_set('Africa /Nairobi');
    include('assets/inc/checklogin.php');
    check_login();
    $aid=$_SESSION['admin_id'];
    if(isset($_POST['approve']))
    {
            $id = $_GET['pwd_id'];
            $status = $_POST['status'];
            //$route = $_POST['route'];
            //$current = $_POST['current'];
            //$destination = $_POST['destination'];
            //$time = $_POST['time'];
            //$number = $_POST['number'];
            //$fare = $_POST['fare'];
            //$passengers = $_POST['passengers'];
            //sql querry to post the entered information
            $query="update orrs_passwordresets set status = ? where pwd_id=?";
            $stmt = $mysqli->prepare($query);
            //bind this parameters
            $rc=$stmt->bind_param('si', $status, $id);
            $stmt->execute();
                if($stmt)
                {
                    $succ = "Mật khẩu mới đã được gửi vào Mail của bạn!";
                }
                else 
                {
                    $err = "Có lỗi. Vui lòng thử lại";
                }
            #echo"<script>alert('Your Profile Has Been Updated Successfully');</script>";
            }
?>
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
          <h2 class="page-head-title">Reset lại mật khẩu</h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item"><a href="pass-dashboard.php">Trang chủ</a></li>
              <li class="breadcrumb-item"><a href="#">Reset MK</a></li>
              <li class="breadcrumb-item active">Chấp nhận</li>
            </ol>
          </nav>
        </div>
            <?php if(isset($succ)) {?>
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
       <!--password reset instance-->
       <?php
            $aid=$_GET['pwd_id'];
            $ret="select * from orrs_passwordresets where pwd_id=?";
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
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Đồng ý yêu cầu đặt lại mật khẩu<span class="card-subtitle"> Vui lòng điền đầy đủ thông tin!</span></div>
                <div class="card-body">
                  <form method ="POST">
                   
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Email người dùng</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="passengers" value="<?php echo $row->email;?>"  id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Trạng thái</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="status"  id="inputText3" type="text">
                      </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <p class="text-right">
                          <input class="btn btn-space btn-primary" value ="Chấp nhận" name = "approve" type="submit">
                          <button class="btn btn-space btn-secondary">Hủy</button>
                        </p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
       
        <!--End password reset Instance-->
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