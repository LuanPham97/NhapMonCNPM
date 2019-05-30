<h1 align="Center">Thêm Cán Bộ</h1>
<form action="index.php?a=13" method='POST'>
	Tên Cán Bộ: <input type="text" name="txtTenCanBo" id="txtTenCanBo"><br><br>
	Số Điện Thoại:&nbsp&nbsp <input type="text" name="txtSoDienThoai" id="txtSoDienThoai"><br><br>
	Bộ Phận: <input type="text" name="txtTenBoPhan" id="txtTenBoPhan"><br><br>
	Tên Đăng Nhập: <input type="text" name="txtTenDangNhap" id="txtTenDangNhap"><br><br>
	<input type="submit" value="Thêm">
</form>
<?php
	if(isset($_POST["txtTenCanBo"]) && isset($_POST["txtSoDienThoai"]) && 
		isset($_POST["txtTenBoPhan"]) && isset($_POST["txtTenDangNhap"]) && ($_POST["txtTenCanBo"] != "") && 
		($_POST["txtSoDienThoai"] != "") && ($_POST["txtTenBoPhan"] != "") && ($_POST["txtTenDangNhap"] != "")){

		$tenCanBo = $_POST["txtTenCanBo"];
		$soDienThoai = $_POST["txtSoDienThoai"];
		$tenDangNhap = $_POST["txtTenDangNhap"];
		$tenBoPhan = $_POST["txtTenBoPhan"];



		$sql = "INSERT INTO canbo (HoTen, SDT, BoPhan, TenDangNhap) VALUES ('$tenCanBo', '$soDienThoai', '$tenBoPhan', '$tenDangNhap')";
		DataProvider::ExecuteQuery($sql);
		DataProvider::ChangeURL("index.php?a=13");
	}
?>