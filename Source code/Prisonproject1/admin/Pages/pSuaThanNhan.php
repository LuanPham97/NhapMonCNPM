<h1 align="Center">Sủa Thông Tin Thân Nhân</h1>
<form action="index.php?a=6" method="POST">
	Nhập ID Thân Nhân: <input type="text" name="txtID" id="txtID"><br><br>
	Nhập Thông Tin Cần Sửa: <br><br>
	Tên Thân Nhân: <input type="text" name="txtTenThanNhan"> <br><br>
	Số Điện Thoại: &nbsp; <input type="text" name="txtSoDienThoai"> <br><br>
	Tên Đăng Nhập: <input type="text" name="txtTenDangNhap"> <br><br>
	<input type="submit" value="Sửa">
</form>
<?php
	if(isset($_POST["txtID"]) && ($_POST["txtID"] != "")){
		$id = $_POST["txtID"];
		if(isset($_POST["txtTenThanNhan"]) && ($_POST["txtTenThanNhan"] != "")){
			$tenThanNhan = $_POST["txtTenThanNhan"];
			$sql = "UPDATE thannhan SET TenThanNhan='$tenThanNhan' WHERE MaThanNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtSoDienThoai"]) && ($_POST["txtSoDienThoai"] != "")){
			$sdt = $_POST["txtSoDienThoai"];
			$sql = "UPDATE thannhan SET SDT='$sdt' WHERE MaThanNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtTenDangNhap"]) && ($_POST["txtTenDangNhap"] != "")){
			$tenDangNhap = $_POST["txtTenDangNhap"];
			$sql = "UPDATE thannhan tn, taikhoan tk SET tn.TenDangNhap='$tenDangNhap' WHERE tn.MaThanNhan='$id' and tk.MaLoaiTaiKhoan = '7' and tk.TenDangNhap = '$tenDangNhap'  ";
			DataProvider::ExecuteQuery($sql);
		}
		DataProvider::ExecuteQuery("index.php?a=6");
	}
?>