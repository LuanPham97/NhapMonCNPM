<h1 align="Center">Xóa Tài Khoản</h1>
<form action="index.php?a=19" method="POST">
	Nhập Tên Đăng Nhập Cần Xóa: <input type="text" name="txtTen" id="txtTen"><br><br>
	<input type="submit" value="Xóa">
</form>
<?php
	if(isset($_POST["txtTen"]) && ($_POST["txtTen"] != "")){
		$ten = $_POST["txtTen"];
		$sql = "DELETE FROM taikhoan WHERE TenDangNhap = '$ten'";
		DataProvider::ExecuteQuery($sql);
		DataProvider::ChangeURL("index.php?a=19");
	}
?>