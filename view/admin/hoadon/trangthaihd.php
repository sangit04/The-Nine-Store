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
                            <h3 class="card-title">Cập Nhật Trạng Thái Đơn Hàng</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">


                            <form action="index.php?actsubmit=trangthaiupdate" method="POST">
                                <div class="card-body">

                            
                                <div class="form-group">
                                            <label>Trạng thái </label> <br>
                                            <?php
                                            // Initialize $chitiet to an empty array if it's null
                                            $chitiet = isset($chitiet) ? $chitiet : [];
                                            
                                            // Extract values from $chitiet
                                            extract($chitiet[0]);
                                            $trangthai = $trang_thai;
                                            if($trangthai != -1){
                                                echo '
                                                <select class="form-control w-25" id="" name="status">';
    
                                                $options = [
                                                    0 => 'Chờ Xác Nhận',
                                                    1 => 'Đã Xác Nhận',
                                                    2 => 'Đang Giao Hàng',
                                                    3 => 'Đã nhận hàng',
                                                ];
    
                                                foreach ($options as $value => $label) {
                                                    $selected = ($trangthai == $value) ? 'selected' : '';
                                                    echo "<option value=\"$value\" $selected>$label</option>";
                                                }
    
                                                echo '
                                                </select>
                                                <div class="row ml-2 mt-2">
                                                <input type="hidden" name="id" value="'.$id_hoa_don.'">
                                                <input class="mr20 mt-20 btn btn-primary" type="submit" name="trangthaiupdate" value="cập nhật">
                                                <!-- <a href="index.php?act=listdm"><input class="mr20" type="button" value="DANH SÁCH"></a> -->
                                            </div>
                                                ';
                                                
                                            }else{
                                                echo 'Đã hủy';
                                            }

                                            ?>

                                           
                                    </div>

                                    <?php
                                    if (isset($thongbao) && ($thongbao != ""))
                                        echo $thongbao;

                                    ?>
                                </div>
                            </form>
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