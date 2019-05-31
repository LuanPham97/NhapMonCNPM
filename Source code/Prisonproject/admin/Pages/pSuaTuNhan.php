<h1 align="Center">Cập Nhật Tù Nhân</h1>
<form action="index.php?a=10" method="POST">
	Nhập ID Tù Nhân Cần Sửa: <input type="text" name="txtID" id="txtID"><br><br>
	Nhập Thông Tin Tù Nhân Cần Sửa: <br><br>
	Tên Tù Nhân: <input type="text" name="txtTenTuNhan" id="txtTenTuNhan"><br><br>
	Địa Chỉ: <input type="text" name="txtDiaChi" id="txtDiaChi"><br><br>
	Tình Trạng Sức Khỏe: <input type="text" name="txtTinhTrangSucKhoe" id="txtTinhTrangSucKhoe"><br>(1-Bình Thường, 2-Sốt, 3-Ho, 4-Suy Nhược)<br>
	Mức Độ Tội Phạm: <input type="text" name="txtMucDoToiPham" id="txtMucDoToiPham"><br>(1-Đặt Biệt Nghiêm Trọng, 2-Rất Nghiêm Trọng, 3-Nghiêm Trọng, 4-Ít Nghiêm Trọng<br>
	Ngày Kiểm Tra Định Kì: <input type="text" name="txtKiemTra" id="txtKiemTra"><br><br>
	Gặp Người Thân: <input type="text" name="txtGapNguoiThan" id="txtGapNguoiThan"><br><br>
	Mức Độ Cải Tạo: <input type="text" name="txtMucDoCaiTao" id="txtMucDoCaiTao"><br>(1-Xuất Sắc, 2-Tốt, 3-Khá, 4-Trung Bình, 5-Yếu)<br>
	Năng Khiếu: <input type="text" name="txtNangKhieu" id="txtNangKhieu"><br>(dan-Chơi Đàn, hat- Hát, kch-Kể Chuyện, mc-Làm MC)<br>
	Ngày Vào Tù: <input type="text" name="txtNgayVaoTu" id="txtNgayVaoTu"><br><br>
	Ngày Ra Tù Dự Kiến: <input type="text" name="txtNgayRaTu" id="txtNgayRaTu"><br><br>
	Mã Thân Nhân: <input type="text" name="txtThanNhan" id="txtThanNhan"><br><br>
	Hình Phạt: <input type="number" name="txtHinhPhat" id="txtHinhPhat"><br>(0-Có Thời Gian, 1-Chung Thân, 2-Tử Hình, 3-Treo)<br>
	Hoạt Động Đề Nghị: <input type="text" name="txtHoatDong" id="txtHoatDong"><br><br>
	Chế Độ Theo Dõi: <input type="text" name="txtCheDo" id="txtCheDo"><br><br>
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
			$sql = "UPDATE phamnhan SET GapNguoiThan='$gapNguoiThan' WHERE MaPhamNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtMucDoCaiTao"]) && ($_POST["txtMucDoCaiTao"] != "")){
			$mucDoCaiTao = $_POST["txtMucDoCaiTao"];
			$sql = "UPDATE phamnhan SET MucDoCaiTao='$mucDoCaiTao' WHERE MaPhamNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtNangKhieu"]) && ($_POST["txtNangKhieu"] != "")){
			$nangKhieu = $_POST["txtNangKhieu"];
			$sql = "UPDATE phamnhan SET NangKhieu='$nangKhieu' WHERE MaPhamNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtNgayVaoTu"]) && ($_POST["txtNgayVaoTu"] != "")){
			$ngayVaoTu = $_POST["txtNgayVaoTu"];
			$sql = "UPDATE phamnhan SET NgayVaoTu='$ngayVaoTu' WHERE MaPhamNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtNgayRaTu"]) && ($_POST["txtNgayRaTu"] != "")){
			$ngayRaTu = $_POST["txtNgayRaTu"];
			$sql = "UPDATE phamnhan SET NgayRaTuDuKien='$ngayRaTu' WHERE MaPhamNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtThanNhan"]) && ($_POST["txtThanNhan"] != "")){
			$thanNhan = $_POST["txtThanNhan"];
			$sql = "UPDATE phamnhan SET ThanNhan='$thanNhan' WHERE MaPhamNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtHinhPhat"]) && ($_POST["txtHinhPhat"] != "")){
			$hinhPhat = $_POST["txtHinhPhat"];
			$sql = "UPDATE phamnhan SET HinhPhat=$hinhPhat WHERE MaPhamNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtHoatDong"]) && ($_POST["txtHoatDong"] != "")){
			$hoatDong = $_POST["txtHoatDong"];
			$sql = "UPDATE phamnhan SET HoatDongDeNghi='$hoatDong' WHERE MaPhamNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}
		if(isset($_POST["txtCheDo"]) && ($_POST["txtCheDo"] != "")){
			$cheDo = $_POST["txtCheDo"];
			$sql = "UPDATE phamnhan SET CheDoTheoDoi='$cheDo' WHERE MaPhamNhan='$id'";
			DataProvider::ExecuteQuery($sql);
		}

		DataProvider::ChangeURL("index.php?a=10");


	}
?>