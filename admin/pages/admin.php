<?php include("header.php"); ?>
<style media="screen">
    label {
      margin-top: 20px;
      font-size: 18px;
    }
    .btn-capnhat {
      display: block;
      margin: 20px auto;
    }

</style>

<div id="wrapper">
  <?php include("topmenu.php"); ?>
  <?php include("sidebar.php"); ?>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h4 class="page-header">Chỉnh Sửa Thông Tin Trang Chủ</h4>
    </div>

    <div class="form-index">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <label for="">Giới thiệu Ngắn</label>
          <textarea type="text"  name="gioithieungan" class="form-control" cols="5" rows="5" placeholder=" Giới thiệu ngắn về cửa hàng Phở Haru"></textarea>

          <label for="">Thông tin đối tác</label>
          <textarea type="text" name="gioithieudoitac" class="form-control" cols="5" rows="5"  placeholder="  Giới thiệu ngắn về các đối tác"></textarea>

          <label for="">Mô tả các hoạt động</label>
          <textarea type="text" name="gioithieudoitac" class="form-control" cols="5" rows="5"  placeholder="   Mô tả các hoạt động hay diễn ra tại Phở Haru"></textarea>

          <textarea type="text" name="tamnhinvachienluoc" class="form-control" cols="5" rows="5"  placeholder="Tầm Nhìn Và Chiến Luợc"></textarea>
          <label for="">Tầm Nhìn Và Chiến Luợc</label>

          <label for=""> Chế độ  làm việc của nhân viên</label>
          <textarea type="text" name="tuyendung" class="form-control" cols="5" rows="5"  placeholder=" Chế độ  làm việc của nhân viên"></textarea>

          <label for=""> Tại sao chọn chúng tôi</label>
          <textarea type="text" name="taisaochon" class="form-control" cols="5" rows="5"  placeholder=" Chế độ  làm việc của nhân viên"></textarea>

          <input type="submit" name="submit" value="Cập Nhật" class="btn btn-primary btn-capnhat">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<?php include("footer.php"); ?>
