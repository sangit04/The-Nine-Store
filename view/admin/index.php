<?php
include "../model/danhmuc.php";
include "../model/taikhoan.php";
include "../model/sanpham.php";
include "../model/lienhe.php";
include "../model/baiviet.php";
include "../model/khuyenmai.php";
include "../model/binhluan.php";
include "../model/giohang.php";
include("header.php");
include("boxleft.php");
include("home.php");
include "../model/pdo.php";
?>
<?php
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";

            break;

        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {

                $ten_danh_muc = $_POST['ten_danh_muc'];
                $mo_ta = $_POST['mo_ta'];
                $trang_thai = $_POST['trang_thai'];

                insert_danhmuc($ten_danh_muc, $mo_ta, $trang_thai);
                $thongbao = "Thêm thành công";
            }

            include "danhmuc/add.php";
            break;
        case 'xoadm':
            if (isset($_GET['id_dm']) && ($_GET['id_dm'] > 0)) {
                delete_danhmuc($_GET['id_dm']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id_dm']) && ($_GET['id_dm'] > 0)) {
                $dm = loadone_danhmuc($_GET['id_dm']);
            }

            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                $id_dm = $_POST['id_dm'];
                $ten_danh_muc = $_POST['ten_danh_muc'];
                $mo_ta = $_POST['mo_ta'];
                $trang_thai = $_POST['trang_thai'];
                update_danhmuc($id_dm, $ten_danh_muc, $mo_ta, $trang_thai);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            // $listsanpham = loadall_sanpham("", 0);
            include "danhmuc/list.php";
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $id_dm = $_POST['id_dm'];
            } else {
                $kyw = '';
                $id_dm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $id_dm);
            include "sanpham/list.php";
            break;

        case 'addsp':
            // var_dump($_FILES['hinh']);die();
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $id_dm = $_POST['id_dm'];
                $ten_sp = $_POST['ten_sp'];
                $anh_sp = $_FILES['anh_sp']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["anh_sp"]["name"]);
                if (move_uploaded_file($_FILES["anh_sp"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $so_luong = $_POST['so_luong'];
                $bao_hanh = $_POST['bao_hanh'];
                $thong_tin_sp = isset($_POST['thong_tin_sp']) ? $_POST['thong_tin_sp'] : '';
                $mau_sac = $_POST['mau_sac'];
                $bo_nho = $_POST['bo_nho'];
                $gia_sp = $_POST['gia_sp'];
                $trang_thai = $_POST['trang_thai'];

                insert_sanpham($id_dm, $ten_sp, $anh_sp, $so_luong, $bao_hanh, $thong_tin_sp, $mau_sac, $bo_nho, $trang_thai, $gia_sp);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            // $listsanpham = loadall_sanpham($kyw, $id_dm=0);
            include "sanpham/add.php";
            break;
        case 'xoasp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
                delete_sanpham($_GET['id_sp']);
            }


            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
                $tb_san_pham = loadone_sanpham($_GET['id_sp']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_sp = $_POST['id_sp'];
                $trang_thai = $_POST['trang_thai'];
                $id_dm = $_POST['id_dm'];
                $ten_sp = $_POST['ten_sp'];
                $anh_sp = $_FILES['anh_sp']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["anh_sp"]["name"]);
                if (move_uploaded_file($_FILES["anh_sp"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $so_luong = $_POST['so_luong'];
                $bao_hanh = $_POST['bao_hanh'];
                $thong_tin_sp = isset($_POST['thong_tin_sp']) ? $_POST['thong_tin_sp'] : '';
                $mau_sac = $_POST['mau_sac'];
                $bo_nho = $_POST['bo_nho'];
                $gia_sp = $_POST['gia_sp'];

                update_sanpham($id_sp, $id_dm, $ten_sp, $anh_sp, $so_luong, $bao_hanh, $thong_tin_sp, $mau_sac, $bo_nho, $trang_thai, $gia_sp);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
    
        case 'suahd':
            if (isset($_GET['id_hoa_don']) && ($_GET['id_hoa_don'])) {
                $chitiet = load_bill_total($_GET['id_hoa_don']);
            }

            include "hoadon/trangthaihd.php";
            break;
        case 'updatedh':
            if (isset($_GET['capnhat']) && ($_GET['capnhat'])) {

                $id_hoa_don = $_POST['id_hoa_don'];
                $ten_sp = $_POST['$ten_sp'];
                $anh_sp = $_POST['$anh_sp'];
                $so_luong_mua = $_POST['$so_luong_mua'];
                $gia_sp = $_POST['$gia_sp'];
                $trang_thai = $_POST['$trang_thai'];
                update_trangthai($id_hoa_don, $ten_sp, $anh_sp, $so_luong_mua, $gia_sp, $trang_thai);
            }
            include "hoadon/chitiet.php";
            break;
        // case "update_hd":
        //     if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

        //         $id_hoa_don = $_POST['id_hoa_don'];
        //         $trang_thai = $_POST['trang_thai'];
        //         update_trangthai($id_hoa_don, $trang_thai);

        //     }
        //     break;
       
        case 'listhd':
            $listhd = loadall_hoa_don();
            include "hoadon/list.php";
            break;
        case "chitiet_hoadon":
            if (isset($_GET['id']) && ($_GET['id'])) {
                $chitiet = load_bill_detail($_GET['id']);
                $hoadon = load_bill_total($_GET['id']);
                $trangthaihoadon = $hoadon[0]['trang_thai'];
                $trangthainame ='';
                switch ($trangthaihoadon) {
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

            }
            include "hoadon/chitiet.php";
            break;
        case 'listbl':

            $dsbl = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        // case 'addbl':
        //     if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {

        //         $ten_nguoidung = $_POST['ten_nguoidung'];
        //         $id_pro = $_POST['$id_pro'];
        //         $noi_dung = $_POST['noi_dung'];
        //         $ngay_binh_luan = $_POST['ngay_binh_luan'];
        //         $trang_thai = $_POST['$trang_thai'];

        //         insert_baiviet($ten_nguoidung,$id_pro,$noi_dung,$ngay_binh_luan,$trang_thai);
        //         $thongbao = "Thêm thành công";
        //     }

        //     include "baiviet/add.php";
        //     break;
        case 'listdh':
            include "donhang/list.php";
            break;
        case 'adddh':
            include "donhang/add.php";
        case 'xoatk':
            if (isset($_GET['id_nguoidung']) && ($_GET['id_nguoidung'] > 0)) {
                delete_taikhoan($_GET['id_nguoidung']);
            }


            $listtaikhoan = loadall_taikhoan("", 0);
            include "taikhoan/list.php";
            break;

        case 'listtk':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $role = $_POST['role'];
            } else {
                $kyw = '';
                $role = 0;
            }

            $listtaikhoan = loadall_taikhoan($kyw, $role);
            include "taikhoan/list.php";
            break;
        case 'addtk':
            include "taikhoan/add.php";
            break;

        case 'listlh':
            $listlienhe = loadall_lien_he();
            include "lienhe/list.php";

            break;

        case 'addlh':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {

                $id_nguoi_dung = $_POST['id_nguoi_dung'];
                $noi_dung = $_POST['noi_dung'];
                $trang_thai = $_POST['trang_thai'];

                insert_lien_he($id_nguoi_dung, $noi_dung, $trang_thai);
                $thongbao = "Thêm thành công";
            }

            include "lienhe/add.php";
            break;
        case 'xoalh':
            if (isset($_GET['id_lh']) && ($_GET['id_lh'] > 0)) {
                delete_lien_he($_GET['id_lh']);
            }
            $listlienhe = loadall_lien_he();
            include "lienhe/list.php";
            break;
        case 'sualh':
            if (isset($_GET['id_lh']) && ($_GET['id_lh'] > 0)) {
                $lh = loadone_lien_he($_GET['id_lh']);
            }

            include "lienhe/update.php";
            break;
        case 'updatelh':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                $id_lh = $_POST['id_lh'];
                $id_nguoi_dung = $_POST['id_nguoi_dung'];
                $noi_dung = $_POST['noi_dung'];
                $trang_thai = $_POST['trang_thai'];
                update_lien_he($id_lh, $id_nguoi_dung, $noi_dung, $trang_thai);
                $thongbao = "Cập nhật thành công";
            }
            $listlienhe = loadall_lien_he();
            include "lienhe/list.php";
            break;
        case 'listkm':
            $listkhuyenmai = loadall_khuyen_mai();
            include "khuyenmai/list.php";
            break;
        case 'addkm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ma_km = $_POST['ma_km'];
                $pt_km = $_POST['pt_km'];
                $ngay_bd = $_POST['ngay_bd'];
                $ngay_kt = $_POST['ngay_kt'];
                $id_sp = $_POST['id_sp'];
                $trang_thai = $_POST['trang_thai'];
                insert_khuyen_mai($ma_km, $pt_km, $ngay_bd, $ngay_kt, $id_sp, $trang_thai);
                $thongbao = "Thêm thành công";
            }

            include "khuyenmai/add.php";
            break;
        case 'xoakm':
            if (isset($_GET['id_km']) && ($_GET['id_km'] > 0)) {
                delete_khuyen_mai($_GET['id_km']);
            }
            $listkhuyenmai = loadall_khuyen_mai();
            include "khuyenmai/list.php";
            break;
        case 'suakm':
            if (isset($_GET['id_km']) && ($_GET['id_km'] > 0)) {
                $km = loadone_khuyen_mai($_GET['id_km']);
            }

            include "khuyenmai/update.php";
            break;
        case 'updatekm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                $id_km = $_POST['id_km'];
                $ma_km = $_POST['ma_km'];
                $pt_km = $_POST['pt_km'];
                $ngay_bd = $_POST['ngay_bd'];
                $ngay_kt = $_POST['ngay_kt'];
                $id_sp = $_POST['id_sp'];
                $trang_thai = $_POST['trang_thai'];
                update_khuyen_mai($id_km, $ma_km, $pt_km, $ngay_bd, $ngay_kt, $id_sp, $trang_thai);
                $thongbao = "Cập nhật thành công";
            }
            $listkhuyenmai = loadall_khuyen_mai();
            // $listsanpham = loadall_sanpham("", 0);
            include "khuyenmai/list.php";
            break;
        case 'listbv':
            $listbaiviet = loadall_baiviet();
            include "baiviet/list.php";

            break;
        case 'addbv':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {

                $tieu_de = $_POST['tieu_de'];
                $noi_dung = $_POST['noi_dung'];
                $ngay_dang = $_POST['ngay_dang'];
                $trang_thai = $_POST['trang_thai'];

                insert_baiviet($tieu_de, $noi_dung, $ngay_dang, $trang_thai);
                $thongbao = "Thêm thành công";
            }

            include "baiviet/add.php";
            break;
        case 'xoabv':
            if (isset($_GET['id_bai_viet']) && ($_GET['id_bai_viet'] > 0)) {
                delete_baiviet($_GET['id_bai_viet']);
            }
            $listbaiviet = loadall_baiviet();
            include "baiviet/list.php";
            break;
        case 'suabv':
            if (isset($_GET['id_bai_viet']) && ($_GET['id_bai_viet'] > 0)) {
                $lh = loadone_baiviet($_GET['id_bai_viet']);
            }

            include "baiviet/update.php";
            break;
        case 'updatebv':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                $id_bai_viet = $_POST['id_bai_viet'];
                $tieude = $_POST['tieu_de'];
                $ngay_dang = $_POST['ngay_dang'];
                $noi_dung = $_POST['noi_dung'];
                $trang_thai = $_POST['trang_thai'];
                update_baiviet($id_bai_viet, $tieu_de, $noi_dung, $ngay_dang, $trang_thai);
                $thongbao = "Cập nhật thành công";
            }
            $listlienhe = loadall_baiviet();
            include "baiviet/list.php";
            break;
        default:

            break;
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['trangthaiupdate'])) {
    $status = $_POST['status'];
    $id_hoa_don = isset($_POST['id']) ? $_POST['id'] : null;

    if ($id_hoa_don) {
        update_bill_status($id_hoa_don, $status);
        echo '<script type="text/javascript">
            document.location = "index.php?act=chitiet_hoadon&id='.$id_hoa_don . '";
        </script>';
    } else {
        // Print an error message
        echo "Invalid or missing id_hoa_don";
    }
}
?>





<?php
include("footer.php");
?>