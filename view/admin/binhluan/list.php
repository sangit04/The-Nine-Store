<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">BÌNH LUẬN</h1>
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
              <h3 class="card-title">Danh Sách Bình Luận</h3>
            </div>
           
            <div class="card-body">
               <!-- /.card-header -->
            <!-- <input type="text" name="kyw">
            <select name="id_dm">
                <option value="0" selected>Tất cả</option>
                <?php 
                    // foreach ($listdanhmuc as $tb_danhmuc) {
                    //    extract($tb_danhmuc);
                    //    echo '<option value="'.$id_dm.'">'.$ten_danh_muc.'</option>';
                    // }
                    
                    ?>
                </select>
                <input type="submit" name="listok" value="GO"> -->
              <table border="1" id="example2" class="table table-bordered table-hover">
                <!-- <thead> -->
                <tr>
                <th></th>
                <th>ID BÌNH LUẬN</th>
                <th>ID USER</th>
                <th>ID PRO</th>
                <th>NỘI DUNG</th>
                <th>NGÀY BÌNH LUẬN</th>
                <th>TRẠNG THÁI</th>
                
            </tr>
            <?php
             foreach ($dsbl as $tb_binh_luan) {
                extract($tb_binh_luan);
              
                echo'
                <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id_binhluan.'</td>
                <td>'.$id_nguoidung.'</td>
                <td>'.$id_pro.'</td>
                <td>'.$noi_dung.'</td>
                <td>'.$ngay_binh_luan.'</td>
                <td>'.$trang_thai.'</td>
                
            </tr>';
             }
            ?>


              </table>

              <div class="mr100 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <!-- <a href="index.php?act=adddm"> <input class="mr20" type="button" value="NHẬP THÊM"></a> -->
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