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
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card ">
            <div class="card-header">
              <h3 class="card-title">Thêm Liên Hệ</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form action="index.php?act=addlh" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <!-- <div class="row2 mb10 form_content_container"> -->
                  <label> Mã loại </label> <br>
                  <input type="text" class="form-control" name="id_lh" placeholder="nhập vào mã loại...">
                </div>
                <div class="form-group">
                  <label>ID Người Dùng </label> <br>
                  <input type="text" class="form-control" name="id_nguoi_dung" placeholder="nhập id người dùng...">
                </div>
                <div class="form-group">
                  <label>Nội dung</label> <br>
                  <input type="text" class="form-control" name="noi_dung" placeholder="nhập nội dung...">
                </div>
                <div class="form-group">
                <form>
                    <label>Trạng thái </label> <br>
                    <select id="" name="trang_thai">
                      <div class="form-control">
                        <option value="Hoạt động">Hoạt động</option>
                        <option value="Ngưng hoạt động">Ngưng hoạt động</option>
                      </div>
                      <!-- <input type="text" class="form-control" name="trang_thai" placeholder="nhập trạng thái..."> -->
                    </select>
                  </form>
                </div>
                <div class="row mb10 ">
                  <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
                  <input class="mr20" type="reset" value="NHẬP LẠI">

                  <a href="index.php?act=listlh"><input class="mr20" type="button" value="DANH SÁCH"></a>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                  echo $thongbao;

                ?>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->