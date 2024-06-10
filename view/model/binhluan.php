<?php
   function insert_binhluan($id_nguoidung,$id_pro,$noi_dung,$ngay_binh_luan){
    $sql = "insert into tb_binh_luan(id_nguoidung,id_pro,noi_dung,ngay_binh_luan) values('$id_nguoidung','$id_pro','$noi_dung','$ngay_binh_luan')";
    pdo_execute($sql);
  }
  function loadall_binhluan($id_pro){
   
    // $sql = "select * from tb_binh_luan where id_pro='".$id_pro."' order by id_binhluan desc";
    $sql = "select * from tb_binh_luan where 1";
    if ($id_pro>0) $sql.=" AND id_pro='".$id_pro."'";
    
     $sql.=" order by id_binhluan desc";
    
    $dsbl = pdo_query($sql);
    return $dsbl;
  }
  // function delete_binhluan($id){
  //   $sql = "delete from binhluan where id=" . $_GET['id'];
  //   pdo_execute($sql);
  // }
?>
