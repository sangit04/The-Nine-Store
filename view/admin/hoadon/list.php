<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">ĐƠN HÀNG</h1>
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
              <table border="1" id="example2" class="table table-bordered table-hover">
                <!-- <thead> -->
                <tr>
                <th></th>
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
             foreach ($listhd  as $tb_hoa_don ) {
                extract($tb_hoa_don );
                $suahd="index.php?act=suahd&id_hoa_don=".$id_hoa_don;
                // $xoahd="index.php?act=xoahd&id_hoa_don=".$id_hd;
                echo'
                <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id_hoa_don.'</td>
                <td>'.$id_nguoidung.'</td>
                <td>'.$ngay_dat_don.'</td>
                <td>'.$tong_gia.'</td>
                <td>'.$dia_chi.'</td>
                <td>'.$ghi_chu.'</td>
                
                <td><a href="'.$suahd.'">Cap nhat</a></td>
                <td><a href="index.php?act=chitiet_hoadon&id='.$id_hoa_don.'">xem chi tiết</a></td>
            </tr>';
             }
            ?>


              </table>

              <div class="mr100 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="index.php?act=adddm"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
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