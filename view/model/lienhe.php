<?php
  function insert_lien_he($id_nguoi_dung,$noi_dung,$trang_thai){
    $sql = "insert into tb_lien_he(id_nguoi_dung,noi_dung,trang_thai) values('$id_nguoi_dung','$noi_dung','$trang_thai')";
    pdo_execute($sql);
   
  }
  function delete_lien_he($id_lh){
    $sql = "delete from tb_lien_he where id_lh =" . $_GET['id_lh'];
    pdo_execute($sql);
  }
  function loadall_lien_he(){
    $sql = "select * from tb_lien_he order by id_lh desc";
    $listlienhe = pdo_query($sql);
    return $listlienhe;
  }
  function loadone_lien_he($id_lh){
      $sql ="select * from tb_lien_he where id_lh=".$id_lh;
      $lh = pdo_query_one($sql);
      return $lh;
  }
  function update_lien_he($id_lh,$id_nguoi_dung,$noi_dung,$trang_thai){
  
    $sql = "UPDATE `tb_lien_he` SET `id_nguoi_dung` = '$id_nguoi_dung', `noi_dung` = '$noi_dung', `trang_thai` = '$trang_thai' WHERE `tb_lien_he`.`id_lh` = $id_lh;";
  
 
  pdo_execute($sql);
}
  
?>