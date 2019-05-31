<h1 align="Center">Quản Lý Thân Nhân</h1>
<table width="600" border="1" align="Center">
	<tr>
		<td>Mã Thân Nhân</td>
		<td>Tên Thân Nhân</td>
		<td>Số Điện Thoại</td>
		<td>Tên Đăng Nhập</td>
	</tr>
	<?php
		$sql = "SELECT MaThanNhan, TenThanNhan, SDT, TenDangNhap
				FROM thannhan";
		$list = DataProvider::ExecuteQuery($sql);
		while($row = mysqli_fetch_array($list)){
			$maThanNhan = $row["MaThanNhan"];
			$tenThanNhan = $row["TenThanNhan"];
			$soDienThoai = $row["SDT"];
			$tenDangNhap = $row["TenDangNhap"];
			include ("Templates/tempLietKeThanNhan.php");
		}
	?>
</table>