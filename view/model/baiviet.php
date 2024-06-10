<?php
  function insert_baiviet($tieu_de,$noi_dung,$ngay_dang,$trang_thai){
    $sql = "insert into tb_bai_viet(tieu_de,noi_dung,ngay_dang,trang_thai) values('$tieu_de','$noi_dung','$ngay_dang','$trang_thai')";
    pdo_execute($sql);
   
  }
  function delete_baiviet($id_bai_viet){
    $sql = "delete from tb_bai_viet where id_bai_viet =" . $_GET['id_bai_viet'];
    pdo_execute($sql);
  }
  function loadall_baiviet(){
    $sql = "select * from tb_bai_viet order by id_bai_viet desc";
    $listbaiviet = pdo_query($sql);
    return $listbaiviet;
  }
  function loadone_baiviet($id_bai_viet){
      $sql ="select * from tb_bai_viet where id_bai_viet=".$id_bai_viet;
      $bv = pdo_query_one($sql);
      return $bv;
  }
  function update_baiviet($id_bai_viet,$tieu_de,$noi_dung,$ngay_dang,$trang_thai){
  
    $sql = "UPDATE `tb_bai_viet` SET `tieu_de` = '$tieu_de', `noi_dung` = '$noi_dung', `ngay_dang` = '$ngay_dang', `trang_thai` = '$trang_thai' WHERE `tb_bai_viet`.`id_bai_viet` = $id_bai_viet;";
  
 
  pdo_execute($sql);
}
  
?>