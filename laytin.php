<?php
include("database/dbCon.php");
include("block/simple_html_dom.php");

$html = file_get_html('http://www.24h.com.vn/am-thuc-c460.html');
//echo hinh;
$tins = $html->find('div.boxDoi-sub-Item-trangtrong');
foreach ($tins as $tin) {
  //lay tieu de tin tuc
  $title = $tin->find("span.news-title a", 0)->innertext;

//LAY HINH VA LUU HINH
  $img = $tin->find("span.imgFloat img", 0)->src;
  $hinh = 'upload/tin-tuc/'. basename($img);
  file_put_contents($hinh, file_get_contents($img));

  //lay mota
  $des = $tin->find("span.news-sapo", 0);

  //toi uu va bao MessageFormatter
   $tenhinh = basename($img);
   $title = htmlentities($title, ENT_QUOTES, "UTF-8");
   $des = htmlentities($des, ENT_QUOTES, "UTF-8");

  //insert vao database
  $q = "
    INSERT INTO tintuc
      (tieude, urlhinh, mota, id_user)
    VALUES('{$title}', '{$tenhinh}', '{$des}', 1)
  ";
  mysqli_query($dbc, $q);
}
?>
