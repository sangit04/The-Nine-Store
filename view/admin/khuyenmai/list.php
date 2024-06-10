<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">KHUYẾN MÃI</h1>
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
              <h3 class="card-title">Danh Sách Khuyến Mãi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table border="1" id="example2" class="table table-bordered table-hover">
                <!-- <thead> -->
                <tr>
                <th>ID Khuyến Mãi</th>
                <th>ID Sản Phẩm</th>
                <th>MÃ Khuyến mãi</th>
                <th>Phần Trăm Khuyến Mãi</th>
                <th>Ngày Bắt Đầu Khuyến Mãi</th>
                <th>Ngày Kết Thúc Khuyến Mãi</th>
                <th>TRẠNG THÁI</th>
                <th></th>
            </tr>
            <?php
             foreach ($listkhuyenmai as $tb_khuyen_mai) {
                extract($tb_khuyen_mai);
                $suakm="index.php?act=suakm&id_km=".$id_km;
                $xoakm="index.php?act=xoakm&id_km=".$id_km;
                echo'
                <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id_km.'</td>
                <td>'.$id_sp.'</td>
                <td>'.$pt_km.'</td>
                <td>'.$ngay_bd.'</td>
                <td>'.$ngay_kt.'</td>
                <td>'.$trang_thai.'</td>
                <td><a href="'.$suakm.'"><input type="button" value="Sửa"><a href="'.$xoakm.'"><input type="button" value="Xóa"></td>
            </tr>';
             }
            ?>


              </table>

              <div class="mr100 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="index.php?act=addkm"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
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