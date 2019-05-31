<h1 align="Center">Danh Sách Tài Khoản</h1>
<table align="Center" border="1">
	<tr>
		<td>Tên Đăng Nhập</td>
		<td>Mật Khẩu</td>
		<td>Tên Hiển Thị</td>
		<td>Loại Tài Khoản</td>
	</tr>
<?php
	$sql = "SELECT TenDangNhap, MatKhau, TenHienThi, TenLoaiTaiKhoan FROM taikhoan, loaitaikhoan WHERE taikhoan.MaLoaiTaiKhoan = loaitaikhoan.MaLoaiTaiKhoan";
	$list = DataProvider::ExecuteQuery($sql);
	while($row = mysqli_fetch_array($list)){
		$tenDangNhap = $row["TenDangNhap"];
		$matKhau = $row["MatKhau"];
		$tenHienThi = $row["TenHienThi"];
		$tenLoaiTaiKhoan = $row["TenLoaiTaiKhoan"];
		include ('Templates/tempLietKeTaiKhoan.php');
	}
?>
</table>