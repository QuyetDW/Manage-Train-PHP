<div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Trang chủ</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li class=""><a href="emp-dashboard.php"><i class="icon mdi mdi-view-dashboard"></i><span>Trang chủ</span></a>
                  </li>
                    <?php
                      $aid=$_SESSION['emp_id'];//assaign session a varible [PASSENGER ID]
                      $ret="select * from orrs_employee where emp_id=?";
                      $stmt= $mysqli->prepare($ret) ;
                      $stmt->bind_param('i',$aid);
                      $stmt->execute() ;//ok
                      $res=$stmt->get_result();
                      //$cnt=1;
                      while($row=$res->fetch_object())
                      {
                    ?>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>Nhân viên: <?php echo $row->emp_uname;?></span></a>
                    <ul class="sub-menu">
                      <li><a href="emp-profile.php">Xem</a>
                      </li>
                      <li><a href="emp-profile-update.php">Cập nhập</a>
                      </li>
                      
                      <li><a href="emp-profile-avatar.php">Ảnh avatar</a>
                      </li>
                      <li><a href="emp-profile-password.php">Đổi mật khẩu</a>
                      </li>
                      
                    </ul>
                  </li>
                    <?php }?>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-train"></i><span>Tàu</span></a>
                  
                    <ul class="sub-menu">
                       <li><a href="emp-add-train.php">Thêm tàu</a>
                       <li><a href="emp-manage-train.php">Quản lý tàu</a>
                    </li>
                      
                    </ul>
                
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-briefcase-edit-outline"></i><span>Khách hàng</span></a>
                    <ul class="sub-menu">
                      <li><a href="emp-add-passenger.php">Thêm mới</a>
                      </li>
                      <li><a href="emp-manage-passengers.php">Quản lý</a>
                      </li>
                      
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-ticket-confirmation"></i><span>Vé tàu</span></a>
                    <ul class="sub-menu">
                      <li><a href="emp-approved-tickets.php"><span class="badge badge-success float-right">Đã duyệt</span>Xem</a>
                      <li><a href="emp-pending-tickets.php"><span class="badge badge-info float-right">Chờ duyệt</span>Xem</a>
                      <li><a href="emp-tickets.php">Quản lý</a>
                      </li>
                    </ul>
                  </li>                  
                  <li><a href="emp-logout.php "><i class="icon mdi mdi-exit-run"></i><span>Đăng xuất</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>