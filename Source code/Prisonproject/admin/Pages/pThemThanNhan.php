<h1 align="Center">Thêm Thân Nhân</h1>
<form action="index.php?a=3" method='POST'>
	Tên Thân Nhân: <input type="text" name="txtTenThanNhan" id="txtTenThanNhan"><br><br>
	Số Điện Thoại:&nbsp&nbsp <input type="text" name="txtSoDienThoai" id="txtSoDienThoai"><br><br>
	Địa Chỉ: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="txtDiaChi" id="txtDiaChi"><br><br>
	Tên Đăng Nhập: <input type="text" name="txtTenDangNhap" id="txtTenDangNhap"><br><br>
	Mật Khẩu: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="password" name="txtMatKhau" id="txtMatKhau"><br><br>
	<input type="checkbox" onclick="myFunction()">Hiển Thị Mật Khẩu <br><br>
	Tên Hiển Thị: &nbsp; &nbsp; &nbsp;<input type="text" name="txtTenHienThi" id="txtTenHienThi"><br><br>
	<input type="submit" value="Thêm">
</form>
<?php
	if(isset($_POST["txtTenThanNhan"]) && isset($_POST["txtSoDienThoai"]) && 
		isset($_POST["txtTenDangNhap"]) && isset($_POST["txtMatKhau"]) && ($_POST["txtTenThanNhan"] != "") &&
		($_POST["txtSoDienThoai"] != "") && ($_POST["txtTenDangNhap"] != "") && ($_POST["txtMatKhau"] != "") && isset($_POST["txtTenHienThi"]) && ($_POST["txtTenHienThi"] != "") && isset($_POST["txtDiaChi"]) && ($_POST["txtDiaChi"] != "")){
		$tenThanNhan = $_POST["txtTenThanNhan"];
		$soDienThoai = $_POST["txtSoDienThoai"];
		$diaChi = $_POST["txtDiaChi"];
		$tenDangNhap = $_POST["txtTenDangNhap"];
		$matKhau = md5($_POST["txtMatKhau"]);
		$tenHienThi = $_POST["txtTenHienThi"];
		$sql1 ="INSERT INTO taikhoan (TenDangNhap, MatKhau, TenHienThi, MaLoaiTaiKhoan) VALUES ('$tenDangNhap', '$matKhau', '$tenHienThi', 7)";
		DataProvider::ExecuteQuery($sql1);
		$sql = "INSERT INTO thannhan (TenThanNhan, DiaChiThanNhan , SDT, TenDangNhap) VALUES ('$tenThanNhan', '$diaChi' ,'$soDienThoai', '$tenDangNhap')";
		DataProvider::ExecuteQuery($sql);
		DataProvider::ChangeURL("index.php?a=3");


	}
?>

<script>
function myFunction() {
  var x = document.getElementById("txtMatKhau");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>