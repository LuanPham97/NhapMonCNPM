<h1 align="Center">Danh Sách Cán Bộ</h1>
<table align="Center" border="1">
	<tr>
		<td>Mã Cán Bộ</td>
		<td>Tên Cán Bộ</td>
		<td>Số Điện Thoại</td>
		<td>Tên Bộ Phận</td>
		<td>Tên Đăng Nhập</td>
	</tr>
<?php
	$sql = "SELECT MaCanBo, HoTen, SDT, TenBoPhan, TenDangNhap FROM canbo, bophan WHERE BoPhan = MaBoPhan";
	$list = DataProvider::ExecuteQuery($sql);
	while($row = mysqli_fetch_array($list)){
		$maCanBo = $row["MaCanBo"];
		$ten = $row["HoTen"];
		$sdt = $row["SDT"];
		$boPhan = $row["TenBoPhan"];
		$tenDangNhap = $row["TenDangNhap"];
		include ('Templates/tempLietKeCanBo.php');
	}
?>
</table>