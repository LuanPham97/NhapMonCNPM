<h1 align="Center">Cập Nhật Tài Khoản</h1>
<form action="index.php?a=20" method="POST">
	Nhập Tên Đăng Nhập Cần Cập Nhật: <input type="text" name="txtTen" id="txtTen"><br><br>
	Nhập Thông Tin Cần Cập Nhật:<br><br>
	Mật Khẩu: <input type="password" name="txtMatKhau" id="txtMatKhau"><br><br>
	Tên Hiển Thị: <input type="text" name="txtTenHienThi" id="txtTenHienThi"><br><br>
	Mã Loại Tài Khoản: <input type="number" name="nbLoai" id="nbLoai"><br><br>
	<input type="submit" value="Cập Nhật">
</form>
<?php
	if(isset($_POST["txtTen"]) && ($_POST["txtTen"] != "")){
		$ten = $_POST["txtTen"];
		if(isset($_POST["txtMatKhau"]) && ($_POST["txtMatKhau"] != "")){
			$matKhau = md5($_POST["txtMatKhau"]);
			$sql = "UPDATE taikhoan SET MatKhau='$matKhau' WHERE TenDangNhap='$ten'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtTenHienThi"]) && ($_POST["txtTenHienThi"] != "")){
			$tenHienThi = $_POST["txtTenHienThi"];
			$sql = "UPDATE taikhoan SET TenHienThi='$tenHienThi' WHERE TenDangNhap='$ten'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["nbLoai"]) && ($_POST["nbLoai"] != "")){
			$loai = $_POST["nbLoai"];
			$sql = "UPDATE taikhoan SET MaLoaiTaiKhoan= $loai WHERE TenDangNhap='$ten'";
			DataProvider::ExecuteQuery($sql);
		}
		DataProvider::ChangeURL("index.php?a=20");
	}
?>