<h1 align="Center">Sửa Tù Nhân</h1>
<form action="index.php?a=10" method="POST">
	Nhập ID Tù Nhân Cần Sửa: <input type="text" name="txtID" id="txtID"><br><br>
	Nhập Thông Tin Tù Nhân Cần Sửa: <br><br>
	Tên Tù Nhân: <input type="text" name="txtTenTuNhan" id="txtTenTuNhan"><br><br>
	Địa Chỉ: <input type="text" name="txtDiaChi" id="txtDiaChi"><br><br>
	Tình Trạng Sức Khỏe: <input type="text" name="txtTinhTrangSucKhoe" id="txtTinhTrangSucKhoe"><br><br>
	Mức Độ Tội Phạm: <input type="text" name="txtMucDoToiPham" id="txtMucDoToiPham"><br><br>
	Ngày Kiểm Tra Định Kì: <input type="text" name="txtKiemTra" id="txtKiemTra"><br><br>
	Gặp Người Thân: <input type="number" name="txtGapNguoiThan" id="txtGapNguoiThan"><br><br>
	Mức Độ Cải Tạo <input type="text" name="txtMucDoCaiTao" id="txtMucDoCaiTao"><br><br>
	<input type="submit" value="Sửa">
</form>
<?php
	if(isset($_POST["txtID"]) && $_POST["txtID"]){
		$id = $_POST["txtID"];
		if(isset($_POST["txtTenTuNhan"]) && ($_POST["txtTenTuNhan"] != "")){
			$tenTuNhan = $_POST["txtTenTuNhan"];
			$sql = "UPDATE phamnhan SET TenPhamNhan='$tenTuNhan' WHERE MaPhamNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtDiaChi"]) && ($_POST["txtDiaChi"] != "")){
			$diaChi = $_POST["txtDiaChi"];
			$sql = "UPDATE phamnhan SET DiaChi= '$diaChi' WHERE MaPhamNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtTinhTrangSucKhoe"]) && ($_POST["txtTinhTrangSucKhoe"] != "")){
			$tinhTrangSucKhoe = $_POST["txtTinhTrangSucKhoe"];
			$sql = "UPDATE phamnhan SET TinhTrangSucKhoe='$tinhTrangSucKhoe' WHERE MaPhamNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtKiemTra"]) && ($_POST["txtKiemTra"] != "")){
			$kiemTra = $_POST["txtKiemTra"];
			$sql = "UPDATE phamnhan SET NgayKTDinhKy='$kiemTra' WHERE MaPhamNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtMucDoToiPham"]) && ($_POST["txtMucDoToiPham"] != "")){
			$mucDo = $_POST["txtMucDoToiPham"];
			$sql = "UPDATE phamnhan SET MucDoPhamToi='$mucDo' WHERE MaPhamNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtGapNguoiThan"]) && ($_POST["txtGapNguoiThan"] != "")){
			$gapNguoiThan = $_POST["txtGapNguoiThan"];
			$sql = "UPDATE phamnhan SET GapNguoiThan=$gapNguoiThan WHERE MaPhamNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtMucDoCaiTao"]) && ($_POST["txtMucDoCaiTao"] != "")){
			$mucDoCaiTao = $_POST["txtMucDoCaiTao"];
			$sql = "UPDATE phamnhan SET MucDoCaiTao='$mucDoCaiTao' WHERE MaPhamNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		DataProvider::ChangeURL("index.php?a=10");


	}
?>