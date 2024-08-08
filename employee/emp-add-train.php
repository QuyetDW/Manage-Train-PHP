<?php
    session_start();
    include('assets/inc/config.php');
    //date_default_timezone_set('Africa /Nairobi');
    include('assets/inc/checklogin.php');
    check_login();
    $aid=$_SESSION['emp_id'];
    if(isset($_POST['add_train']))
    {

            $name = $_POST['name'];
            $route = $_POST['route'];
            $current = $_POST['current'];
            $destination = $_POST['destination'];
            $time = $_POST['time'];
            $number = $_POST['number'];
            $fare = $_POST['fare'];
            $passengers = $_POST['passengers'];
            //sql querry to post the entered information
            $query="insert into orrs_train (name, route, current, destination, time, number, fare, passengers) values(?,?,?,?,?,?,?,?)";
            $stmt = $mysqli->prepare($query);
            //bind this parameters
            $rc=$stmt->bind_param('ssssssss', $name, $route, $current, $destination, $time, $number, $fare, $passengers);
            $stmt->execute();
                if($stmt)
                {
                    $succ = "Thêm mới tàu thành công!";
                }
                else 
                {
                    $err = "Có lỗi. vui lòng thử lại!";
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
          <h2 class="page-head-title">Thêm tàu</h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item"><a href="pass-dashboard.php">Trang chủ</a></li>
              <li class="breadcrumb-item"><a href="#">Tàu</a></li>
              <li class="breadcrumb-item active">Thêm tàu</li>
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
       <!--Train Details forms-->
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-success">
                <div class="card-header card-header-divider">Thêm mới tàu<span class="card-subtitle"> Hãy điền đầy đủ thông tin</span></div>
                <div class="card-body">
                  <form method ="POST">
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3"> Tên tàu</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="name" id="inputText3" type="text" placeholder="Tên tàu">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3"> Số hiệu tàu</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="number" id="inputText3" type="text" placeholder="Số hiệu tàu">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Tuyến</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="route"  id="inputText3" type="text" placeholder="[Ga đi] - [Ga đến]">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Ga đi</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="current"  id="inputText3" type="text" placeholder="Ga đi">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Ga đến</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="destination"  id="inputText3" type="text" placeholder="Ga đến">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Thời gian</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="time" id="inputText3" type="text" placeholder="Thời gian khởi hành">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Tổng hành khách</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="passengers"  id="inputText3" type="text" placeholder="Số lượng hành khách">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Giá vé</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="fare"  id="inputText3" type="text" placeholder="$">
                      </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <p class="text-right">
                          <input class="btn btn-space btn-success" value ="Thêm mới" name = "add_train" type="submit">
                          <button class="btn btn-space btn-danger">Hủy</button>
                        </p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
       
        <!--End Train Instance-->
        
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