<h1 align="Center">Danh Sách Tù Nhân</h1>
<table border="1" align="center">
	<tr>
		<td>Mã Tù Nhân</td>
		<td>Tên Tù Nhân</td>
		<td>Địa Chỉ</td>
		<td>Tình Trạng Sức Khỏe</td>
		<td>Mức Độ Tội Phạm</td>
		<td>Ngày Kiểm Tra Định Kỳ</td>
		<td>Gặp Người Thân</td>
		<td>Mức Độ Cải Tạo</td>
	</tr>
	<?php
		$sql = "SELECT MaPhamNhan, TenPhamNhan, DiaChi, TinhTrangSucKhoe, MucDoPhamToi, NgayKTDinhKy, GapNguoiThan, MucDoCaiTao
				FROM phamnhan";
		$list = DataProvider::ExecuteQuery($sql);
		while($row = mysqli_fetch_array($list)){
			$maPhamNhan = $row["MaPhamNhan"];
			$tenPhamNhan = $row["TenPhamNhan"];
			$diaChi = $row["DiaChi"];
			$tinhTrangSucKhoe = $row["TinhTrangSucKhoe"];
			$mucDo = $row["MucDoPhamToi"];
			$kiemTra = $row["NgayKTDinhKy"];
			$gapNguoiThan = $row["GapNguoiThan"];
			$mucDoCaiTao = $row["MucDoCaiTao"];
			include ('Templates/tempLietKeTuNhan.php');
		}
	?>
</table>