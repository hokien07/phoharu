<?php

function layTinTuDong($title, $urlhinh, $mota, $iduser) {
  global $dbc;
  $q = "
    INSERT INTO tintuc (tieude, urlhinh, mota, id_user)
    VALUES('{$title}', '{$urlhinh}', {'$mota'}, {$iduser})
  ";
  mysqli_query($dbc, $q);
}

?>
