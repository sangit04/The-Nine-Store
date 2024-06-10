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
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card ">
            <div class="card-header">
              <h3 class="card-title">Thêm Mã Khuyến mãi</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form action="index.php?act=addkm" method="POST">
              <div class="card-body">
                <!-- <div class="form-group">
                
                  <label> ID Khuyến Mãi </label> <br>
                  <input type="text" class="form-control" name="id_km" placeholder="nhập vào id khuyến mãi...">
                </div> -->
                <div class="form-group">
                  <label> ID Sản Phẩm </label> <br>
                  <input type="text" class="form-control" name="id_sp" placeholder="nhập vào id sản phẩm...">
                </div>
                <div class="form-group">
                  <label>Mã Khuyến Mãi </label> <br>
                  <input type="text" class="form-control" name="ma_km" placeholder="nhập vào mã khuyến mãi...">
                </div>
                <div class="form-group">
                  <label>Phần Trăm Khuyến Mãi </label> <br>
                  <input type="text" class="form-control" name="pt_km" placeholder="nhập vào phần trăm khuyến mãi...">
                </div>
                <div class="form-group">
                  <label>Ngày Bắt Đầu</label> <br>
                  <input type="datetime-local" class="form-control" name="ngay_bd"
                    placeholder="nhập ngày bắt đầu khuyến mãi...">
                </div>
                <div class="form-group">
                  <label>Ngày Kết Thúc</label> <br>
                  <input type="datetime-local" class="form-control" name="ngay_kt"
                    placeholder="nhập ngày kết thúc khuyến mãi...">
                </div>
                <div class="form-group">
                  <form>
                    <label>Trạng thái </label> <br>
                    <select id="" name="trang_thai">
                      <div class="form-control">
                        <option value="Còn hạn">Còn hạn</option>
                        <option value="Hết hạn">Hết hạn</option>
                      </div>
                      <!-- <input type="text" class="form-control" name="trang_thai" placeholder="nhập trạng thái..."> -->
                    </select>
                  </form>
                </div>
                <div class="row mb10 ">
                    <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
                    <input class="mr20" type="reset" value="NHẬP LẠI">

                    <a href="index.php?act=listkm"><input class="mr20" type="button" value="DANH SÁCH"></a>
                  </div>
                  <?php
                if (isset($thongbao) && ($thongbao != ""))
                  echo $thongbao;

                ?>
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