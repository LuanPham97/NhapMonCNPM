<h1 align="Center">Quản Lý Thân Nhân</h1>
<table width="600" border="1" align="Center">
	<tr>
		<td>Mã Thân Nhân</td>
		<td>Tên Thân Nhân</td>
		<td>Địa Chỉ</td>
		<td>Số Điện Thoại</td>
		<td>Tên Đăng Nhập</td>
		<td>Tên Hiển Thị</td>
	</tr>
	<?php
		$sql = "SELECT tn.MaThanNhan, tn.TenThanNhan, tn.DiaChiThanNhan , tn.SDT, tn.TenDangNhap, tk.TenHienThi
				FROM thannhan tn, taikhoan tk
				WHERE tn.TenDangNhap = tk.TenDangNhap";
		$list = DataProvider::ExecuteQuery($sql);
		while($row = mysqli_fetch_array($list)){
			$maThanNhan = $row["MaThanNhan"];
			$tenThanNhan = $row["TenThanNhan"];
			$diaChi = $row["DiaChiThanNhan"];
			$soDienThoai = $row["SDT"];
			$tenDangNhap = $row["TenDangNhap"];
			$tenHienThi = $row["TenHienThi"];
			include ("Templates/tempLietKeThanNhan.php");
		}
	?>
</table>