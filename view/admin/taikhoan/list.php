<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">TÀI KHOẢN</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Danh Sách Tài Khoản</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table border="1" id="example2" class="table table-bordered table-hover">
                <!-- <thead> -->
                <tr>
                <th></th>
                
                <th>ID NGƯỜI DÙNG</th>
                <th>HỌ TÊN</th>
                <th>TÊN NGƯỜI DÙNG</th>
                <th>GMAIL</th>
                <th>MẬT KHẨU</th>
                <th>SĐT</th>
                <th>ẢNH</th>
                <th>NGÀY SINH</th>
                <th>ĐỊA CHỈ</th>
                <th>GIỚI TÍNH</th>
                <th>CHỨC VỤ</th>
                <th>TRẠNG THÁI</th>
               
            </tr>
            <?php
             foreach ($listtaikhoan as $tb_tai_khoan) {
                extract($tb_tai_khoan);
                $suatk="index.php?act=suatk&id_nguoidung=".$id_nguoidung;
                $xoatk="index.php?act=xoatk&id_nguoidung=".$id_nguoidung;
                $hinhpath="../upload/".$anh;
                if (is_file($hinhpath)) {
                    $anh="<img src='".$hinhpath."'height='80'>";
                }
                else {
                    $anh="no photo";
                }
                echo'
                <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id_nguoidung.'</td>
                <td>'.$name.'</td>   
                <td>'.$ten_nguoidung.'</td>
                <td>'.$gmail.'</td>
                <td>'.$mat_khau.'</td>
                <td>'.$sdt.'</td>
                <td>'.$anh.'</td>
                <td>'.$ngay_sinh.'</td>
                <td>'.$dia_chi.'</td>
                <td>'.$gioi_tinh.'</td>
                <td>'.$role.'</td>
                <td>'.$trang_thai.'</td>
                
               
            </tr>';
             }
            //  <th></th>
            //  <td><a href="'.$suatk.'"><input type="button" value="Sửa"><a href="'.$xoatk.'"><input type="button" value="Xóa"></td>
            ?>


              </table>

              <div class="mr100 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="index.php?act=addtk"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
              </div>
            </div>

            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->