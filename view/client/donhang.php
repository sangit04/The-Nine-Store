<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
         
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
              <h3 class="card-title">Danh Sách Đơn Hàng</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table border="1"   id="example2" class="table table-bordered table-hover">
                <!-- <thead> -->
                <tr>
               
                <th>MÃ LOẠI</th>
                <th>ID NGƯỜI DÙNG</th>
                <th>NGÀY ĐẶT HÀNG</th>
                <th>TỔNG GIÁ</th>
                <th>ĐỊA CHỈ</th>
                <th>GHI CHÚ</th>
                <th>TRẠNG THÁI</th>
                <th>CHI TIẾT</th>
            </tr>
            <?php
             foreach ($listBill  as $tb_hoa_don ) {
                extract($tb_hoa_don );
             
                $trangthainame = "";
                switch ($trang_thai) {
                    case '-1':
                        $trangthainame = "đã hủy";
                        break;
                    case '0':
                        $trangthainame = "chờ xác nhận";
                        break;
                    case '1':
                        $trangthainame = "đã xác nhận";
                        break;
                    case '2':
                        $trangthainame = "đang giao hàng";
                        break;
                    case '3':
                        $trangthainame = "đã nhận hàng";
                        break;
                }
                if($trang_thai == 0 ){
                  echo'
                  <tr>
                 
                  <td>'.$id_hoa_don.'</td>
                  <td>'.$id_nguoidung.'</td>
                  <td>'.$ngay_dat_don.'</td>
                  <td>'.$tong_gia.'</td>
                  <td>'.$dia_chi.'</td>
                  <td>'.$ghi_chu.'</td>
                  <td>
                  <div class="d-flex flex-column align-center">
                    <a href="">
                    '.$trangthainame.'
                    </a>
                    <a class="btn btn-danger btn-sm" style="background-color: gray;"  href="index.php?act=trangthaihuy&id='.$id_hoa_don.'">
                    Hủy
                  </a>
                  </div>
                  </td>
                  <td><a href="index.php?act=chitiet_hoadon&id='.$id_hoa_don.'">xem chi tiết</a></td>
              </tr>';
                }else{
                  echo'
                  <tr>
                 
                  <td>'.$id_hoa_don.'</td>
                  <td>'.$id_nguoidung.'</td>
                  <td>'.$ngay_dat_don.'</td>
                  <td>'.$tong_gia.'</td>
                  <td>'.$dia_chi.'</td>
                  <td>'.$ghi_chu.'</td>
                  <td><a href="index.php?act=trangthaihd&id='.$trang_thai.'">'.$trangthainame.'</a></td>
                  <td><a href="index.php?act=chitiet_hoadon&id='.$id_hoa_don.'">xem chi tiết</a></td>
                  
              </tr>';
                }
             }
            ?>


              </table>

              <!-- <div class="mr100 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="#"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
              </div> -->
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