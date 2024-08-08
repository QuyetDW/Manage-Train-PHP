<div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Trang chủ</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li class=""><a href="pass-dashboard.php"><i class="icon mdi mdi-view-dashboard"></i><span>Trang chủ</span></a>
                  </li>
                    <?php
                      $aid=$_SESSION['pass_id'];//assaign session a varible [PASSENGER ID]
                      $ret="select * from orrs_passenger where pass_id=?";
                      $stmt= $mysqli->prepare($ret) ;
                      $stmt->bind_param('i',$aid);
                      $stmt->execute() ;//ok
                      $res=$stmt->get_result();
                      //$cnt=1;
                      while($row=$res->fetch_object())
                      {
                    ?>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span><?php echo $row->pass_uname;?></span></a>
                    <ul class="sub-menu">
                      <li><a href="pass-profile.php">Xem</a>
                      </li>
                      <li><a href="pass-profile-update.php">Cập nhập</a>
                      </li>
                      
                      <li><a href="pass-profile-avatar.php">Ảnh Avatar</a>
                      </li>
                      <li><a href="pass-profile-password.php">Đổi mật khẩu</a>
                      </li>
                      
                    </ul>
                  </li>
                    <?php }?>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-train"></i><span>Tàu</span></a>
                  
                    <ul class="sub-menu">
                       <li><a href="pass-all-available-trains.php">Danh sách tàu</a>
                       <li><a href="pass-search-available-trains.php">Tìm tàu</a>
                    </li>
                      
                    </ul>
                
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-briefcase-edit-outline"></i><span>Đặt vé</span></a>
                    <ul class="sub-menu">
                      <li><a href="pass-book-train.php">Tuyến đang chạy</a>
                      </li>
                      <li><a href="pass-cancel-train.php">Hủy vé</a>
                      </li>
                      
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-ticket-confirmation"></i><span>Vé tàu</span></a>
                    <ul class="sub-menu">
                    <li><a href="pass-train-checkout-ticket.php">Kiểm tra</a>
                      </li>
                      <li><a href="pass-confirm-ticket.php">Xác nhận thanh toán</a>
                      </li>
                      <li><a href="pass-print-ticket.php">Xuất vé</a>
                      </li>
                    </ul>
                  </li>                  
                  <li><a href="pass-logout.php "><i class="icon mdi mdi-exit-run"></i><span>Đăng xuất</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>