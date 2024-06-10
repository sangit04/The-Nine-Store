<?php
  function insert_khuyen_mai($ma_km,$pt_km,$ngay_bd,$ngay_kt,$id_sp,$trang_thai){
    $sql = "insert into tb_khuyen_mai(ma_km,pt_km,ngay_bd,ngay_kt,id_sp,trang_thai) values('$ma_km','$pt_km','$ngay_bd','$ngay_kt','$id_sp','$trang_thai')";
    pdo_execute($sql);
   
  }
  function delete_khuyen_mai($id_km){
    $sql = "delete from tb_khuyen_mai where id_km =" . $_GET['id_km'];
    pdo_execute($sql);
  }
  function loadall_khuyen_mai(){
    $sql = "select * from tb_khuyen_mai order by id_km desc";
    $listkhuyenmai = pdo_query($sql);
    return $listkhuyenmai;
  }
  function loadone_khuyen_mai($id_km){
      $sql ="select * from tb_khuyen_mai where id_km=".$id_km;
      $km = pdo_query_one($sql);
      return $km;
  }
  function update_khuyen_mai($id_km,$ma_km,$pt_km,$ngay_bd,$ngay_kt,$id_sp,$trang_thai){
  
    $sql = "UPDATE `tb_khuyen_mai` SET `ma_km` = '$ma_km', `pt_km` = '$pt_km',`ngay_bd` = '$ngay_bd',`ngay_kt` = '$ngay_kt',`id_sp` = '$id_sp', `trang_thai` = '$trang_thai' WHERE `tb_khuyen_mai`.`id_km` = $id_km;";
  
 
  pdo_execute($sql);
}
  
?>