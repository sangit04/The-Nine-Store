<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">LIÊN HỆ</h1>
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
              <h3 class="card-title">Danh Sách Liên Hệ</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table border="1" id="example2" class="table table-bordered table-hover">
                <!-- <thead> -->
                <tr>
                <th></th>
                <th>MÃ LOẠI</th>
                <th>ID NGƯỜI DÙNG</th>
                <th>NỘI DUNG</th>
                <th>TRẠNG THÁI</th>
                <th></th>
            </tr>
            <?php
             foreach ($listlienhe as $tb_lien_he) {
                extract($tb_lien_he);
                $sualh="index.php?act=sualh&id_lh=".$id_lh;
                $xoalh="index.php?act=xoalh&id_lh=".$id_lh;
                echo'
                <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id_lh.'</td>
                <td>'.$id_nguoi_dung.'</td>
                <td>'.$noi_dung.'</td>
                <td>'.$trang_thai.'</td>
                <td><a href="'.$sualh.'"><input type="button" value="Sửa"><a href="'.$xoalh.'"><input type="button" value="Xóa"></td>
            </tr>';
             }
            ?>


              </table>

              <div class="mr100 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="index.php?act=addlh"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
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