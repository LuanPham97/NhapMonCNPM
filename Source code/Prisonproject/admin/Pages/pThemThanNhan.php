<h1 align="Center">Thêm Thân Nhân</h1>
<form action="index.php?a=3" method='POST'>
	Tên Thân Nhân: <input type="text" name="txtTenThanNhan" id="txtTenThanNhan"><br><br>
	Số Điện Thoại:&nbsp&nbsp <input type="text" name="txtSoDienThoai" id="txtSoDienThoai"><br><br>
	Tên Đăng Nhập: <input type="text" name="txtTenDangNhap" id="txtTenDangNhap"><br><br>
	<input type="submit" value="Thêm">
</form>
<?php
	if(isset($_POST["txtTenThanNhan"]) && isset($_POST["txtSoDienThoai"]) && 
		isset($_POST["txtTenDangNhap"]) && ($_POST["txtTenThanNhan"] != "") && 
		($_POST["txtSoDienThoai"] != "") && ($_POST["txtTenDangNhap"] != "")){
		$tenThanNhan = $_POST["txtTenThanNhan"];
		$soDienThoai = $_POST["txtSoDienThoai"];
		$tenDangNhap = $_POST["txtTenDangNhap"];

		$sql = "INSERT INTO thannhan (TenThanNhan, SDT, TenDangNhap) VALUES ('$tenThanNhan', '$soDienThoai', '$tenDangNhap')";
		DataProvider::ExecuteQuery($sql);
		DataProvider::ChangeURL("index.php?a=3");


	}
?>