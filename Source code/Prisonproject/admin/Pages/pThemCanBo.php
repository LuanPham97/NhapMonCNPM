<h1 align="Center">Thêm Cán Bộ</h1>
<form action="index.php?a=13" method='POST'>
	Tên Cán Bộ: <input type="text" name="txtTenCanBo" id="txtTenCanBo"><br><br>
	Số Điện Thoại:&nbsp&nbsp <input type="text" name="txtSoDienThoai" id="txtSoDienThoai"><br><br>
	Bộ Phận: <input type="text" name="txtTenBoPhan" id="txtTenBoPhan"><br>(qlv-Quản lý, tnp-Tiếp Nhận và Phóng Thích, yte-Y tế, qg-Quản Giáo, ct-Cải Tạo, cd-Cấp Dưỡng) <br><br>
	Tên Đăng Nhập: <input type="text" name="txtTenDangNhap" id="txtTenDangNhap"><br><br>
	Mật Khẩu: <input type="password" name="pwMatKhau" id="pwMatKhau"><br><br>
	<input type="checkbox" onclick="myFunction()">Hiển Thị Mật Khẩu <br><br>
	Tên Hiển Thị: <input type="text" name="txtTenHienThi" id="txtTenHienThi"><br><br>
	Loại Tài Khoản: <input type="number" name="txtLoai" id="txtLoai"><br>(1-Quản Giáo, 2-Y Tế, 3-Tiếp Nhận Và Phóng Thích, 4-Cấp Dưỡng, 5-Quản Lý, 6-Cải Tạo)<br><br>
	<input type="submit" value="Thêm">
</form>
<?php
	if(isset($_POST["txtTenCanBo"]) && isset($_POST["txtSoDienThoai"]) && 
		isset($_POST["txtTenBoPhan"]) && isset($_POST["txtTenDangNhap"]) && ($_POST["txtTenCanBo"] != "") && 
		($_POST["txtSoDienThoai"] != "") && ($_POST["txtTenBoPhan"] != "") && ($_POST["txtTenDangNhap"] != "") && isset($_POST["pwMatKhau"]) && ($_POST["pwMatKhau"] != "") && isset($_POST["txtTenHienThi"]) && ($_POST["txtTenHienThi"] != "") && isset($_POST["txtLoai"]) && ($_POST["txtLoai"] != "")){

		$tenCanBo = $_POST["txtTenCanBo"];
		$soDienThoai = $_POST["txtSoDienThoai"];
		$tenDangNhap = $_POST["txtTenDangNhap"];
		$tenBoPhan = $_POST["txtTenBoPhan"];
		$matKhau = md5($_POST["pwMatKhau"]);
		$tenHienThi = $_POST["txtTenHienThi"];
		$loai = $_POST["txtLoai"];

		$sql1 ="INSERT INTO taikhoan (TenDangNhap, MatKhau, TenHienThi, MaLoaiTaiKhoan) VALUES ('$tenDangNhap', '$matKhau', '$tenHienThi', $loai)";
		DataProvider::ExecuteQuery($sql1);

		$sql = "INSERT INTO canbo (HoTen, SDT, BoPhan, TenDangNhap) VALUES ('$tenCanBo', '$soDienThoai', '$tenBoPhan', '$tenDangNhap')";
		DataProvider::ExecuteQuery($sql);
		DataProvider::ChangeURL("index.php?a=13");
	}
?>


<script>
function myFunction() {
  var x = document.getElementById("pwMatKhau");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>