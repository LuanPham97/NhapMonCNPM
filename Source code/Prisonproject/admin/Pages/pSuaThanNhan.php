<h1 align="Center">Cập Nhật Thông Tin Thân Nhân</h1>
<form action="index.php?a=6" method="POST">
	Nhập ID Thân Nhân: <input type="text" name="txtID" id="txtID"><br><br>
	Nhập Thông Tin Cần Sửa: <br><br>
	Tên Thân Nhân: &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="txtTenThanNhan"> <br><br>
	Địa Chỉ: &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<input type="text" name="txtDiaChi" id="txtDiaChi"><br><br>
	Số Điện Thoại: &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="txtSoDienThoai"> <br><br>
	Tên Đăng Nhập:&nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="txtTenDangNhap"> <br><br>
	Tên Hiển Thị:&nbsp; &nbsp;  &nbsp; &nbsp;&nbsp; &nbsp;<input type="text" name="txtTenHienThi" id="txtTenHienThi"><br><br>
	Mật Khẩu:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<input type="password" name="txtMatKhau" id="txtMatKhau"><br><br>
	<input type="checkbox" onclick="myFunction()">Hiển Thị Mật Khẩu <br><br>
	<input type="submit" value="Cập Nhật">
</form>
<?php
	if(isset($_POST["txtID"]) && ($_POST["txtID"] != "")){
		$id = $_POST["txtID"];
		if(isset($_POST["txtTenThanNhan"]) && ($_POST["txtTenThanNhan"] != "")){
			$tenThanNhan = $_POST["txtTenThanNhan"];
			$sql = "UPDATE thannhan SET TenThanNhan='$tenThanNhan' WHERE MaThanNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtDiaChi"]) && ($_POST["txtDiaChi"] != "")){
			$diaChi = $_POST["txtDiaChi"];
			$sql = "UPDATE thannhan SET DiaChiThanNhan = '$diaChi' WHERE MaThanNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtSoDienThoai"]) && ($_POST["txtSoDienThoai"] != "")){
			$sdt = $_POST["txtSoDienThoai"];
			$sql = "UPDATE thannhan SET SDT='$sdt' WHERE MaThanNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtTenDangNhap"]) && ($_POST["txtTenDangNhap"] != "")){
			$tenDangNhap = $_POST["txtTenDangNhap"];
			$sql = "UPDATE thannhan tn, taikhoan tk SET tk.TenDangNhap = '$tenDangNhap'  WHERE tn.MaThanNhan='$id' and tk.MaLoaiTaiKhoan = '7' and tn.TenDangNhap = tk.TenDangNhap";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtTenHienThi"]) && ($_POST["txtTenHienThi"] != "")){
			$tenHienThi = $_POST["txtTenHienThi"];
			$sql = "UPDATE taikhoan tk, thannhan tn SET TenHienThi='$tenHienThi' WHERE tn.MaThanNhan='$id' and tk.MaLoaiTaiKhoan = '7' and tk.TenDangNhap = tn.TenDangNhap  ";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtMatKhau"]) && ($_POST["txtMatKhau"] != "")){
			$matKhau = md5($_POST["txtMatKhau"]);
			$sql = "UPDATE taikhoan tk, thannhan tn SET tk.MatKhau='$matKhau' WHERE tn.MaThanNhan='$id' and tk.MaLoaiTaiKhoan = '7' and tk.TenDangNhap = tn.TenDangNhap  ";
			DataProvider::ExecuteQuery($sql);
		}
		DataProvider::ExecuteQuery("index.php?a=6");
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