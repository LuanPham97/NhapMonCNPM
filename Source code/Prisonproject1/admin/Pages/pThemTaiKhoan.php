<h1 align="Center">Thêm Tài Khoản</h1>
<form action="index.php?a=18" method="POST">
	Tên Đăng Nhập: <input type="text" name="txtTen" id="txtTen"><br><br>
	Mật Khẩu:  <input type="password" name="txtMatKhau" id="txtMatKhau"><br><br>
	Tên Hiển Thị: <input type="text" name="txtTenHienThi" id="txtTenHienThi"><br><br>
	Mã Loại Tài Khoản: <input type="number" name="nbTaiKhoan" id="nbTaiKhoan"><br><br>
	<input type="submit" value="Thêm">
</form>
<?php 
	if(isset($_POST["txtTen"]) && ($_POST["txtTen"] != "") && isset($_POST["txtMatKhau"]) && ($_POST["txtMatKhau"] != "") && isset($_POST["txtTenHienThi"]) && ($_POST["txtTenHienThi"] != "") && isset($_POST["nbTaiKhoan"]) && ($_POST["nbTaiKhoan"] != "")){
		$ten = $_POST["txtTen"];
		$matKhau = $_POST["txtMatKhau"];
		$tenHienThi = $_POST["txtTenHienThi"];
		$loaiTaiKhoan = $_POST["nbTaiKhoan"];
		$crypt = md5($matKhau);
		$sql = "INSERT INTO taikhoan (TenDangNhap, MatKhau, TenHienThi, MaLoaiTaiKhoan) VALUES ('$ten', '$crypt', '$tenHienThi', $loaiTaiKhoan)";
		DataProvider::ExecuteQuery($sql);
		DataProvider::ChangeURL("index.php?a=18");
	}
?>