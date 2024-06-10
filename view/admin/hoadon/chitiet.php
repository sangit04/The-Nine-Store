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
                <th>TÊN SP</th>
                <th>ẢNH SP</th>
                <th>GIÁ</th>
                <th>SỐ LƯỢNG</th>
                <th>TRẠNG THÁI</th>
            </tr>
            <?php
             foreach ($chitiet  as $ct ) {
                extract($ct );
                // $suahd="index.php?act=suahd&id_hoa_don=".$id_hd;
                // $xoahd="index.php?act=xoahd&id_hoa_don=".$id_hd;
                echo'
                <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$ten_sp.'</td>
                <td><img src="'.$anh_sp.'" width="50px"></td>
                <td>'.$so_luong_mua.'</td>
                <td>'.$gia_sp.'</td>
               
                <td>'.$trangthainame.'</td>
               
            </tr>';
             }
            ?>


              </table>

              <div class="mr100 ">
                <a href="index.php?act=listhd"> <input class="mr20" type="button" value="Quay Lại"></a>
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