<h1 align="Center">Thêm Tù Nhân</h1>
<form action="index.php?a=8" method='POST'>
	Tên Phạm Nhân: <input type="text" name="txtTenPhamNhan" id="txtTenPhamNhan"><br><br>
	Địa Chỉ:&nbsp&nbsp <input type="text" name="txtDiaChi" id="txtDiaChi"><br><br>
	Tình Trạng Sức Khỏe: <input type="text" name="txtTinhTrangSucKhoe" id="txtTinhTrangSucKhoe"><br><br>
	Mức Độ Phạm Tội: <input type="text" name="txtMucDoPhamToi" id="txtMucDoPhamToi"><br><br>
	Ngày Kiểm Tra Định Kì: <input type="text" name="txtKiemTra" id="txtKiemTra"><br><br>
	Gặp Người Thân: <input type="number" name="txtGapNguoiThan" id="txtGapNguoiThan"><br><br>
	Mức Độ Cải Tạo: <input type="text" name="txtMucDoCaiTao" id="txtMucDoCaiTao"><br><br>
	<input type="submit" value="Thêm">
</form>
<?php
	if(isset($_POST["txtTenPhamNhan"]) && isset($_POST["txtDiaChi"]) && 
		isset($_POST["txtTinhTrangSucKhoe"]) && isset($_POST["txtMucDoPhamToi"]) && isset($_POST["txtKiemTra"]) && isset($_POST["txtGapNguoiThan"]) && isset($_POST["txtMucDoCaiTao"]) && ($_POST["txtTenPhamNhan"] != "") && 
		($_POST["txtDiaChi"] != "") && ($_POST["txtTinhTrangSucKhoe"] != "") && ($_POST["txtMucDoPhamToi"] != "") && ($_POST["txtKiemTra"] != "") && ($_POST["txtGapNguoiThan"] != "") && ($_POST["txtMucDoCaiTao"] != "")){

		$tenPhamNhan = $_POST["txtTenPhamNhan"];
		$diaChi = $_POST["txtDiaChi"];
		$tinhTrangSucKhoe = $_POST["txtTinhTrangSucKhoe"];
		$mucDoPhamToi = $_POST["txtMucDoPhamToi"];
		$kiemTra = $_POST["txtKiemTra"];
		$gapNguoiThan = $_POST["txtGapNguoiThan"];
		$mucDoCaiTao = $_POST["txtMucDoCaiTao"];

		$sql = "INSERT INTO phamnhan (TenPhamNhan, DiaChi, TinhTrangSucKhoe, MucDoPhamToi, NgayKTDinhKy, GapNguoiThan, MucDoCaiTao) VALUES ('$tenPhamNhan', '$diaChi', '$tinhTrangSucKhoe', '$mucDoPhamToi', '$kiemTra', $gapNguoiThan, '$mucDoCaiTao')";
		DataProvider::ExecuteQuery($sql);
		DataProvider::ChangeURL("index.php?a=8");


	}
?>