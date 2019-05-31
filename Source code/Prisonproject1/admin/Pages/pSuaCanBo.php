<h1 align="Center">Cập Nhật Cán Bộ</h1>
<form action="index.php?a=14" method="POST">
	Nhập Thông Tin ID Cán Bộ: <input type="text" name="txtID" id="txtID"><br><br>
	Thông Tin Cán Bộ Cần Cập Nhật:<br><br>
	Tên Cán Bộ: <input type="text" name="txtTen" id="txtTen"><br><br>
	Số Điện Thoại: <input type="text" name="txtSoDienThoai" id="txtSoDienThoai"><br><br>
	Bộ Phận: <input type="text" name="txtBoPhan" id="txtBoPhan"><br><br>
	Tên Đăng Nhập: <input type="text" name="txtTenDangNhap" id="txtTenDangNhap"><br><br>
	<input type="submit" value="Cập Nhật">
</form>
<?php
	if(isset($_POST["txtID"]) && $_POST["txtID"]){
		$id = $_POST["txtID"];
		if(isset($_POST["txtTen"]) && ($_POST["txtTen"] != "" )){
			$ten = $_POST["txtTen"];
			$sql = "UPDATE canbo SET HoTen = '$ten' WHERE MaCanBo = '$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtSoDienThoai"]) && ($_POST["txtSoDienThoai"] != "")){
			$soDienThoai = $_POST["txtSoDienThoai"];
			$sql = "UPDATE canbo SET SDT = '$soDienThoai' WHERE MaCanBo = '$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtBoPhan"]) && ($_POST["txtBoPhan"] != "")){
			$boPhan = $_POST["txtBoPhan"];
			$sql = "UPDATE canbo SET BoPhan = '$boPhan' WHERE MaCanBo = '$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtTenDangNhap"]) && ($_POST["txtTenDangNhap"] != "")){
			$tenDangNhap = $_POST["txtTenDangNhap"];
			$sql = "UPDATE canbo SET TenDangNhap = '$tenDangNhap' WHERE MaCanBo = '$id'";
			DataProvider::ExecuteQuery($sql);
		}
		DataProvider::ChangeURL("index.php?a=14");

	}

?>