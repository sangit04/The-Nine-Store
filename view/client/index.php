<?php
session_start();
include "../model/pdo.php";
include "header.php";
include "../model/taikhoan.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/giohang.php";
include "../model/binhluan.php";
include "../global.php";
$listsanpham = loadall_sanpham($kyw = 1, $id_dm = 9);


$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop5 = loadall_sanpham_top5();
$dstop1 = loadall_sanpham_top1();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['$kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['id_dm']) && ($_GET['id_dm'] > 0)) {
                $id_dm = $_GET['id_dm'];


            } else {
                $iddm = 0;
            }
            $listsanpham = loadall_sanpham($kyw, $id_dm);

            // $ds_sp = loadall_sanpham("", $id_dm=0);

            // $tendm = load_ten_dm($id_dm);
            include "sanpham.php";

            break;
        case 'sanphamct':

            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
                $id_sp = $_GET['id_sp'];
                $onesp = loadone_sanpham($id_sp);
                extract($onesp);
                $sp_cungloai = load_sanpham_cungloai($id_sp, $id_dm);
                include "sanphamct.php";
            } else {
                include "home.php";
            }

            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $gmail = $_POST['gmail'];
                $ten_nguoidung = $_POST['ten_nguoidung'];
                $mat_khau = $_POST['mat_khau'];
                // $r_mk = $_POST['r_mk'];
                $sdt = $_POST['sdt'];
                insert_taikhoan($ten_nguoidung, $gmail, $mat_khau, $sdt);
                $thongbao = "Đã Đăng Ký thành công !";
            }
            include "dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $ten_nguoidung = $_POST['ten_nguoidung'];
                $mat_khau = $_POST['mat_khau'];
                $checkuser = checkuser($ten_nguoidung, $mat_khau);
                if (is_array($checkuser)) {
                    $_SESSION['ten_nguoidung'] = $checkuser;
                    "Location: index.php?act=dangnhap";
                    // $thongbao="Bạn đã đăng nhập thành công !";
                } else {
                    $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại hoặc đăng ký !";
                }
            }
            include "dangnhap.php";
            break;
        case 'thoat':
            session_unset();
            'Location: index.php';

            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_nguoidung = $_POST['id_nguoidung'];
                $ten_nguoidung = $_POST['ten_nguoidung'];
                $mat_khau = $_POST['mat_khau'];
                $gmail = $_POST['gmail'];
                $sdt = $_POST['sdt'];
                $ngay_sinh = $_POST['ngay_sinh'];
                $dia_chi = $_POST['dia_chi'];
                $gioi_tinh = $_POST['gioi_tinh'];
                $role = $_POST['role'];
                $trang_thai = $_POST['trang_thai'];
                $name = $_POST['name'];
                update_taikhoan($id_nguoidung, $ten_nguoidung, $mat_khau, $gmail, $sdt, $ngay_sinh, $dia_chi, $gioi_tinh, $role, $trang_thai, $name);
                $_SESSION['ten_nguoidung'] = checkuser($ten_nguoidung, $mat_khau);
                "Location: index.php?act=edit_taikhoan";

            }
            include "edit_taikhoan.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {

                $gmail = $_POST['gmail'];



                $checkemail = checkemail($gmail);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['mat_khau'];
                } else {
                    $thongbao = "Gmail này không tồn tại";
                }


            }
            include "quenmk.php";
            break;
        case 'listhd':
            $id_nguoidung = $_SESSION['ten_nguoidung']['id_nguoidung'];
            $listBill = loadone_bill_user($id_nguoidung);
            include "donhang.php";
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
                include "chitiet.php";
                break;
        case "view_cart":
            $listgiohang = loadall_giohang();
            include "cart.php";
            break;
        case "add_to_cart":
            if (isset($_POST['buy']) && ($_POST['buy'])) {
                $id_nguoidung = $_SESSION['ten_nguoidung']['id_nguoidung'];
                $id_sp = $_POST['id'];
                $ten_sp = $_POST['ten_sp'];
                $anh_sp = $_POST['anh_sp'];
                $gia_sp = $_POST['gia_sp'];
                if (isset($_POST['so_luong'])) {
                    $so_luong = $_POST['so_luong'];
                } else {
                    $so_luong = 1;
                }

                $listgiohang = loadall_giohang();
                $listCheck = check_giohang($id_sp);

                if ($listCheck != null) {
                    if (is_array($listCheck)) {
                        $quaUp = $listCheck[0]['so_luong'] + $so_luong;
                        update_giohang($id_sp, $quaUp);
                    } else {
                        insert_giohang($id_nguoidung, $id_sp, $ten_sp, $anh_sp, $gia_sp, $so_luong);
                    }

                } else {
                    insert_giohang($id_nguoidung, $id_sp, $ten_sp, $anh_sp, $gia_sp, $so_luong);
                }

            }
            $listgiohang = loadall_giohang();
            include "cart.php";
            break;
        case "delete_one_cart":
            if (isset($_GET['id']) && ($_GET['id'])) {
                delete_one_cart($_GET['id']);
            }
            $listgiohang = loadall_giohang();
            include "cart.php";
            break;
        case "clear_cart":
            delete_cart();
            $listgiohang = loadall_giohang();
            include "cart.php";
            break;
        case "check_out":
            $listgiohang = loadall_giohang();
            include "check-out.php";
            break;
        case 'trangthaihuy':
            if (isset($_GET['id']) && ($_GET['id'])) {
                update_bill_status($_GET['id'],-1);
            }
            echo '<script type="text/javascript">
                document.location = "index.php?act=listhd";
            </script>';
            break;
        case "pay":
            if (isset($_POST['submit']) && $_POST['submit']) {
                $id_nguoidung = $_SESSION['ten_nguoidung']['id_nguoidung'];
                $name = $_POST['firt_name'] . $_POST['last_name'];
                $tel = $_POST['tel'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $note = $_POST['note'];
                $tong_gia = $_POST['total'];
                insert_hoadon($id_nguoidung, $tong_gia, $address, $note);

                $bill = loadone_bill_user($id_nguoidung);
                extract($bill);
                $id_hoa_don = $bill[0]['id_hoa_don'];
                if (isset($id_nguoidung)) {
                    $listCart = loadall_cart($id_nguoidung);
                }

                foreach ($listCart as $cart) {
                    extract($cart);
                    $ten_sp = $cart['ten_sp'];
                    $anh_sp = $cart['anh_sp'];
                    $gia_sp = $cart['gia_sp'];
                    $so_luong = $cart['so_luong'];
                    insert_hoadon_chitiet($id_hoa_don, $ten_sp, $anh_sp, $so_luong, $gia_sp,0);
                }
                delete_cart();
            }
            include "pay_succes.php";
            break;

        // case 'gioithieu':
        //     include "view/gioithieu.php";
        //     break;
        //     case 'thoat':
        //         session_unset();
        //         header('Location: index.php');

        //         break;
        // case 'lienhe':
        //     include "view/lienhe.php";
        //     break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
?>