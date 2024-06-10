<?php
session_start();

$id_pro = $_REQUEST['id_pro'];
include "../model/pdo.php";
include "../model/binhluan.php";

$dsbl = loadall_binhluan(0);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel="stylesheet">
        <style>
             .mb {
                width: 90%;
                margin-left: 5%;
            }
            
            .binhluan table td:nth-child(1) {
                width: 50%;
            }

            .binhluan table td:nth-child(2) {
                width: 20%;
            }

            .binhluan table td:nth-child(3) {
                width: 30%;
            }
        </style>
    </head>

    <body>



        <div class="mb">

            <div class="binhluan">
                <table>

                    <tr>
                        <th>Nội dung</th>
                        <th>ID người bình luận</th>
                        <th>Thời gian bình luận</th>
                    </tr>
                    <?php

                    foreach ($dsbl as $bl) {
                        extract($bl);
                        $linkdm = "index.php?act=sanpham&iddm=" . $id_binhluan;
                        echo '<tr><td>' . $noi_dung . '</td>';
                        echo '<td>' . $id_nguoidung . '</td>';
                        echo '<td>' . $ngay_binh_luan . '</td></tr> ';
                    }
                    ?>
                </table>
            </div>

            <?php
            if (isset($_SESSION['ten_nguoidung'])) {
                ?>
                <div class="box_search">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <input type="hidden" name="id_pro" value="<?= $id_pro ?>"> <br>
                        <input type="text" name="noi_dung" id=""> <br>

                        <input type="submit" name="guibinhluan" value="Gửi">
                    </form>
                </div>
                <?php
            }
            ?>


            <?php
            if ((isset($_POST['guibinhluan'])) && ($_POST['guibinhluan'])) {
                
              
               
                $id_nguoidung=$_SESSION["ten_nguoidung"]["id_nguoidung"];
                $id_pro = $_POST['id_pro'];
                $noi_dung = $_POST['noi_dung'];
                
                $ngay_binh_luan =date("h:i:sa d/m/Y");;
                insert_binhluan($id_nguoidung,$id_pro,$noi_dung,$ngay_binh_luan);
               header("Location: " . $_SERVER['HTTP_REFERER']);
            }

            ?>

        </div>

    </body>

    </html>